@extends('site.layout')
@section('title', 'خانه')

@push('styles')
    <!-- LightGallery CSS -->
    <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('site-assets/css/car_single_styles.css') }}" rel="stylesheet">

    <style>
        /* استایل‌های مشابه نمونه اول */
        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .loading {
            opacity: 0.6;
            pointer-events: none;
        }

        .spinner {
            border: 2px solid #f3f3f3;
            border-top: 2px solid #3498db;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .spinner-white {
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top: 2px solid #ffffff;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }

        .btn-loading {
            opacity: 0.7;
            pointer-events: none;
        }
    </style>
@endpush

@section('content')
    <!-- محتوای اصلی صفحه خودرو -->
    <div class="container mx-auto p-4">
        <!-- Breadcrumb -->
        <nav class="flex items-center flex-wrap gap-2 py-4 text-sm">
            <a href="#" class="text-primary font-semibold hover:text-blue-700 transition-colors">خرید خودرو</a>
            <span class="text-gray-400"><i class="fas fa-chevron-left text-xs"></i></span>
            <a href="#" class="text-primary font-semibold hover:text-blue-700 transition-colors">بنز</a>
            <span class="text-gray-400"><i class="fas fa-chevron-left text-xs"></i></span>
            <a href="#" class="text-primary font-semibold hover:text-blue-700 transition-colors">بنز کلاس E</a>
            <span class="text-gray-400"><i class="fas fa-chevron-left text-xs"></i></span>
            <a href="#" class="text-primary font-semibold hover:text-blue-700 transition-colors">بنز کلاس E - 2011</a>
        </nav>

        <!-- ساختار دوستون اصلی -->
        <div class="flex flex-wrap -mx-2">
            <!-- ستون سمت راست - اطلاعات ماشین -->
            <div class="w-full lg:w-1/3 px-2 mb-6">
                <div class="bg-white rounded-lg shadow-md border border-gray-200 p-5">
                    <div class="flex justify-between items-center mb-3">
                        <h1 class="text-xl font-bold text-gray-900">{{ $car->title }}</h1>
                        <button class="text-primary text-lg hover:text-blue-700 transition-colors">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>

                    @php
                        $statusIcon = 'fas fa-question-circle';
                        $statusColor = '#999';
                        $statusLabel = 'نامشخص';

                        switch ($car->status) {
                            case 'assessed':
                                $statusIcon = 'fas fa-check-circle';
                                $bgColor = 'rgba(16, 185, 129, 0.12)';
                                $statusColor = '#10b981';
                                $statusLabel = 'کارشناسی شده';
                                break;

                            case 'inreview':
                                $statusIcon = 'fas fa-clock';
                                $bgColor = '#ffab1c17';
                                $statusColor = '#ffab1c';
                                $statusLabel = 'در حال کارشناسی';
                                break;

                            case 'sold':
                                $statusIcon = 'fas fa-times-circle';
                                $bgColor = '#e74c3c14';
                                $statusColor = '#e74c3c';
                                $statusLabel = 'فروخته شد';
                                break;
                        }
                    @endphp

                    <div class="inline-flex items-center bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm mb-3"
                        style="color: {{ $statusColor }}; background-color: {{ $bgColor }}">
                        <i class="{{ $statusIcon }} ml-1"></i>
                        {{ $statusLabel }}
                    </div>

                    <div class="flex flex-wrap gap-5 my-4">
                        @foreach ($car->attributeValues as $attrVal)
                            <div class="flex items-center bg-gray-50 text-gray-700 px-3 py-2 rounded-md text-sm">
                                @if ($attrVal->attribute && $attrVal->attribute->icon)
                                    <i class="{{ $attrVal->attribute->icon }} ml-2 text-gray-400"></i>
                                @endif
                                {{ $attrVal->attribute->label }}

                                @if ($attrVal->formatted_value)
                                    <span class="w-1 h-1 bg-gray-400 rounded-full mx-2"></span>
                                    <span>{{ $attrVal->formatted_value }}</span>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="flex justify-between items-center py-3 border-t border-b border-gray-200 my-4">
                        <div class="flex items-center font-semibold text-gray-700 text-sm">
                            <i class="fas fa-money-bill-wave ml-1"></i>
                            قیمت
                        </div>
                        <div class="text-xl font-black text-green-600">{{ $info_cars['price'] }} <span class="text-black text-sm">تومان</span></div>
                    </div>
                    @if ($car->status == 'sold')
                        <div
                            class="bg-green-50 border border-green-200 rounded-lg p-3 text-sm text-green-700 text-justify my-4">
                            متاسفانه این خودرو فروخته شده است. در صورت تمایل به خرید یا فروش خودرویی با این مشخصات از
                            دکمه‌های زیر استفاده نمایید.
                        </div>
                    @endif
                    <div class="flex flex-wrap gap-2 mt-5">
                        @if ($car->status == 'sold')
                            <a href="{{ route('carsell', ['brand' => optional($car->brand)->title, 'brand_id' => optional($car->brand)->id, 'model' => optional($car->car_model)->title ?? 'نامشخص', 'model_id' => optional($car->car_model)->id ?? 0, 'year' => $info_cars['year'] ?? '', 'color' => $info_cars['color'] ?? '', 'kilometer' => $info_cars['kilometer'] ?? '', 'type' => $info_cars['gearbox'] ?? '']) }}"
                                class="flex-1 min-w-[120px] bg-primary text-white text-center py-2 px-3 rounded-md font-semibold hover:bg-blue-700 transition-colors">
                                درخواست فروش
                            </a>
                            <a href="{{ route('carbuy', ['brand' => optional($car->brand)->title, 'brand_id' => optional($car->brand)->id, 'model' => optional($car->car_model)->title ?? 'نامشخص', 'model_id' => optional($car->car_model)->id ?? 0, 'year' => $info_cars['year'] ?? '']) }}"
                                class="flex-1 min-w-[120px] bg-primary text-white text-center py-2 px-3 rounded-md font-semibold hover:bg-blue-700 transition-colors">
                                درخواست خرید
                            </a>
                        @else
                            <button id="openPopup"
                                class="flex w-full items-center justify-center bg-primary text-white text-center py-2 px-3 rounded-md font-semibold hover:bg-blue-700 transition-colors">
                                خرید نقدی
                            </button>
                        @endif



                        {{-- <a href="#"
                            class="flex-1 min-w-[120px] border border-primary text-primary text-center py-2 px-3 rounded-md font-semibold hover:bg-primary hover:text-white transition-colors">
                            خرید اقساطی
                        </a> --}}
                    </div>
                </div>
            </div>

            <!-- ستون سمت چپ - گالری -->
            <div class="w-full lg:w-2/3 px-2 mb-6">
                {{-- <div class="bg-white rounded-xl shadow-lg p-6"> --}}
                <div class="main-image-container" id="mainImageContainer">
                    <div class="zoom-indicator">
                        <i class="fas fa-search-plus"></i>
                        <span>کلیک برای بزرگنمایی</span>
                    </div>
                    <div class="image-counter">
                        <span id="currentImageNum">1</span> / <span id="totalImages">{{ count($car->gallery) }}</span>
                    </div>
                    {{-- <button class="carousel-nav prev" onclick="previousImage()">
                            <i class="fas fa-chevron-right"></i>
                        </button> --}}
                    {{-- <button class="carousel-nav next" onclick="nextImage()">
                            <i class="fas fa-chevron-left"></i>
                        </button> --}}
                    <img id="mainImage" src="{{ $car->gallery[0] ?? '' }}" alt="تصویر اصلی" class="main-image">
                    <div class="image-loading" id="imageLoader" style="display: none;">
                        <i class="fas fa-spinner"></i>
                    </div>
                </div>

                <div class="thumbnail-container" id="thumbnailContainer"></div>
                {{-- </div> --}}
            </div>
        </div>

        <!-- Tabs Section -->
        <div class="flex overflow-x-auto border-b-2 border-gray-200 mb-5 mt-40 xl:mt-10">
            <button
                class="tab-custom flex-shrink-0 px-4 py-3 font-bold text-gray-500 relative whitespace-nowrap transition-colors hover:text-primary active:text-primary"
                data-tab="expertise">
                کارشناسی فنی خودرو
                <span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 tab-indicator"></span>
            </button>
            <button
                class="tab-custom flex-shrink-0 px-4 py-3 font-bold text-gray-500 relative whitespace-nowrap transition-colors hover:text-primary active:text-primary"
                data-tab="description">
                توضیحات
                <span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 tab-indicator"></span>
            </button>
        </div>

        <!-- Tab Content -->
        <div id="expertise" class="tab-content active">
            <div class="mb-5">
                <div class="flex justify-between items-center mb-4 flex-wrap gap-2">
                    <div class="flex items-center text-lg font-bold text-gray-900">
                        <i class="fas fa-clipboard-check text-primary ml-2"></i>
                        کارشناسی فنی خودرو
                    </div>
                    <a href="#"
                        class="flex items-center text-primary font-semibold hover:text-blue-700 transition-colors"
                        target="_blank">
                        <i class="fas fa-download ml-1"></i>
                        <span class="hidden md:inline">دانلود گزارش کامل کارشناسی</span>
                        <span class="md:hidden">دانلود گزارش کارشناسی</span>
                    </a>
                </div>

                <!-- Legend (Desktop) -->
                <div class="hidden md:flex flex-wrap gap-2 mb-5">
                    <div class="flex items-center bg-gray-50 px-3 py-1 rounded-md text-sm font-semibold">
                        <i class="fas fa-check-circle text-green-500 ml-1"></i>
                        کارشناسی شده و سالم
                    </div>
                    <div class="flex items-center bg-gray-50 px-3 py-1 rounded-md text-sm font-semibold">
                        <i class="fas fa-exchange-alt text-blue-400 ml-1"></i>
                        تعویض و مشکل‌دار
                    </div>
                    <div class="flex items-center bg-gray-50 px-3 py-1 rounded-md text-sm font-semibold">
                        <i class="fas fa-fill-drip text-yellow-500 ml-1"></i>
                        رنگ/آبرنگ
                    </div>
                    <div class="flex items-center bg-gray-50 px-3 py-1 rounded-md text-sm font-semibold">
                        <i class="fas fa-hammer text-purple-500 ml-1"></i>
                        صافکاری بدون رنگ
                    </div>
                    <div class="flex items-center bg-gray-50 px-3 py-1 rounded-md text-sm font-semibold">
                        <i class="fas fa-times-circle text-red-500 ml-1"></i>
                        تعمیر شده
                    </div>
                    <div class="flex items-center bg-gray-50 px-3 py-1 rounded-md text-sm font-semibold">
                        <i class="fas fa-question-circle text-gray-500 ml-1"></i>
                        کارشناسی نشده و یا موجود نیست
                    </div>
                </div>

                <!-- Legend (Mobile) -->
                <div class="md:hidden bg-white rounded-lg shadow-sm border border-gray-200 mb-4 overflow-hidden mobile-legend"
                    id="mobileLegend">
                    <div class="flex justify-between items-center p-3 bg-gray-50 cursor-pointer">
                        <div class="font-bold text-gray-900 text-sm">راهنمای علائم کارشناسی</div>
                        <i class="fas fa-chevron-down mobile-legend-toggle transition-transform"></i>
                    </div>
                    <div class="mobile-legend-body">
                        <div class="p-3 flex flex-col gap-2">
                            <div class="flex items-center text-sm font-semibold">
                                <i class="fas fa-check-circle text-green-500 ml-2"></i>
                                کارشناسی شده و سالم
                            </div>
                            <div class="flex items-center text-sm font-semibold">
                                <i class="fas fa-exchange-alt text-blue-400 ml-2"></i>
                                تعویض و مشکل‌دار
                            </div>
                            <div class="flex items-center text-sm font-semibold">
                                <i class="fas fa-fill-drip text-yellow-500 ml-2"></i>
                                رنگ/آبرنگ
                            </div>
                            <div class="flex items-center text-sm font-semibold">
                                <i class="fas fa-hammer text-purple-500 ml-2"></i>
                                صافکاری بدون رنگ
                            </div>
                            <div class="flex items-center text-sm font-semibold">
                                <i class="fas fa-times-circle text-red-500 ml-2"></i>
                                تعمیر شده
                            </div>
                            <div class="flex items-center text-sm font-semibold">
                                <i class="fas fa-question-circle text-gray-500 ml-2"></i>
                                کارشناسی نشده و یا موجود نیست
                            </div>
                        </div>
                    </div>
                </div>

                <!-- کارت‌های کارشناسی فنی -->
                <div class="flex flex-wrap -mx-2">
                    @foreach ($carFiles as $file)
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <div class="expert-card bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                                <div
                                    class="flex justify-between items-center p-3 cursor-pointer hover:bg-gray-50 transition-colors">
                                    <div class="flex items-center font-bold text-gray-900">
                                        <i class="fas fa-folder-open text-primary ml-2"></i>
                                        {{ $file->title }}
                                    </div>
                                    <div class="flex items-center">
                                        <div
                                            class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs font-semibold">
                                            نامشخص
                                        </div>
                                        <div
                                            class="w-7 h-7 rounded-full bg-gray-100 flex items-center justify-center mr-2">
                                            <i class="fas fa-chevron-down text-gray-600 transition-transform"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="expert-card-body">
                                    <div class="flex flex-wrap">
                                        @foreach ($file->items as $item)
                                            @php
                                                $value = $item->values->first();
                                                $icon = 'fas fa-question-circle';
                                                $color = '#999';

                                                if ($value) {
                                                    switch ($value->status) {
                                                        case 'سالم':
                                                            $icon = 'fas fa-check-circle';
                                                            $color = '#10b981';
                                                            break;
                                                        case 'تعویض و مشکل‌دار':
                                                            $icon = 'fas fa-exchange-alt';
                                                            $color = '#02b9f3';
                                                            break;
                                                        case 'صافکاری بدون رنگ':
                                                            $icon = 'fas fa-hammer';
                                                            $color = '#8b5cf6';
                                                            break;
                                                        case 'رنگ شده':
                                                            $icon = 'fas fa-fill-drip';
                                                            $color = '#f59e0b';
                                                            break;
                                                        case 'تعمیر شده':
                                                            $icon = 'fas fa-times-circle';
                                                            $color = '#f50b0b';
                                                            break;
                                                        case 'نامشخص':
                                                            $icon = 'fas fa-question-circle';
                                                            $color = '#6b7280';
                                                            break;
                                                    }
                                                }
                                            @endphp

                                            <div class="w-1/2 md:w-1/3 flex items-center p-2">
                                                <div class="flex items-center text-sm font-semibold">
                                                    <i class="{{ $icon }} ml-2"
                                                        style="color: {{ $color }}"></i>
                                                    {{ $item->title }}
                                                    @if ($value && $value->status_description)
                                                        <small
                                                            class="text-xs text-gray-500 mr-1">({{ $value->status_description }})</small>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="description" class="tab-content">
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-5">
                <h3 class="text-lg font-bold text-gray-900 mb-3">توضیحات خودرو</h3>
                <div class="text-gray-700 text-base leading-relaxed space-y-4">
                    {!! $car->description !!}
                </div>
            </div>
        </div>
    </div>

    @include('custom-components.buy_help')

    <div class="container mx-auto p-4">

        <!-- بخش خودروهای مشابه -->
        <div class="container mt-8 md:mt-5">
            <div class="section-header flex justify-between items-center mb-7">
                <div>
                    <h2 class="section-title text-3xl font-bold mb-2.5">خودروهای مشابه</h2>
                </div>
                <a href="#" class="text-primary">مشاهده همه‌ی آگهی‌ها</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                @foreach (getCars('relative', $car->brand_id, 4) as $car_new)
                    <a href="{{ $car_new['url'] }}">
                        <div
                            class="car-card bg-white rounded-lg overflow-hidden shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                            <div class="car-card-img h-44 relative">
                                <img src="{{ $car_new['image'] }}" class="w-full h-full object-cover"
                                    alt="{{ $car_new['title'] }}">
                                <div
                                    class="car-badge absolute top-2.5 right-2.5 bg-black/70 text-white px-2.5 py-1 rounded-full text-xs font-semibold">
                                    امکان خرید قسطی</div>
                            </div>
                            <div class="car-card-content p-5">
                                <h3 class="car-card-title text-lg font-bold mb-2.5">{{ $car_new['title'] }}</h3>
                                <div class="car-card-info flex flex-wrap gap-2.5 mb-3.5 text-sm text-text-light">
                                    <span class="flex items-center">{{ $car_new['kilometer'] }} کیلومتر</span>
                                    <span class="flex items-center">{{ $car_new['gearbox'] }}</span>
                                </div>
                                <div class="car-card-features flex items-center mb-3.5 text-sm"
                                    style="color: {{ $car_new['status']['statusColor'] }};">
                                    <i class="{{ $car_new['status']['statusIcon'] }} ml-1.5"></i>
                                    {{ $car_new['status']['statusLabel'] }}
                                </div>
                                <div class="car-card-footer flex items-center justify-between">
                                    <div>
                                        <span class="car-price text-lg font-bold text-text-dark">{{ $car_new['price'] }}
                                            تومان</span>
                                        {{-- <div class="car-installment text-sm text-text-light">قسطی: 245,136,400 تومان</div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>


        @include('custom-components.suport_contact')

        @include('custom-components.faq_single')

    </div>




    <!-- پاپ آپ احراز هویت -->
    <div id="authPopup" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 p-4">
        <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-6 relative fade-in">
            <!-- دکمه بستن -->
            <button id="closeAuthPopup" class="absolute top-4 left-4 text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fas fa-times-circle text-xl"></i>
            </button>

            <!-- مراحل احراز هویت -->
            <div id="authSteps">
                <!-- مرحله ۱: ورود شماره موبایل -->
                <div class="auth-step" data-auth-step="1">
                    <h2 class="text-xl font-bold mb-2 text-gray-800 text-center">ورود / ثبت نام</h2>
                    <p class="text-gray-600 text-center mb-6">لطفاً شماره موبایل خود را وارد کنید</p>

                    <div class="mb-4">
                        <label for="phoneNumber" class="block text-sm font-medium text-gray-700 mb-2">شماره
                            موبایل</label>
                        <div class="relative">
                            <input type="tel" id="phoneNumber"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
                                placeholder="09xxxxxxxxx" maxlength="11">
                            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                        </div>
                        <p id="phoneError" class="text-red-500 text-xs mt-2 hidden">شماره موبایل معتبر نیست</p>
                    </div>

                    <button id="sendCodeBtn"
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-3 rounded-xl shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane"></i>
                        <span class="font-bold">ارسال کد تایید</span>
                    </button>
                </div>

                <!-- مرحله ۲: ورود کد تایید -->
                <div class="auth-step hidden" data-auth-step="2">
                    <h2 class="text-xl font-bold mb-2 text-gray-800 text-center">تایید شماره موبایل</h2>
                    <p class="text-gray-600 text-center mb-2">کد تایید به شماره <span id="phoneDisplay"
                            class="font-bold"></span> ارسال شد</p>
                    <p class="text-gray-500 text-center text-sm mb-6">لطفاً کد دریافتی را وارد کنید</p>

                    <div class="mb-4">
                        <label for="verificationCode" class="block text-sm font-medium text-gray-700 mb-2">کد
                            تایید</label>
                        <div class="relative">
                            <input type="text" id="verificationCode"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all text-center tracking-widest"
                                placeholder="------" maxlength="6">
                            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <p id="codeError" class="text-red-500 text-xs mt-2 hidden">کد تایید صحیح نیست</p>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <button id="resendCodeBtn"
                            class="text-blue-600 hover:text-blue-800 transition-colors text-sm flex items-center gap-1"
                            disabled>
                            <i class="fas fa-redo"></i>
                            <span>ارسال مجدد کد</span>
                            <span id="countdown" class="text-gray-500">(02:00)</span>
                        </button>

                        <button id="changePhoneBtn"
                            class="text-gray-600 hover:text-gray-800 transition-colors text-sm flex items-center gap-1">
                            <i class="fas fa-edit"></i>
                            <span>تغییر شماره</span>
                        </button>
                    </div>

                    <button id="verifyCodeBtn"
                        class="w-full bg-gradient-to-r from-green-600 to-green-700 text-white py-3 rounded-xl shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-check-circle"></i>
                        <span class="font-bold">تایید و ادامه</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- پیام موفقیت -->
    <div id="successMessage"
        class="fixed top-4 right-0 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 flex items-center gap-2 z-50">
        <i class="fas fa-check-circle"></i>
        <span>درخواست خرید با موفقیت ثبت شد</span>
    </div>
@endsection

@push('scripts')
    <!-- LightGallery JS -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/fullscreen/lg-fullscreen.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/autoplay/lg-autoplay.umd.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // ایجاد آرایه تصاویر از گالری خودرو
        const galleryImages = [
            @foreach ($car->gallery as $image)
                {
                    src: '{{ $image }}',
                    thumb: '{{ $image }}',
                    alt: 'تصویر خودرو - {{ $loop->iteration }}'
                },
            @endforeach
        ];

        // شناسه خودرو
        const CAR_ID = '{{ $car->id }}';

        // عناصر DOM
        const authPopup = document.getElementById("authPopup");
        const closeAuthBtn = document.getElementById("closeAuthPopup");
        const sendCodeBtn = document.getElementById("sendCodeBtn");
        const verifyCodeBtn = document.getElementById("verifyCodeBtn");
        const resendCodeBtn = document.getElementById("resendCodeBtn");
        const changePhoneBtn = document.getElementById("changePhoneBtn");
        const phoneNumberInput = document.getElementById("phoneNumber");
        const verificationCodeInput = document.getElementById("verificationCode");
        const phoneDisplay = document.getElementById("phoneDisplay");
        const phoneError = document.getElementById("phoneError");
        const codeError = document.getElementById("codeError");
        const openPopupBtn = document.getElementById("openPopup");
        const successMessage = document.getElementById("successMessage");

        let currentAuthStep = 1;
        let countdownInterval;
        let countdownTime = 120;
        let currentPhoneNumber = '';

        // API Base URL
        const API_BASE = '{{ url('/') }}';

        // CSRF Token برای درخواست‌های POST
        const CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ||
            '{{ csrf_token() }}';

        // بررسی وضعیت ورود کاربر
        function checkLoginStatus() {
            return {{ auth()->check() ? 'true' : 'false' }};
        }

        // بستن پاپ آپ احراز هویت
        closeAuthBtn.onclick = () => {
            authPopup.classList.add("hidden");
            authPopup.classList.remove("flex");
        };

        // بستن پاپ آپ با کلیک خارج از آن
        authPopup.onclick = (e) => {
            if (e.target === authPopup) {
                authPopup.classList.add("hidden");
                authPopup.classList.remove("flex");
            }
        };

        // نمایش مرحله احراز هویت
        function showAuthStep(n) {
            document.querySelectorAll(".auth-step").forEach(el => el.classList.add("hidden"));
            document.querySelector(`.auth-step[data-auth-step="${n}"]`).classList.remove("hidden");
            currentAuthStep = n;
        }

        // شروع شمارش معکوس برای ارسال مجدد کد
        function startCountdown() {
            resendCodeBtn.disabled = true;
            countdownTime = 120;

            countdownInterval = setInterval(() => {
                countdownTime--;
                const minutes = Math.floor(countdownTime / 60);
                const seconds = countdownTime % 60;
                document.getElementById('countdown').textContent =
                    `(${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')})`;

                if (countdownTime <= 0) {
                    clearInterval(countdownInterval);
                    resendCodeBtn.disabled = false;
                    document.getElementById('countdown').textContent = '';
                }
            }, 1000);
        }

        // اعتبارسنجی شماره موبایل
        function validatePhoneNumber(phone) {
            const phoneRegex = /^09[0-9]{9}$/;
            return phoneRegex.test(phone);
        }

        // تغییر وضعیت دکمه‌ها هنگام لودینگ
        function setLoadingState(button, isLoading, loadingText = 'در حال ارسال...') {
            if (isLoading) {
                button.disabled = true;
                button.classList.add('btn-loading');
                button.innerHTML = `<div class="spinner"></div><span class="mr-2">${loadingText}</span>`;
            } else {
                button.disabled = false;
                button.classList.remove('btn-loading');

                if (button.id === 'sendCodeBtn') {
                    button.innerHTML = '<i class="fas fa-paper-plane"></i><span class="font-bold">ارسال کد تایید</span>';
                } else if (button.id === 'verifyCodeBtn') {
                    button.innerHTML = '<i class="fas fa-check-circle"></i><span class="font-bold">تایید و ادامه</span>';
                } else if (button.id === 'openPopup') {
                    button.innerHTML = 'خرید نقدی';
                }
            }
        }

        // ارسال کد تایید
        sendCodeBtn.onclick = async () => {
            const phone = phoneNumberInput.value.trim();

            if (!validatePhoneNumber(phone)) {
                phoneError.textContent = 'شماره موبایل معتبر نیست';
                phoneError.classList.remove("hidden");
                return;
            }

            phoneError.classList.add("hidden");
            setLoadingState(sendCodeBtn, true);

            try {
                const response = await fetch(`/otp/send`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': CSRF_TOKEN,
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        input: phone
                    })
                });

                const result = await response.json();

                if (result.success) {
                    currentPhoneNumber = phone;
                    phoneDisplay.textContent = phone;
                    showAuthStep(2);
                    startCountdown();

                    // پاک کردن فیلد کد
                    verificationCodeInput.value = '';
                    codeError.classList.add("hidden");
                } else {
                    phoneError.textContent = result.message || 'خطا در ارسال کد تایید';
                    phoneError.classList.remove("hidden");
                }
            } catch (error) {
                console.error('Error sending OTP:', error);
                phoneError.textContent = 'خطا در ارتباط با سرور';
                phoneError.classList.remove("hidden");
            } finally {
                setLoadingState(sendCodeBtn, false);
            }
        };

        // ارسال مجدد کد
        resendCodeBtn.onclick = async () => {
            if (!currentPhoneNumber) return;

            setLoadingState(resendCodeBtn, true, 'در حال ارسال مجدد...');

            try {
                const response = await fetch(`${API_BASE}/otp/send`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': CSRF_TOKEN,
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        input: currentPhoneNumber
                    })
                });

                const result = await response.json();

                if (result.success) {
                    startCountdown();
                } else {
                    alert(result.message || 'خطا در ارسال مجدد کد');
                }
            } catch (error) {
                console.error('Error resending OTP:', error);
                alert('خطا در ارتباط با سرور');
            } finally {
                setLoadingState(resendCodeBtn, false);
                resendCodeBtn.innerHTML = '<i class="fas fa-redo"></i><span>ارسال مجدد کد</span>';
            }
        };

        // تغییر شماره موبایل
        changePhoneBtn.onclick = () => {
            showAuthStep(1);
            clearInterval(countdownInterval);
            resendCodeBtn.disabled = false;
            document.getElementById('countdown').textContent = '';
            verificationCodeInput.value = '';
            codeError.classList.add("hidden");
        };

        // تایید کد
        verifyCodeBtn.onclick = async () => {
            const code = verificationCodeInput.value.trim();

            if (code.length !== 6) {
                codeError.textContent = 'کد تایید باید 6 رقم باشد';
                codeError.classList.remove("hidden");
                return;
            }

            setLoadingState(verifyCodeBtn, true, 'در حال تأیید...');

            try {
                const response = await fetch(`${API_BASE}/otp/verify`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': CSRF_TOKEN,
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        input: currentPhoneNumber,
                        code: code
                    })
                });

                const result = await response.json();

                if (result.success) {
                    codeError.classList.add("hidden");

                    // ثبت وضعیت ورود کاربر
                    localStorage.setItem('isLoggedIn', 'true');
                    localStorage.setItem('userPhone', currentPhoneNumber);

                    // بستن پاپ آپ احراز هویت
                    authPopup.classList.add("hidden");
                    authPopup.classList.remove("flex");

                    // ارسال درخواست خرید
                    submitBuyRequest();
                } else {
                    codeError.textContent = result.message || 'کد تایید صحیح نیست';
                    codeError.classList.remove("hidden");
                }
            } catch (error) {
                console.error('Error verifying OTP:', error);
                codeError.textContent = 'خطا در ارتباط با سرور';
                codeError.classList.remove("hidden");
            } finally {
                setLoadingState(verifyCodeBtn, false);
            }
        };

        // ارسال درخواست خرید به سرور
        async function submitBuyRequest() {
            setLoadingState(openPopupBtn, true, 'در حال ثبت درخواست...');

            try {
                // استفاده از AJAX برای ارسال درخواست
                $.ajax({
                    url: "{{ route('save.buy.request') }}",
                    type: "POST",
                    data: {
                        car_id: CAR_ID,
                        request_type: 'buy',
                        _token: CSRF_TOKEN
                    },
                    success: function(response) {
                        // نمایش پیام موفقیت
                        successMessage.classList.remove("translate-x-full");

                        // بازگرداندن دکمه به حالت عادی
                        setLoadingState(openPopupBtn, false, 'درخواست ثبت شد');
                        openPopupBtn.setAttribute('disabled', true);

                        setTimeout(() => {
                            successMessage.classList.add("translate-x-full");
                            window.location.reload();
                        }, 3000);

                        console.log("Success:", response);
                    },
                    error: function(xhr) {
                        if (xhr.status === 429) {
                            alert("تعداد درخواست‌های شما بیش از حد مجاز است. لطفاً بعداً مجدد تلاش کنید.");
                            setLoadingState(openPopupBtn, false, 'درخواست خرید');
                        } else if (xhr.status === 419) {
                            alert("توکن شما منقضی شده است لطفا مجدد لاگین کنید");
                            setLoadingState(openPopupBtn, false, 'درخواست خرید');
                        } else {
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                alert(xhr.responseJSON.message);
                            } else {
                                alert("مشکلی پیش آمد. دوباره تلاش کنید.");
                            }
                            setLoadingState(openPopupBtn, false, 'درخواست خرید');
                        }
                    }
                });

            } catch (error) {
                // بازگرداندن دکمه به حالت عادی در صورت خطا
                setLoadingState(openPopupBtn, false, 'درخواست خرید');
                // نمایش پیام خطا
                alert('خطا در ثبت درخواست. لطفا مجدداً تلاش کنید.');
            }
        }

        // کلیک روی دکمه درخواست خرید
        openPopupBtn.onclick = async () => {
            if (checkLoginStatus()) {
                await submitBuyRequest();
            } else {
                authPopup.classList.remove("hidden");
                authPopup.classList.add("flex");
                showAuthStep(1);
            }
        };

        // مدیریت ارسال فرم با Enter
        phoneNumberInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendCodeBtn.click();
            }
        });

        verificationCodeInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                verifyCodeBtn.click();
            }
        });
    </script>
    <script src="{{ asset('site-assets/js/car_single_scripts.js') }}"></script>
@endpush
