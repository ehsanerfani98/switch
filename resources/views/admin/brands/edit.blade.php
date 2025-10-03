@extends('admin.layout')
@section('title', 'ویرایش برند')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                notifier.alert('{{ $error }}', {
                    labels: {
                        alert: 'خطا'
                    },
                })
            </script>
        @endforeach
    @endif

    <form method="POST" action="{{ route('brands.update', $brand->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">اطلاعات برند</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="title">عنوان برند</label>
                                    <input type="text" name="title" id="title" placeholder="عنوان برند"
                                        class="form-control" value="{{ $brand->title }}" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="slug">اسلاگ</label>
                                    <input type="text" name="slug" id="slug" placeholder="اسلاگ"
                                        class="form-control" value="{{ $brand->slug }}" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="icon">آیکن</label>
                                    <x-media-picker name="icon" id="icon" value="{{ old('icon', $brand->icon) }}" />
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">
                            ذخیره
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('script')
    <script>
        /* ---------- استاندارد‌سازی اسلاگ (بدون تبدیل حروف) ---------- */
        function standardizeSlug(str) {
            return str
                .trim()
                // هرچه غیر از حروف، اعداد، فضا و - است را حذف کن
                .replace(/[^\p{L}\p{N}\s-]+/gu, '')
                // فضا و خط‌تیره‌های پیاپی را به یک - تبدیل کن
                .replace(/[\s-]+/g, '-')
                // - اضافی ابتدا/انتها را بردار
                .replace(/^-+|-+$/g, '');
        }

        /* ---------- اتصال به فیلد عنوان ---------- */
        $(document).on('input', 'input[name="title"]', function() {
            const slug = standardizeSlug($(this).val());
            $('input[name="slug"]').val(slug);
        });
    </script>
@endpush
