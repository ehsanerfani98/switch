@extends('site.layout')
@section('title', 'خانه')

@section('content')

    <!-- بخش جستجو -->
    <section class="hero-section">
        <div class="container hero-content">
            <h1 class="hero-title">مسیر معاملات خودرو را شفاف، ساده، امن و کوتاه کنید</h1>
            <p class="hero-subtitle">سامانه خرید و فروش خودروهای نو و کارکرده خارجی، خرید و فروش خودرو بی دغدغه، بی ریسک
                و بی معطلی توسط الوماشین در تهران</p>

            <div class="search-container">
                <form class="search-form">
                    <input type="text" class="search-input" placeholder="جستجوی خودرو های موجود نمایشگاه">
                    <button type="submit" class="search-btn">جستجو</button>
                </form>

                <div class="popular-tags">
                    <a href="#" class="tag">
                        <i class="fas fa-search"></i>
                        کیا سراتو
                    </a>
                    <a href="#" class="tag">
                        <i class="fas fa-search"></i>
                        سانتافه
                    </a>
                    <a href="#" class="tag">
                        <i class="fas fa-search"></i>
                        سراتو مونتاژ
                    </a>
                    <a href="#" class="tag">
                        <i class="fas fa-search"></i>
                        هیوندای توسان
                    </a>
                    <a href="#" class="tag">
                        <i class="fas fa-search"></i>
                        کیا اسپورتیج
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش بودجه‌ها -->
    <section class="section budget-section">
        <div class="container">
            <h2 class="section-title">خودرو مناسب بودجه شما</h2>
            <p class="section-subtitle">انتخاب بهترین خودرو نو و کارکرده متناسب با بودجه شما</p>

            <div class="budget-slider">
                <div class="budget-card">
                    <div class="budget-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/4e40e0ff-adfa-4921-ba26-0dc83a866ced.webp"
                            alt="خودروهای تا 1 میلیارد">
                    </div>
                    <div class="budget-card-content">
                        <h3 class="budget-card-title">از 500 میلیون تا 1 میلیارد تومان</h3>
                        <p class="budget-card-desc">پژو 207، رنو تندر پلاس، ایران خودرو تارا</p>
                        <div class="budget-card-footer">
                            <span class="budget-card-count">
                                <i class="fas fa-car"></i>
                                4 خودرو
                            </span>
                        </div>
                    </div>
                </div>

                <div class="budget-card">
                    <div class="budget-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/0b3c618c-2a43-4827-b2bc-7d180b26119e.webp"
                            alt="خودروهای 1 تا 3 میلیارد">
                    </div>
                    <div class="budget-card-content">
                        <h3 class="budget-card-title">از 1 میلیارد تا 3 میلیارد تومان</h3>
                        <p class="budget-card-desc">هیوندای آزرا، فونیکس FX، جک S5، ایران خودرو تارا</p>
                        <div class="budget-card-footer">
                            <span class="budget-card-count">
                                <i class="fas fa-car"></i>
                                19 خودرو
                            </span>
                        </div>
                    </div>
                </div>

                <div class="budget-card">
                    <div class="budget-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/c0ad23fc-2322-4778-864b-283ba282f7b3.webp"
                            alt="خودروهای 3 تا 6 میلیارد">
                    </div>
                    <div class="budget-card-content">
                        <h3 class="budget-card-title">از 3 میلیارد تا 6 میلیارد تومان</h3>
                        <p class="budget-card-desc">تویوتا آریون، فونیکس تیگو 7 پرو، میتسوبیشی اوتلندر</p>
                        <div class="budget-card-footer">
                            <span class="budget-card-count">
                                <i class="fas fa-car"></i>
                                18 خودرو
                            </span>
                        </div>
                    </div>
                </div>

                <div class="budget-card">
                    <div class="budget-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/2ec5f801-bc12-4096-9677-9f95f4033a71.webp"
                            alt="خودروهای بالای 6 میلیارد">
                    </div>
                    <div class="budget-card-content">
                        <h3 class="budget-card-title">بیشتر از 6 میلیارد تومان</h3>
                        <p class="budget-card-desc">تویوتا راوفور، تویوتا کمری هیبرید، تویوتا پرادو</p>
                        <div class="budget-card-footer">
                            <span class="budget-card-count">
                                <i class="fas fa-car"></i>
                                14 خودرو
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش برندها -->
    <section class="section brands-section">
        <div class="container">
            <h2 class="section-title">برندهای محبوب</h2>
            <p class="section-subtitle">برندهای محبوب خودرو در نمایشگاه آنلاین خودرو</p>

            <div class="brands-slider">
                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/3a9c5588-35cd-445a-97fd-d26cc4fb72d5.webp" alt="هیوندای">
                    <h3>هیوندای</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/df32b2b7-351c-402e-9b33-ff4866668192.webp" alt="پژو">
                    <h3>پژو</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/64d33573-6a83-4a64-95fc-dbdd05f58bee.webp" alt="کیا">
                    <h3>کیا</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/f623244b-04a5-411b-a76b-43c1b64f2abd.webp" alt="تویوتا">
                    <h3>تویوتا</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/146218b8-1e68-4f2d-8afb-2bd506d95537.webp" alt="بنز">
                    <h3>بنز</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/254220ee-e9c7-4905-9d47-87bf3e39b3c8.webp" alt="لکسوس">
                    <h3>لکسوس</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/831048b2-b68f-454f-988c-dbfec5d95db8.webp" alt="ب ام و">
                    <h3>ب ام و</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/0887cf8e-e607-48e8-8253-d3c0b90e4029.webp" alt="چری">
                    <h3>چری</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/84a8a1fb-83ef-42ba-b55b-190d6f66d358.webp" alt="ام وی ام">
                    <h3>ام وی ام</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/e6af11ef-a882-49e1-87d7-0945e1a8c1d3.webp" alt="لیفان">
                    <h3>لیفان</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/8964e20c-ba50-4c99-9ea7-74c6e9885dd4.webp" alt="جک">
                    <h3>جک</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/71abda21-8e33-4f51-951b-7c3132c5b80b.webp" alt="فونیکس">
                    <h3>فونیکس</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/ac85a367-72a2-4d4f-806b-67cb154501d8.webp" alt="هایما">
                    <h3>هایما</h3>
                </div>

                <div class="brand-card">
                    <img src="https://file.switch.ir/api/v1/bee3cd92-3ccb-4b03-b001-a53054ec663f.webp" alt="رنو">
                    <h3>رنو</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش پیشنهادات ویژه -->
    <section class="section special-offers">
        <div class="container">

            <div class="section-header">
                <div>
                    <h2 class="section-title">پیشنهادات ویژه</h2>
                    <p class="section-subtitle">جدیدترین ماشین‌های کارکرده و صفر آماده فروش</p>
                </div>
                <a href="#" class="text-white">مشاهده همه‌ی قیمت‌های ویژه</a>
            </div>

            <div class="special-slider">
                <div class="special-card">
                    <div class="special-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/59e85de3-6818-40f2-921b-e0fc4319f3f4.webp"
                            alt="پژو 207">
                        <span class="special-badge">کارشناسی شده</span>
                    </div>
                    <div class="special-card-content">
                        <h3 class="special-card-title">پژو 207 - 1401</h3>
                        <div class="special-card-info">
                            <span><i class="fas fa-tachometer-alt"></i> 46,359 کیلومتر</span>
                            <span><i class="fas fa-cogs"></i> دنده ای</span>
                        </div>
                        <div class="special-card-footer">
                            <span class="special-price">توافقی</span>
                        </div>
                    </div>
                </div>

                <div class="special-card">
                    <div class="special-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/7bf2f814-5390-459e-9774-0a096fdc5232.webp"
                            alt="هیوندای i20">
                        <span class="special-badge">کارشناسی شده</span>
                    </div>
                    <div class="special-card-content">
                        <h3 class="special-card-title">هیوندای i20 (مونتاژ) - 1397</h3>
                        <div class="special-card-info">
                            <span><i class="fas fa-tachometer-alt"></i> 70,201 کیلومتر</span>
                            <span><i class="fas fa-cogs"></i> اتومات</span>
                        </div>
                        <div class="special-card-footer">
                            <span class="special-price">توافقی</span>
                        </div>
                    </div>
                </div>

                <div class="special-card">
                    <div class="special-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/7b5ee96b-53c0-42f6-9959-b57cc311c4f6.webp"
                            alt="بنز کلاس E">
                        <span class="special-badge">کارشناسی شده</span>
                    </div>
                    <div class="special-card-content">
                        <h3 class="special-card-title">بنز کلاس E - 2011</h3>
                        <div class="special-card-info">
                            <span><i class="fas fa-tachometer-alt"></i> 158,669 کیلومتر</span>
                            <span><i class="fas fa-cogs"></i> اتومات</span>
                        </div>
                        <div class="special-card-footer">
                            <span class="special-price">توافقی</span>
                        </div>
                    </div>
                </div>

                <div class="special-card">
                    <div class="special-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/b47a8df2-3689-4293-81bc-9add56360dde.webp"
                            alt="هیوندای سانتافه">
                        <span class="special-badge">کارشناسی شده</span>
                    </div>
                    <div class="special-card-content">
                        <h3 class="special-card-title">هیوندای سانتافه - 2017</h3>
                        <div class="special-card-info">
                            <span><i class="fas fa-tachometer-alt"></i> 109,163 کیلومتر</span>
                            <span><i class="fas fa-cogs"></i> اتومات</span>
                        </div>
                        <div class="special-card-footer">
                            <span class="special-price">توافقی</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش جدیدترین آگهی‌ها -->
    <section class="section new-listings">
        <div class="container">
            <div class="section-header">
                <div>
                    <h2 class="section-title">جدیدترین آگهی‌های خودرو</h2>
                    <p class="section-subtitle">جدیدترین ماشین‌های کارکرده و صفر آماده فروش</p>
                </div>
                <a href="#" class="text-white">مشاهده همه‌ی آگهی‌ها</a>
            </div>

            <div class="new-slider">
                <div class="car-card">
                    <div class="car-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/4e40e0ff-adfa-4921-ba26-0dc83a866ced.webp"
                            alt="میتسوبیشی اوتلندر">
                        <span class="car-badge">امکان خرید قسطی</span>
                    </div>
                    <div class="car-card-content">
                        <h3 class="car-card-title">میتسوبیشی اوتلندر - 2023</h3>
                        <div class="car-card-info">
                            <span>کارکرده</span>
                            <span>18 کیلومتر</span>
                            <span>اتومات</span>
                            <span>سفید</span>
                        </div>
                        <div class="car-card-features">
                            <i class="fas fa-check-circle"></i>
                            کارشناسی شده
                        </div>
                        <div class="car-card-footer">
                            <div>
                                <span class="car-price">توافقی</span>
                                <div class="car-installment">قسطی: 245,136,400 تومان</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="car-card">
                    <div class="car-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/0b3c618c-2a43-4827-b2bc-7d180b26119e.webp"
                            alt="پژو 207">
                        <span class="car-badge">امکان خرید قسطی</span>
                    </div>
                    <div class="car-card-content">
                        <h3 class="car-card-title">پژو 207 - 1400</h3>
                        <div class="car-card-info">
                            <span>کارکرده</span>
                            <span>30,713 کیلومتر</span>
                            <span>اتومات</span>
                            <span>سفید</span>
                        </div>
                        <div class="car-card-features">
                            <i class="fas fa-check-circle"></i>
                            کارشناسی شده
                        </div>
                        <div class="car-card-footer">
                            <div>
                                <span class="car-price">920,000,000 تومان</span>
                                <div class="car-installment">قسطی: 56,381,400 تومان</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="car-card">
                    <div class="car-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/c0ad23fc-2322-4778-864b-283ba282f7b3.webp"
                            alt="بنز کلاس E">
                    </div>
                    <div class="car-card-content">
                        <h3 class="car-card-title">بنز کلاس E - 2006</h3>
                        <div class="car-card-info">
                            <span>کارکرده</span>
                            <span>209,217 کیلومتر</span>
                            <span>اتومات</span>
                            <span>سفید صدفی</span>
                        </div>
                        <div class="car-card-features">
                            <i class="fas fa-check-circle"></i>
                            کارشناسی شده
                        </div>
                        <div class="car-card-footer">
                            <div>
                                <span class="car-price">2,000,000,000 تومان</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="car-card">
                    <div class="car-card-img">
                        <img src="https://file.switch.ir/api/v1/webp/1200/672/80/2ec5f801-bc12-4096-9677-9f95f4033a71.webp"
                            alt="هایما S7">
                        <span class="car-badge">امکان خرید قسطی</span>
                    </div>
                    <div class="car-card-content">
                        <h3 class="car-card-title">هایما S7 توربو - 1402</h3>
                        <div class="car-card-info">
                            <span>کارکرده</span>
                            <span>60,049 کیلومتر</span>
                            <span>اتومات</span>
                            <span>مشکی</span>
                        </div>
                        <div class="car-card-features">
                            <i class="fas fa-check-circle"></i>
                            کارشناسی شده
                        </div>
                        <div class="car-card-footer">
                            <div>
                                <span class="car-price">1,840,000,000 تومان</span>
                                <div class="car-installment">قسطی: 112,762,800 تومان</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش چرا الوماشین -->
    <section class="section why-switch">
        <div class="container">
            <h2 class="section-title">چرا الوماشین؟</h2>
            <p class="section-subtitle">سریع، شفاف و مطمئن</p>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="feature-title">شفافیت در خرید و فروش</h3>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="feature-title">همراهی مشتری</h3>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="feature-title">مشاوره تخصصی</h3>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3 class="feature-title">سهولت در انجام معامله</h3>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <h3 class="feature-title">خدمات کامل</h3>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">امنیت و آرامش</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش تجربه‌ها -->
    <section class="section experiences">
        <div class="container">
            <h2 class="section-title">تجربه های استفاده از الوماشین</h2>
            <p class="section-subtitle">خریداران و فروشندگان الوماشین از تجربه معامله در الوماشین می گویند.</p>

            <div class="experience-container">
                <div class="experience-video">
                    <video controls
                        poster="https://file.switch.ir/api/v1/webp/1200/672/80/59e85de3-6818-40f2-921b-e0fc4319f3f4.webp">
                        <source src="#" type="video/mp4">
                        مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
                    </video>
                </div>

                <div class="experience-content">
                    <div class="experience-bg"></div>
                    <div class="experience-bg"></div>
                    <div class="experience-quote">
                        <h3>شفافیت در معامله حق شماست و ما به این حق احترام می‌ذاریم.</h3>
                        <p>تجربه خرید و فروش خودرو با الوماشین، فقط یه معامله نیست، یه همراهیِ مطمئنه! اینو مشتری
                            عزیزمون
                            می‌گه که از رفتار صمیمی و محترمانه پرسنل الوماشین، عمل به تمام وعده‌ها، انجام تمام مراحل
                            خرید و
                            فروش و شفافیت کامل معامله خیلی راضی بود.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش درباره ما -->
    <section class="section about-section">
        <div class="container">
            <div class="about-container">
                <div class="about-content">
                    <h2>درباره الوماشین</h2>
                    <p>مشکلات و دردسرهای خرید و فروش خودرو، ایده الوماشین را خلق کرد. به همین سادگی! شکل گیری این ایده
                        تیمی
                        از افراد حرفه ای، متخصص، خوش فکر و با سابقه را در کنار یکدیگر جمع کرد تا با این الوماشین طلایی
                        کاستی ها و پیچیدگی های معاملات خودرو از خرید و فروش گرفته تا معاوضه و خدمات برای همیشه رفع شود و
                        با کاهش دردسرهای خرید و فروش خودرو یک تجربه شیرین به مشتریان هدیه شود.</p>
                    <p>الوماشین مسیر معاملات خودرو را شفاف، ساده، امن و کوتاه می‌کند. حالا ما با این الوماشین کارآمد،
                        برای
                        مسائلی که دغدغه شماست چاره اندیشی کرده ایم. البته شما هم می توانید برای ایجاد تحولات بزرگتر ما
                        را در این مسیر همراهی کنید . با افتخار پذیرای خواسته‌های شما هستیم.</p>

                    <div class="stats-container">
                        <div class="stat-item">
                            <div class="stat-number">4,699</div>
                            <div class="stat-label">خودرو موجود در نمایشگاه الوماشین</div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-number">127,328</div>
                            <div class="stat-label">درخواست های خرید و فروش ثبت شده در الوماشین</div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-number">13,073</div>
                            <div class="stat-label">خودرو کارشناسی شده</div>
                        </div>
                    </div>
                </div>

                <div class="about-video">
                    <video controls
                        poster="https://file.switch.ir/api/v1/webp/1200/672/80/7bf2f814-5390-459e-9774-0a096fdc5232.webp">
                        <source src="#" type="video/mp4">
                        مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
                    </video>
                </div>
            </div>
        </div>
    </section>

@endsection
