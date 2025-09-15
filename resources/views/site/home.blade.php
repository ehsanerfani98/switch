@extends('site.layout')
@section('title', 'خانه')

@section('content')


    <x-sliders-list />

    {{-- <div class="alert alert-info text-center p-2 d-flex align-items-center justify-content-between mt-3" style="font-size: 14px">
        نیاز به مشاوره دارید؟ همین حالا به صورت آنلاین با مشاوران ما گفتگو کنید. <a
            href="{{ route('user.advisors', ['id' => 1]) }}" class="btn btn-sm btn-primary">مشاوره آنلاین</a>
    </div> --}}

    <x-services-list />

    <x-banner-list />

@endsection
