<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ get_setting('company_name') }} | @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('admin/img/logo.webp') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('site-assets/css/style.css') }}">
    {{-- @vite(['resources/js/app.js']) --}}
    @laravelPWA
    @yield('css')
</head>

<body>

    <div class="container" style="max-width: 650px;padding-top: 60px; padding-bottom: 70px;">
        <section>
            <header>
                <div class="row">
                    <div class="top-menu">
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <div class="right-menu">
                                    <div class="brand">
                                        سامانه یاد اپ
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="left-menu">
                                    <a href="{{ route('user.wallet') }}" class="wallet">
                                        <img src="{{ asset('site-assets') }}/images/icons/currency_exchange.svg"
                                            alt="">
                                        <span>{{ number_format(walletBalance(auth()->user())) }} ریال</span>
                                        <img src="{{ asset('site-assets') }}/images/icons/wallet.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </section>

        @yield('content')
    </div>


    <nav class="bottom-bar d-flex justify-content-around align-items-center">
        <a href="{{ route('user.home') }}"><img src="{{ asset('site-assets') }}/images/icons/home.svg"
                alt="خانه"></a>
        <a href="{{ route('user.advisors') }}"><img src="{{ asset('site-assets') }}/images/icons/support.svg"
                alt="مشاوره آنلاین"></a>
        <a href="{{ route('user.wallet') }}"><img
                src="{{ asset('site-assets') }}/images/icons/account_balance_wallet.svg" alt="کیف پول"></a>
        <a href="{{ route('user.profile.edit') }}"><img src="{{ asset('site-assets') }}/images/icons/person.svg"
                alt="پروفایل"></a>
    </nav>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('site-assets/js/scripts.js') }}"></script>
    {{-- <script>
        window.currentUserId = "{{ auth()->id() }}";
        document.addEventListener('DOMContentLoaded', function() {

            window.Echo.join('online.users')
                .here((users) => {
                    markMeOnlineUser();
                })
                .leaving((user) => {
                    if (user.id === currentUserId) {
                        markMeOfflineUser();
                    }
                });

            function markMeOnlineUser() {
                fetch('/mark-online-user', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({})
                });
            }

            window.addEventListener('beforeunload', function() {
                markMeOfflineUser();
            });

            function markMeOfflineUser() {
                fetch('/mark-offline-user', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({})
                });
            }
        });
    </script> --}}
    @stack('scripts')

</body>

</html>
