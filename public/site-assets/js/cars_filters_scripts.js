// عناصر DOM
const filtersForm = document.getElementById("filtersForm");
const carsContainer = document.getElementById("carsContainer");
const resultsCount = document.getElementById("resultsCount");
const clearFiltersBtn = document.getElementById("clearFilters");
const searchInput = document.querySelector('.search-input');

// ذخیره داده‌های ویژگی‌ها برای استفاده در توابع دیگر
let attributesData = [];

// بارگذاری فیلترها از سرور
function loadFilters() {
    // درخواست همزمان برای attributes و brands
    Promise.all([
        axios.get('/attributes'),
        axios.get('/get-all-brands') // اضافه کردن درخواست برای برندها
    ])
    .then(([attributesRes, brandsRes]) => {
        attributesData = attributesRes.data;
        renderFilters(attributesRes.data, brandsRes.data);
        setupEventListeners();
        applyUrlParams();
    })
    .catch(error => {
        console.error('خطا در بارگذاری فیلترها:', error);
        resultsCount.textContent = "خطا در بارگذاری فیلترها";
    });
}

// رندر کردن فیلترها در صفحه
function renderFilters(attributes, brands = []) {
    filtersForm.innerHTML = '';

    // اضافه کردن فیلتر برند در ابتدا
    if (brands.length > 0) {
        const brandFilterHtml = createBrandFilterHtml(brands);
        filtersForm.innerHTML += brandFilterHtml;
    }

    // رندر فیلترهای عادی
    attributes.forEach(attr => {
        const filterHtml = createFilterHtml(attr);
        filtersForm.innerHTML += filterHtml;
    });

    // راه‌اندازی اسلایدرها پس از رندر کردن فیلترها
    setTimeout(initializeRangeSliders, 100);
}

// ایجاد HTML برای هر فیلتر
function createBrandFilterHtml(brands) {
    let html = `
        <div class="accordion-filter border-b border-gray-200 py-4">
            <div class="accordion-header flex justify-between items-center cursor-pointer">
                <div class="accordion-title flex items-center font-medium text-gray-800">
                    <i class="fas fa-car text-primary ml-2"></i>
                    برند خودرو
                </div>
                <i class="fas fa-chevron-down accordion-icon text-gray-500 transition-transform"></i>
            </div>
            <div class="accordion-content mt-3">
                <div class="accordion-content-inner">
                    <div class="filter-options space-y-2 max-h-60 overflow-y-auto">
    `;

    brands.forEach(brand => {
        html += `
            <div class="flex items-center">
                <input class="form-checkbox h-4 w-4 text-primary rounded focus:ring-primary border-gray-300"
                       type="checkbox"
                       value="${brand.slug}"
                       id="brand-${brand.slug}"
                       name="filter[brand][]">
                <label class="mr-2 text-sm text-gray-700 flex items-center" for="brand-${brand.slug}">
                    ${brand.icon ? `<i class="${brand.icon} ml-2"></i>` : ''}
                    ${brand.title}
                </label>
            </div>
        `;
    });

    html += `
                    </div>
                </div>
            </div>
        </div>
    `;

    return html;
}

// دریافت آیکن مناسب برای هر نوع فیلتر
function getFilterIcon(type) {
    const icons = {
        'select': '<i class="fas fa-filter text-primary ml-2"></i>',
        'number': '<i class="fas fa-keyboard text-primary ml-2"></i>',
        'range': '<i class="fas fa-sliders-h text-primary ml-2"></i>',
        'boolean': '<i class="fas fa-toggle-on text-primary ml-2"></i>'
    };
    return icons[type] || '';
}

// ایجاد فیلتر انتخابی (چک‌باکس)
function createSelectFilter(attr) {
    let html = '<div class="filter-options space-y-2 max-h-60 overflow-y-auto">';

    attr.values.forEach(val => {
        html += `
            <div class="flex items-center">
                <input class="form-checkbox h-4 w-4 text-primary rounded focus:ring-primary border-gray-300"
                       type="checkbox"
                       value="${val.slug}"
                       id="${attr.slug}-${val.slug}"
                       name="filter[${attr.slug}][]">
                <label class="mr-2 text-sm text-gray-700" for="${attr.slug}-${val.slug}">${val.value}</label>
            </div>
        `;
    });

    html += '</div>';
    return html;
}

