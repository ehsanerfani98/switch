@extends('site.layout')
@section('title', 'درخواست‌های سرویس من')

@section('css')
    <style>
        .card-service-request {
            transition: all 0.3s ease;
            border-radius: 12px;
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 16px;
        }

        .card-service-request:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .status-badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .completed {
            background-color: #e6f7ee;
            color: #10b759;
        }

        .approved {
            background-color: #e7edff;
            color: #103db7;
        }

        .rejected {
            background-color: #fde8e8;
            color: #f04438;
        }

        .pending {
            background-color: #fff4e5;
            color: #ff9900;
        }

        .in_progress {
            background-color: #e0f2fe;
            color: #0ea5e9;
        }

        .service-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 1.2rem;
        }

        .completed-icon {
            background-color: #d1fae5;
            color: #10b759;
        }

        .approved-icon {
            background-color: #e7edff;
            color: #103db7;
        }

        .rejected-icon {
            background-color: #fee2e2;
            color: #f04438;
        }

        .pending-icon {
            background-color: #fff4e5;
            color: #ff9900;
        }

        .in_progress-icon {
            background-color: #e0f2fe;
            color: #0ea5e9;
        }
    </style>
@endsection

@section('content')

    @session('error')
        <div class="alert alert-danger text-center p-2" role="alert" style="font-size: 14px">
            {{ $value }}
        </div>
    @endsession

    <div class="row">
        <div class="col-12">
            @if ($serviceRequests->isEmpty())
                <div class="text-center py-5">
                    <i class="bi bi-inbox text-muted" style="font-size: 3rem;"></i>
                    <p class="text-muted mt-3">هیچ درخواست سرویسی یافت نشد.</p>
                </div>
            @else
                <div class="row">
                    @foreach ($serviceRequests as $request)
                        @php
                            $statusValue = is_object($request->status) ? $request->status->value : $request->status;
                            $statusEnum =
                                \App\Enums\ServiceRequestStatusEnum::tryFrom($statusValue) ??
                                \App\Enums\ServiceRequestStatusEnum::PENDING;

                            $statusClass = match ($statusEnum->value) {
                                'completed' => 'completed',
                                'rejected' => 'rejected',
                                'pending' => 'pending',
                                'approved' => 'approved',
                                'in_progress' => 'in_progress',
                                default => 'pending',
                            };
                            $iconClass = match ($statusEnum->value) {
                                'completed' => 'bi-check2-all',
                                'approved' => 'bi-check-circle-fill',
                                'rejected' => 'bi-x-circle-fill',
                                'pending' => 'bi-clock-fill',
                                'in_progress' => 'bi-arrow-repeat',
                                default => 'bi-clock-fill',
                            };
                        @endphp

                        <div class="col-12">
                            <div class="card card-service-request">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="service-icon {{ $statusClass }}-icon">
                                                <i class="bi {{ $iconClass }} d-inline-flex"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-1" style="font-size: 16px">{{ $request->service->name }}
                                                </h5>
                                                <p class="text-muted small mb-0">
                                                    {{ jdate($request->requested_at)->format('Y/m/d H:i') }}
                                                </p>
                                            </div>
                                        </div>
                                        <span class="status-badge {{ $statusClass }}">
                                            {{ $statusEnum->label() }}
                                        </span>
                                    </div>

                                    <div class="mt-3 pt-2 border-top">
                                        <div class="d-flex justify-content-between align-items-center my-2">
                                            {{-- توضیحات درخواست --}}
                                            <div>
                                                <p class="mb-1 text-muted small">
                                                    <i class="bi bi-chat-left-text text-primary me-1"></i> توضیحات درخواست
                                                </p>
                                                <p class="mb-0" style="font-size: 12px">
                                                    {{ $request->description ?? '---' }}
                                                </p>
                                            </div>

                                            {{-- پاسخ کارشناس --}}
                                            @if ($request->admin_notes)
                                                <div>
                                                    <p class="mb-1 text-muted small">
                                                        <i class="bi bi-person-check text-info me-1"></i> پاسخ کارشناس
                                                    </p>
                                                    <p class="mb-0" style="font-size: 12px">
                                                        {{ $request->admin_notes }}
                                                    </p>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center my-2">
                                            {{-- دلیل رد درخواست --}}
                                            @if ($statusClass === 'rejected' && $request->rejection_reason)
                                                <div>
                                                    <p class="mb-1 text-muted small">
                                                        <i class="bi bi-exclamation-triangle text-danger me-1"></i> دلیل رد
                                                        درخواست
                                                    </p>
                                                    <p class="mb-0" style="font-size: 12px">
                                                        {{ $request->rejection_reason }}
                                                    </p>
                                                </div>
                                            @endif

                                            {{-- تاریخ تکمیل --}}
                                            @if ($request->status === 'completed' && $request->completed_at)
                                                <div>
                                                    <p class="mb-1 text-muted small">
                                                        <i class="bi bi-check-circle text-success me-1"></i> تاریخ تکمیل
                                                    </p>
                                                    <p class="mb-0" style="font-size: 12px">
                                                        {{ jdate($request->completed_at)->format('Y/m/d H:i') }}
                                                    </p>
                                                </div>
                                            @endif
                                        </div>

                                        <div
                                            class="d-flex justify-content-between align-items-center text-muted small mt-3">
                                            <div>
                                                <i class="bi bi-hash text-secondary me-1"></i>
                                                <span>شناسه درخواست:
                                                    <span class="text-dark fw-semibold" style="font-size: 12px">
                                                        {{ $request->id }}
                                                    </span>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="text-dark fw-semibold" style="font-size: 12px">
                                                    <i class="bi bi-clock-history me-1"></i>
                                                    آخرین بروزرسانی: {{ jdate($request->updated_at)->format('Y/m/d H:i') }}
                                                </span>
                                            </div>
                                        </div>

                                        @if ($request->status === 'pending')
                                            <div class="mt-3 pt-2 border-top">
                                                <form action="{{ route('service-requests.cancel', $request->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                                        <i class="bi bi-x-circle"></i> لغو درخواست
                                                    </button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-4 d-flex justify-content-center">
                    {{ $serviceRequests->links('vendor.pagination.bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
@endsection
