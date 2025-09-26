@extends('site.layout')
@section('title', 'خانه')

@push('styles')
    <!-- LightGallery CSS -->
    <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" rel="stylesheet">

    <!-- استایل‌های ضروری که با Tailwind قابل جایگزینی نیستند -->
    <style>
        .expert-card-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
        }

        .expert-card.expanded .expert-card-body {
            max-height: 2000px;
            padding: 0 15px 15px;
        }

        .mobile-legend-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        .mobile-legend.expanded .mobile-legend-body {
            max-height: 500px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* --- استایل Carousel --- */
        .gallery-carousel {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden;
            border-radius: 12px;
            background: #f3f4f6;
        }

        .main-image-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 12px;
            cursor: pointer;
            max-height: 600px;
        }

        .main-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .main-image-container:hover .main-image {
            transform: scale(1.05);
        }

        .thumbnail-container {
            display: flex;
            gap: 10px;
            margin-top: 15px;
            overflow-x: auto;
            padding: 5px 0;
            scroll-behavior: smooth;
        }

        .thumbnail-wrapper {
            flex-shrink: 0;
        }

        .thumbnail {
            width: auto;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            opacity: 0.7;
        }

        .thumbnail:hover {
            opacity: 1;
            transform: translateY(-2px);
        }

        .thumbnail.active {
            border-color: #3b82f6;
            opacity: 1;
            box-shadow: 0 4px 6px rgba(59, 130, 246, 0.3);
        }

        .carousel-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .carousel-nav:hover {
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .carousel-nav.prev {
            left: 15px;
        }

        .carousel-nav.next {
            right: 15px;
        }

        .zoom-indicator {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 6px;
            z-index: 10;
        }

        .image-counter {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            z-index: 10;
        }

        .thumbnail-container::-webkit-scrollbar {
            height: 6px;
        }

        .thumbnail-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .thumbnail-container::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        .thumbnail-container::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .image-loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #3b82f6;
            font-size: 24px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .lg-outer {
            direction: ltr;
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
                        <h1 class="text-xl font-bold text-gray-900">بنز کلاس E 2011</h1>
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

                    <div class="inline-flex items-center bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold mb-3"
                        style="color: {{ $statusColor }}; background-color: {{ $bgColor }}">
                        <i class="{{ $statusIcon }} ml-1"></i>
                        {{ $statusLabel }}
                    </div>

                    <div class="flex flex-wrap gap-2 my-4">
                        @foreach ($car->attributeValues as $attrVal)
                            <div class="flex items-center bg-gray-50 text-gray-700 px-3 py-1 rounded-md text-sm">
                                @if ($attrVal->attribute && $attrVal->attribute->icon)
                                    <i class="{{ $attrVal->attribute->icon }} ml-1 text-gray-400"></i>
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
                        <div class="text-xl font-bold text-green-600">{{ $price }}</div>
                    </div>

                    <div
                        class="bg-green-50 border border-green-200 rounded-lg p-3 text-sm text-green-700 text-justify my-4">
                        متاسفانه این خودرو فروخته شده است. در صورت تمایل به خرید یا فروش خودرویی با این مشخصات از
                        دکمه‌های زیر استفاده نمایید.
                    </div>

                    <div class="flex flex-wrap gap-2 mt-5">
                        <a href="#"
                            class="flex-1 min-w-[120px] bg-primary text-white text-center py-2 px-3 rounded-md font-semibold hover:bg-blue-700 transition-colors">
                            درخواست خرید
                        </a>
                        <a href="#"
                            class="flex-1 min-w-[120px] bg-primary text-white text-center py-2 px-3 rounded-md font-semibold hover:bg-blue-700 transition-colors">
                            درخواست فروش
                        </a>
                        <a href="#"
                            class="flex-1 min-w-[120px] border border-primary text-primary text-center py-2 px-3 rounded-md font-semibold hover:bg-primary hover:text-white transition-colors">
                            خرید اقساطی
                        </a>
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
@endsection

@push('scripts')
    <!-- LightGallery JS -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/fullscreen/lg-fullscreen.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/autoplay/lg-autoplay.umd.js"></script>

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

        let currentImageIndex = 0;
        let lgInstance = null;

        function initializeGallery() {
            const mainImage = document.getElementById('mainImage');
            const thumbnailContainer = document.getElementById('thumbnailContainer');
            const totalImagesElement = document.getElementById('totalImages');

            totalImagesElement.textContent = galleryImages.length;

            galleryImages.forEach((image, index) => {
                const thumbWrapper = document.createElement('div');
                thumbWrapper.className = 'thumbnail-wrapper';
                const thumb = document.createElement('img');
                thumb.src = image.thumb;
                thumb.alt = image.alt;
                thumb.className = 'thumbnail';
                if (index === 0) thumb.classList.add('active');
                thumb.onclick = () => selectImage(index);
                thumbWrapper.appendChild(thumb);
                thumbnailContainer.appendChild(thumbWrapper);
            });

            setMainImage(0);

            // --- LightGallery Dynamic ---
            lgInstance = lightGallery(document.getElementById('mainImageContainer'), {
                dynamic: true,
                dynamicEl: galleryImages.map(img => ({
                    src: img.src,
                    thumb: img.thumb,
                    subHtml: `<h4>${img.alt}</h4>`
                })),
                plugins: [lgZoom, lgThumbnail, lgFullscreen, lgAutoplay],
                speed: 500,
                download: true,
                thumbnail: true,
            });

            document.getElementById('mainImageContainer').addEventListener('click', (e) => {
                if (!e.target.classList.contains('carousel-nav')) {
                    lgInstance.openGallery(currentImageIndex);
                }
            });
        }

        function setMainImage(index) {
            const mainImage = document.getElementById('mainImage');
            const loader = document.getElementById('imageLoader');
            const currentImageNum = document.getElementById('currentImageNum');

            loader.style.display = 'block';
            mainImage.style.opacity = '0.5';

            const tempImage = new Image();
            tempImage.onload = function() {
                mainImage.src = galleryImages[index].src;
                mainImage.alt = galleryImages[index].alt;
                mainImage.style.opacity = '1';
                loader.style.display = 'none';
                currentImageNum.textContent = index + 1;
            };
            tempImage.src = galleryImages[index].src;

            updateActiveThumbnail(index);
            scrollThumbnailIntoView(index);
        }

        function updateActiveThumbnail(index) {
            document.querySelectorAll('.thumbnail').forEach((thumb, i) => {
                thumb.classList.toggle('active', i === index);
            });
        }

        function scrollThumbnailIntoView(index) {
            const thumbnails = document.querySelectorAll('.thumbnail-wrapper');
            if (thumbnails[index]) {
                thumbnails[index].scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest',
                    inline: 'center'
                });
            }
        }

        function selectImage(index) {
            currentImageIndex = index;
            setMainImage(index);
        }

        function previousImage() {
            currentImageIndex = currentImageIndex > 0 ? currentImageIndex - 1 : galleryImages.length - 1;
            setMainImage(currentImageIndex);
        }

        function nextImage() {
            currentImageIndex = currentImageIndex < galleryImages.length - 1 ? currentImageIndex + 1 : 0;
            setMainImage(currentImageIndex);
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') nextImage();
            if (e.key === 'ArrowRight') previousImage();
        });

        document.addEventListener('DOMContentLoaded', function() {
            initializeGallery();

            // Tab switching
            const tabButtons = document.querySelectorAll('.tab-custom');
            const tabContents = document.querySelectorAll('.tab-content');
            const tabIndicators = document.querySelectorAll('.tab-indicator');

            tabButtons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    const tabId = button.getAttribute('data-tab');

                    // Update active tab button
                    tabButtons.forEach(btn => {
                        btn.classList.remove('text-primary', 'active');
                        btn.classList.add('text-gray-500');
                    });
                    button.classList.remove('text-gray-500');
                    button.classList.add('text-primary', 'active');

                    // Update tab indicators
                    tabIndicators.forEach(indicator => {
                        indicator.classList.remove('w-full');
                        indicator.classList.add('w-0');
                    });
                    tabIndicators[index].classList.remove('w-0');
                    tabIndicators[index].classList.add('w-full');

                    // Update active tab content
                    tabContents.forEach(content => {
                        content.classList.remove('active');
                        if (content.id === tabId) {
                            content.classList.add('active');
                        }
                    });
                });
            });

            // Expert card toggle
            const expertCards = document.querySelectorAll('.expert-card');
            expertCards.forEach(card => {
                const header = card.querySelector('.expert-card-header') || card.querySelector('.p-3');
                const toggleIcon = card.querySelector('.fa-chevron-down');

                header.addEventListener('click', () => {
                    card.classList.toggle('expanded');
                    if (toggleIcon) {
                        toggleIcon.classList.toggle('rotate-180');
                    }
                });
            });

            // Mobile legend toggle
            const mobileLegend = document.getElementById('mobileLegend');
            if (mobileLegend) {
                const mobileLegendHeader = mobileLegend.querySelector('.p-3');
                const mobileLegendToggle = mobileLegend.querySelector('.mobile-legend-toggle');

                mobileLegendHeader.addEventListener('click', () => {
                    mobileLegend.classList.toggle('expanded');
                    if (mobileLegendToggle) {
                        mobileLegendToggle.classList.toggle('rotate-180');
                    }
                });
            }

            // Set first tab as active initially
            if (tabButtons.length > 0) {
                tabButtons[0].classList.add('active', 'text-primary');
                tabButtons[0].classList.remove('text-gray-500');
                tabIndicators[0].classList.add('w-full');
                tabIndicators[0].classList.remove('w-0');
            }
        });
    </script>
@endpush