// ایجاد فیلتر عددی
function createNumberFilter(attr) {
    return `
        <input type="number"
               class="w-full bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
               name="filter[${attr.slug}]"
               placeholder="مثلا 2020">
    `;
}

// ایجاد فیلتر محدوده‌ای (اسلایدر)
function createRangeFilter(attr) {
    return `
        <div class="range-slider-wrapper">
            <div class="range-slider" id="${attr.slug}-slider"></div>
            <div class="range-values">
                <div class="range-value min" id="${attr.slug}-min-value">0</div>
                <div class="range-value max" id="${attr.slug}-max-value">100</div>
            </div>
            <div class="range-labels">
                <div class="range-label min">حداقل</div>
                <div class="range-label max">حداکثر</div>
            </div>
            <input type="hidden" name="filter[${attr.slug}][]" class="range-min-input">
            <input type="hidden" name="filter[${attr.slug}][]" class="range-max-input">
        </div>
    `;
}

// ایجاد فیلتر بولین (اسپاسان)
function createFilterHtml(attr) {
    let html = `
        <div class="accordion-filter border-b border-gray-200 py-4">
            <div class="accordion-header flex justify-between items-center cursor-pointer">
                <div class="accordion-title flex items-center font-medium text-gray-800">
                    ${getFilterIcon(attr.type)}
                    ${attr.label}
                </div>
                <i class="fas fa-chevron-down accordion-icon text-gray-500 transition-transform"></i>
            </div>
            <div class="accordion-content mt-3">
                <div class="accordion-content-inner">
    `;

    // افزودن محتوای خاص بر اساس نوع فیلتر
    switch (attr.type) {
        case 'select':
            html += createSelectFilter(attr);
            break;
        case 'number':
            html += createNumberFilter(attr);
            break;
        case 'range':
            html += createRangeFilter(attr);
            break;
        case 'boolean':
            html += createBooleanFilter(attr);
            break;
    }

    html += `
                </div>
            </div>
        </div>
    `;

    return html;
}

// ایجاد HTML برای فیلتر برند
function createBooleanFilter(attr) {
    return `
        <div class="switch-container">
            <label class="mr-2 text-sm text-gray-700">${attr.label}</label>
            <label class="switch">
                <input type="checkbox" value="1" name="filter[${attr.slug}]">
                <span class="slider"></span>
            </label>
        </div>
    `;
}

// راه‌اندازی اسلایدرهای محدوده‌ای
function initializeRangeSliders() {
    document.querySelectorAll('.range-slider').forEach(slider => {
        const slug = slider.id.replace('-slider', '');
        const attr = attributesData.find(a => a.slug === slug);
        if (!attr) return;

        const minVal = parseFloat(attr.min) || 0;
        const maxVal = parseFloat(attr.max) || 100;
        const minInput = document.querySelector(`input[name="filter[${slug}][]"].range-min-input`);
        const maxInput = document.querySelector(`input[name="filter[${slug}][]"].range-max-input`);
        const minDisplay = document.getElementById(`${slug}-min-value`);
        const maxDisplay = document.getElementById(`${slug}-max-value`);

        // تنظیم مقادیر اولیه
        minDisplay.textContent = formatNumber(minVal);
        maxDisplay.textContent = formatNumber(maxVal);

        noUiSlider.create(slider, {
            start: [minVal, maxVal],
            connect: true,
            range: {
                min: minVal,
                max: maxVal
            },
            step: attr.step || 1000000,
            direction: 'rtl',
            tooltips: false
        });

        slider.noUiSlider.on('update', (values, handle) => {
            const value = Math.round(parseFloat(values[handle]));

            if (handle === 0) {
                minDisplay.textContent = formatNumber(value);
                if (minInput) minInput.value = value;
            } else {
                maxDisplay.textContent = formatNumber(value);
                if (maxInput) maxInput.value = value;
            }
        });

        slider.noUiSlider.on('change', function () {
            const accordion = slider.closest('.accordion-filter');
            if (accordion) accordion.classList.add('active');

            // فقط اگر مقدار تغییر کرده باشد فیلتر اعمال شود
            const currentValues = getCurrentRangeValues(slug);
            if (currentValues.min !== minVal || currentValues.max !== maxVal) {
                applyFilters();
            }
        });

        // افزودن افکت انیمیشن هنگام تغییر
        slider.noUiSlider.on('start', function () {
            slider.querySelectorAll('.noUi-handle').forEach(handle => {
                handle.style.transform = 'scale(1.2)';
            });
        });

        slider.noUiSlider.on('end', function () {
            slider.querySelectorAll('.noUi-handle').forEach(handle => {
                handle.style.transform = 'scale(1)';
            });
        });
    });
}

