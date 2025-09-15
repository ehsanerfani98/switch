@extends('site.layout')
@section('title', 'خرید سرویس')

@section('css')
    <style>
        .modal-body p {
            margin-bottom: 6px;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            animation: modalFadeIn 0.3s ease-out;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-title {
            font-size: 1.5rem;
            color: #d33;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .modal-body {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        /* استایل برای اسپینر دکمه */
        .btn-spinner {
            display: none;
            margin-right: 5px;
        }

        .btn-loading .btn-spinner {
            display: inline-block;
        }

        .btn-loading .btn-text {
            margin-left: 5px;
        }

        /* استایل جدید برای چک باکس قوانین */
        .terms-checkbox {
            margin: 15px 0;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }

        .terms-checkbox label {
            margin-right: 10px;
            cursor: pointer;
            font-size: 14px;
        }

        .terms-checkbox a {
            color: #3490dc;
            text-decoration: underline;
        }

        .btn-disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
    </style>
@endsection

@section('content')

    @if (!empty($service->description))
        <div class="card mb-3">
            <div class="card-body">
                <div class="card-header mb-3">
                    شرح خدمات
                </div>
                <div style="font-size: 14px;line-height: 1">
                    {!! $service->description !!}
                </div>
            </div>
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="description" class="mb-2">توضیحات شما</label>
                <textarea name="" class="form-control" id="description"></textarea>
                <small style="font-size: 12px ;color: #666">چنانچه پرسشی دارید مطرح کنید.</small>
            </div>

            <!-- چک باکس قوانین -->
            <div class="terms-checkbox">
                <input type="checkbox" id="agreeTerms" name="agreeTerms">
                <label for="agreeTerms">با <a href="#" onclick="showTerms()">شرایط و قوانین</a> موافقم</label>
            </div>

            <button id="submitServiceBtn" type="submit" class="btn btn-sm btn-primary mt-3" disabled>
                <span class="spinner-border spinner-border-sm btn-spinner" role="status" aria-hidden="true"></span>
                <span class="btn-text">ثبت درخواست</span>
            </button>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="phoneModal" class="modal-overlay" style="display: none;">
        <div class="modal-container">
            <div class="modal-header">
                <h3 class="modal-title">تکمیل اطلاعات ضروری</h3>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <p>برای ثبت درخواست ابتدا باید شماره موبایل خود را در پروفایل تکمیل و احراز هویت کنید.</p>
                <p>لطفاً به بخش <a href="{{ route('user.profile.details') }}"
                        style="color: #3490dc; text-decoration: underline;">پروفایل</a> مراجعه کنید.</p>
            </div>
        </div>
    </div>

    <!-- Modal شرایط و قوانین -->
    <div id="termsModal" class="modal-overlay" style="display: none;">
        <div class="modal-container">
            <div class="modal-header">
                <h3 class="modal-title">شرایط و قوانین</h3>
                <button class="modal-close" onclick="closeTermsModal()">&times;</button>
            </div>
            <div class="modal-body">
            {!! $service->rules !!}
            </div>
            <div class="text-center">
                <button class="btn btn-sm btn-primary" onclick="closeTermsModal()">متوجه شدم</button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // فعال/غیرفعال کردن دکمه بر اساس وضعیت چک باکس
            document.getElementById('agreeTerms').addEventListener('change', function() {
                document.getElementById('submitServiceBtn').disabled = !this.checked;
            });

            // نمایش مودال شرایط و قوانین
            function showTerms() {
                document.getElementById('termsModal').style.display = 'flex';
            }

            // بستن مودال شرایط و قوانین
            function closeTermsModal() {
                document.getElementById('termsModal').style.display = 'none';
            }

            document.getElementById('submitServiceBtn').addEventListener('click', function(e) {
                e.preventDefault();
                const btn = this;

                // بررسی آیا چک باکس تیک خورده یا نه
                if (!document.getElementById('agreeTerms').checked) {
                    Swal.fire({
                        icon: 'error',
                        title: 'لطفاً شرایط و قوانین را بپذیرید',
                        confirmButtonText: 'متوجه شدم',
                    });
                    return;
                }

                // فعال کردن حالت لودینگ
                btn.classList.add('btn-loading');
                btn.disabled = true;

                // Check phone number via AJAX
                fetch('{{ route('check.user.phone') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        credentials: 'same-origin'
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.has_phone) {
                            // Proceed with service submission
                            submitService();
                        } else {
                            // غیرفعال کردن حالت لودینگ
                            btn.classList.remove('btn-loading');
                            btn.disabled = false;

                            // Show modal
                            document.getElementById('phoneModal').style.display = 'flex';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        // غیرفعال کردن حالت لودینگ
                        btn.classList.remove('btn-loading');
                        btn.disabled = false;
                    });
            });

            function closeModal() {
                document.getElementById('phoneModal').style.display = 'none';
            }

            function redirectToProfile() {
                window.location.href = '{{ route('users.index') }}';
            }

            async function submitService() {
                const submitBtn = document.getElementById('submitServiceBtn');
                try {
                    const response = await fetch('{{ route('users.service.register') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            service_id: '{{ $service->id }}',
                            description: document.getElementById('description').value
                        })
                    });

                    const data = await response.json().catch(() => {
                        throw new Error('پاسخ سرور معتبر نیست');
                    });

                    if (!response.ok) {
                        throw new Error(data.message || 'خطا در سرور');
                    }

                    Swal.fire({
                        icon: 'success',
                        title: 'درخواست ثبت شد',
                        confirmButtonText: 'متوجه شدم',
                    });

                } catch (error) {
                    Swal.fire({
                        icon: 'error',
                        title: error.message,
                        confirmButtonText: 'متوجه شدم',
                    });
                } finally {
                    // غیرفعال کردن حالت لودینگ
                    submitBtn.classList.remove('btn-loading');
                    submitBtn.disabled = false;
                }
            }
        </script>
    @endpush
@endsection
