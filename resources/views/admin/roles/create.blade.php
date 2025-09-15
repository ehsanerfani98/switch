@extends('admin.layout')
@section('title', 'ایجاد نقش جدید')
@section('actions')
    <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm btn-icon-split">
        <span class="text-white-50">
            <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">برگشت</span>
    </a>
@endsection

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

    <form method="POST" action="{{ route('roles.store') }}">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">اطلاعات نقش</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">نام</label>
                                    <input type="text" name="name" placeholder="نام" class="form-control"
                                        value="">
                                </div>
                                <div class="col-lg-6">
                                    <label for="">عنوان</label>
                                    <input type="text" name="title" placeholder="عنوان" class="form-control"
                                        value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">مجوزها</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                @foreach ($permission as $value)
                                    <div class="col-lg-3 mb-2">
                                        <label><input type="checkbox" name="permission[{{ $value->id }}]"
                                                value="{{ $value->id }}" class="name">
                                            {{ $value->title }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <button ype="submit" class="btn btn-success btn-sm">
                    ذخیره
                </button>
            </div>
        </div>
    </form>


@endsection
