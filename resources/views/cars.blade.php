<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست ماشین‌ها</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
    <!-- اضافه کردن کتابخانه noUiSlider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nouislider@15.7.1/dist/nouislider.min.css">
    <style>
        :root {
            --primary-color: #1a73e8;
            --secondary-color: #e53935;
            --accent-color: #34a853;
            --light-bg: #f8f9fa;
            --dark-bg: #202124;
            --card-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        * {
            box-sizing: border-box;
        }
        body {
            background-color: #f1f3f4;
            font-family: 'Vazirmatn', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #202124;
            padding-top: 20px;
        }
        .container {
            max-width: 1400px;
        }
        /* هدر */
        .header {
            background: white;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .brand i {
            font-size: 1.8rem;
        }
        .search-container {
            display: flex;
            align-items: center;
            background: #f1f3f4;
            border-radius: 24px;
            padding: 5px 15px;
            width: 40%;
            min-width: 300px;
        }
        .search-input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
            padding: 8px 5px;
            font-size: 0.95rem;
        }
        .search-icon {
            color: #5f6368;
            font-size: 1.1rem;
        }
        /* فیلترها */
        .sidebar {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: var(--card-shadow);
            height: fit-content;
            position: sticky;
            top: 20px;
        }
        .filter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e0e0e0;
        }
        .filter-header h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0;
        }
        .clear-filters {
            background: none;
            border: none;
            color: var(--primary-color);
            padding: 0;
            font-size: 0.9rem;
            cursor: pointer;
        }
        /* آکاردئون فیلترها */
        .accordion-filter {
            margin-bottom: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            overflow: hidden;
        }
        .accordion-header {
            background-color: #f8f9fa;
            padding: 12px 15px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }
        .accordion-header:hover {
            background-color: #e8f0fe;
        }
        .accordion-title {
            font-weight: 500;
            color: #202124;
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 0;
            font-size: 0.95rem;
        }
        .accordion-icon {
            transition: transform 0.3s ease;
            color: #5f6368;
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            background-color: white;
        }
        .accordion-content-inner {
            padding: 15px;
        }
        .accordion-filter.active .accordion-content {
            max-height: 500px;
        }
        .accordion-filter.active .accordion-icon {
            transform: rotate(180deg);
        }
        .filter-options {
            max-height: 200px;
            overflow-y: auto;
            padding-right: 5px;
        }
        .filter-options::-webkit-scrollbar {
            width: 5px;
        }
        .filter-options::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        .filter-options::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        .form-check {
            margin-bottom: 8px;
        }
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .form-check-label {
            cursor: pointer;
            padding: 5px 0;
            display: block;
            width: 100%;
            font-size: 0.9rem;
        }
        /* استایل‌های اسلایدر رنج */
        .range-slider-container {
            margin: 15px 0;
        }
        .range-slider {
            margin: 20px 0;
        }
        .range-values {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .range-value {
            font-size: 0.9rem;
            color: #5f6368;
        }
        /* استایل‌های noUiSlider */
        .noUi-target {
            background: #e0e0e0;
            border-radius: 4px;
            border: none;
            box-shadow: none;
            height: 8px;
        }
        .noUi-connect {
            background: var(--primary-color);
        }
        .noUi-handle {
            border: none;
            border-radius: 50%;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            width: 18px;
            height: 18px;
            top: -5px;
        }
        .noUi-handle:before,
        .noUi-handle:after {
            display: none;
        }
        .noUi-horizontal {
            height: 8px;
        }
        /* کارت خودرو */
        .car-card {
            border: none;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            height: 100%;
            background: white;
        }
        .car-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        .car-image-container {
            position: relative;
            height: 180px;
            overflow: hidden;
        }
        .car-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .car-card:hover .car-image {
            transform: scale(1.05);
        }
        .car-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(26, 115, 232, 0.9);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        .car-card-body {
            padding: 15px;
        }
        .car-title {
            font-weight: 600;
            color: #202124;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }
        .car-subtitle {
            color: #5f6368;
            font-size: 0.9rem;
            margin-bottom: 12px;
        }
        .car-attributes {
            margin-bottom: 15px;
        }
        .attribute-item {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
            font-size: 0.9rem;
        }
        .attribute-name {
            color: #5f6368;
        }
        .attribute-value {
            font-weight: 500;
            color: #202124;
        }
        .car-price {
            color: var(--secondary-color);
            font-weight: 700;
            font-size: 1.3rem;
            margin: 12px 0;
            text-align: left;
        }
        .car-actions {
            display: flex;
            gap: 8px;
            margin-top: 15px;
        }
        .car-actions .btn {
            flex: 1;
            padding: 8px 12px;
            font-size: 0.9rem;
            border-radius: 4px;
        }
        .btn-view {
            background-color: white;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }
        .btn-view:hover {
            background-color: var(--primary-color);
            color: white;
        }
        .btn-compare {
            background-color: white;
            color: #5f6368;
            border: 1px solid #dadce0;
        }
        .btn-compare:hover {
            background-color: #f1f3f4;
        }
        .btn-buy {
            background-color: var(--accent-color);
            color: white;
            border: none;
        }
        .btn-buy:hover {
            background-color: #2e7d32;
        }
        /* نتایج */
        .results-count {
            color: #5f6368;
            margin-bottom: 20px;
            display: block;
            font-size: 0.95rem;
        }
        .no-results {
            text-align: center;
            padding: 40px;
            color: #5f6368;
        }
        .no-results i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #dadce0;
        }
        /* فرم‌ها */
        .form-control {
            border-radius: 4px;
            border: 1px solid #dadce0;
            font-size: 0.9rem;
        }
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(26, 115, 232, 0.25);
        }
        /* ریسپانسیو */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 15px;
            }
            .search-container {
                width: 100%;
            }
            .sidebar {
                position: static;
                margin-bottom: 20px;
            }
            .car-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="brand"><i class="bi bi-car-front-fill"></i> نمایشگاه ماشین‌ها</div>
            <div class="search-container">
                <i class="bi bi-search search-icon"></i>
                <input type="text" class="search-input" placeholder="جستجوی ماشین...">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="sidebar">
                    <div class="filter-header">
                        <h5>فیلترها</h5>
                        <button class="clear-filters" id="clearFilters">پاک کردن همه</button>
                    </div>
                    <form id="filtersForm"></form>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <span class="results-count" id="resultsCount">در حال بارگذاری...</span>
                <div class="row" id="carsContainer"></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/nouislider@15.7.1/dist/nouislider.min.js"></script>
    <script>
        const filtersForm = document.getElementById("filtersForm");
        const carsContainer = document.getElementById("carsContainer");
        const resultsCount = document.getElementById("resultsCount");
        const clearFiltersBtn = document.getElementById("clearFilters");
        const searchInput = document.querySelector('.search-input');

        // بارگذاری فیلترها
        axios.get('/attributes').then(res => {
            window.attributesData = res.data; // ذخیره داده‌ها برای اسلایدرها
            res.data.forEach(attr => {
                let html = `<div class="accordion-filter">
                    <div class="accordion-header">
                        <div class="accordion-title">
                            ${attr.type === 'select' ? '<i class="bi bi-funnel"></i>' : ''}
                            ${attr.type === 'number' ? '<i class="bi bi-input-cursor-text"></i>' : ''}
                            ${attr.type === 'range' ? '<i class="bi bi-sliders"></i>' : ''}
                            ${attr.type === 'boolean' ? '<i class="bi bi-toggle-on"></i>' : ''}
                            ${attr.label}
                        </div>
                        <i class="bi bi-chevron-down accordion-icon"></i>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-content-inner">`;
                if (attr.type === 'select') {
                    html += `<div class="filter-options">`;
                    attr.values.forEach(val => {
                        html += `<div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="${val.slug}" id="${attr.slug}-${val.slug}" name="filter[${attr.slug}][]">
                                    <label class="form-check-label" for="${attr.slug}-${val.slug}">${val.value}</label>
                                </div>`;
                    });
                    html += `</div>`;
                } else if (attr.type === 'number') {
                    html +=
                        `<input type="number" class="form-control mb-3" name="filter[${attr.slug}]" placeholder="مثلا 2020">`;
                } else if (attr.type === 'range') {
                    html += `<div class="range-slider-container">
                                <div class="range-slider" id="${attr.slug}-slider"></div>
                                <div class="range-values">
                                    <span class="range-value range-min">0</span>
                                    <span class="range-value range-max">100</span>
                                </div>
                                <input type="hidden" name="filter[${attr.slug}][]" class="range-min-input">
                                <input type="hidden" name="filter[${attr.slug}][]" class="range-max-input">
                             </div>`;
                } else if (attr.type === 'boolean') {
                    html += `<div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" value="1" name="filter[${attr.slug}]">
                                <label class="form-check-label">${attr.label}</label>
                             </div>`;
                }
                html += `</div></div></div>`;
                filtersForm.innerHTML += html;
            });

            document.querySelectorAll('.accordion-header').forEach(header => {
                header.addEventListener('click', () => header.parentElement.classList.toggle('active'));
            });

            initializeRangeSliders();

            // اضافه کردن رویداد change به همه فیلترها
            filtersForm.querySelectorAll('input, select').forEach(el => {
                if (!el.classList.contains('range-min-input') && !el.classList.contains('range-max-input')) {
                    el.addEventListener('change', function() {
                        // باز کردن آکاردئون والد هنگام تغییر فیلتر
                        const accordion = this.closest('.accordion-filter');
                        if (accordion) accordion.classList.add('active');
                        applyFilters();
                    });
                }
            });

            // اعمال پارامترهای URL پس از بارگذاری فیلترها
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.toString()) {
                // اعمال مقادیر به فیلترها
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

                // اعمال مقادیر به اسلایدرها
                document.querySelectorAll('.range-slider').forEach(slider => {
                    const slug = slider.id.replace('-slider', '');
                    const minParam = urlParams.get(`filter[${slug}][]`);
                    const maxParam = urlParams.getAll(`filter[${slug}][]`)[1]; // چون دو مقدار داریم

                    if (minParam && maxParam) {
                        slider.noUiSlider.set([minParam, maxParam]);
                    }
                });

                // باز کردن آکاردئون‌های مقداردهی شده
                openActiveAccordions();

                // اعمال فیلترها با پارامترهای URL
                applyFilters();
            } else {
                // باز کردن آکاردئون اول در حالت عادی
                if (document.querySelector('.accordion-filter')) {
                    document.querySelector('.accordion-filter').classList.add('active');
                }
                loadCars();
            }
        });

        // تابع برای باز کردن آکاردئون‌های مقداردهی شده
        function openActiveAccordions() {
            // بستن همه آکاردئون‌ها
            document.querySelectorAll('.accordion-filter').forEach(acc => {
                acc.classList.remove('active');
            });

            // باز کردن آکاردئون‌های دارای مقدار
            // 1. چک‌باکس‌ها و رادیوها
            filtersForm.querySelectorAll('input[type="checkbox"]:checked, input[type="radio"]:checked').forEach(input => {
                const accordion = input.closest('.accordion-filter');
                if (accordion) accordion.classList.add('active');
            });

            // 2. اینپوت‌های عددی با مقدار
            filtersForm.querySelectorAll('input[type="number"]').forEach(input => {
                if (input.value.trim() !== '') {
                    const accordion = input.closest('.accordion-filter');
                    if (accordion) accordion.classList.add('active');
                }
            });

            // 3. اسلایدرهای با مقدار متفاوت از پیش‌فرض
            document.querySelectorAll('.range-slider').forEach(slider => {
                const slug = slider.id.replace('-slider', '');
                const attr = window.attributesData.find(a => a.slug === slug);
                const minVal = parseFloat(attr?.min) || 0;
                const maxVal = parseFloat(attr?.max) || 100;

                const currentValues = slider.noUiSlider.get();
                const currentMin = Math.round(currentValues[0]);
                const currentMax = Math.round(currentValues[1]);

                // اگر مقدار فعلی با مقدار اولیه متفاوت بود
                if (currentMin !== minVal || currentMax !== maxVal) {
                    const accordion = slider.closest('.accordion-filter');
                    if (accordion) accordion.classList.add('active');
                }
            });

            // اگر هیچ آکاردئونی باز نشده بود، اولی را باز کن
            if (!document.querySelector('.accordion-filter.active')) {
                const firstAccordion = document.querySelector('.accordion-filter');
                if (firstAccordion) firstAccordion.classList.add('active');
            }
        }

        function initializeRangeSliders() {
            document.querySelectorAll('.range-slider').forEach(slider => {
                const slug = slider.id.replace('-slider', '');
                const attr = window.attributesData.find(a => a.slug === slug);
                const minVal = parseFloat(attr?.min) || 0;
                const maxVal = parseFloat(attr?.max) || 100;
                const minInput = document.querySelector(`input[name="filter[${slug}][]"].range-min-input`);
                const maxInput = document.querySelector(`input[name="filter[${slug}][]"].range-max-input`);
                const minDisplay = slider.parentElement.querySelector('.range-min');
                const maxDisplay = slider.parentElement.querySelector('.range-max');

                noUiSlider.create(slider, {
                    start: [minVal, maxVal],
                    connect: true,
                    range: {
                        min: minVal,
                        max: maxVal
                    },
                    step: 1000000,
                    direction: 'rtl'
                });

                slider.noUiSlider.on('update', (values, handle) => {
                    const value = Math.round(values[handle]);
                    if (handle === 0) {
                        minDisplay.textContent = value;
                        minInput.value = value;
                    } else {
                        maxDisplay.textContent = value;
                        maxInput.value = value;
                    }
                });

                slider.noUiSlider.on('change', function() {
                    // باز کردن آکاردئون والد هنگام تغییر اسلایدر
                    const accordion = slider.closest('.accordion-filter');
                    if (accordion) accordion.classList.add('active');
                    applyFilters();
                });
            });
        }

        function applyFilters() {
            const formData = new FormData(filtersForm);
            const params = new URLSearchParams();

            // افزودن پارامترهای فرم
            formData.forEach((value, key) => {
                // برای اسلایدرها، فقط اگر مقدار داشته باشند اضافه کن
                if (!key.includes('range') || value !== '') {
                    params.append(key, value);
                }
            });

            // افزودن پارامتر جستجو
            if (searchInput.value) params.append('q', searchInput.value);

            // به‌روزرسانی URL
            if (params.toString()) {
                history.replaceState(null, '', '?' + params.toString());
            } else {
                history.replaceState(null, '', window.location.pathname);
            }

            // بارگذاری ماشین‌ها با پارامترهای جدید
            loadCars(params.toString());
        }

        function loadCars(params = "") {
            axios.get(`/testfilter?${params}`).then(res => {
                const cars = res.data.data;
                carsContainer.innerHTML = "";
                if (cars.length > 0) {
                    resultsCount.textContent = `${cars.length} ماشین یافت شد`;
                    cars.forEach(car => {
                        carsContainer.innerHTML += `
                        <div class="col-xl-4 col-lg-6 col-md-12 mb-4">
                            <div class="car-card">
                                <div class="car-image-container">
                                    <img src="${car.image ?? 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'}" class="car-image" alt="${car.title}">
                                    <div class="car-badge">در حال فروش</div>
                                </div>
                                <div class="car-card-body">
                                    <h5 class="car-title">${car.title}</h5>
                                    <p class="car-subtitle">${car.description ?? ''}</p>
                                    <div class="car-attributes">
                                        ${car.attributes.map(attr => `
                                                            <div class="attribute-item">
                                                                <span class="attribute-name">${attr.attribute.label}:</span>
                                                                <span class="attribute-value">${attr.value}</span>
                                                            </div>`).join("")}
                                    </div>
                                    <div class="car-actions">
                                        <button class="btn btn-view">مشاهده</button>
                                        <button class="btn btn-compare">مقایسه</button>
                                        <button class="btn btn-buy">خرید</button>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    });
                } else {
                    resultsCount.textContent = "۰ ماشین یافت شد";
                    carsContainer.innerHTML =
                        `<div class="col-12"><div class="no-results"><i class="bi bi-search"></i><h4>ماشینی یافت نشد</h4><p>لطفاً فیلترها را تغییر دهید.</p></div></div>`;
                }
            });
        }

        clearFiltersBtn.addEventListener('click', () => {
            filtersForm.querySelectorAll('input').forEach(input => {
                if (input.type === 'checkbox' || input.type === 'radio') {
                    input.checked = false;
                } else if (!input.classList.contains('range-min-input') && !input.classList.contains('range-max-input')) {
                    input.value = '';
                }
            });

            document.querySelectorAll('.range-slider').forEach(slider => {
                const slug = slider.id.replace('-slider', '');
                const attr = window.attributesData.find(a => a.slug === slug);
                const minVal = attr?.min ?? 0;
                const maxVal = attr?.max ?? 100;
                slider.noUiSlider.set([minVal, maxVal]);
            });

            searchInput.value = '';
            history.replaceState(null, '', window.location.pathname);

            // بستن همه آکاردئون‌ها پس از پاک کردن فیلترها
            document.querySelectorAll('.accordion-filter').forEach(acc => {
                acc.classList.remove('active');
            });

            // باز کردن آکاردئون اول پس از پاک کردن
            if (document.querySelector('.accordion-filter')) {
                document.querySelector('.accordion-filter').classList.add('active');
            }

            loadCars();
        });

        searchInput.addEventListener('input', applyFilters);
    </script>
</body>
</html>