@extends('site.layout')
@section('title', 'خانه')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nouislider@15.7.1/dist/nouislider.min.css">
    <link rel="stylesheet" href="{{ asset('site-assets/css/car_filters_styles.css') }}">
@endpush
@section('content')
    <div class="container mx-auto px-4 py-6">
        <!-- هدر صفحه -->
        <header class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center">
                    <i class="fas fa-car text-2xl text-primary ml-3"></i>
                    <h1 class="text-2xl font-bold text-gray-900">نمایشگاه ماشین‌ها</h1>
                </div>
                <div class="relative w-full md:w-80">
                    <i class="fas fa-search absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="text"
                        class="search-input w-full bg-gray-50 border border-gray-300 rounded-lg py-2 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="جستجوی ماشین...">
                </div>
            </div>
        </header>

        <div class="flex flex-col lg:flex-row gap-6">
            <!-- سایدبار فیلترها -->
            <aside class="w-full lg:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-5 sticky top-4">
                    <div class="flex justify-between items-center mb-4 pb-3 border-b border-gray-200">
                        <h2 class="text-lg font-bold text-gray-900">فیلترها</h2>
                        <button class="clear-filters text-sm text-primary hover:text-blue-700 transition-colors"
                            id="clearFilters">پاک کردن همه</button>
                    </div>
                    <form id="filtersForm"></form>
                </div>
            </aside>

            <!-- محتوای اصلی -->
            <main class="w-full lg:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-5 mb-6">
                    <span class="results-count text-gray-700 font-medium" id="resultsCount">در حال بارگذاری...</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6" id="carsContainer">
                    <!-- محتوای ماشین‌ها اینجا لود می‌شود -->
                </div>
            </main>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/nouislider@15.7.1/dist/nouislider.min.js"></script>
    <script src="{{ asset('site-assets/js/cars_filters_scripts.js') }}"></script>
@endpush
