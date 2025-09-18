@extends('admin.layout')
@section('title', 'ویرایش ماشین')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                notifier.alert('{{ $error }}', {
                    labels: {
                        alert: 'خطا'
                    }
                })
            </script>
        @endforeach
    @endif

    <form action="{{ route('cars.update', $car->id) }}" method="POST" id="car-form">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">ویرایش ماشین</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- عنوان -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>عنوان</label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ old('title', $car->title) }}">
                                </div>
                            </div>

                            <!-- نامک -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>نامک</label>
                                    <input type="text" name="slug" class="form-control"
                                        value="{{ old('slug', $car->slug) }}">
                                </div>
                            </div>

                            <!-- توضیحات -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label>توضیحات</label>
                                    <textarea name="description" class="form-control">{{ old('description', $car->description) }}</textarea>
                                </div>
                            </div>

                            <!-- کانتینر ویژگی‌ها -->
                            <div class="col-12">
                                <hr>
                                <div id="attributes-container" class="row"></div>
                            </div>
                        </div>

                        <button type="button" id="add-attribute" class="btn btn-success btn-sm mt-2">افزودن ویژگی</button>
                        <button type="submit" class="btn btn-success btn-sm mt-2">ذخیره تغییرات</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

@push('script')
    <script>
        let attributes = @json($attributes);
        let carAttributes = @json($car->attributeValues);

        function findAttribute(id) {
            return attributes.find(a => String(a.id) === String(id));
        }

        // ساخت select برای انتخاب ویژگی
        function makeAttributeSelect(rowKey, selectedId = '') {
            let options = '<option value="">-- انتخاب ویژگی --</option>';
            attributes.forEach(a => {
                let sel = selectedId && String(selectedId) === String(a.id) ? 'selected' : '';
                options += `<option value="${a.id}" data-type="${a.type}" ${sel}>${a.label}</option>`;
            });
            return `<select name="car_attributes[${rowKey}][attribute_id]" class="form-control attribute-select">${options}</select>`;
        }

        // ساخت input مناسب برای مقدار ویژگی
        function makeValueInput(rowKey, attr, selectedValue = null, selectedLabel = null) {
            if (!attr) return '';

            if (attr.type === 'select') {
                if (!attr.values) return '';
                let hasSelected = false;
                let optionsHtml = attr.values.map(v => {
                    let checked = selectedValue && String(selectedValue) === String(v.id) ? 'checked' : '';
                    if (checked) hasSelected = true;
                    return `<div class="form-check">
                <input class="form-check-input" type="radio" name="car_attributes[${rowKey}][value]" value="${v.id}" ${checked}>
                <label class="form-check-label">${v.value}</label>
            </div>`;
                }).join('');

                // اگر هیچ گزینه‌ای انتخاب نشده بود، اولین گزینه را انتخاب کن
                if (!hasSelected && attr.values.length > 0) {
                    optionsHtml = optionsHtml.replace(
                        'value="' + attr.values[0].id + '"',
                        'value="' + attr.values[0].id + '" checked'
                    );
                }

                return optionsHtml;
            } else if (['string', 'number', 'range'].includes(attr.type)) {
                return `<input type="text" name="car_attributes[${rowKey}][value]" class="form-control" value="${selectedValue ?? ''}">`;
            } else if (attr.type === 'boolean') {
                // استفاده از برچسب‌های سفارشی کاربر اگر وجود داشته باشد
                let trueLabel = 'بله';
                let falseLabel = 'خیر';

                if (selectedLabel) {
                    const labels = selectedLabel.split(',');
                    trueLabel = labels[0] || 'بله';
                    falseLabel = labels[1] || 'خیر';
                } else if (attr.value_boolean_label) {
                    const labels = attr.value_boolean_label.split(',');
                    trueLabel = labels[0] || 'بله';
                    falseLabel = labels[1] || 'خیر';
                }

                // همیشه یکی از گزینه‌ها باید انتخاب شده باشد
                let checkedTrue = 'checked';
                let checkedFalse = '';

                if (selectedValue !== null) {
                    checkedTrue = (selectedValue === true || selectedValue === '1' || selectedValue === 1) ? 'checked' : '';
                    checkedFalse = (selectedValue === false || selectedValue === '0' || selectedValue === 0) ? 'checked' :
                        '';
                }

                return `
        <div class="form-check d-inline me-2">
            <input class="form-check-input" type="radio" name="car_attributes[${rowKey}][value]" value="1" ${checkedTrue}>
            <label class="form-check-label boolean-label" data-row="${rowKey}" data-value="1">${trueLabel}</label>
        </div>
        <div class="form-check d-inline">
            <input class="form-check-input" type="radio" name="car_attributes[${rowKey}][value]" value="0" ${checkedFalse}>
            <label class="form-check-label boolean-label" data-row="${rowKey}" data-value="0">${falseLabel}</label>
        </div>
        <input type="hidden" name="car_attributes[${rowKey}][value_boolean_label]" class="boolean-label-input" value="${trueLabel},${falseLabel}">`;
            }

            return '';
        }

        // افزودن یک ردیف ویژگی جدید
        function addAttributeRow(prefill = null) {
            let rowKey = Date.now() + Math.floor(Math.random() * 1000);
            let selectedAttrId = prefill ? prefill.attribute_id : '';
            let selectedValue = prefill ? prefill.value : null;
            let selectedLabel = prefill ? prefill.value_boolean_label : null;

            let row = $(`<div class="attribute-row mt-2 col-lg-3" data-row="${rowKey}">
        <div class="border rounded-lg p-1">
            <div class="d-flex justify-content-between mb-2">
                <strong>ویژگی</strong>
                <button type="button" class="btn btn-sm btn-danger remove-attribute">حذف</button>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">${makeAttributeSelect(rowKey, selectedAttrId)}</div>
                </div>
                <div class="col-md-6">
                    <div class="form-group attribute-value" data-row="${rowKey}"></div>
                </div>
            </div>
        </div>
    </div>`);

            $("#attributes-container").append(row);

            if (selectedAttrId) {
                let attr = findAttribute(selectedAttrId);
                if (attr) {
                    let html = makeValueInput(rowKey, attr, selectedValue, selectedLabel);
                    row.find('.attribute-value').html(html);
                }
            }
        }

        $(document).ready(function() {
            // افزودن ویژگی‌های موجود ماشین
            carAttributes.forEach(function(attr) {
                let value = null;
                let label = null;
                if (attr.attribute_value_id) {
                    value = attr.attribute_value_id;
                } else if (attr.value_string) {
                    value = attr.value_string;
                } else if (attr.value_number) {
                    value = attr.value_number;
                } else if (attr.value_boolean !== null) {
                    value = attr.value_boolean ? '1' : '0';
                    label = attr.value_boolean_label; // اینجا از relation attributeValues مقداردهی می‌شود
                }

                addAttributeRow({
                    attribute_id: attr.attribute_id,
                    value: value,
                    value_boolean_label: label // ارسال برچسب Boolean از relation
                });
            });

            // افزودن ردیف ویژگی جدید
            $(document).on('click', '#add-attribute', function(e) {
                e.preventDefault();
                addAttributeRow();
            });

            // حذف ردیف ویژگی
            $(document).on('click', '.remove-attribute', function() {
                $(this).closest('.attribute-row').remove();
            });

            // تغییر select ویژگی
            $(document).on('change', '.attribute-select', function() {
                let rowDiv = $(this).closest('.attribute-row');
                let rowKey = rowDiv.data('row');
                let attrId = $(this).val();

                // بررسی تکراری نبودن ویژگی
                let duplicate = false;
                $('.attribute-select').not(this).each(function() {
                    if ($(this).val() === attrId && attrId !== "") {
                        duplicate = true;
                    }
                });

                if (duplicate) {
                    alert('این ویژگی قبلاً انتخاب شده است');
                    $(this).val(""); // ریست کن
                    rowDiv.find('.attribute-value').html('');
                    return;
                }

                let attr = findAttribute(attrId);
                let container = rowDiv.find('.attribute-value');

                container.html('');
                if (!attr) return;

                let html = makeValueInput(rowKey, attr);
                container.html(html);
            });

            // ویرایش لیبل boolean
            $(document).on('click', '.boolean-label', function() {
                let label = $(this);
                let currentText = label.text();
                let input = $(
                    `<input type="text" class="form-control form-control-sm boolean-label-edit" value="${currentText}">`
                );
                label.hide().after(input);
                input.focus();

                input.on('blur', function() {
                    let newText = $(this).val() || currentText;
                    label.text(newText).show();
                    $(this).remove();

                    // آپدیت hidden input
                    let rowKey = label.data('row');
                    let allLabels = [];
                    label.closest('.attribute-value').find('.boolean-label').each(function() {
                        allLabels.push($(this).text());
                    });
                    label.closest('.attribute-value').find('.boolean-label-input').val(allLabels
                        .join(','));
                });
            });

            // قبل از submit فرم hidden input های boolean را آپدیت کن
            $('#car-form').on('submit', function() {
                $('.attribute-value').each(function() {
                    let labels = [];
                    $(this).find('.boolean-label').each(function() {
                        labels.push($(this).text());
                    });
                    $(this).find('.boolean-label-input').val(labels.join(','));
                });
            });

        });
    </script>
@endpush
