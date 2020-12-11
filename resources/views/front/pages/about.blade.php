@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front/css/about.css') }}">
@endsection

@section('content')
    <main class="main about">
        <div class="page-heading">
            <div class="heading-imgwr">
                <div class="bg"></div>
                <aside class="social-links">
                    <a href="#" class="soc-link">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="#" class="soc-link">
                        <i class="fa fa-instagram"></i>
                    </a>
                </aside>
            </div>
            <div class="heading-text">
                <h1 class="heading">{{ $about->title }}</h1>
            </div>
        </div>
        <div class="main-content">
            <div class="about-blocks">
                <h2 class="form-heading">
                    Istorie
                </h2>
                <div class="about-block">
                    <div class="block-text-wr block-text">
                       {!! $about->text_1 !!}
                    </div>
                    <div class="block-img-wr">
                        <img src="{{ MediaHelper::getImageUrl($about, 'image_1') }}" alt="">
                        <img class="sign" src="{{ asset('front/img/about-block-1-2.svg') }}" alt="">
                    </div>
                </div>
                <div class="about-block block-img-first">
                    <div class="block-text-wr block-text">
                        {!! $about->text_2 !!}
                    </div>
                    <div class="block-img-wr">
                        <img class="mb-30" src="{{ MediaHelper::getImageUrl($about, 'image_2') }}" alt="">
                        <img src="{{ MediaHelper::getImageUrl($about, 'image_3') }}" alt="">
                    </div>
                </div>
                <div class="about-block">
                    <div class="block-text-wr block-text">
                        {!! $about->text_3 !!}
                    </div>
                    <div class="block-img-wr">
                        <img src="{{ MediaHelper::getImageUrl($about, 'image_4') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="about-spectacles">
                <h2 class="form-heading">
                    {!! $vars['about_spectacles_title'] !!}
                </h2>
                {!! $about->text_4 !!}
            </div>
            <div class="about-history">
                <h2 class="form-heading">
                {!! $vars['about_history_title'] !!}
            </h2>
            <div class="history-blocks">
                <div class="dot top"></div>
                <div class="dot bottom"></div>
                {!! $about->text_5 !!}
                </div>
            </div>
            <div class="about-tours">
                <h2 class="form-heading">
                    {!! $vars['about_tours_title'] !!}
                </h2>
                {!! $about->text_6 !!}
{{--                <div class="tours-row">--}}
{{--                    <a href="#" class="tours-link">vezi mai mult <span class="material-icons">expand_more</span></a>--}}
{{--                </div>--}}
            </div>
            <div class="about-gallery">
                <h2 class="form-heading">
                    {!! $vars['about_gallery_title'] !!}
                </h2>
                <div class="gallery-wr">
                    @foreach($about->image_gallery as $image)
                        <div class="gallery-item">
                            <img src="{{ $image->url }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
@endsection
