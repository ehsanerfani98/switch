<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بنز کلاس E 2011 - کارشناسی شده</title>

    <!-- Bootstrap RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Vazir Font -->
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet"
        type="text/css" />

    <style>
        :root {
            --primary-color: #0065A5;
            --secondary-color: #09883A;
            --text-dark: #0D0D0D;
            --text-medium: #262626;
            --text-light: #595959;
            --border-color: #EBF0F4;
            --bg-light: #F8F9FA;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            --radius: 12px;
        }

        * {
            font-family: 'Vazir', sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: var(--text-medium);
        }

        .main-container {
            max-width: 1540px;
            margin: 0 auto;
            padding: 20px 15px;
        }

        .breadcrumb-custom {
            background: transparent;
            padding: 15px 0;
            margin-bottom: 20px;
        }

        .breadcrumb-custom a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        .breadcrumb-custom .separator {
            margin: 0 8px;
            color: #999;
        }

        .car-info-card {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 25px;
            margin-bottom: 25px;
            border: 1px solid var(--border-color);
        }

        .car-title {
            font-size: 24px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .share-btn {
            background: none;
            border: none;
            color: var(--primary-color);
            font-size: 20px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .share-btn:hover {
            transform: scale(1.1);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(9, 136, 58, 0.12);
            color: var(--secondary-color);
            padding: 6px 12px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .status-badge i {
            margin-left: 8px;
        }

        .car-specs {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 20px 0;
        }

        .spec-item {
            display: flex;
            align-items: center;
            font-size: 15px;
        }

        .spec-item i {
            color: var(--primary-color);
            margin-left: 8px;
            width: 20px;
            text-align: center;
        }

        .spec-item .dot {
            width: 4px;
            height: 4px;
            background: #999;
            border-radius: 50%;
            margin: 0 8px;
        }

        .price-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
            padding: 15px 0;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }

        .price-label {
            font-weight: 600;
            color: var(--text-medium);
        }

        .price-value {
            font-size: 22px;
            font-weight: 700;
            color: var(--secondary-color);
        }

        .notice-box {
            background: rgba(9, 136, 58, 0.08);
            border: 1px solid rgba(9, 136, 58, 0.3);
            border-radius: var(--radius);
            padding: 15px;
            margin: 20px 0;
            text-align: justify;
            font-size: 14px;
            color: var(--secondary-color);
        }

        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 25px;
        }

        .btn-custom {
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 700;
            font-size: 15px;
            border: 2px solid var(--primary-color);
            transition: all 0.3s;
        }

        .btn-primary-custom {
            background: var(--primary-color);
            color: white;
        }

        .btn-primary-custom:hover {
            background: #005090;
            color: white;
        }

        .btn-outline-custom {
            background: white;
            color: var(--primary-color);
        }

        .btn-outline-custom:hover {
            background: var(--primary-color);
            color: white;
        }

        .gallery-container {
            position: relative;
            margin-bottom: 25px;
        }

        .main-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: var(--radius);
            background: var(--border-color);
        }

        .gallery-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 15px;
            z-index: 10;
        }

        .gallery-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            transition: all 0.2s;
        }

        .gallery-btn:hover {
            background: var(--primary-color);
            color: white;
        }

        .gallery-thumbnails {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding: 15px 0;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) #f1f1f1;
        }

        .gallery-thumbnails::-webkit-scrollbar {
            height: 6px;
        }

        .gallery-thumbnails::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .gallery-thumbnails::-webkit-scrollbar-thumb {
            background-color: var(--primary-color);
            border-radius: 10px;
        }

        .thumbnail {
            min-width: 120px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
            border: 3px solid transparent;
            cursor: pointer;
            transition: all 0.2s;
        }

        .thumbnail.active {
            border-color: var(--primary-color);
        }

        .thumbnail:hover {
            opacity: 0.9;
        }

        .gallery-badge {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: rgba(0, 101, 165, 0.9);
            color: white;
            padding: 8px 15px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .gallery-badge i {
            margin-left: 8px;
        }

        .tabs-container {
            border-bottom: 2px solid var(--border-color);
            margin-bottom: 25px;
        }

        .tab-custom {
            background: none;
            border: none;
            padding: 12px 20px;
            font-weight: 700;
            font-size: 16px;
            color: var(--text-light);
            cursor: pointer;
            position: relative;
            transition: color 0.3s;
        }

        .tab-custom.active {
            color: var(--primary-color);
        }

        .tab-custom.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary-color);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .expert-section {
            margin-bottom: 25px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--text-dark);
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-left: 10px;
            color: var(--primary-color);
        }

        .download-report {
            display: flex;
            align-items: center;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        .download-report i {
            margin-left: 5px;
        }

        .legend-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 25px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            font-size: 13px;
            font-weight: 600;
        }

        .legend-icon {
            width: 20px;
            height: 20px;
            margin-left: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .legend-icon img {
            max-width: 100%;
            max-height: 100%;
        }

        .expert-card {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .expert-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .expert-card-header:hover {
            background: var(--bg-light);
        }

        .expert-card-title {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 16px;
            color: var(--text-dark);
        }

        .expert-card-title i {
            margin-left: 10px;
            color: var(--primary-color);
        }

        .expert-card-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 13px;
            display: flex;
            align-items: center;
        }

        .status-excellent {
            background: rgba(9, 136, 58, 0.12);
            color: var(--secondary-color);
        }

        .status-good {
            background: rgba(208, 147, 27, 0.12);
            color: #da931b;
        }

        .expert-card-toggle {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.04);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            transition: transform 0.3s;
        }

        .expert-card-toggle i {
            color: var(--text-medium);
            transition: transform 0.3s;
        }

        .expert-card.expanded .expert-card-toggle i {
            transform: rotate(180deg);
        }

        .expert-card-body {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
        }

        .expert-card.expanded .expert-card-body {
            max-height: 2000px;
            padding: 0 20px 20px;
        }

        .expert-items {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .expert-item {
            width: calc(33.333% - 8px);
            display: flex;
            align-items: center;
            padding: 8px 0;
        }

        .expert-item-icon {
            width: 24px;
            height: 24px;
            margin-left: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .expert-item-icon img {
            max-width: 100%;
            max-height: 100%;
        }

        .expert-item-name {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-medium);
        }

        .tire-percentage {
            width: 25px;
            height: 25px;
            background: #EBEBEB;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
            margin-left: 8px;
        }

        .mobile-legend {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .mobile-legend-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            cursor: pointer;
        }

        .mobile-legend-title {
            font-weight: 600;
            color: var(--text-light);
        }

        .mobile-legend-toggle {
            transition: transform 0.3s;
        }

        .mobile-legend.expanded .mobile-legend-toggle {
            transform: rotate(180deg);
        }

        .mobile-legend-body {
            padding: 0 15px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
        }

        .mobile-legend.expanded .mobile-legend-body {
            max-height: 500px;
            padding: 0 15px 15px;
        }

        .mobile-legend-items {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding-top: 10px;
            border-top: 1px solid var(--border-color);
        }

        @media (max-width: 768px) {
            .main-image {
                height: 300px;
            }

            .car-title {
                font-size: 20px;
            }

            .expert-item {
                width: 50%;
            }

            .action-buttons .btn-custom {
                flex: 1;
                min-width: 140px;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <!-- Breadcrumb -->
        <nav class="breadcrumb-custom">
            <a href="/expo">خرید خودرو</a>
            <span class="separator"><i class="fas fa-chevron-left"></i></span>
            <a href="/expo/benz">بنز</a>
            <span class="separator"><i class="fas fa-chevron-left"></i></span>
            <a href="/expo/benz/eclass">بنز کلاس E</a>
            <span class="separator"><i class="fas fa-chevron-left"></i></span>
            <a href="/expo/benz/eclass">بنز کلاس E - 2011</a>
        </nav>

        <div class="row">
            <!-- Left Column - Car Info -->
            <div class="col-lg-5 order-lg-1 order-2">
                <div class="car-info-card">
                    <div class="car-title">
                        <h1>بنز کلاس E 2011</h1>
                        <button class="share-btn">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>

                    <div class="status-badge">
                        <i class="fas fa-check-circle"></i>
                        کارشناسی شده
                    </div>

                    <div class="car-specs">
                        <div class="spec-item">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.99984 11.3333C8.33679 11.3333 7.70091 11.0699 7.23207 10.6011C6.76323 10.1323 6.49984 9.49638 6.49984 8.83333C6.49984 7.9 7.00817 7.08333 7.74984 6.65833L15.8415 1.975L11.2332 9.95833C10.8165 10.775 9.97484 11.3333 8.99984 11.3333ZM8.99984 0.5C10.5082 0.5 11.9165 0.916667 13.1415 1.6L11.3915 2.60833C10.6665 2.325 9.83317 2.16667 8.99984 2.16667C7.23173 2.16667 5.53603 2.86905 4.28579 4.11929C3.03555 5.36953 2.33317 7.06522 2.33317 8.83333C2.33317 10.675 3.07484 12.3417 4.28317 13.5417H4.2915C4.6165 13.8667 4.6165 14.3917 4.2915 14.7167C3.9665 15.0417 3.43317 15.0417 3.10817 14.725C1.59984 13.2167 0.666504 11.1333 0.666504 8.83333C0.666504 6.6232 1.54448 4.50358 3.10728 2.94078C4.67008 1.37797 6.7897 0.5 8.99984 0.5ZM17.3332 8.83333C17.3332 11.1333 16.3998 13.2167 14.8915 14.725C14.5665 15.0417 14.0415 15.0417 13.7165 14.7167C13.3915 14.3917 13.3915 13.8667 13.7165 13.5417C14.9248 12.3333 15.6665 10.675 15.6665 8.83333C15.6665 8 15.5082 7.16667 15.2165 6.41667L16.2248 4.66667C16.9165 5.91667 17.3332 7.31667 17.3332 8.83333Z"
                                    fill="#999999"></path>
                            </svg>
                            کارکرد
                            <span class="dot"></span>
                            <span>158,669 کیلومتر</span>
                        </div>
                        <div class="spec-item">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1628_46301)"><path d="M15.7667 4.1737C15.6 3.68203 15.1333 3.33203 14.5833 3.33203H5.41667C4.86667 3.33203 4.40833 3.68203 4.23333 4.1737L2.5 9.16536V15.832C2.5 16.2904 2.875 16.6654 3.33333 16.6654H4.16667C4.625 16.6654 5 16.2904 5 15.832V14.9987H15V15.832C15 16.2904 15.375 16.6654 15.8333 16.6654H16.6667C17.125 16.6654 17.5 16.2904 17.5 15.832V9.16536L15.7667 4.1737ZM5.70833 4.9987H14.2833L15.15 7.4987H4.84167L5.70833 4.9987ZM15.8333 13.332H4.16667V9.4487L4.26667 9.16536H15.7417L15.8333 9.4487V13.332Z" fill="#999999"></path><path d="M6.25 12.5C6.94036 12.5 7.5 11.9404 7.5 11.25C7.5 10.5596 6.94036 10 6.25 10C5.55964 10 5 10.5596 5 11.25C5 11.9404 5.55964 12.5 6.25 12.5Z" fill="#999999"></path><path d="M13.75 12.5C14.4404 12.5 15 11.9404 15 11.25C15 10.5596 14.4404 10 13.75 10C13.0596 10 12.5 10.5596 12.5 11.25C12.5 11.9404 13.0596 12.5 13.75 12.5Z" fill="#999999"></path></g><defs><clipPath id="clip0_1628_46301"><rect width="20" height="20" fill="white"></rect></clipPath></defs></svg>                            سدان
                        </div>
                        <div class="spec-item">
                            <img alt="" title="" src="{{asset('images/car')}}/invert_colors.svg">
                            رنگ داخل
                            <span class="dot"></span>
                            <span>مشکی</span>
                        </div>
                        <div class="spec-item">
                            <img alt="" title="" src="{{asset('images/car')}}/local_gas_station.svg">
                            نوع سوخت
                            <span class="dot"></span>
                            <span>بنزینی</span>
                        </div>
                        <div class="spec-item">
                            <img alt="" title="" src="{{asset('images/car')}}/loyalty.svg">
                            <span>350 - فول</span>
                        </div>
                    </div>

                    <div class="price-section">
                        <div class="price-label">
                            <img alt="" title="" src="{{asset('images/car')}}/money.svg">
                            قیمت
                        </div>
                        <div class="price-value">توافقی</div>
                    </div>

                    <div class="notice-box">
                        متاسفانه این خودرو فروخته شده است. در صورت تمایل به خرید یا فروش خودرویی با این مشخصات از
                        دکمه‌های زیر استفاده نمایید.
                    </div>

                    <div class="action-buttons">
                        <a href="/carbuy?car=%D8%A8%D9%86%D8%B2+%DA%A9%D9%84%D8%A7%D8%B3%20E&amp;brandId=8263e20e-f604-ea11-9683-000c295c4922&amp;modelId=a13af714-f604-ea11-9683-000c295c4922&amp;year=2011"
                            class="btn btn-custom btn-primary-custom">
                            درخواست خرید
                        </a>
                        <a href="/carsell?car=%D8%A8%D9%86%D8%B2+%DA%A9%D9%84%D8%A7%D8%B3%20E&amp;brandId=8263e20e-f604-ea11-9683-000c295c4922&amp;modelId=a13af714-f604-ea11-9683-000c295c4922&amp;year=2011&amp;usageKilometere=158669&amp;bodyColor=8cf241b2-e57e-e911-90ec-000c29578827&amp;package=350%20-%20%D9%81%D9%88%D9%84"
                            class="btn btn-custom btn-primary-custom">
                            درخواست فروش
                        </a>
                        <a href="/carbuy?car=%D8%A8%D9%86%D8%B2+%DA%A9%D9%84%D8%A7%D8%B3%20E&amp;brandId=8263e20e-f604-ea11-9683-000c295c4922&amp;modelId=a13af714-f604-ea11-9683-000c295c4922&amp;year=2011&amp;leasingSelected=true"
                            class="btn btn-custom btn-outline-custom">
                            خرید اقساطی
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column - Gallery -->
            <div class="col-lg-7 order-lg-2 order-1">
                <div class="gallery-container">
                    <div class="gallery-nav">
                        <button class="gallery-btn" id="prevBtn">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        <button class="gallery-btn" id="nextBtn">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                    </div>

                    <img id="mainImage" class="main-image"
                        src="https://file.switch.ir/api/v1/webp/1200/672/80/f5f013e8-fda3-4cbf-9fcd-546b8d087b95.webp"
                        alt="بنز کلاس E 350">

                    {{-- <div class="gallery-badge">
                        <i class="fas fa-cube"></i>
                        نمای 360 درجه
                    </div> --}}

                    <div class="gallery-thumbnails" id="thumbnailContainer">
                        <!-- Thumbnails will be generated by JavaScript -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs Section -->
        <div class="tabs-container">
            <button class="tab-custom active" data-tab="expertise">کارشناسی فنی خودرو</button>
            <button class="tab-custom" data-tab="description">توضیحات</button>
        </div>

        <!-- Tab Content -->
        <div id="expertise" class="tab-content active">
            <div class="expert-section">
                <div class="section-header">
                    <div class="section-title">
                        <i class="fas fa-clipboard-check"></i>
                        کارشناسی فنی خودرو
                    </div>
                    <a href="https://file.switch.ir/api/v1/abfcf73d-55b3-46eb-b34c-3cbe3e47d33e" class="download-report"
                        target="_blank">
                        <i class="fas fa-download"></i>
                        <span class="d-none d-md-inline">دانلود گزارش کامل کارشناسی</span>
                        <span class="d-md-none">دانلود گزارش کارشناسی</span>
                    </a>
                </div>

                <!-- Legend (Desktop) -->
                <div class="legend-container d-none d-md-flex">
                    <div class="legend-item">
                        <div class="legend-icon">
                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                        </div>
                        کارشناسی شده و سالم
                    </div>
                    <div class="legend-item">
                        <div class="legend-icon">
                            <img src="{{ asset('images/car') }}/Buttons3.png" alt="تعویض">
                        </div>
                        تعویض و مشکل‌دار
                    </div>
                    <div class="legend-item">
                        <div class="legend-icon">
                            <img src="{{ asset('images/car') }}/Buttons2.png" alt="رنگ">
                        </div>
                        رنگ/آبرنگ
                    </div>
                    <div class="legend-item">
                        <div class="legend-icon">
                            <img src="{{ asset('images/car') }}/Buttons.png" alt="صافکاری">
                        </div>
                        صافکاری بدون رنگ
                    </div>
                    <div class="legend-item">
                        <div class="legend-icon">
                            <img src="{{ asset('images/car') }}/Buttons1.png" alt="موجود نیست">
                        </div>
                        کارشناسی نشده و یا موجود نیست
                    </div>
                </div>

                <!-- Legend (Mobile) -->
                <div class="mobile-legend d-md-none" id="mobileLegend">
                    <div class="mobile-legend-header">
                        <div class="mobile-legend-title">راهنمای علائم کارشناسی</div>
                        <i class="fas fa-chevron-down mobile-legend-toggle"></i>
                    </div>
                    <div class="mobile-legend-body">
                        <div class="mobile-legend-items">
                            <div class="legend-item">
                                <div class="legend-icon">
                                    <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                </div>
                                کارشناسی شده و سالم
                            </div>
                            <div class="legend-item">
                                <div class="legend-icon">
                                    <img src="{{ asset('images/car') }}/Buttons3.png" alt="تعویض">
                                </div>
                                تعویض و مشکل‌دار
                            </div>
                            <div class="legend-item">
                                <div class="legend-icon">
                                    <img src="{{ asset('images/car') }}/Buttons2.png" alt="رنگ">
                                </div>
                                رنگ/آبرنگ
                            </div>
                            <div class="legend-item">
                                <div class="legend-icon">
                                    <img src="{{ asset('images/car') }}/Buttons.png" alt="صافکاری">
                                </div>
                                صافکاری بدون رنگ
                            </div>
                            <div class="legend-item">
                                <div class="legend-icon">
                                    <img src="{{ asset('images/car') }}/Buttons1.png" alt="موجود نیست">
                                </div>
                                کارشناسی نشده و یا موجود نیست
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expert Cards -->
                <div class="row">
                    <!-- Body & Chassis -->
                    <div class="col-md-6 mb-3">
                        <div class="expert-card" id="bodyCard">
                            <div class="expert-card-header">
                                <div class="expert-card-title">
                                    <i class="fas fa-car-side"></i>
                                    بدنه و شاسی
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="expert-card-status status-good">
                                        متوسط
                                    </div>
                                    <div class="expert-card-toggle">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="expert-card-body">
                                <div class="expert-items">
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">درب موتور</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">گلگیر جلو چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons3.png" alt="تعویض">
                                        </div>
                                        <div class="expert-item-name">گلگیر جلو راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">درب جلو چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">درب جلو راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">درب عقب چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">درب عقب راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">گلگیر عقب چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">گلگیر عقب راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons3.png" alt="تعویض">
                                        </div>
                                        <div class="expert-item-name">درب صندوق</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">ستون جلو چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">ستون جلو راست</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technical & Mechanical -->
                    <div class="col-md-6 mb-3">
                        <div class="expert-card" id="technicalCard">
                            <div class="expert-card-header">
                                <div class="expert-card-title">
                                    <i class="fas fa-cogs"></i>
                                    فنی و مکانیکی
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="expert-card-status status-excellent">
                                        خیلی خوب
                                    </div>
                                    <div class="expert-card-toggle">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="expert-card-body">
                                <div class="expert-items">
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">نشت آب</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">باطری</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">واشر در سوپاپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">نشت روغن</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">روغن سوزی</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">دود اگزور</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">کمپرس موتور</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">وضعیت روغن موتور</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">وضعیت روغن ترمز</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">سیستم فرمان</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">وضعیت روغن هیدرولیک</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">کنترل وضعیت فنها</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Options & Equipment -->
                    <div class="col-md-6 mb-3">
                        <div class="expert-card" id="optionsCard">
                            <div class="expert-card-header">
                                <div class="expert-card-title">
                                    <i class="fas fa-sliders-h"></i>
                                    آپشن و تجهیزات
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="expert-card-status status-excellent">
                                        خیلی خوب
                                    </div>
                                    <div class="expert-card-toggle">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="expert-card-body">
                                <div class="expert-items">
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons1.png" alt="موجود نیست">
                                        </div>
                                        <div class="expert-item-name">کنترل آپشنهای هوشمند</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">کنترل سیستم تهویه</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons1.png" alt="موجود نیست">
                                        </div>
                                        <div class="expert-item-name">کنترل قطعات الکترونیکی</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">مجموعه چراغهای جلو</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">مه شکن جلو راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">عملکرد آمپرهای صفحه کیلومتر</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">مه شکن جلو چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">مجموعه چراغهای عقب</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">مه شکن عقب راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">مه شکن عقب چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">مه شکن عقب وسط</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons1.png" alt="موجود نیست">
                                        </div>
                                        <div class="expert-item-name">کنترل سیستم پایداری ESP</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wheels & Tires -->
                    <div class="col-md-6 mb-3">
                        <div class="expert-card" id="wheelsCard">
                            <div class="expert-card-header">
                                <div class="expert-card-title">
                                    <i class="fas fa-circle-notch"></i>
                                    رینگ و لاستیک
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="expert-card-status status-excellent">
                                        خیلی خوب
                                    </div>
                                    <div class="expert-card-toggle">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="expert-card-body">
                                <div class="expert-items">
                                    <div class="expert-item">
                                        <div class="tire-percentage">70</div>
                                        <div class="expert-item-name">لاستیک جلو چپ %</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="tire-percentage">70</div>
                                        <div class="expert-item-name">لاستیک جلو راست %</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="tire-percentage">60</div>
                                        <div class="expert-item-name">لاستیک عقب چپ %</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="tire-percentage">60</div>
                                        <div class="expert-item-name">لاستیک عقب راست %</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="tire-percentage">100</div>
                                        <div class="expert-item-name">لاستیک زاپاس %</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">رینگ جلو چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">رینگ جلو راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">رینگ عقب چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">رینگ عقب راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <img src="{{ asset('images/car') }}/Buttons4.png" alt="سالم">
                                        </div>
                                        <div class="expert-item-name">رینگ زاپاس</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="description" class="tab-content">
            <div class="car-info-card">
                <h3 class="mb-3">توضیحات خودرو</h3>
                <p>
                    بنز کلاس E 350 مدل 2011 یک سدان لوکس و قدرتمند است که با موتور V6 با حجم 3.5 لیتر ارائه می‌شود.
                    این خودرو با طراحی کلاسیک و مدرن، امکانات رفاهی و ایمنی بالایی را در اختیار سرنشینان قرار می‌دهد.
                    مدل فول این خودرو شامل تمامی آپشن‌های روز مانند سیستم صوتی حرفه‌ای، سیستم ناوبری، دوربین‌های 360
                    درجه،
                    سیستم تهویه مطبوع چهار منطقه‌ای، صندلی‌های چرمی با قابلیت تنظیم برقی و گرمکن و سردکن صندلی‌ها
                    می‌باشد.
                </p>
                <p class="mt-3">
                    این خودرو با کارکرد 158,669 کیلومتر در شرایط بسیار خوبی قرار دارد و تمامی سرویس‌های دوره‌ای آن به
                    موقع انجام شده است.
                    رنگ داخلی مشکی با چرم مرغوب و نمای خارجی سفید براق، ظاهری شیک و لاکچری به این بخش داده است.
                    سیستم تعلیق و فرمان این خودرو عملکرد بسیار نرم و دقیقی دارد و مصرف سوخت آن برای یک خودروی لوکس در
                    این کلاس مناسب است.
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Image gallery data
            const images = [
                "https://file.switch.ir/api/v1/webp/1200/672/80/f5f013e8-fda3-4cbf-9fcd-546b8d087b95.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/da95b63f-37ff-462a-ac47-907129379d21.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/8ed4db62-8d7b-43d6-9077-918f23b3bd20.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/049a4667-e1a0-4abe-af25-1506858a6fc1.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/42134ca7-e5d7-40d1-9a30-731651594439.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/b3ee294b-45a8-4fad-a333-bf0a1065c0a3.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/63b2c078-96e1-487e-a287-0e59abfd076f.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/bc7fb8df-d803-4c36-b58b-5b16055261dc.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/c0ad23fc-2322-4778-864b-283ba282f7b3.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/598fb5ef-483c-43a6-a8ef-03acab6cb4e6.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/33345a0e-6caa-4b6f-a14d-941df6ee25ea.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/be198f53-86c3-432f-be7b-6023dcaf801f.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/88919641-22b1-46fb-8ef1-63f0df8534f3.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/3eb57199-c03c-4ecd-9876-ad53b37441f5.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/a97b1502-940d-4b61-a0c8-c01882d0d070.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/f72b722e-47b7-40fd-a0e2-63b7f0fb3e9d.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/e56e5160-ee70-43ef-baff-8eb623a08c43.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/0721730c-f959-4e80-b6b9-66393ed98969.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/27fcaf97-0ad9-44af-a7e6-b4062f7ef727.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/c32a8f94-822f-4def-b152-9db9c536e893.webp",
                "https://file.switch.ir/api/v1/webp/1200/672/80/3eaefd96-5493-475d-b2c0-dc4e3862ae9e.webp"
            ];

            let currentImageIndex = 0;
            const mainImage = document.getElementById('mainImage');
            const thumbnailContainer = document.getElementById('thumbnailContainer');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            // Generate thumbnails
            function generateThumbnails() {
                thumbnailContainer.innerHTML = '';
                images.forEach((src, index) => {
                    const thumbnail = document.createElement('img');
                    thumbnail.src = src;
                    thumbnail.className = `thumbnail ${index === 0 ? 'active' : ''}`;
                    thumbnail.alt = `تصویر ${index + 1}`;
                    thumbnail.addEventListener('click', () => {
                        currentImageIndex = index;
                        updateMainImage();
                        updateThumbnails();
                    });
                    thumbnailContainer.appendChild(thumbnail);
                });
            }

            // Update main image
            function updateMainImage() {
                mainImage.src = images[currentImageIndex];
            }

            // Update thumbnails active state
            function updateThumbnails() {
                const thumbnails = document.querySelectorAll('.thumbnail');
                thumbnails.forEach((thumb, index) => {
                    thumb.classList.toggle('active', index === currentImageIndex);
                });

                // Scroll thumbnail into view
                const activeThumbnail = thumbnails[currentImageIndex];
                if (activeThumbnail) {
                    activeThumbnail.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest',
                        inline: 'center'
                    });
                }
            }

            // Previous image
            prevBtn.addEventListener('click', () => {
                currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
                updateMainImage();
                updateThumbnails();
            });

            // Next image
            nextBtn.addEventListener('click', () => {
                currentImageIndex = (currentImageIndex + 1) % images.length;
                updateMainImage();
                updateThumbnails();
            });

            // Tab switching
            const tabButtons = document.querySelectorAll('.tab-custom');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const tabId = button.getAttribute('data-tab');

                    // Update active tab button
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

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
                const header = card.querySelector('.expert-card-header');
                header.addEventListener('click', () => {
                    card.classList.toggle('expanded');
                });
            });

            // Mobile legend toggle
            const mobileLegend = document.getElementById('mobileLegend');
            const mobileLegendHeader = mobileLegend.querySelector('.mobile-legend-header');
            mobileLegendHeader.addEventListener('click', () => {
                mobileLegend.classList.toggle('expanded');
            });

            // Initialize
            generateThumbnails();
        });
    </script>
</body>

</html>