// تابع برای فرمت‌دهی اعداد
function formatNumber(num) {
    return num.toLocaleString('fa-IR');
}

// تنظیم رویدادها برای عناصر صفحه
function setupEventListeners() {
    // رویداد کلیک برای هدرهای آکاردئون
    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
            header.parentElement.classList.toggle('active');
        });
    });

    // رویداد تغییر برای فیلترها
    filtersForm.querySelectorAll('input, select').forEach(el => {
        if (!el.classList.contains('range-min-input') && !el.classList.contains('range-max-input')) {
            el.addEventListener('change', function () {
                const accordion = this.closest('.accordion-filter');
                if (accordion) accordion.classList.add('active');
                applyFilters();
            });
        }
    });

    // رویداد کلیک برای دکمه پاک کردن فیلترها
    clearFiltersBtn.addEventListener('click', clearAllFilters);

    // رویداد جستجو
    searchInput.addEventListener('input', debounce(applyFilters, 500));
}

// تابع برای به‌کارگیری پارامترهای URL
function applyUrlParams() {
    const urlParams = new URLSearchParams(window.location.search);

    if (urlParams.toString()) {
        // اعمال مقادیر فقط به فیلترهای موجود در URL
        for (let [key, value] of urlParams.entries()) {
            const inputs = filtersForm.querySelectorAll(`[name="${key}"]`);
            if (inputs.length) {
                inputs.forEach(input => {
                    if ((input.type === "checkbox" || input.type === "radio") && input.value === value) {
                        input.checked = true;
                    } else if (input.type !== "checkbox" && input.type !== "radio") {
                        input.value = value;
                    }
                });
            }
        }

        // اعمال مقادیر به اسلایدرها فقط اگر در URL موجود باشند
        document.querySelectorAll('.range-slider').forEach(slider => {
            const slug = slider.id.replace('-slider', '');
            const minParam = urlParams.get(`filter[${slug}][]`);
            const maxParam = urlParams.getAll(`filter[${slug}][]`)[1];

            if (minParam && maxParam && slider.noUiSlider) {
                slider.noUiSlider.set([minParam, maxParam]);
            }
        });

        // باز کردن آکاردئون‌های فعال
        openActiveAccordions();

        // اعمال فیلترها با پارامترهای URL
        applyFilters();
    } else {
        // باز کردن آکاردئون اول در حالت عادی
        const firstAccordion = document.querySelector('.accordion-filter');
        if (firstAccordion) firstAccordion.classList.add('active');
        loadCars();
    }
}

