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
                <h1 class="heading">{{ $worker->title }}</h1>
            </div>
        </div>
        <div class="main-content">
            <div class="about-blocks">
                <h2 class="form-heading">
                    {{ $vars['worker_history_title'] }}
                </h2>

                @if($worker->text_1)
                    <div class="about-block">
                        @if($worker->image)
                            <div class="block-text-wr block-text">
                                {!! $worker->text_1 !!}
                            </div>
                            <div class="block-img-wr">
                                <img src="{{ MediaHelper::getImageUrl($worker, 'image') }}" alt="" style="max-width: {{ $maxWidth = 445 }}px;">
                            </div>
                        @else
                            <div class="block-text-wr block-text" style="width: 100%;">
                                {!! $worker->text_1 !!}
                            </div>
                        @endif
                    </div>
                @endif

                @if($worker->text_2)
                    <div class="about-block block-img-first">
                        @if($worker->image_2 || $worker->image_3)
                            <div class="block-text-wr block-text">
                                {!! $worker->text_2 !!}
                            </div>
                            <div class="block-img-wr">
                                <img class="mb-30" src="{{ MediaHelper::getImageUrl($worker, 'image_2') }}" alt="" style="max-width: {{ $maxWidth }}px;">
                                <img src="{{ MediaHelper::getImageUrl($worker, 'image_3') }}" alt="" style="max-width: {{ $maxWidth }}px;">
                            </div>
                        @else
                            <div class="block-text-wr block-text" style="width: 100%;">
                                {!! $worker->text_2 !!}
                            </div>
                        @endif
                    </div>
                @endif

                @if($worker->text_3)
                    <div class="about-block">
                        @if($worker->image_4)
                            <div class="block-text-wr block-text">
                                {!! $worker->text_3 !!}
                            </div>
                            <div class="block-img-wr">
                                <img src="{{ MediaHelper::getImageUrl($worker, 'image_4') }}" alt="" style="max-width: {{ $maxWidth }}px;">
                            </div>
                        @else
                            <div class="block-text-wr block-text" style="width: 100%;">
                                {!! $worker->text_3 !!}
                            </div>
                        @endif
                    </div>
                @endif
            </div>

            @if($worker->text_4)
                <div class="about-spectacles">
                    <h2 class="form-heading">
                        {!! $vars['worker_spectacles_title'] !!}
                    </h2>
                    {!! $worker->text_4 !!}
                </div>
            @endif

            @if($worker->text_5)
                <div class="about-history">
                    <h2 class="form-heading">
                    {!! $vars['worker_history_title'] !!}
                </h2>
                <div class="history-blocks" style="color: #afafaf;">
                    <div class="dot top"></div>
                    <div class="dot bottom"></div>
                    {!! $worker->text_5 !!}
                    </div>
                </div>
            @endif

            @if($worker->text_6)
                <div class="about-tours">
                    <h2 class="form-heading">
                        {!! $vars['worker_tours_title'] !!}
                    </h2>
                    {!! $worker->text_6 !!}
                </div>
            @endif

            @if($worker->image_gallery->count())
                <div class="about-gallery">
                    <h2 class="form-heading">
                        {!! $vars['worker_gallery_title'] !!}
                    </h2>
                    <div class="gallery-wr">
                        @foreach($worker->image_gallery as $image)
                            @php
                                $maxWidth = 225;
                                if ($loop->iteration === 3 || $loop->iteration === 6 || $loop->iteration === 7) {
                                    $maxWidth = 540;
                                }
                            @endphp
                            <div class="gallery-item">
                                <img src="{{ $image->url }}" alt="" style="max-width: {{ $maxWidth }}px;">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </main>
@endsection

@section('scripts')
@endsection
