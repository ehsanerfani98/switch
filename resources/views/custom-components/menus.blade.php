    <!-- هدر -->
    <header class="bg-white shadow-custom sticky top-0 z-50">
        <div class="container mx-auto px-3.5 py-4 flex justify-between items-center">
            <div class="logo flex items-center">
                <img src="https://img.icons8.com/color/48/car--v1.png" alt="{{ get_setting('company_name') }}" class="h-10 ml-2.5">
                <span class="text-2xl font-extrabold text-primary">{{ get_setting('company_name') }}</span>
            </div>

            <nav class="hidden md:block">
                <ul class="flex list-none">
                    @php
                        $mainMenus = \App\Models\Menu::where('is_active', true)
                            ->whereNull('parent_id')
                            ->orderBy('order')
                            ->get();
                    @endphp

                    @foreach($mainMenus as $menu)
                        <li class="ml-6 relative group">
                            <a href="{{ $menu->link ?: '#' }}"
                                class="text-text-medium font-medium relative py-1 after:content-[''] after:absolute after:bottom-0 after:right-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:text-primary hover:after:w-full">
                                {{ $menu->title }}
                            </a>

                            @php
                                $subMenus = \App\Models\Menu::where('is_active', true)
                                    ->where('parent_id', $menu->id)
                                    ->orderBy('order')
                                    ->get();
                            @endphp

                            @if($subMenus->count() > 0)
                                <div class="absolute right-0 top-full mt-2 w-48 bg-white shadow-lg rounded-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                                    @foreach($subMenus as $subMenu)
                                        <a href="{{ $subMenu->link ?: '#' }}"
                                           class="block px-4 py-2 text-text-medium hover:bg-accent hover:text-primary transition-colors">
                                            {{ $subMenu->title }}
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </li>
                    @endforeach
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
                <img src="https://img.icons8.com/color/48/car--v1.png" alt="{{ get_setting('company_name') }}" class="h-7 ml-2.5">
                <span class="text-xl font-extrabold text-primary">{{ get_setting('company_name') }}</span>
            </div>
            <button class="close-menu-btn bg-transparent border-none text-text-medium text-2xl cursor-pointer">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <ul class="mobile-menu-nav list-none">
            @php
                $mobileMenus = \App\Models\Menu::where('is_active', true)
                    ->whereNull('parent_id')
                    ->orderBy('order')
                    ->get();
            @endphp

            @foreach($mobileMenus as $menu)
                <li class="mb-3.5">
                    <a href="{{ $menu->link ?: '#' }}"
                        class="block text-text-medium font-medium text-base px-3.5 py-2.5 rounded-md transition-colors hover:bg-accent hover:text-primary">
                        {{ $menu->title }}
                    </a>

                    @php
                        $mobileSubMenus = \App\Models\Menu::where('is_active', true)
                            ->where('parent_id', $menu->id)
                            ->orderBy('order')
                            ->get();
                    @endphp

                    @if($mobileSubMenus->count() > 0)
                        <ul class="mr-4 mt-2 space-y-1">
                            @foreach($mobileSubMenus as $subMenu)
                                <li>
                                    <a href="{{ $subMenu->link ?: '#' }}"
                                        class="block text-text-medium text-sm px-3.5 py-2 rounded-md transition-colors hover:bg-accent hover:text-primary border-r-2 border-primary">
                                        {{ $subMenu->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>

        <div class="mobile-menu-actions mt-7 pt-5 border-t border-border-color">
            <a href="tel:02175346"
                class="btn bg-primary text-white px-3 py-1.5 rounded-md font-semibold text-base flex items-center justify-center gap-2.5 transition-colors hover:bg-blue-700 w-full mb-2.5">
                <i class="fas fa-phone"></i>
                ۰۲۱-۷۵۳۴۶
            </a>
        </div>
    </div>