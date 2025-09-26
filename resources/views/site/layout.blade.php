<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الوماشین؛ متخصص خرید و فروش خودروهای وارداتی و لوکس| قزوین</title>
    <meta name="description"
        content="سامانه خرید و فروش خودروهای نو و کارکرده خارجی، خرید و فروش خودرو بی دغدغه، بی ریسک و بی معطلی توسط الوماشین در قزوین">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.alomashin.ir/">
    <meta property="og:title" content="الوماشین؛ متخصص خرید و فروش خودروهای وارداتی و لوکس| قزوین">
    <meta property="og:description"
        content="سامانه خرید و فروش خودروهای نو و کارکرده خارجی، خرید و فروش خودرو بی دغدغه، بی ریسک و بی معطلی توسط الوماشین در قزوین">
    <meta property="og:image"
        content="https://file.alomashin.ir/api/v1/webp/1728/528/80/0ab739b0-9e2a-4969-97c9-90f04b071b99.webp">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.alomashin.ir/">
    <meta property="twitter:title" content="الوماشین؛ متخصص خرید و فروش خودروهای وارداتی و لوکس| قزوین">
    <meta property="twitter:description"
        content="سامانه خرید و فروش خودروهای نو و کارکرده خارجی، خرید و فروش خودرو بی دغدغه، بی ریسک و بی معطلی توسط الوماشین در قزوین">
    <meta property="twitter:image"
        content="https://file.alomashin.ir/api/v1/webp/1728/528/80/0ab739b0-9e2a-4969-97c9-90f04b071b99.webp">

    <!-- فاوآیکون -->
    <link rel="icon" type="image/png" sizes="32x32" href="https://img.icons8.com/color/48/car--v1.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/style.css') }}">

    <!-- اسکریپت‌های ضروری -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "الوماشین",
      "url": "https://www.alomashin.ir/"
    }
  </script>

    @stack('styles')
</head>

<body>
    <!-- هدر -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="https://img.icons8.com/color/48/car--v1.png" alt="الوماشین">
                <span>الوماشین</span>
            </div>

            <nav>
                <ul>
                    <li><a href="#" class="active">صفحه اصلی</a></li>
                    <li><a href="#">خرید خودرو</a></li>
                    <li><a href="#">فروش خودرو</a></li>
                    <li><a href="#">خرید اقساطی</a></li>
                    <li><a href="#">کارشناسی خودرو</a></li>
                    <li><a href="#">استعلام سوابق</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <a href="tel:02175346" class="btn btn-primary">
                    <i class="fas fa-phone"></i>
                    ۰۲۱-۷۵۳۴۶
                </a>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- منوی موبایل اسلایدر -->
    <div class="mobile-menu-overlay"></div>
    <div class="mobile-menu">
        <div class="mobile-menu-header">
            <div class="mobile-menu-logo">
                <img src="https://img.icons8.com/color/48/car--v1.png" alt="الوماشین">
                <span>الوماشین</span>
            </div>
            <button class="close-menu-btn">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <ul class="mobile-menu-nav">
            <li><a href="#">صفحه اصلی</a></li>
            <li><a href="#">خرید خودرو</a></li>
            <li><a href="#">فروش خودرو</a></li>
            <li><a href="#">خرید اقساطی</a></li>
            <li><a href="#">کارشناسی خودرو</a></li>
            <li><a href="#">استعلام سوابق</a></li>
        </ul>

        <div class="mobile-menu-actions">
            <a href="tel:02175346" class="btn btn-primary">
                <i class="fas fa-phone"></i>
                ۰۲۱-۷۵۳۴۶
            </a>
        </div>
    </div>

    @yield('content')

    <!-- فوتر -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <div class="footer-logo">
                        <img src="https://img.icons8.com/color/48/car--v1.png" alt="الوماشین">
                        <span>الوماشین</span>
                    </div>
                    <p>مسیر معاملات خود را شفاف، ساده، امن و کوتاه کنید.</p>

                    <div class="social-links">
                        <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>دسترسی سریع</h3>
                    <ul>
                        <li><a href="#">صفحه اصلی</a></li>
                        <li><a href="#">خرید خودرو</a></li>
                        <li><a href="#">فروش خودرو</a></li>
                        <li><a href="#">خرید اقساطی</a></li>
                        <li><a href="#">کارشناسی خودرو</a></li>
                        <li><a href="#">استعلام سوابق</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>خدمات الوماشین</h3>
                    <ul>
                        <li><a href="#">نمایشگاه خودرو</a></li>
                        <li><a href="#">مجله خودرو</a></li>
                        <li><a href="#">قیمت خودرو</a></li>
                        <li><a href="#">کارشناسی خودرو</a></li>
                        <li><a href="#">استعلام سوابق</a></li>
                        <li><a href="#">مشاوره خرید</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>تماس با ما</h3>
                    <div class="footer-contact">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>قزوین، خیابان ولیعصر، نبش خیابان شهید فیاضی(فرشته)، پلاک ۱۵۲، ساختمان تجاری لئو مال، طبقه
                            ۴، واحد ۳</span>
                    </div>
                    <div class="footer-contact">
                        <i class="fas fa-phone"></i>
                        <span>۰۲۱-۷۵۳۴۶</span>
                    </div>
                    <div class="footer-contact">
                        <i class="fas fa-envelope"></i>
                        <span>info@alomashin.ir</span>
                    </div>
                </div>
            </div>

            <div class="certificates">
                <div class="certificate">
                    <img src="https://file.switch.ir/api/v1/458dcf5a-4ed1-4892-ae78-397d35224165.webp"
                        alt="نماد اعتماد">
                </div>
                <div class="certificate">
                    <img src="https://file.switch.ir/api/v1/f9793de4-860c-4a69-b670-c7c1b2504e0d.webp" alt="ساماندهی">
                </div>
                <div class="certificate">
                    <img src="https://file.switch.ir/api/v1/2132b9c0-063d-4cb8-afe0-c55ac0c5e90d.webp"
                        alt="اتحادیه اروپا">
                </div>
                <div class="certificate">
                    <img src="https://file.switch.ir/api/v1/bae47c03-c43c-466c-875e-1050f63c8d4d.webp" alt="ISO">
                </div>
            </div>

            <div class="footer-bottom">
                <p>© 2023 الوماشین. تمامی حقوق این وبسایت متعلق به شرکت پارسا موتور سامان می‌باشد.</p>
            </div>
        </div>
    </footer>

    <!-- دکمه بازگشت به بالا -->
    <div class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- اسکریپت‌ها -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('site-assets/js/scripts.js') }}"></script>
    @stack('scripts')
</body>

</html>
