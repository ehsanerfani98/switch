@extends('site.layout')
@section('title', 'خانه')


@push('styles')
    <!-- استایل‌های اختصاصی -->
    <style>
        /* Grid system replacement */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .col-lg-6,
        .col-lg-8,
        .col-lg-4,
        .col-md-6 {
            position: relative;
            width: 100%;
            padding: 0 10px;
        }

        @media (min-width: 768px) {
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-lg-8 {
                flex: 0 0 66.66%;
                max-width: 66.66%;
            }

            .col-lg-4 {
                flex: 0 0 33.33%;
                max-width: 33.33%;
            }
        }

        @media (min-width: 992px) {
            .col-lg-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        /* Utility classes */
        .d-none {
            display: none !important;
        }

        .d-md-none {
            display: none !important;
        }

        .d-flex {
            display: flex !important;
        }

        .d-md-flex {
            display: none !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .justify-content-between {
            justify-content: space-between !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .text-center {
            text-align: center !important;
        }

        @media (min-width: 768px) {
            .d-md-none {
                display: none !important;
            }

            .d-md-flex {
                display: flex !important;
            }

            .d-md-inline {
                display: inline !important;
            }
        }

        /* استایل‌های اختصاصی صفحه خودرو */
        .breadcrumb-custom {
            background: transparent;
            padding: 15px 0;
            margin: 15px 0;
            display: flex;
            align-items: center;
            font-size: 13px;
            flex-wrap: wrap;
        }

        .breadcrumb-custom a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .breadcrumb-custom .separator {
            margin: 0 6px;
            color: var(--text-lighter);
        }

        .car-info-card {
            background-color: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow-light);
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid var(--border-color);
            height: fit-content;
        }

        .car-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .share-btn {
            background: none;
            border: none;
            color: var(--primary-color);
            font-size: 18px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .share-btn:hover {
            transform: scale(1.1);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(16, 185, 129, 0.12);
            color: var(--secondary-color);
            padding: 5px 10px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .status-badge i {
            margin-left: 6px;
        }

        .car-specs {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 15px 0;
        }

        .spec-item {
            display: flex;
            align-items: center;
            font-size: 14px;
            background: rgba(249, 250, 251, 0.8);
            padding: 6px 10px;
            border-radius: 6px;
        }

        .spec-item i {
            color: #b7b7b7;
            margin-left: 6px;
            width: 16px;
            text-align: center;
            font-size: 14px;
        }

        .spec-item .dot {
            width: 4px;
            height: 4px;
            background: var(--text-lighter);
            border-radius: 50%;
            margin: 0 6px;
        }

        .price-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0;
            padding: 12px 0;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }

        .price-label {
            font-weight: 600;
            color: var(--text-medium);
            font-size: 14px;
        }

        .price-value {
            font-size: 20px;
            font-weight: 700;
            color: var(--secondary-color);
        }

        .notice-box {
            background: rgba(16, 185, 129, 0.08);
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: var(--radius);
            padding: 12px;
            margin: 15px 0;
            text-align: justify;
            font-size: 13px;
            color: var(--secondary-color);
        }

        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .action-buttons .btn {
            flex: 1 1 calc(50% - 5px);
            min-width: 120px;
            font-size: 13px;
            padding: 10px 12px;
        }

        .gallery-container {
            position: relative;
            margin-bottom: 20px;
        }

        .main-image {
            width: 100%;
            height: 250px;
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
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--white);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow);
            cursor: pointer;
            transition: var(--transition);
        }

        .gallery-btn:hover {
            background: var(--primary-color);
            color: var(--white);
        }

        .gallery-thumbnails {
            display: flex;
            overflow-x: auto;
            gap: 8px;
            padding: 12px 0;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) #f1f1f1;
        }

        .gallery-thumbnails::-webkit-scrollbar {
            height: 4px;
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
            min-width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 6px;
            border: 2px solid transparent;
            cursor: pointer;
            transition: var(--transition);
        }

        .thumbnail.active {
            border-color: var(--primary-color);
        }

        .thumbnail:hover {
            opacity: 0.9;
        }

        .gallery-badge {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: rgba(37, 99, 235, 0.9);
            color: var(--white);
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 12px;
            display: flex;
            align-items: center;
        }

        .gallery-badge i {
            margin-left: 6px;
        }

        .tabs-container {
            border-bottom: 2px solid var(--border-color);
            margin-bottom: 20px;
            display: flex;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .tabs-container::-webkit-scrollbar {
            display: none;
        }

        .tab-custom {
            background: none;
            border: none;
            padding: 12px 15px;
            font-weight: 700;
            font-size: 14px;
            color: var(--text-light);
            cursor: pointer;
            position: relative;
            transition: color 0.3s;
            white-space: nowrap;
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
            margin-bottom: 20px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .section-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--text-dark);
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-left: 8px;
            color: var(--primary-color);
        }

        .download-report {
            display: flex;
            align-items: center;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
        }

        .download-report i {
            margin-left: 5px;
        }

        .legend-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            font-size: 12px;
            font-weight: 600;
            background: rgba(249, 250, 251, 0.8);
            padding: 5px 8px;
            border-radius: 6px;
        }

        .legend-icon {
            width: 16px;
            height: 16px;
            margin-left: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .legend-icon img {
            max-width: 100%;
            max-height: 100%;
        }

        .expert-card {
            background: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow-light);
            border: 1px solid var(--border-color);
            margin-bottom: 15px;
            overflow: hidden;
        }

        .expert-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .expert-card-header:hover {
            background: var(--accent-color);
        }

        .expert-card-title {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 15px;
            color: var(--text-dark);
        }

        .expert-card-title i {
            margin-left: 8px;
            color: var(--primary-color);
        }

        .expert-card-status {
            padding: 4px 10px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 12px;
            display: flex;
            align-items: center;
        }

        .status-excellent {
            background: rgba(16, 185, 129, 0.12);
            color: var(--secondary-color);
        }

        .status-good {
            background: rgba(208, 147, 27, 0.12);
            color: #da931b;
        }

        .expert-card-toggle {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.04);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
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
            padding: 0 15px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
        }

        .expert-card.expanded .expert-card-body {
            max-height: 2000px;
            padding: 0 15px 15px;
        }

        .expert-items {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .expert-item {
            width: calc(50% - 4px);
            display: flex;
            align-items: center;
            padding: 6px 0;
        }

        .expert-item-icon {
            width: 20px;
            height: 20px;
            margin-left: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .expert-item-icon img {
            max-width: 100%;
            max-height: 100%;
        }

        .expert-item-name {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-medium);
        }

        .tire-percentage {
            width: 22px;
            height: 22px;
            background: #EBEBEB;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 600;
            margin-left: 6px;
        }

        /* Mobile Legend Styles */
        .mobile-legend {
            background: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow-light);
            border: 1px solid var(--border-color);
            margin-bottom: 15px;
            overflow: hidden;
        }

        .mobile-legend-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            cursor: pointer;
            background: var(--accent-color);
        }

        .mobile-legend-title {
            font-weight: 700;
            font-size: 14px;
            color: var(--text-dark);
        }

        .mobile-legend-toggle {
            transition: transform 0.3s;
        }

        .mobile-legend.expanded .mobile-legend-toggle {
            transform: rotate(180deg);
        }

        .mobile-legend-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        .mobile-legend.expanded .mobile-legend-body {
            max-height: 500px;
        }

        .mobile-legend-items {
            padding: 10px 15px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        /* Media Queries */
        @media (max-width: 576px) {


            .row {
                margin: 0 -5px;
            }

            .col-lg-6,
            .col-lg-8,
            .col-lg-4,
            .col-md-6 {
                padding: 0 5px;
            }

            .car-info-card {
                padding: 15px;
                margin-bottom: 15px;
            }

            .car-title {
                font-size: 18px;
                margin-bottom: 10px;
            }

            .action-buttons .btn {
                flex: 1 1 100%;
                margin-bottom: 8px;
            }

            .expert-item {
                width: 100%;
            }

            .section-title {
                font-size: 16px;
            }

            .main-image {
                height: 200px;
            }
        }

        @media (min-width: 577px) and (max-width: 768px) {
            .main-image {
                height: 280px;
            }

            .expert-item {
                width: 50%;
            }
        }

        @media (min-width: 769px) and (max-width: 992px) {
            .main-image {
                height: 350px;
            }

            .expert-item {
                width: 50%;
            }

            .action-buttons .btn {
                flex: 1;
                min-width: 130px;
            }
        }

        @media (min-width: 993px) {
            .main-image {
                height: 660px;
            }

            .expert-item {
                width: calc(33.333% - 8px);
            }

            .action-buttons .btn {
                flex: 1;
                min-width: 140px;
            }
        }
    </style>
@endpush


@section('content')
    <!-- محتوای اصلی صفحه خودرو -->
    <div class="container">
        <!-- Breadcrumb -->
        <nav class="breadcrumb-custom">
            <a href="#">خرید خودرو</a>
            <span class="separator"><i class="fas fa-chevron-left"></i></span>
            <a href="#">بنز</a>
            <span class="separator"><i class="fas fa-chevron-left"></i></span>
            <a href="#">بنز کلاس E</a>
            <span class="separator"><i class="fas fa-chevron-left"></i></span>
            <a href="#">بنز کلاس E - 2011</a>
        </nav>

        <!-- ساختار دوستون اصلی -->
        <div class="row">
            <!-- ستون سمت راست - اطلاعات ماشین -->
            <div class="col-lg-4">
                <div class="car-info-card">
                    <div class="car-title">
                        <h1>بنز کلاس E 2011</h1>
                        <button class="share-btn">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>

                    @php
                    // فرض کنیم فیلد status در جدول cars ذخیره شده
                    $statusIcon = 'fas fa-question-circle';
                    $statusColor = '#999';
                    $statusLabel = 'نامشخص';



                    switch ($car->status) {
                        case 'assessed':
                            $statusIcon = 'fas fa-check-circle';
                            $bgColor = 'rgba(16, 185, 129, 0.12)';
                            $statusColor = 'var(--secondary-color)';
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

                <div class="status-badge" style="color: {{ $statusColor }}; background-color: {{ $bgColor }}">
                    <i class="{{ $statusIcon }}"></i>
                    {{ $statusLabel }}
                </div>

                <div class="car-specs">
                    @foreach($car->attributeValues as $attrVal)
                        <div class="spec-item">
                            @if($attrVal->attribute && $attrVal->attribute->icon)
                                <i class="{{ $attrVal->attribute->icon }}"></i>
                            @endif

                            {{ $attrVal->attribute->label }}

                            @if($attrVal->formatted_value)
                                <span class="dot"></span>
                                <span>{{ $attrVal->formatted_value }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>




                    <div class="price-section">
                        <div class="price-label">
                            <i class="fas fa-money-bill-wave"></i>
                            قیمت
                        </div>
                        <div class="price-value">{{ $price }}</div>
                    </div>

                    <div class="notice-box">
                        متاسفانه این خودرو فروخته شده است. در صورت تمایل به خرید یا فروش خودرویی با این مشخصات از
                        دکمه‌های زیر استفاده نمایید.
                    </div>

                    <div class="action-buttons">
                        <a href="#" class="btn btn-primary">
                            درخواست خرید
                        </a>
                        <a href="#" class="btn btn-primary">
                            درخواست فروش
                        </a>
                        <a href="#" class="btn btn-outline">
                            خرید اقساطی
                        </a>
                    </div>
                </div>
            </div>

            <!-- ستون سمت چپ - گالری -->
            <div class="col-lg-8">
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
                    <a href="#" class="download-report" target="_blank">
                        <i class="fas fa-download"></i>
                        <span class="d-none d-md-inline">دانلود گزارش کامل کارشناسی</span>
                        <span class="d-md-none">دانلود گزارش کارشناسی</span>
                    </a>
                </div>

                <!-- Legend (Desktop) -->
                <div class="legend-container d-none d-md-flex">
                    <div class="legend-item">
                        <div class="legend-icon">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                        </div>
                        کارشناسی شده و سالم
                    </div>
                    <div class="legend-item">
                        <div class="legend-icon">
                            <i class="fas fa-exchange-alt" style="color: #02b9f3;"></i>
                        </div>
                        تعویض و مشکل‌دار
                    </div>
                    <div class="legend-item">
                        <div class="legend-icon">
                            <i class="fas fa-fill-drip" style="color: #f59e0b;"></i>
                        </div>
                        رنگ/آبرنگ
                    </div>
                    <div class="legend-item">
                        <div class="legend-icon">
                            <i class="fas fa-hammer" style="color: #8b5cf6;"></i>
                        </div>
                        صافکاری بدون رنگ
                    </div>
                    <div class="legend-item">
                        <div class="legend-icon">
                            <i class="fas fa-times-circle" style="color: #f50b0b;"></i>
                        </div>
                        تعمیر شده
                    </div>
                    <div class="legend-item">
                        <div class="legend-icon">
                            <i class="fas fa-question-circle" style="color: #6b7280;"></i>
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
                                    <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                </div>
                                کارشناسی شده و سالم
                            </div>
                            <div class="legend-item">
                                <div class="legend-icon">
                                    <i class="fas fa-exchange-alt" style="color: #02b9f3;"></i>
                                </div>
                                تعویض و مشکل‌دار
                            </div>
                            <div class="legend-item">
                                <div class="legend-icon">
                                    <i class="fas fa-fill-drip" style="color: #f59e0b;"></i>
                                </div>
                                رنگ/آبرنگ
                            </div>
                            <div class="legend-item">
                                <div class="legend-icon">
                                    <i class="fas fa-hammer" style="color: #8b5cf6;"></i>
                                </div>
                                صافکاری بدون رنگ
                            </div>
                            <div class="legend-item">
                                <div class="legend-icon">
                                    <i class="fas fa-times-circle" style="color: #f50b0b;"></i>
                                </div>
                                تعمیر شده
                            </div>
                            <div class="legend-item">
                                <div class="legend-icon">
                                    <i class="fas fa-question-circle" style="color: #6b7280;"></i>
                                </div>
                                کارشناسی نشده و یا موجود نیست
                            </div>
                        </div>
                    </div>
                </div>

                <!-- کارت‌های کارشناسی فنی - دو تار (ردیف) دوتایی -->
                {{-- <div class="row">
                    <div class="col-md-6">
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
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">درب موتور</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">گلگیر جلو چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-exchange-alt" style="color: #da931b;"></i>
                                        </div>
                                        <div class="expert-item-name">گلگیر جلو راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">درب جلو چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">درب جلو راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">درب عقب چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">درب عقب راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">گلگیر عقب چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">گلگیر عقب راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-exchange-alt" style="color: #da931b;"></i>
                                        </div>
                                        <div class="expert-item-name">درب صندوق</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">ستون جلو چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">ستون جلو راست</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
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
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">نشت آب</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">باطری</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">واشر در سوپاپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">نشت روغن</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">روغن سوزی</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">دود اگزور</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">کمپرس موتور</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">وضعیت روغن موتور</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">وضعیت روغن ترمز</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">سیستم فرمان</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">وضعیت روغن هیدرولیک</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">کنترل وضعیت فنها</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
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
                                            <i class="fas fa-question-circle" style="color: #6b7280;"></i>
                                        </div>
                                        <div class="expert-item-name">کنترل آپشنهای هوشمند</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">کنترل سیستم تهویه</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-question-circle" style="color: #6b7280;"></i>
                                        </div>
                                        <div class="expert-item-name">کنترل قطعات الکترونیکی</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">مجموعه چراغهای جلو</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">مه شکن جلو راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">عملکرد آمپرهای صفحه کیلومتر</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">مه شکن جلو چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">مجموعه چراغهای عقب</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">مه شکن عقب راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">مه شکن عقب چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">مه شکن عقب وسط</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-question-circle" style="color: #6b7280;"></i>
                                        </div>
                                        <div class="expert-item-name">کنترل سیستم پایداری ESP</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
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
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">رینگ جلو چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">رینگ جلو راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">رینگ عقب چپ</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">رینگ عقب راست</div>
                                    </div>
                                    <div class="expert-item">
                                        <div class="expert-item-icon">
                                            <i class="fas fa-check-circle" style="color: var(--secondary-color);"></i>
                                        </div>
                                        <div class="expert-item-name">رینگ زاپاس</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    @foreach($carFiles as $file)
                        <div class="col-md-6">
                            <div class="expert-card" id="fileCard-{{ $file->id }}">
                                <div class="expert-card-header">
                                    <div class="expert-card-title">
                                        <i class="fas fa-folder-open"></i>
                                        {{ $file->title }}
                                    </div>
                                    <div class="d-flex align-items-center">
                                        {{-- اینجا مثلا می‌تونی وضعیت کلی پرونده رو محاسبه کنی --}}
                                        <div class="expert-card-status status-good">
                                            نامشخص
                                        </div>
                                        <div class="expert-card-toggle">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="expert-card-body">
                                    <div class="expert-items">
                                        @foreach($file->items as $item)
                                            @php
                                                $value = $item->values->first(); // چون برای هر ماشین یک رکورد داریم
                                                $icon = 'fas fa-question-circle';
                                                $color = '#999';

                                                if ($value) {
                                                    switch ($value->status) {
                                                        case 'سالم':
                                                            $icon = 'fas fa-check-circle';
                                                            $color = 'var(--secondary-color)';
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

                                            <div class="expert-item">
                                                <div class="expert-item-icon">
                                                    <i class="{{ $icon }}" style="color: {{ $color }}"></i>
                                                </div>
                                                <div class="expert-item-name">
                                                    {{ $item->title }}
                                                    @if($value && $value->status_description)
                                                        <small>({{ $value->status_description }})</small>
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
            <div class="car-info-card">
                <h3 class="mb-3">توضیحات خودرو</h3>
                {!! $car->description !!}
            </div>
        </div>
    </div>
@endsection


@push('scripts')
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
            if (mobileLegend) {
                const mobileLegendHeader = mobileLegend.querySelector('.mobile-legend-header');
                mobileLegendHeader.addEventListener('click', () => {
                    mobileLegend.classList.toggle('expanded');
                });
            }

            // Initialize
            generateThumbnails();
        });
    </script>
@endpush