// باز کردن آکاردئون‌های دارای مقدار
function openActiveAccordions() {
    // بستن همه آکاردئون‌ها
    document.querySelectorAll('.accordion-filter').forEach(acc => {
        acc.classList.remove('active');
    });

    let hasActiveAccordion = false;

    // باز کردن آکاردئون‌های دارای مقدار
    // 1. چک‌باکس‌ها و رادیوها
    filtersForm.querySelectorAll('input[type="checkbox"]:checked, input[type="radio"]:checked').forEach(input => {
        const accordion = input.closest('.accordion-filter');
        if (accordion) {
            accordion.classList.add('active');
            hasActiveAccordion = true;
        }
    });

    // 2. اینپوت‌های عددی با مقدار
    filtersForm.querySelectorAll('input[type="number"]').forEach(input => {
        if (input.value.trim() !== '') {
            const accordion = input.closest('.accordion-filter');
            if (accordion) {
                accordion.classList.add('active');
                hasActiveAccordion = true;
            }
        }
    });

    // 3. اسلایدرهای با مقدار متفاوت از پیش‌فرض
    document.querySelectorAll('.range-slider').forEach(slider => {
        const slug = slider.id.replace('-slider', '');
        const attr = attributesData.find(a => a.slug === slug);
        if (!attr) return;

        const minVal = parseFloat(attr.min) || 0;
        const maxVal = parseFloat(attr.max) || 100;

        if (slider.noUiSlider) {
            const currentValues = slider.noUiSlider.get();
            const currentMin = Math.round(currentValues[0]);
            const currentMax = Math.round(currentValues[1]);

            // اگر مقدار فعلی با مقدار اولیه متفاوت بود
            if (currentMin !== minVal || currentMax !== maxVal) {
                const accordion = slider.closest('.accordion-filter');
                if (accordion) {
                    accordion.classList.add('active');
                    hasActiveAccordion = true;
                }
            }
        }
    });

    // اگر هیچ آکاردئونی باز نشده بود، اولی را باز کن
    if (!hasActiveAccordion) {
        const firstAccordion = document.querySelector('.accordion-filter');
        if (firstAccordion) firstAccordion.classList.add('active');
    }
}

// اعمال فیلترها و بارگذاری ماشین‌ها
function applyFilters() {
    const formData = new FormData(filtersForm);
    const params = new URLSearchParams();

    // افزودن پارامترهای فرم فقط اگر مقدار داشته باشند
    formData.forEach((value, key) => {
        // حذف مقادیر خالی و پیش‌فرض
        if (value !== '' && value !== null && value !== undefined) {
            // برای فیلترهای range، فقط اگر مقدار متفاوت از پیش‌فرض باشد اضافه کن
            if (key.includes('filter[') && key.includes('][]')) {
                const slug = key.match(/filter\[(.*?)\]/)[1];
                const attr = attributesData.find(a => a.slug === slug);

                if (attr && attr.type === 'range') {
                    // برای range فیلترها، بررسی کن که آیا مقدار تغییر کرده یا نه
                    const currentValues = getCurrentRangeValues(slug);
                    const defaultMin = parseFloat(attr.min) || 0;
                    const defaultMax = parseFloat(attr.max) || 100;

                    // فقط اگر مقدار با پیش‌فرض متفاوت باشد اضافه کن
                    if (currentValues.min !== defaultMin || currentValues.max !== defaultMax) {
                        params.append(key, value);
                    }
                } else {
                    params.append(key, value);
                }
            } else {
                params.append(key, value);
            }
        }
    });

    // افزودن پارامتر جستجو فقط اگر مقدار داشته باشد
    if (searchInput.value.trim()) {
        params.append('q', searchInput.value.trim());
    }

    // به‌روزرسانی URL فقط اگر پارامتری وجود داشته باشد
    if (params.toString()) {
        history.replaceState(null, '', '?' + params.toString());
    } else {
        history.replaceState(null, '', window.location.pathname);
    }

    // بارگذاری ماشین‌ها با پارامترهای جدید
    loadCars(params.toString());
}

// تابع کمکی برای دریافت مقادیر فعلی range
function getCurrentRangeValues(slug) {
    const slider = document.getElementById(`${slug}-slider`);
    if (slider && slider.noUiSlider) {
        const values = slider.noUiSlider.get();
        return {
            min: Math.round(parseFloat(values[0])),
            max: Math.round(parseFloat(values[1]))
        };
    }

    // اگر اسلایدر پیدا نشد، از inputهای hidden استفاده کن
    const minInput = document.querySelector(`input[name="filter[${slug}][]"].range-min-input`);
    const maxInput = document.querySelector(`input[name="filter[${slug}][]"].range-max-input`);

    return {
        min: minInput ? parseFloat(minInput.value) || 0 : 0,
        max: maxInput ? parseFloat(maxInput.value) || 100 : 100
    };
}

