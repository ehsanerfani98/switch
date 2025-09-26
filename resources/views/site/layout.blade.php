<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الوماشین؛ متخصص خرید و فروش خودروهای وارداتی و لوکس| تهران</title>
    <meta name="description"
        content="سامانه خرید و فروش خودروهای نو و کارکرده خارجی، خرید و فروش خودرو بی دغدغه، بی ریسک و بی معطلی توسط الوماشین در تهران">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.switch.ir/">
    <meta property="og:title" content="الوماشین؛ متخصص خرید و فروش خودروهای وارداتی و لوکس| تهران">
    <meta property="og:description"
        content="سامانه خرید و فروش خودروهای نو و کارکرده خارجی، خرید و فروش خودرو بی دغدغه، بی ریسک و بی معطلی توسط الوماشین در تهران">
    <meta property="og:image"
        content="https://file.switch.ir/api/v1/webp/1728/528/80/0ab739b0-9e2a-4969-97c9-90f04b071b99.webp">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.switch.ir/">
    <meta property="twitter:title" content="الوماشین؛ متخصص خرید و فروش خودروهای وارداتی و لوکس| تهران">
    <meta property="twitter:description"
        content="سامانه خرید و فروش خودروهای نو و کارکرده خارجی، خرید و فروش خودرو بی دغدغه، بی ریسک و بی معطلی توسط الوماشین در تهران">
    <meta property="twitter:image"
        content="https://file.switch.ir/api/v1/webp/1728/528/80/0ab739b0-9e2a-4969-97c9-90f04b071b99.webp">

    <!-- فاوآیکون -->
    <link rel="icon" type="image/png" sizes="32x32" href="https://img.icons8.com/color/48/car--v1.png">



    <!-- فونت‌ها -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/font.css') }}">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'vazir': ['Vazirmatn', 'sans-serif'],
                    },
                    colors: {
                        primary: '#2563eb',
                        secondary: '#10b981',
                        accent: '#f0f9ff',
                        'text-dark': '#1f2937',
                        'text-medium': '#374151',
                        'text-light': '#6b7280',
                        'text-lighter': '#9ca3af',
                        'border-color': '#e5e7eb',
                    },
                    boxShadow: {
                        'custom': '0 1px 3px rgba(0, 0, 0, 0.1)',
                        'custom-light': '0 4px 6px rgba(0, 0, 0, 0.05)',
                    },
                    animation: {
                        'slide-in-right': 'slideInRight 0.3s ease-out',
                    },
                    keyframes: {
                        slideInRight: {
                            '0%': {
                                transform: 'translateX(100%)'
                            },
                            '100%': {
                                transform: 'translateX(0)'
                            },
                        }
                    }
                },
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
    </style>

    <!-- اسکریپت‌های ضروری -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "الوماشین",
      "url": "https://www.switch.ir/"
    }
  </script>

    <style>
        /* استایل‌های Slick Slider */
        .slick-prev,
        .slick-next {
            width: 40px;
            height: 40px;
            z-index: 1;
        }

        .slick-prev {
            left: 10px;
        }

        .slick-next {
            right: 10px;
        }

        .slick-prev:before,
        .slick-next:before {
            font-size: 34px;
            color: #cfcfcf;
        }

        .slick-dots li button:before {
            font-size: 12px;
        }

        /* رفع مشکل اسکرول افقی */
        html,
        body {
            overflow-x: hidden;
            width: 100%;
            position: relative;
        }

        * {
            box-sizing: border-box;
        }

        img,
        video,
        iframe {
            max-width: 100%;
            height: auto;
        }

        .container {
            max-width: 100%;
        }

        .slick-list.draggable {
            padding: 10px;
        }
    </style>


@stack('styles')



</head>

