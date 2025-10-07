@push('styles')
    <style>
        .hero-section {
            position: relative;
            height: 600px;
            overflow: hidden;
        }

        .slideshow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 440px;
            z-index: 1;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding-bottom: 40px;
        }

        .search-container {
            width: 80%;
            max-width: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            padding: 24px;
            position: relative;
            z-index: 10;
        }

        .shadow-custom-light {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
@endpush

<section class="hero-section py-20 relative overflow-hidden">
    <!-- اسلایدشو تصاویر پس‌زمینه -->
    <div class="slideshow">
        @foreach (getSliders() as $slider)
            <div class="slide active" style="background-image: url('{{ $slider->image }}')">
            </div>
        @endforeach
    </div>

    <!-- لایه گرادیان روی تصاویر -->
    <div class="absolute bg-white z-1"></div>

    <!-- محتوای اصلی -->
    <div class="content">
        <div class="search-container">
            <form class="search-form flex flex-col md:flex-row mb-5 gap-2.5">
                <input type="text"
                    class="search-input flex-1 px-5 py-3.5 border border-gray-300 rounded-lg text-base transition-all focus:outline-none focus:border-blue-500 focus:ring-3 focus:ring-blue-100"
                    placeholder="جستجوی خودرو های موجود نمایشگاه">
                <button type="submit"
                    class="search-btn bg-blue-600 text-white border-none rounded-lg px-6 py-2 md:py-0 cursor-pointer font-semibold transition-colors hover:bg-blue-700">جستجو</button>
            </form>

            <div class="popular-tags flex flex-wrap gap-2.5">
                <a href="#"
                    class="tag flex items-center bg-gray-100 border border-gray-300 rounded-full px-3.5 py-2 text-sm text-gray-700 transition-colors hover:bg-blue-600 hover:text-white hover:border-blue-600">
                    <i class="fas fa-search ml-1.5"></i>
                    کیا سراتو
                </a>
                <a href="#"
                    class="tag flex items-center bg-gray-100 border border-gray-300 rounded-full px-3.5 py-2 text-sm text-gray-700 transition-colors hover:bg-blue-600 hover:text-white hover:border-blue-600">
                    <i class="fas fa-search ml-1.5"></i>
                    سانتافه
                </a>
                <a href="#"
                    class="tag flex items-center bg-gray-100 border border-gray-300 rounded-full px-3.5 py-2 text-sm text-gray-700 transition-colors hover:bg-blue-600 hover:text-white hover:border-blue-600">
                    <i class="fas fa-search ml-1.5"></i>
                    سراتو مونتاژ
                </a>
                <a href="#"
                    class="tag flex items-center bg-gray-100 border border-gray-300 rounded-full px-3.5 py-2 text-sm text-gray-700 transition-colors hover:bg-blue-600 hover:text-white hover:border-blue-600">
                    <i class="fas fa-search ml-1.5"></i>
                    هیوندای توسان
                </a>
                <a href="#"
                    class="tag flex items-center bg-gray-100 border border-gray-300 rounded-full px-3.5 py-2 text-sm text-gray-700 transition-colors hover:bg-blue-600 hover:text-white hover:border-blue-600">
                    <i class="fas fa-search ml-1.5"></i>
                    کیا اسپورتیج
                </a>
            </div>
        </div>
    </div>
</section>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;

            // تابع برای تغییر اسلاید
            function nextSlide() {
                // غیرفعال کردن اسلاید فعلی
                slides[currentSlide].classList.remove('active');

                // رفتن به اسلاید بعدی
                currentSlide = (currentSlide + 1) % slides.length;

                // فعال کردن اسلاید جدید
                slides[currentSlide].classList.add('active');
            }

            // تغییر خودکار اسلایدها هر 5 ثانیه
            setInterval(nextSlide, 5000);
        });
    </script>
@endpush