// بارگذاری لیست ماشین‌ها
function loadCars(params = "") {
    // نمایش وضعیت بارگذاری
    resultsCount.textContent = "در حال بارگذاری...";
    carsContainer.innerHTML = `
        <div class="col-span-full flex justify-center items-center py-12">
            <div class="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-primary"></div>
        </div>
    `;

    axios.get(`/filter?${params}`)
        .then(res => {
            const cars = res.data.data;
            renderCars(cars);
        })
        .catch(error => {
            console.error('خطا در بارگذاری ماشین‌ها:', error);
            resultsCount.textContent = "خطا در بارگذاری داده‌ها";
            carsContainer.innerHTML = `
                <div class="col-span-full">
                    <div class="bg-white rounded-lg shadow-md p-8 text-center">
                        <i class="fas fa-exclamation-triangle text-5xl text-yellow-500 mb-4"></i>
                        <h4 class="text-xl font-bold text-gray-700 mb-2">خطا در بارگذاری داده‌ها</h4>
                        <p class="text-gray-500">لطفاً صفحه را رفرش کنید یا بعداً دوباره تلاش کنید.</p>
                    </div>
                </div>
            `;
        });
}

// رندر کردن ماشین‌ها در صفحه
function renderCars(cars) {
    carsContainer.innerHTML = "";

    if (cars.length > 0) {
        resultsCount.textContent = `${cars.length} ماشین یافت شد`;

        cars.forEach(car => {
            const carCard = createCarCard(car);
            carsContainer.innerHTML += carCard;
        });

        // افزودن رویدادها به دکمه‌های کارت ماشین
        setupCarCardEvents();
    } else {
        resultsCount.textContent = "۰ ماشین یافت شد";
        carsContainer.innerHTML = `
            <div class="col-span-full">
                <div class="bg-white rounded-lg shadow-md p-8 text-center">
                    <i class="fas fa-search text-5xl text-gray-300 mb-4"></i>
                    <h4 class="text-xl font-bold text-gray-700 mb-2">ماشینی یافت نشد</h4>
                    <p class="text-gray-500">لطفاً فیلترها را تغییر دهید.</p>
                </div>
            </div>
        `;
    }
}

// ایجاد کارت برای هر ماشین
function createCarCard(car) {

    return `
    <a href="${car.url}">
        <div class="car-card bg-white rounded-lg overflow-hidden" data-car-id="${car.id}">
            <div class="car-image-container relative">
                <img src="${car.image}"
                     class="car-image w-full h-25 object-cover"
                     alt="${car.title}"
                     onerror="this.src='${car.image}'">
                <div class="car-badge absolute top-3 right-3 bg-black text-white text-xs font-bold px-2 py-1 rounded-lg">امکان خرید قسطی</div>
            </div>
            <div class="car-card-body px-3 py-2">
                <h5 class="car-title text-lg font-bold text-gray-900 mb-3">${car.title}</h5>
                <div class="car-attributes space-y-2 mb-2">
                        <div class="attribute-item flex justify-between text-sm">
                            <span class="attribute-name text-gray-500">${car.kilometer} کیلومتر - ${car.gearbox}</span>
                        </div>
                </div>
                <div class="inline-flex items-center bg-green-100 text-green-800 px-3 py-1 rounded-lg text-xs font-semibold mb-3"
                    style="color: ${car.status.statusColor}; background-color: ${car.status.bgColor}">
                    <i class="${car.status.statusIcon} ml-1"></i>
                    ${car.status.statusLabel}
                </div>
               <div class="car-card-footer">
               <span>قیمت</span>
               <span class="car-card-price"><small class="card-card-amount">${car.price}</small> <small>تومان</small></span>
               </div>
            </div>
        </div>
    </a>
    `;
}

// تنظیم رویدادها برای دکمه‌های کارت ماشین
function setupCarCardEvents() {
    // دکمه مشاهده
    document.querySelectorAll('.btn-view').forEach(btn => {
        btn.addEventListener('click', function () {
            const carCard = this.closest('.car-card');
            const carId = carCard.dataset.carId;
            // هدایت به صفحه جزئیات ماشین
            window.location.href = `/cars/${carId}`;
        });
    });

    // دکمه مقایسه
    document.querySelectorAll('.btn-compare').forEach(btn => {
        btn.addEventListener('click', function () {
            const carCard = this.closest('.car-card');
            const carId = carCard.dataset.carId;
            // افزودن به لیست مقایسه
            addToCompare(carId);
        });
    });

    // دکمه خرید
    document.querySelectorAll('.btn-buy').forEach(btn => {
        btn.addEventListener('click', function () {
            const carCard = this.closest('.car-card');
            const carId = carCard.dataset.carId;
            // هدایت به صفحه خرید
            window.location.href = `/cars/${carId}/buy`;
        });
    });
}