<body class="font-vazir text-text-medium bg-white leading-relaxed">

    <!-- هدر -->
    <header class="bg-white shadow-custom sticky top-0 z-50">
        <div class="container mx-auto px-3.5 py-4 flex justify-between items-center">
            <div class="logo flex items-center">
                <img src="https://img.icons8.com/color/48/car--v1.png" alt="الوماشین" class="h-10 ml-2.5">
                <span class="text-2xl font-extrabold text-primary">الوماشین</span>
            </div>

            <nav class="hidden md:block">
                <ul class="flex list-none">
                    <li class="ml-6"><a href="#"
                            class="text-text-medium font-medium relative py-1 after:content-[''] after:absolute after:bottom-0 after:right-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:text-primary hover:after:w-full">صفحه
                            اصلی</a></li>
                    <li class="ml-6"><a href="#"
                            class="text-text-medium font-medium relative py-1 after:content-[''] after:absolute after:bottom-0 after:right-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:text-primary hover:after:w-full">خرید
                            خودرو</a></li>
                    <li class="ml-6"><a href="#"
                            class="text-text-medium font-medium relative py-1 after:content-[''] after:absolute after:bottom-0 after:right-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:text-primary hover:after:w-full">فروش
                            خودرو</a></li>
                    <li class="ml-6"><a href="#"
                            class="text-text-medium font-medium relative py-1 after:content-[''] after:absolute after:bottom-0 after:right-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:text-primary hover:after:w-full">خرید
                            اقساطی</a></li>
                    <li class="ml-6"><a href="#"
                            class="text-text-medium font-medium relative py-1 after:content-[''] after:absolute after:bottom-0 after:right-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:text-primary hover:after:w-full">کارشناسی
                            خودرو</a></li>
                    <li class="ml-6"><a href="#"
                            class="text-text-medium font-medium relative py-1 after:content-[''] after:absolute after:bottom-0 after:right-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:text-primary hover:after:w-full">استعلام
                            سوابق</a></li>
                </ul>
            </nav>

            <div class="header-actions flex items-center gap-3.5">
                <a href="tel:02175346"
                    class="btn bg-primary text-white px-3 py-1.5 rounded-md font-semibold text-base flex items-center gap-2.5 transition-colors hover:bg-blue-700">
                    <i class="fas fa-phone"></i>
                    ۰۲۱-۷۵۳۴۶
                </a>
                <button
                    class="mobile-menu-btn md:hidden bg-transparent border-none text-primary text-2xl cursor-pointer z-50">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- منوی موبایل اسلایدر -->
    <div
        class="mobile-menu-overlay fixed top-0 right-0 w-full h-full bg-black bg-opacity-50 z-40 opacity-0 invisible transition-all duration-300">
    </div>
    <div
        class="mobile-menu fixed top-0 -right-80 w-80 h-full bg-white shadow-lg z-50 transition-right duration-300 overflow-y-auto p-5">
        <div class="mobile-menu-header flex justify-between items-center mb-7 pb-3.5 border-b border-border-color">
            <div class="mobile-menu-logo flex items-center">
                <img src="https://img.icons8.com/color/48/car--v1.png" alt="الوماشین" class="h-7 ml-2.5">
                <span class="text-xl font-extrabold text-primary">الوماشین</span>
            </div>
            <button class="close-menu-btn bg-transparent border-none text-text-medium text-2xl cursor-pointer">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <ul class="mobile-menu-nav list-none">
            <li class="mb-3.5"><a href="#"
                    class="block text-text-medium font-medium text-base px-3.5 py-2.5 rounded-md transition-colors hover:bg-accent hover:text-primary">صفحه
                    اصلی</a></li>
            <li class="mb-3.5"><a href="#"
                    class="block text-text-medium font-medium text-base px-3.5 py-2.5 rounded-md transition-colors hover:bg-accent hover:text-primary">خرید
                    خودرو</a></li>
            <li class="mb-3.5"><a href="#"
                    class="block text-text-medium font-medium text-base px-3.5 py-2.5 rounded-md transition-colors hover:bg-accent hover:text-primary">فروش
                    خودرو</a></li>
            <li class="mb-3.5"><a href="#"
                    class="block text-text-medium font-medium text-base px-3.5 py-2.5 rounded-md transition-colors hover:bg-accent hover:text-primary">خرید
                    اقساطی</a></li>
            <li class="mb-3.5"><a href="#"
                    class="block text-text-medium font-medium text-base px-3.5 py-2.5 rounded-md transition-colors hover:bg-accent hover:text-primary">کارشناسی
                    خودرو</a></li>
            <li class="mb-3.5"><a href="#"
                    class="block text-text-medium font-medium text-base px-3.5 py-2.5 rounded-md transition-colors hover:bg-accent hover:text-primary">استعلام
                    سوابق</a></li>
        </ul>

        <div class="mobile-menu-actions mt-7 pt-5 border-t border-border-color">
            <a href="tel:02175346"
                class="btn bg-primary text-white px-3 py-1.5 rounded-md font-semibold text-base flex items-center justify-center gap-2.5 transition-colors hover:bg-blue-700 w-full mb-2.5">
                <i class="fas fa-phone"></i>
                ۰۲۱-۷۵۳۴۶
            </a>
        </div>
    </div>

 @yield('content')

    <!-- فوتر -->
    <footer class="bg-text-dark text-white py-12 pb-5">
        <div class="container mx-auto px-3.5">
            <div class="footer-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7 mb-10">
                <div class="footer-col">
                    <div class="footer-logo flex items-center mb-5">
                        <img src="https://img.icons8.com/color/48/car--v1.png" alt="الوماشین" class="h-10 ml-2.5">
                        <span class="text-2xl font-extrabold text-white">الوماشین</span>
                    </div>
                    <p class="mb-5">مسیر معاملات خود را شفاف، ساده، امن و کوتاه کنید.</p>

                    <div class="social-links flex gap-3.5 mt-5">
                        <a href="#" target="_blank"
                            class="flex items-center justify-center w-10 h-10 bg-white/10 rounded-full text-white transition-all hover:bg-primary hover:-translate-y-1">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="flex items-center justify-center w-10 h-10 bg-white/10 rounded-full text-white transition-all hover:bg-primary hover:-translate-y-1">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="flex items-center justify-center w-10 h-10 bg-white/10 rounded-full text-white transition-all hover:bg-primary hover:-translate-y-1">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="flex items-center justify-center w-10 h-10 bg-white/10 rounded-full text-white transition-all hover:bg-primary hover:-translate-y-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="flex items-center justify-center w-10 h-10 bg-white/10 rounded-full text-white transition-all hover:bg-primary hover:-translate-y-1">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3 class="text-xl font-bold mb-5 text-white">دسترسی سریع</h3>
                    <ul class="list-none">
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">صفحه اصلی</a></li>
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">خرید خودرو</a></li>
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">فروش خودرو</a></li>
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">خرید اقساطی</a></li>
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">کارشناسی خودرو</a>
                        </li>
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">استعلام سوابق</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3 class="text-xl font-bold mb-5 text-white">خدمات الوماشین</h3>
                    <ul class="list-none">
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">نمایشگاه خودرو</a>
                        </li>
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">مجله خودرو</a></li>
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">قیمت خودرو</a></li>
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">کارشناسی خودرو</a>
                        </li>
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">استعلام سوابق</a></li>
                        <li class="mb-2.5"><a href="#"
                                class="text-white/80 transition-all hover:text-white hover:pr-1">مشاوره خرید</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3 class="text-xl font-bold mb-5 text-white">تماس با ما</h3>
                    <div class="footer-contact flex items-center mb-3.5 text-white/80">
                        <i class="fas fa-map-marker-alt ml-2.5 text-lg"></i>
                        <span>تهران، خیابان ولیعصر، نبش خیابان شهید فیاضی(فرشته)، پلاک ۱۵۲، ساختمان تجاری لئو مال، طبقه
                            ۴، واحد ۳</span>
                    </div>
                    <div class="footer-contact flex items-center mb-3.5 text-white/80">
                        <i class="fas fa-phone ml-2.5 text-lg"></i>
                        <span>۰۲۱-۷۵۳۴۶</span>
                    </div>
                    <div class="footer-contact flex items-center mb-3.5 text-white/80">
                        <i class="fas fa-envelope ml-2.5 text-lg"></i>
                        <span>info@switch.ir</span>
                    </div>
                </div>
            </div>

            <div class="certificates flex justify-center gap-5 my-7">
                <div class="certificate w-20 h-20 bg-white rounded-lg flex items-center justify-center shadow-custom">
                    <img src="https://file.switch.ir/api/v1/458dcf5a-4ed1-4892-ae78-397d35224165.webp"
                        alt="نماد اعتماد" class="w-[70%] h-auto block">
                </div>
                <div class="certificate w-20 h-20 bg-white rounded-lg flex items-center justify-center shadow-custom">
                    <img src="https://file.switch.ir/api/v1/f9793de4-860c-4a69-b670-c7c1b2504e0d.webp" alt="ساماندهی"
                        class="w-[70%] h-auto block">
                </div>
                <div class="certificate w-20 h-20 bg-white rounded-lg flex items-center justify-center shadow-custom">
                    <img src="https://file.switch.ir/api/v1/2132b9c0-063d-4cb8-afe0-c55ac0c5e90d.webp"
                        alt="اتحادیه اروپا" class="w-[70%] h-auto block">
                </div>
                <div class="certificate w-20 h-20 bg-white rounded-lg flex items-center justify-center shadow-custom">
                    <img src="https://file.switch.ir/api/v1/bae47c03-c43c-466c-875e-1050f63c8d4d.webp" alt="ISO"
                        class="w-[70%] h-auto block">
                </div>
            </div>

            <div class="footer-bottom border-t border-white/10 pt-5 text-center text-sm text-white/60">
                <p>© 2023 الوماشین. تمامی حقوق این وبسایت متعلق به شرکت پارسا موتور سامان می‌باشد.</p>
            </div>
        </div>
    </footer>

    <!-- دکمه بازگشت به بالا -->
    <div
        class="scroll-top fixed bottom-8 left-8 w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center text-xl shadow-custom cursor-pointer opacity-0 invisible transition-all hover:bg-blue-700 hover:-translate-y-1 z-40">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- اسکریپت‌ها -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        // دکمه بازگشت به بالا
        const scrollTopBtn = document.querySelector('.scroll-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('show', 'opacity-100', 'visible');
                scrollTopBtn.classList.remove('opacity-0', 'invisible');
            } else {
                scrollTopBtn.classList.remove('show', 'opacity-100', 'visible');
                scrollTopBtn.classList.add('opacity-0', 'invisible');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // منوی موبایل اسلایدر
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const closeMenuBtn = document.querySelector('.close-menu-btn');
        const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
        const mobileMenu = document.querySelector('.mobile-menu');
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu-nav li a');

        // باز کردن منوی موبایل
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenuOverlay.classList.add('opacity-100', 'visible');
            mobileMenuOverlay.classList.remove('opacity-0', 'invisible');
            mobileMenu.classList.add('right-0');
            mobileMenu.classList.remove('-right-80');
            document.body.style.overflow = 'hidden'; // جلوگیری از اسکرول صفحه
        });

        // بستن منوی موبایل
        function closeMobileMenu() {
            mobileMenuOverlay.classList.remove('opacity-100', 'visible');
            mobileMenuOverlay.classList.add('opacity-0', 'invisible');
            mobileMenu.classList.remove('right-0');
            mobileMenu.classList.add('-right-80');
            document.body.style.overflow = ''; // بازگرداندن اسکرول صفحه
        }

        closeMenuBtn.addEventListener('click', closeMobileMenu);
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);

        // بستن منو با کلیک روی لینک‌ها
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });

        // جستجو
        // const searchForm = document.querySelector('.search-form');

        // searchForm.addEventListener('submit', (e) => {
        //     e.preventDefault();
        //     const searchInput = document.querySelector('.search-input');
        //     const searchTerm = searchInput.value.trim();

        //     if (searchTerm) {
        //         console.log('جستجو برای:', searchTerm);
        //     }
        // });

        // اسلایدرها با Slick
        $(document).ready(function() {
            // اسلایدر برندها
            $('.brands-slider').slick({
                dots: false,
                infinite: true,
                autoplay: true,
                speed: 300,
                slidesToShow: 6,
                slidesToScroll: 1,
                variableWidth: true,
                rtl: true,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            arrows: false,
                            slidesToShow: 5,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            arrows: false,
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            arrows: false,
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            // اسلایدر بودجه‌ها
            $('.budget-slider').slick({
                arrows: false,
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                rtl: true,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            variableWidth: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            // اسلایدر پیشنهادات ویژه
            $('.special-slider').slick({
                arrows: false,
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                rtl: true,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            variableWidth: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            // اسلایدر جدیدترین آگهی‌ها
            $('.new-slider').slick({
                arrows: false,
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                rtl: true,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            variableWidth: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });



        });
    </script>



@stack('scripts')
</body>

</html>
