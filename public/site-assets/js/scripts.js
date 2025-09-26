// دکمه بازگشت به بالا
const scrollTopBtn = document.querySelector('.scroll-top');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollTopBtn.classList.add('show');
    } else {
        scrollTopBtn.classList.remove('show');
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
    mobileMenuOverlay.classList.add('active');
    mobileMenu.classList.add('active');
    document.body.style.overflow = 'hidden'; // جلوگیری از اسکرول صفحه
});

// بستن منوی موبایل
function closeMobileMenu() {
    mobileMenuOverlay.classList.remove('active');
    mobileMenu.classList.remove('active');
    document.body.style.overflow = ''; // بازگرداندن اسکرول صفحه
}

closeMenuBtn.addEventListener('click', closeMobileMenu);
mobileMenuOverlay.addEventListener('click', closeMobileMenu);

// بستن منو با کلیک روی لینک‌ها
mobileMenuLinks.forEach(link => {
    link.addEventListener('click', closeMobileMenu);
});

// جستجو
const searchForm = document.querySelector('.search-form');

searchForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const searchInput = document.querySelector('.search-input');
    const searchTerm = searchInput.value.trim();

    if (searchTerm) {
        // در اینجا می‌توانید عملیات جستجو را انجام دهید
        console.log('جستجو برای:', searchTerm);
        // مثال: window.location.href = `/search?q=${encodeURIComponent(searchTerm)}`;
    }
});

// اسلایدرها با Slick
$(document).ready(function () {
    // اسلایدر برندها
    $('.brands-slider').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        rtl: true,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
        ]
    });

    // اسلایدر بودجه‌ها
    $('.budget-slider').slick({
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