// پاک کردن همه فیلترها
function clearAllFilters() {
    // غیرفعال کردن event listener موقتاً برای جلوگیری از درخواست‌های متعدد
    filtersForm.querySelectorAll('input').forEach(input => {
        if (input.type === 'checkbox' || input.type === 'radio') {
            input.checked = false;
        } else if (!input.classList.contains('range-min-input') && !input.classList.contains('range-max-input')) {
            input.value = '';
        }
    });

    // بازنشانی اسلایدرها به مقادیر پیش‌فرض
    document.querySelectorAll('.range-slider').forEach(slider => {
        if (!slider.noUiSlider) return;

        const slug = slider.id.replace('-slider', '');
        const attr = attributesData.find(a => a.slug === slug);
        if (!attr) return;

        const minVal = parseFloat(attr.min) || 0;
        const maxVal = parseFloat(attr.max) || 100;
        slider.noUiSlider.set([minVal, maxVal]);

        // به‌روزرسانی مقادیر نمایشی
        const minDisplay = document.getElementById(`${slug}-min-value`);
        const maxDisplay = document.getElementById(`${slug}-max-value`);
        if (minDisplay) minDisplay.textContent = formatNumber(minVal);
        if (maxDisplay) maxDisplay.textContent = formatNumber(maxVal);
    });

    // پاک کردن جستجو
    searchInput.value = '';

    // به‌روزرسانی URL بدون پارامتر
    history.replaceState(null, '', window.location.pathname);

    // بستن همه آکاردئون‌ها پس از پاک کردن فیلترها
    document.querySelectorAll('.accordion-filter').forEach(acc => {
        acc.classList.remove('active');
    });

    // باز کردن آکاردئون اول پس از پاک کردن
    const firstAccordion = document.querySelector('.accordion-filter');
    if (firstAccordion) firstAccordion.classList.add('active');

    // بارگذاری مجدد ماشین‌ها بدون فیلتر
    loadCars();
}

// افزودن ماشین به لیست مقایسه
function addToCompare(carId) {
    // دریافت لیست مقایسه فعلی از localStorage
    let compareList = JSON.parse(localStorage.getItem('compareList') || '[]');

    // بررسی اینکه آیا ماشین قبلاً اضافه شده است
    if (compareList.includes(carId)) {
        showNotification('این ماشین قبلاً به لیست مقایسه اضافه شده است', 'warning');
        return;
    }

    // اضافه کردن ماشین به لیست
    compareList.push(carId);

    // ذخیره لیست به‌روز شده
    localStorage.setItem('compareList', JSON.stringify(compareList));

    // نمایش اعلان موفقیت
    showNotification('ماشین با موفقیت به لیست مقایسه اضافه شد', 'success');
}

// نمایش اعلان به کاربر
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg text-white z-50 transform transition-transform duration-300 translate-x-full`;

    // تنظیم رنگ بر اساس نوع اعلان
    switch (type) {
        case 'success':
            notification.classList.add('bg-green-500');
            break;
        case 'warning':
            notification.classList.add('bg-yellow-500');
            break;
        case 'error':
            notification.classList.add('bg-red-500');
            break;
        default:
            notification.classList.add('bg-blue-500');
    }

    notification.textContent = message;
    document.body.appendChild(notification);

    // نمایش اعلان با انیمیشن
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);

    // مخفی کردن اعلان پس از چند ثانیه
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}

// تابع برای کاهش تعداد درخواست‌ها (debounce)
function debounce(func, wait) {
    let timeout;
    return function (...args) {
        const context = this;
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(context, args), wait);
    };
}

// شروع بارگذاری صفحه
document.addEventListener('DOMContentLoaded', loadFilters);
