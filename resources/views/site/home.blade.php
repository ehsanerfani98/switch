@extends('site.layout')
@section('title', 'خانه')

@section('content')

    <!-- بخش جستجو -->
    <section
        class="hero-section bg-gradient-to-r from-black/70 via-black/50 to-black/70 bg-[url('https://file.switch.ir/api/v1/webp/1728/528/80/0ab739b0-9e2a-4969-97c9-90f04b071b99.webp')] bg-cover bg-center py-20 relative overflow-hidden">
        <div class="container mx-auto px-3.5 relative z-10">
            <h1 class="hero-title text-4xl font-bold mb-5 text-center text-white">مسیر معاملات خودرو را شفاف، ساده، امن
                و کوتاه کنید</h1>
            <p class="hero-subtitle text-xl text-white text-center max-w-2xl mx-auto mb-10">سامانه خرید و فروش خودروهای
                نو و کارکرده خارجی، خرید و فروش خودرو بی دغدغه، بی ریسک و بی معطلی توسط الوماشین در تهران</p>

            <div class="search-container bg-white rounded-lg shadow-custom-light p-6 mb-10">
                <form class="search-form flex mb-5 gap-2.5">
                    <input type="text"
                        class="search-input flex-1 px-5 py-3.5 border border-border-color rounded-lg text-base transition-all focus:outline-none focus:border-primary focus:ring-3 focus:ring-blue-100"
                        placeholder="جستجوی خودرو های موجود نمایشگاه">
                    <button type="submit"
                        class="search-btn bg-primary text-white border-none rounded-lg px-6 cursor-pointer font-semibold transition-colors hover:bg-blue-700">جستجو</button>
                </form>

                <div class="popular-tags flex flex-wrap gap-2.5">
                    <a href="#"
                        class="tag flex items-center bg-accent border border-border-color rounded-full px-3.5 py-2 text-sm text-text-medium transition-colors hover:bg-primary hover:text-white hover:border-primary">
                        <i class="fas fa-search ml-1.5"></i>
                        کیا سراتو
                    </a>
                    <a href="#"
                        class="tag flex items-center bg-accent border border-border-color rounded-full px-3.5 py-2 text-sm text-text-medium transition-colors hover:bg-primary hover:text-white hover:border-primary">
                        <i class="fas fa-search ml-1.5"></i>
                        سانتافه
                    </a>
                    <a href="#"
                        class="tag flex items-center bg-accent border border-border-color rounded-full px-3.5 py-2 text-sm text-text-medium transition-colors hover:bg-primary hover:text-white hover:border-primary">
                        <i class="fas fa-search ml-1.5"></i>
                        سراتو مونتاژ
                    </a>
                    <a href="#"
                        class="tag flex items-center bg-accent border border-border-color rounded-full px-3.5 py-2 text-sm text-text-medium transition-colors hover:bg-primary hover:text-white hover:border-primary">
                        <i class="fas fa-search ml-1.5"></i>
                        هیوندای توسان
                    </a>
                    <a href="#"
                        class="tag flex items-center bg-accent border border-border-color rounded-full px-3.5 py-2 text-sm text-text-medium transition-colors hover:bg-primary hover:text-white hover:border-primary">
                        <i class="fas fa-search ml-1.5"></i>
                        کیا اسپورتیج
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش بودجه‌ها -->
    <section class="section bg-accent py-12">
        <div class="container mx-auto px-3.5">
            <h2 class="section-title text-3xl font-bold mb-2.5 text-center">خودرو مناسب بودجه شما</h2>
            <p class="section-subtitle text-lg text-text-light text-center max-w-2xl mx-auto mb-10">انتخاب بهترین خودرو
                نو و کارکرده متناسب با بودجه شما</p>

            <div class="budget-slider -mx-2.5">
                <div
                    class="budget-card mx-2.5 bg-white rounded-lg overflow-hidden shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="budget-card-img h-36 overflow-hidden">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/4e40e0ff-adfa-4921-ba26-0dc83a866ced.webp"
                            alt="خودروهای تا 1 میلیارد"
                            class="w-full h-full object-cover transition-transform hover:scale-105">
                    </div>
                    <div class="budget-card-content p-5">
                        <h3 class="budget-card-title text-lg font-bold mb-2.5">از 500 میلیون تا 1 میلیارد تومان</h3>
                        <p class="budget-card-desc text-sm text-text-light mb-3.5">پژو 207، رنو تندر پلاس، ایران خودرو
                            تارا</p>
                        <div class="budget-card-footer flex items-center justify-between">
                            <span
                                class="budget-card-count flex items-center bg-accent px-2.5 py-1 rounded-full text-sm">
                                <i class="fas fa-car ml-1.5 text-secondary"></i>
                                4 خودرو
                            </span>
                        </div>
                    </div>
                </div>

                <div
                    class="budget-card mx-2.5 bg-white rounded-lg overflow-hidden shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="budget-card-img h-36 overflow-hidden">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/0b3c618c-2a43-4827-b2bc-7d180b26119e.webp"
                            alt="خودروهای 1 تا 3 میلیارد"
                            class="w-full h-full object-cover transition-transform hover:scale-105">
                    </div>
                    <div class="budget-card-content p-5">
                        <h3 class="budget-card-title text-lg font-bold mb-2.5">از 1 میلیارد تا 3 میلیارد تومان</h3>
                        <p class="budget-card-desc text-sm text-text-light mb-3.5">هیوندای آزرا، فونیکس FX، جک S5،
                            ایران خودرو تارا</p>
                        <div class="budget-card-footer flex items-center justify-between">
                            <span
                                class="budget-card-count flex items-center bg-accent px-2.5 py-1 rounded-full text-sm">
                                <i class="fas fa-car ml-1.5 text-secondary"></i>
                                19 خودرو
                            </span>
                        </div>
                    </div>
                </div>

                <div
                    class="budget-card mx-2.5 bg-white rounded-lg overflow-hidden shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="budget-card-img h-36 overflow-hidden">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/c0ad23fc-2322-4778-864b-283ba282f7b3.webp"
                            alt="خودروهای 3 تا 6 میلیارد"
                            class="w-full h-full object-cover transition-transform hover:scale-105">
                    </div>
                    <div class="budget-card-content p-5">
                        <h3 class="budget-card-title text-lg font-bold mb-2.5">از 3 میلیارد تا 6 میلیارد تومان</h3>
                        <p class="budget-card-desc text-sm text-text-light mb-3.5">تویوتا آریون، فونیکس تیگو 7 پرو،
                            میتسوبیشی اوتلندر</p>
                        <div class="budget-card-footer flex items-center justify-between">
                            <span
                                class="budget-card-count flex items-center bg-accent px-2.5 py-1 rounded-full text-sm">
                                <i class="fas fa-car ml-1.5 text-secondary"></i>
                                18 خودرو
                            </span>
                        </div>
                    </div>
                </div>

                <div
                    class="budget-card mx-2.5 bg-white rounded-lg overflow-hidden shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="budget-card-img h-36 overflow-hidden">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/2ec5f801-bc12-4096-9677-9f95f4033a71.webp"
                            alt="خودروهای بالای 6 میلیارد"
                            class="w-full h-full object-cover transition-transform hover:scale-105">
                    </div>
                    <div class="budget-card-content p-5">
                        <h3 class="budget-card-title text-lg font-bold mb-2.5">بیشتر از 6 میلیارد تومان</h3>
                        <p class="budget-card-desc text-sm text-text-light mb-3.5">تویوتا راوفور، تویوتا کمری هیبرید،
                            تویوتا پرادو</p>
                        <div class="budget-card-footer flex items-center justify-between">
                            <span
                                class="budget-card-count flex items-center bg-accent px-2.5 py-1 rounded-full text-sm">
                                <i class="fas fa-car ml-1.5 text-secondary"></i>
                                14 خودرو
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش برندها -->
    <section class="section py-12">
        <div class="container mx-auto px-3.5">
            <h2 class="section-title text-3xl font-bold mb-2.5 text-center">برندهای محبوب</h2>
            <p class="section-subtitle text-lg text-text-light text-center max-w-2xl mx-auto mb-10">برندهای محبوب خودرو
                در نمایشگاه آنلاین خودرو</p>

            <div class="brands-slider -mx-2.5">
                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/3a9c5588-35cd-445a-97fd-d26cc4fb72d5.webp" alt="هیوندای"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">هیوندای</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/df32b2b7-351c-402e-9b33-ff4866668192.webp" alt="پژو"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">پژو</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/64d33573-6a83-4a64-95fc-dbdd05f58bee.webp" alt="کیا"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">کیا</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/f623244b-04a5-411b-a76b-43c1b64f2abd.webp" alt="تویوتا"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">تویوتا</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/146218b8-1e68-4f2d-8afb-2bd506d95537.webp" alt="بنز"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">بنز</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/254220ee-e9c7-4905-9d47-87bf3e39b3c8.webp" alt="لکسوس"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">لکسوس</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/831048b2-b68f-454f-988c-dbfec5d95db8.webp" alt="ب ام و"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">ب ام و</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/0887cf8e-e607-48e8-8253-d3c0b90e4029.webp" alt="چری"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">چری</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/84a8a1fb-83ef-42ba-b55b-190d6f66d358.webp" alt="ام وی ام"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">ام وی ام</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/e6af11ef-a882-49e1-87d7-0945e1a8c1d3.webp" alt="لیفان"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">لیفان</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/8964e20c-ba50-4c99-9ea7-74c6e9885dd4.webp" alt="جک"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">جک</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/71abda21-8e33-4f51-951b-7c3132c5b80b.webp" alt="فونیکس"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">فونیکس</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/ac85a367-72a2-4d4f-806b-67cb154501d8.webp" alt="هایما"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">هایما</h3>
                </div>

                <div
                    class="brand-card mx-2.5 rounded-lg shadow-custom !flex flex-col items-center justify-center p-5 w-36 h-36 transition-all hover:shadow-lg bg-gradient-to-b from-white to-gray-100 border border-gray-300">
                    <img src="https://file.switch.ir/api/v1/bee3cd92-3ccb-4b03-b001-a53054ec663f.webp" alt="رنو"
                        class="w-14 h-14 object-contain mb-2.5">
                    <h3 class="text-base font-bold text-center">رنو</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش پیشنهادات ویژه -->
    <section class="section bg-text-dark text-white py-12">
        <div class="container mx-auto px-3.5">
            <div class="section-header flex justify-between items-center mb-7">
                <div>
                    <h2 class="section-title text-3xl font-bold mb-2.5 text-white">پیشنهادات ویژه</h2>
                    <p class="section-subtitle text-lg text-white/80 text-center max-w-2xl mx-auto">جدیدترین ماشین‌های
                        کارکرده و صفر آماده فروش</p>
                </div>
                <a href="#" class="text-white">مشاهده همه‌ی قیمت‌های ویژه</a>
            </div>

            <div class="special-slider -mx-2.5">
                <div
                    class="special-card mx-2.5 bg-white/5 rounded-lg overflow-hidden transition-transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="special-card-img h-44 relative">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/59e85de3-6818-40f2-921b-e0fc4319f3f4.webp"
                            alt="پژو 207" class="w-full h-full object-cover">
                        <span
                            class="special-badge absolute top-2.5 right-2.5 bg-secondary text-white px-2.5 py-1 rounded-full text-xs font-semibold">کارشناسی
                            شده</span>
                    </div>
                    <div class="special-card-content p-5">
                        <h3 class="special-card-title text-lg font-bold mb-2.5 text-white">پژو 207 - 1401</h3>
                        <div class="special-card-info flex items-center mb-3.5 text-sm text-white/80">
                            <span class="ml-3"><i class="fas fa-tachometer-alt ml-1.5"></i> 46,359 کیلومتر</span>
                            <span><i class="fas fa-cogs ml-1.5"></i> دنده ای</span>
                        </div>
                        <div class="special-card-footer flex items-center justify-between">
                            <span class="special-price text-lg font-bold text-white">توافقی</span>
                        </div>
                    </div>
                </div>

                <div
                    class="special-card mx-2.5 bg-white/5 rounded-lg overflow-hidden transition-transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="special-card-img h-44 relative">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/7bf2f814-5390-459e-9774-0a096fdc5232.webp"
                            alt="هیوندای i20" class="w-full h-full object-cover">
                        <span
                            class="special-badge absolute top-2.5 right-2.5 bg-secondary text-white px-2.5 py-1 rounded-full text-xs font-semibold">کارشناسی
                            شده</span>
                    </div>
                    <div class="special-card-content p-5">
                        <h3 class="special-card-title text-lg font-bold mb-2.5 text-white">هیوندای i20 (مونتاژ) - 1397
                        </h3>
                        <div class="special-card-info flex items-center mb-3.5 text-sm text-white/80">
                            <span class="ml-3"><i class="fas fa-tachometer-alt ml-1.5"></i> 70,201 کیلومتر</span>
                            <span><i class="fas fa-cogs ml-1.5"></i> اتومات</span>
                        </div>
                        <div class="special-card-footer flex items-center justify-between">
                            <span class="special-price text-lg font-bold text-white">توافقی</span>
                        </div>
                    </div>
                </div>

                <div
                    class="special-card mx-2.5 bg-white/5 rounded-lg overflow-hidden transition-transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="special-card-img h-44 relative">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/7b5ee96b-53c0-42f6-9959-b57cc311c4f6.webp"
                            alt="بنز کلاس E" class="w-full h-full object-cover">
                        <span
                            class="special-badge absolute top-2.5 right-2.5 bg-secondary text-white px-2.5 py-1 rounded-full text-xs font-semibold">کارشناسی
                            شده</span>
                    </div>
                    <div class="special-card-content p-5">
                        <h3 class="special-card-title text-lg font-bold mb-2.5 text-white">بنز کلاس E - 2011</h3>
                        <div class="special-card-info flex items-center mb-3.5 text-sm text-white/80">
                            <span class="ml-3"><i class="fas fa-tachometer-alt ml-1.5"></i> 158,669 کیلومتر</span>
                            <span><i class="fas fa-cogs ml-1.5"></i> اتومات</span>
                        </div>
                        <div class="special-card-footer flex items-center justify-between">
                            <span class="special-price text-lg font-bold text-white">توافقی</span>
                        </div>
                    </div>
                </div>

                <div
                    class="special-card mx-2.5 bg-white/5 rounded-lg overflow-hidden transition-transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="special-card-img h-44 relative">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/b47a8df2-3689-4293-81bc-9add56360dde.webp"
                            alt="هیوندای سانتافه" class="w-full h-full object-cover">
                        <span
                            class="special-badge absolute top-2.5 right-2.5 bg-secondary text-white px-2.5 py-1 rounded-full text-xs font-semibold">کارشناسی
                            شده</span>
                    </div>
                    <div class="special-card-content p-5">
                        <h3 class="special-card-title text-lg font-bold mb-2.5 text-white">هیوندای سانتافه - 2017</h3>
                        <div class="special-card-info flex items-center mb-3.5 text-sm text-white/80">
                            <span class="ml-3"><i class="fas fa-tachometer-alt ml-1.5"></i> 109,163 کیلومتر</span>
                            <span><i class="fas fa-cogs ml-1.5"></i> اتومات</span>
                        </div>
                        <div class="special-card-footer flex items-center justify-between">
                            <span class="special-price text-lg font-bold text-white">توافقی</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش جدیدترین آگهی‌ها -->
    <section class="section py-12">
        <div class="container mx-auto px-3.5">
            <div class="section-header flex justify-between items-center mb-7">
                <div>
                    <h2 class="section-title text-3xl font-bold mb-2.5">جدیدترین آگهی‌های خودرو</h2>
                    <p class="section-subtitle text-lg text-text-light text-center max-w-2xl mx-auto">جدیدترین
                        ماشین‌های کارکرده و صفر آماده فروش</p>
                </div>
                <a href="#" class="text-white">مشاهده همه‌ی آگهی‌ها</a>
            </div>

            <div class="new-slider -mx-2.5">
                <div
                    class="car-card mx-2.5 bg-white rounded-lg overflow-hidden shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="car-card-img h-44 relative">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/4e40e0ff-adfa-4921-ba26-0dc83a866ced.webp"
                            alt="میتسوبیشی اوتلندر" class="w-full h-full object-cover">
                        <span
                            class="car-badge absolute top-2.5 right-2.5 bg-black/70 text-white px-2.5 py-1 rounded-full text-xs font-semibold">امکان
                            خرید قسطی</span>
                    </div>
                    <div class="car-card-content p-5">
                        <h3 class="car-card-title text-lg font-bold mb-2.5">میتسوبیشی اوتلندر - 2023</h3>
                        <div class="car-card-info flex flex-wrap gap-2.5 mb-3.5 text-sm text-text-light">
                            <span class="flex items-center">کارکرده</span>
                            <span class="flex items-center">18 کیلومتر</span>
                            <span class="flex items-center">اتومات</span>
                            <span class="flex items-center">سفید</span>
                        </div>
                        <div class="car-card-features flex items-center mb-3.5 text-sm text-secondary">
                            <i class="fas fa-check-circle ml-1.5"></i>
                            کارشناسی شده
                        </div>
                        <div class="car-card-footer flex items-center justify-between">
                            <div>
                                <span class="car-price text-lg font-bold text-text-dark">توافقی</span>
                                <div class="car-installment text-sm text-text-light">قسطی: 245,136,400 تومان</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="car-card mx-2.5 bg-white rounded-lg overflow-hidden shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="car-card-img h-44 relative">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/0b3c618c-2a43-4827-b2bc-7d180b26119e.webp"
                            alt="پژو 207" class="w-full h-full object-cover">
                        <span
                            class="car-badge absolute top-2.5 right-2.5 bg-black/70 text-white px-2.5 py-1 rounded-full text-xs font-semibold">امکان
                            خرید قسطی</span>
                    </div>
                    <div class="car-card-content p-5">
                        <h3 class="car-card-title text-lg font-bold mb-2.5">پژو 207 - 1400</h3>
                        <div class="car-card-info flex flex-wrap gap-2.5 mb-3.5 text-sm text-text-light">
                            <span class="flex items-center">کارکرده</span>
                            <span class="flex items-center">30,713 کیلومتر</span>
                            <span class="flex items-center">اتومات</span>
                            <span class="flex items-center">سفید</span>
                        </div>
                        <div class="car-card-features flex items-center mb-3.5 text-sm text-secondary">
                            <i class="fas fa-check-circle ml-1.5"></i>
                            کارشناسی شده
                        </div>
                        <div class="car-card-footer flex items-center justify-between">
                            <div>
                                <span class="car-price text-lg font-bold text-text-dark">920,000,000 تومان</span>
                                <div class="car-installment text-sm text-text-light">قسطی: 56,381,400 تومان</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="car-card mx-2.5 bg-white rounded-lg overflow-hidden shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="car-card-img h-44 relative">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/c0ad23fc-2322-4778-864b-283ba282f7b3.webp"
                            alt="بنز کلاس E" class="w-full h-full object-cover">
                    </div>
                    <div class="car-card-content p-5">
                        <h3 class="car-card-title text-lg font-bold mb-2.5">بنز کلاس E - 2006</h3>
                        <div class="car-card-info flex flex-wrap gap-2.5 mb-3.5 text-sm text-text-light">
                            <span class="flex items-center">کارکرده</span>
                            <span class="flex items-center">209,217 کیلومتر</span>
                            <span class="flex items-center">اتومات</span>
                            <span class="flex items-center">سفید صدفی</span>
                        </div>
                        <div class="car-card-features flex items-center mb-3.5 text-sm text-secondary">
                            <i class="fas fa-check-circle ml-1.5"></i>
                            کارشناسی شده
                        </div>
                        <div class="car-card-footer flex items-center justify-between">
                            <div>
                                <span class="car-price text-lg font-bold text-text-dark">2,000,000,000 تومان</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="car-card mx-2.5 bg-white rounded-lg overflow-hidden shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="car-card-img h-44 relative">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/2ec5f801-bc12-4096-9677-9f95f4033a71.webp"
                            alt="هایما S7" class="w-full h-full object-cover">
                        <span
                            class="car-badge absolute top-2.5 right-2.5 bg-black/70 text-white px-2.5 py-1 rounded-full text-xs font-semibold">امکان
                            خرید قسطی</span>
                    </div>
                    <div class="car-card-content p-5">
                        <h3 class="car-card-title text-lg font-bold mb-2.5">هایما S7 توربو - 1402</h3>
                        <div class="car-card-info flex flex-wrap gap-2.5 mb-3.5 text-sm text-text-light">
                            <span class="flex items-center">کارکرده</span>
                            <span class="flex items-center">60,049 کیلومتر</span>
                            <span class="flex items-center">اتومات</span>
                            <span class="flex items-center">مشکی</span>
                        </div>
                        <div class="car-card-features flex items-center mb-3.5 text-sm text-secondary">
                            <i class="fas fa-check-circle ml-1.5"></i>
                            کارشناسی شده
                        </div>
                        <div class="car-card-footer flex items-center justify-between">
                            <div>
                                <span class="car-price text-lg font-bold text-text-dark">1,840,000,000 تومان</span>
                                <div class="car-installment text-sm text-text-light">قسطی: 112,762,800 تومان</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش چرا الوماشین -->
    <section class="section bg-accent py-12">
        <div class="container mx-auto px-3.5">
            <h2 class="section-title text-3xl font-bold mb-2.5 text-center">چرا الوماشین؟</h2>
            <p class="section-subtitle text-lg text-text-light text-center max-w-2xl mx-auto mb-10">سریع، شفاف و مطمئن
            </p>

            <div class="features-grid grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3">
                <div
                    class="feature-card bg-white rounded-lg p-3 text-center shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div
                        class="feature-icon w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-5 text-primary text-3xl">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="feature-title text-sm font-bold mb-2.5">شفافیت در خرید و فروش</h3>
                </div>

                <div
                    class="feature-card bg-white rounded-lg p-3 text-center shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div
                        class="feature-icon w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-5 text-primary text-3xl">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="feature-title text-sm font-bold mb-2.5">همراهی مشتری</h3>
                </div>

                <div
                    class="feature-card bg-white rounded-lg p-3 text-center shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div
                        class="feature-icon w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-5 text-primary text-3xl">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="feature-title text-sm font-bold mb-2.5">مشاوره تخصصی</h3>
                </div>

                <div
                    class="feature-card bg-white rounded-lg p-3 text-center shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div
                        class="feature-icon w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-5 text-primary text-3xl">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3 class="feature-title text-sm font-bold mb-2.5">سهولت در انجام معامله</h3>
                </div>

                <div
                    class="feature-card bg-white rounded-lg p-3 text-center shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div
                        class="feature-icon w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-5 text-primary text-3xl">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <h3 class="feature-title text-sm font-bold mb-2.5">خدمات کامل</h3>
                </div>

                <div
                    class="feature-card bg-white rounded-lg p-3 text-center shadow-custom transition-transform hover:-translate-y-1 hover:shadow-lg">
                    <div
                        class="feature-icon w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-5 text-primary text-3xl">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title text-sm font-bold mb-2.5">امنیت و آرامش</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش تجربه‌ها -->
    <section class="section bg-gradient-to-br from-primary to-blue-800 text-white py-12 relative overflow-hidden">
        <div class="container mx-auto px-3.5 relative z-10">
            <h2 class="section-title text-3xl font-bold mb-2.5 text-white text-center">تجربه های استفاده از الوماشین
            </h2>
            <p class="section-subtitle text-lg text-white/80 text-center max-w-2xl mx-auto mb-10">خریداران و فروشندگان
                الوماشین از تجربه معامله در الوماشین می گویند.</p>

            <div class="experience-container grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="experience-video rounded-lg overflow-hidden shadow-xl">
                    <video controls
                        poster="https://file.switch.ir/api/v1/webp/1200/672/80/59e85de3-6818-40f2-921b-e0fc4319f3f4.webp"
                        class="w-full block">
                        <source src="#" type="video/mp4">
                        مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
                    </video>
                </div>

                <div class="experience-content relative">
                    <div class="experience-bg absolute top-[-30px] right-[-30px] w-24 h-24 bg-white/10 rounded-lg z-0">
                    </div>
                    <div class="experience-bg absolute bottom-[-30px] right-12 w-36 h-36 bg-white/10 rounded-lg z-0">
                    </div>
                    <div class="experience-quote bg-white rounded-lg p-7 relative z-10">
                        <h3 class="text-2xl font-bold mb-3.5 text-text-dark">شفافیت در معامله حق شماست و ما به این حق
                            احترام می‌ذاریم.</h3>
                        <p class="text-base text-text-light mb-0">تجربه خرید و فروش خودرو با الوماشین، فقط یه معامله
                            نیست، یه همراهیِ مطمئنه! اینو مشتری عزیزمون می‌گه که از رفتار صمیمی و محترمانه پرسنل
                            الوماشین، عمل به تمام وعده‌ها، انجام تمام مراحل خرید و فروش و شفافیت کامل معامله خیلی راضی
                            بود.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش درباره ما -->
    <section class="section bg-gradient-to-br from-accent to-transparent py-12">
        <div class="container mx-auto px-3.5">
            <div class="about-container grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="about-content">
                    <h2 class="text-3xl font-bold mb-5">درباره الوماشین</h2>
                    <p class="text-base leading-9 mb-5">مشکلات و دردسرهای خرید و فروش خودرو، ایده الوماشین را خلق کرد.
                        به همین سادگی! شکل گیری این ایده تیمی از افراد حرفه ای، متخصص، خوش فکر و با سابقه را در کنار
                        یکدیگر جمع کرد تا با این الوماشین طلایی کاستی ها و پیچیدگی های معاملات خودرو از خرید و فروش
                        گرفته تا معاوضه و خدمات برای همیشه رفع شود و با کاهش دردسرهای خرید و فروش خودرو یک تجربه شیرین
                        به مشتریان هدیه شود.</p>
                    <p class="text-base leading-9 mb-5">الوماشین مسیر معاملات خودرو را شفاف، ساده، امن و کوتاه می‌کند.
                        حالا ما با این الوماشین کارآمد، برای مسائلی که دغدغه شماست چاره اندیشی کرده ایم. البته شما هم می
                        توانید برای ایجاد تحولات بزرگتر ما را در این مسیر همراهی کنید . با افتخار پذیرای خواسته‌های شما
                        هستیم.</p>

                    <div
                        class="stats-container flex justify-between mt-10 bg-white rounded-lg p-7 shadow-custom flex-col md:flex-row">
                        <div class="stat-item text-center px-3.5 relative md:border-l md:border-border-color">
                            <div class="stat-number text-3xl font-bold text-primary mb-1.5">4,699</div>
                            <div class="stat-label text-sm text-text-light">خودرو موجود در نمایشگاه الوماشین</div>
                        </div>

                        <div class="stat-item text-center px-3.5 relative md:border-l md:border-border-color">
                            <div class="stat-number text-3xl font-bold text-primary mb-1.5">127,328</div>
                            <div class="stat-label text-sm text-text-light">درخواست های خرید و فروش ثبت شده در الوماشین
                            </div>
                        </div>

                        <div class="stat-item text-center px-3.5">
                            <div class="stat-number text-3xl font-bold text-primary mb-1.5">13,073</div>
                            <div class="stat-label text-sm text-text-light">خودرو کارشناسی شده</div>
                        </div>
                    </div>
                </div>

                <div class="about-video rounded-lg overflow-hidden shadow-custom">
                    <video controls
                        poster="https://file.switch.ir/api/v1/webp/1200/672/80/7bf2f814-5390-459e-9774-0a096fdc5232.webp"
                        class="w-full block">
                        <source src="#" type="video/mp4">
                        مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
                    </video>
                </div>
            </div>
        </div>
    </section>
@endsection
