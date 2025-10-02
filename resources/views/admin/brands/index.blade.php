@extends('admin.layout')
@section('title', 'مدیریت برندها')

@section('content')

    @session('error')
        <script>
            notifier.alert('{{ session('error') }}', {
                labels: {
                    alert: 'خطا'
                },
            })
        </script>
    @endsession

    @session('success')
        <script>
            notifier.success('{{ session('success') }}', {
                labels: {
                    success: 'تبریک'
                },
            })
        </script>
    @endsession

    <div class="row">
        <div class="col-12">
            <div class="px-2 d-flex align-items-center justify-content-between">
                <h5 class="text-bold-700 my-2 text-white">لیست برندها</h5>
                <div>
                    <a href="{{ route('brands.create') }}" class="btn btn-sm text-white border-btn">
                        <span class="text">ایجاد برند جدید</span>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped compact dataTable" id="recent-project-table"
                            style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>شناسه</th>
                                    <th>عنوان</th>
                                    <th>آیکن</th>
                                    <th>نامک</th>
                                    <th>تعداد مدل‌ها</th>
                                    <th>اقدامات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                    <tr>
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->title }}</td>
                                        <td>
                                            @if ($brand->icon)
                                                <i class="{{ $brand->icon }}"></i>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{{ $brand->slug }}</td>
                                        <td>
                                            <span class="badge badge-info">{{ $brand->car_models_count }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-primary btn-sm">
                                                ویرایش
                                            </a>

                                            <form method="POST" action="{{ route('brands.destroy', $brand->id) }}" style="display:inline-block"
                                                onsubmit="return confirm('آیا از حذف برند مطمئن هستید؟')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    حذف
                                                </button>
                                            </form>

                                            <a href="{{ route('models.index', ['brand_id' => $brand->id]) }}"
                                                class="btn btn-info btn-sm">
                                                مشاهده مدل‌ها
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $brands->links('pagination::bootstrap-5') !!}

@endsection
