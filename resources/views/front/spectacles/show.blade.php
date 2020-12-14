@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/detail.css') }}">
@endsection

@section('content')
    <main class="main detail">
        <div class="page-heading">
            <div class="heading-imgwr">
                <div class="bg" style="{{ 'background: linear-gradient(90deg, rgba(8, 8, 8, 0) 89.68%, #080808 100%), linear-gradient(90deg, #080808 0%, rgba(8, 8, 8, 0) 12.88%), url(' . MediaHelper::getImageUrl($spectacle, 'image_detail') . ') !important;' }}">
                    <div class="heading-date">
                        <p class="day">
                            {{ DateHelper::dayWeek($spectacle, 'start_at') }}
                        </p>
                        <h2 class="num-day">
                            {{ DateHelper::day($spectacle, 'start_at') }}
                        </h2>
                        <p class="month">
                            {{ DateHelper::month($spectacle, 'start_at') }}
                        </p>
                    </div>
                </div>
                <aside class="social-links">
                    <a href="#" class="soc-link">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="#" class="soc-link">
                        <i class="fa fa-instagram"></i>
                    </a>
                </aside>
            </div>
            <div class="heading-text multiple">
                <h1 class="heading">{{ $spectacle->author }}</h1>
                <p class="multiple-text">{{ $spectacle->producer }}</p>
            </div>
        </div>
        <div class="main-content">
            <div class="detail-seats detail-col">
                <h2 class="form-heading">
                    {{ $vars['place_select'] }}
                </h2>

                @include('front.schemas.schema-' . $spectacle->schema->id, ['spectacle' => $spectacle])

                <div class="seats-total-wr d-flex">
                    <p class="total-price">
                        <span id="totals">
                            @foreach($cartTotals as $price => $qty)
                                <span>{{ $qty }} {{ $vars['spectacle_map_tickets_for'] }} {{ $price }}, </span>
                            @endforeach
                        </span>
                        <span class="total-num" id="total-base">{{ $total }} {{ $vars['spectacle_lei'] }}</span>
                    </p>
                    <button class="bt home-btn">
                        <a href="{{ route('cart.show') }}" class="home-link">
                            {{ $vars['spectacles_buy_tickets'] }}
                        </a>
                    </button>
                </div>
            </div>
            <div class="detail-col-wr detail-gallery">
                <div class="detail-col">
                    <h2 class="detail-heading">
                        {{ $vars['spectacle_gallery_title'] }}
                    </h2>
                    <div class="detail-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($spectacle->image_gallery as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ $image->url }}" alt="" style="max-width: 220px;">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="next swiper-button-next"></div>
                        <div class="prev swiper-button-prev"></div>
                    </div>
                    @if($spectacle->video_youtube_url)
                        <div class="detail-video-wr">
                            <div class="video_wrapper video_wrapper_full js-videoWrapper">
                                <iframe class="videoIframe js-videoIframe" src="" controls frameborder="0"
                                        allowTransparency="true"
                                        allowfullscreen
                                        data-src="{{ $spectacle->video_youtube_url }}?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
                                <button class="videoPoster js-videoPoster"></button>
                            </div>
                            <div class="video-description">
                                <h4 class="video-heading">
                                    {{ $spectacle->video_title }}
                                </h4>
                                <p class="video-text">
                                    {{ $spectacle->video_desc }}
                                </p>
                                <div class="description-footer">
                                    <span class="date">{{ $spectacle->video_date->format('Y.m.d') }}</span>
                                    <a href="{{ $spectacle->video_link }}" class="video-link">{{ $vars['spectacle_video_read_more'] }}
                                        <span class="material-icons">navigate_next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="detail-col-wr detail-program">
                <div class="detail-col">
                    <h2 class="detail-heading">
                        {{ $vars['spectacles_program'] }}
                    </h2>
                    <div class="program-wr d-flex mb-130">
                        <div class="program-col d-flex">
                            <div class="program-row">
                                <span class="program-name">{{ $vars['spectacle_start'] }}</span>
                                <a href="#" class="info-time program-desc">{{ DateHelper::time($spectacle, 'start_at') }}</a>
                            </div>
                            <div class="program-row mb-70">
                                <span class="program-name">{{ $vars['spectacle_duration'] }}</span>
                                <a href="#" class="info-dur program-desc">{{ $spectacle->duration }} {{ $vars['spectacles_min'] }}</a>
                            </div>
{{--                            <p class="program-row-divider">Distribuția:</p>--}}
{{--                            <div class="program-row">--}}
{{--                                <span class="program-name">Regia artistica, scenografia:</span>--}}
{{--                                <a href="#" class="program-person">Alexandru GRECU</a>--}}
{{--                            </div>--}}
{{--                            <div class="program-row">--}}
{{--                                <span class="program-name">Muzica:</span>--}}
{{--                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>--}}
{{--                            </div>--}}
{{--                            <div class="program-row mb-30 bb-0">--}}
{{--                                <span class="program-name">Costume:</span>--}}
{{--                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>--}}
{{--                            </div>--}}
{{--                            <p class="program-row-divider">Actorii</p>--}}
{{--                            <div class="program-row">--}}
{{--                                <span class="program-name">Ance</span>--}}
{{--                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>--}}
{{--                            </div>--}}
{{--                            <div class="program-row">--}}
{{--                                <span class="program-name">Dragomir</span>--}}
{{--                                <a href="#" class="program-person">Ion GROSU</a>--}}
{{--                            </div>--}}
{{--                            <div class="program-row">--}}
{{--                                <span class="program-name">Gheorghe</span>--}}
{{--                                <a href="#" class="program-person">Gheorghe GUSAN</a>--}}
{{--                            </div>--}}
{{--                            <div class="program-row bb-0">--}}
{{--                                <span class="program-name">Ion</span>--}}
{{--                                <a href="#" class="program-person">Alexandru CRILOV</a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="program-col d-flex">
                            <p class="program-text">
                                {{ $spectacle->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="{{ asset('front/js/video.js') }}"></script>
    <script src="{{ asset('front/js/detail-swiper.js') }}"></script>
@endsection
