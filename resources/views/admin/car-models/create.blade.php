@extends('admin.layout')
@section('title', 'ایجاد مدل خودرو')

@push('style')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/dist/css/select2.min.css') }}">
@endpush

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

    <form method="POST" action="{{ route('models.store') }}">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">اطلاعات مدل خودرو</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="title">عنوان مدل</label>
                                    <input type="text" name="title" id="title" placeholder="عنوان مدل"
                                        class="form-control" value="{{ old('title') }}" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="brand_id">برند</label>
                                    <select name="brand_id" id="brand_id" class="form-control select2" required>
                                        <option value="">انتخاب برند</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                                {{ $brand->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="years">سال‌ها</label>
                                    <select name="years[]" id="years" class="form-control select2-tags" multiple="multiple" data-tags="true">
                                        @for($year = date('Y'); $year >= 2000; $year--)
                                            <option value="{{ $year }}" {{ in_array($year, old('years', [])) ? 'selected' : '' }}>
                                                {{ $year }}
                                            </option>
                                        @endfor
                                    </select>
                                    <small class="form-text text-muted">می‌توانید سال‌های جدید را تایپ کرده و Enter بزنید</small>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="types">انواع</label>
                                    <select name="types[]" id="types" class="form-control select2-tags" multiple="multiple" data-tags="true">
                                        <option value="صندوق دار" {{ in_array('صندوق دار', old('types', [])) ? 'selected' : '' }}>صندوق دار</option>
                                        <option value="سدان" {{ in_array('سدان', old('types', [])) ? 'selected' : '' }}>سدان</option>
                                        <option value="هاچ بک" {{ in_array('هاچ بک', old('types', [])) ? 'selected' : '' }}>هاچ بک</option>
                                        <option value="شاسی بلند" {{ in_array('شاسی بلند', old('types', [])) ? 'selected' : '' }}>شاسی بلند</option>
                                        <option value="کوپه" {{ in_array('کوپه', old('types', [])) ? 'selected' : '' }}>کوپه</option>
                                        <option value="ون" {{ in_array('ون', old('types', [])) ? 'selected' : '' }}>ون</option>
                                        <option value="پیکاپ" {{ in_array('پیکاپ', old('types', [])) ? 'selected' : '' }}>پیکاپ</option>
                                    </select>
                                    <small class="form-text text-muted">می‌توانید انواع جدید را تایپ کرده و Enter بزنید</small>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="colors">رنگ‌ها</label>
                                    <select name="colors[]" id="colors" class="form-control select2-tags" multiple="multiple" data-tags="true">
                                        <option value="مشکی" {{ in_array('مشکی', old('colors', [])) ? 'selected' : '' }}>مشکی</option>
                                        <option value="سفید" {{ in_array('سفید', old('colors', [])) ? 'selected' : '' }}>سفید</option>
                                        <option value="نقره‌ای" {{ in_array('نقره‌ای', old('colors', [])) ? 'selected' : '' }}>نقره‌ای</option>
                                        <option value="خاکستری" {{ in_array('خاکستری', old('colors', [])) ? 'selected' : '' }}>خاکستری</option>
                                        <option value="قرمز" {{ in_array('قرمز', old('colors', [])) ? 'selected' : '' }}>قرمز</option>
                                        <option value="آبی" {{ in_array('آبی', old('colors', [])) ? 'selected' : '' }}>آبی</option>
                                        <option value="سبز" {{ in_array('سبز', old('colors', [])) ? 'selected' : '' }}>سبز</option>
                                        <option value="زرد" {{ in_array('زرد', old('colors', [])) ? 'selected' : '' }}>زرد</option>
                                        <option value="نارنجی" {{ in_array('نارنجی', old('colors', [])) ? 'selected' : '' }}>نارنجی</option>
                                        <option value="صورتی" {{ in_array('صورتی', old('colors', [])) ? 'selected' : '' }}>صورتی</option>
                                        <option value="بنفش" {{ in_array('بنفش', old('colors', [])) ? 'selected' : '' }}>بنفش</option>
                                        <option value="قهوه‌ای" {{ in_array('قهوه‌ای', old('colors', [])) ? 'selected' : '' }}>قهوه‌ای</option>
                                        <option value="طلایی" {{ in_array('طلایی', old('colors', [])) ? 'selected' : '' }}>طلایی</option>
                                    </select>
                                    <small class="form-text text-muted">می‌توانید رنگ‌های جدید را تایپ کرده و Enter بزنید</small>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">
                            ذخیره
                        </button>
                        <a href="{{ route('models.index') }}" class="btn btn-secondary btn-sm">
                            بازگشت
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('script')
    <script src="{{ asset('admin/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/select2/dist/js/i18n/fa.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Select2 معمولی برای برند
            $('#brand_id').select2({
                rtl: true,
                placeholder: "انتخاب برند"
            });

            // Select2 با قابلیت tags برای سال‌ها، انواع و رنگ‌ها
            $('.select2-tags').select2({
                rtl: true,
                tags: true,
                tokenSeparators: [',', '،'],
                placeholder: "انتخاب کنید یا مقدار جدید وارد کنید",
                createTag: function (params) {
                    var term = $.trim(params.term);

                    if (term === '') {
                        return null;
                    }

                    return {
                        id: term,
                        text: term,
                        newTag: true
                    };
                }
            });

            // اعتبارسنجی برای سال‌ها - فقط اعداد مجاز
            $('#years').on('select2:select', function (e) {
                var data = e.params.data;
                if (data.newTag) {
                    if (!/^\d+$/.test(data.id)) {
                        notifier.alert('فقط اعداد مجاز هستند', {
                            labels: { alert: 'خطا' },
                        });
                        // حذف تگ نامعتبر
                        var $element = $(this);
                        var existingValues = $element.val();
                        existingValues = existingValues.filter(function(value) {
                            return value !== data.id;
                        });
                        $element.val(existingValues).trigger('change');
                    }
                }
            });
        });
    </script>
@endpush