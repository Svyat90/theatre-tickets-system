@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/home.css') }}">
@endsection

@section('content')
    <main class="main home">
        <div class="page-heading">
            <div class="heading-imgwr">
                <div class="bg">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($sliders as $slider)
                                <div class="swiper-slide">
                                    <div class="slide-wr d-flex">
                                        <div class="slide-desc d-flex">
                                            <div class="slide-text d-flex">
                                                    <p class="month">{{  DateHelper::month($slider) }}</p>
                                                <p class="day">{{ DateHelper::day($slider) }}</p>
                                                <p class="author d-flex">
                                                    <span class="name">{{ $slider->name }}</span>
                                                    <span class="time">{{ DateHelper::time($slider) }}</span>
                                                </p>
                                                <h1 class="spec-name">{{ $slider->title }}</h1>
                                                <p class="spec-desc">{{ $slider->description }}</p>
                                                <button class="bt home-btn">
                                                    <a href="{{ $slider->url }}" class="home-link">
                                                        {{ $vars['home_add_to_cart'] }}
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="slide-img">
                                            <picture>
                                                <source srcset="{{ MediaHelper::getImageUrl($slider) }}" media="(min-width: 576px)">
                                                <source srcset="{{ MediaHelper::getImageUrl($slider) }}" media="(min-width: 280px">
                                                <img src="{{ MediaHelper::getImageUrl($slider) }}" alt="">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination">
                            <span id="current-slide">01</span>
                            <span id="next-slide">02</span>
                            <span id="next-2-slide">03</span>
                        </div>
                        <div class="swiper-pages">
                            <span id="page-1">01</span>
                            <span id="page-2">02</span>
                            <span id="page-3">03</span>
                        </div>
                        <div class="next swiper-button-next"></div>
                        <div class="prev swiper-button-prev"></div>
                    </div>
                </div>
                <aside class="social-links">
                    <a href="{{ $vars['soc_link_facebook'] }}" class="soc-link">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="{{ $vars['soc_link_intagram'] }}" class="soc-link">
                        <i class="fa fa-instagram"></i>
                    </a>
                </aside>
            </div>
        </div>
        <div class="main-content">
            <div class="home-heading-wr d-flex">
                <h2 class="form-heading">{{ $vars['spectacles_repertoire'] }}</h2>
                <a class="main-link d-flex" href="{{ route('spectacles.index') }}">{{ $vars['spectacles_all'] }} <span class="material-icons">navigate_next</span></a>
            </div>
            <div class="cart-tickets d-flex">
                @foreach($spectacles as $spectacle)
                    <div class="cart-ticket d-flex">
                        <div class="circle circle-bottom"></div>
                        <div class="circle circle-top"></div>
                        <div class="col-date premiere d-flex">
                            <p class="premiere-text">
                                @if($spectacle->is_premiera)
                                {{ $vars['spectacles_premiera'] }}
                                @endif
                            </p>
                            <div class="heading-date">
                                <p class="m-age">{{ $spectacle->min_age }}+</p>
                                <p class="day">{{ DateHelper::dayWeek($spectacle, 'start_at') }}</p>
                                <h4 class="num-day">{{ DateHelper::day($spectacle, 'start_at') }}</h4>
                                <p class="month">{{ DateHelper::month($spectacle, 'start_at') }}</p>
                            </div>
                        </div>
                        <div class="col-content d-flex"
                            style="{{ 'background: linear-gradient(269.55deg, rgba(32, 32, 32, 0) 85.72%, #202020 99.54%), url(' . MediaHelper::getImageUrl($spectacle, 'image_grid') . ') no-repeat !important;' }}">
                            <div class="heading-title">
                                <p class="title-author">{{ $spectacle->author }}</p>
                                <p class="title-group">{{ $spectacle->producer }}</p>
                                <a href="{{ route('spectacles.show', $spectacle->id) }}" class="title-name">{{ $spectacle->name }}</a>
                            </div>
                            <div class="ticket-info">
                                <div class="info-time">
                                    <span class="info-text">{{  DateHelper::time($spectacle, 'start_at') }}</span>
                                </div>
                                <div class="info-duration mr-auto">
                                    <span class="info-text">{{  $spectacle->duration  }} {{ $vars['spectacles_min'] }}</span>
                                </div>
                                <div class="info-age">
                                    <span class="info-sala">SALA MARE</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-tickets d-flex">
                            <div class="tickets-wr">
                                <p class="home-link">Pret: 40-100 lei</p>
                                <a href="{{ route('spectacles.show', $spectacle->id) }}" class="ticket-buy-link">{{ $vars['spectacles_buy_tickets'] }}</a>
                            </div>
                            <div class="tickets-total">
                                <p class="total-text d-flex">
                                    <span class="home-age">SALA MARE</span>
                                    <span class="home-age-num">{{ $spectacle->min_age }}+</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex mob-link">
                    <a href="{{ route('spectacles.index') }}" class="main-link">{{ $vars['spectacles_all'] }} <span class="material-icons">navigate_next</span></a>
                </div>
            </div>

            <div class="home-noutati d-flex">
                <div class="noutati-col noutati-col-video">
                    <div class="home-heading-wr d-flex">
                        <h2 class="form-heading">{{ $vars['news'] }}</h2>
                        <a class="main-link d-flex" href="{{ route('articles.index') }}">{{ $vars['news_all'] }}<span class="material-icons">navigate_next</span></a>
                    </div>
                    @if($articleVideo)
                        <div class="main-video-wr">
                            <div class="video_wrapper video_wrapper_full js-videoWrapper">
                                <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true"
                                        allowfullscreen
                                        data-src="{{ $articleVideo->video_url }}?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
                                <button class="videoPoster js-videoPoster"></button>
                            </div>
                            <div class="video-description" style="width: 100%;">
                                <p class="video-title">
                                    {{ $articleVideo->name }}
                                </p>
                                <p class="video-date">
                                    {{ $articleVideo->date ? $articleVideo->date->format('d. m. Y') : '' }}
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="noutati-col noutati-col-text">
                    @foreach($articles as $article)
                        @php
                            $class = '';
                            if ($loop->first) {
                                $class = 'pb30 bb';
                            } elseif ($loop->last) {
                                $class = 'pt30';
                            } else {
                                $class = 'pb30 pt30 bb';
                            }
                        @endphp

                        <div class="text-note d-flex {{ $class }}">
                            <div class="note-img">
                                <img src="{{ MediaHelper::getImageUrl($article, 'image', true) }}" alt="" style="max-width: 65px;">
                            </div>
                            <div class="note-desc">
                                <a class="note-title" href="{{ route('articles.show', $article->id) }}">
                                    {{ $article->name }}
                                </a>
                                <p class="desc-text">
                                    {{ $article->title }}
                                </p>
                                <a class="main-link" href="{{ route('articles.show', $article->id) }}">{{ $vars['news_details'] }} <span class="material-icons">navigate_next</span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="home-gallery d-flex">
                @foreach($gallery as $chunkKey => $chunkItems)
                    @if($chunkKey === 0)
                        <div class="home-gallery-col col-l">
                            <div class="home-heading-wr d-flex">
                                <h2 class="form-heading">{{ $vars['home_gallery_title'] }}</h2>
                                <a class="main-link d-flex">{{ $vars['home_all_photos'] }}<span class="material-icons">navigate_next</span></a>
                            </div>
                            <p class="gallery-text">
                                {{ $vars['home_gallery_text'] }}
                            </p>
                            @foreach ($chunkItems as $chunkItem)
                                @if($loop->index === 0)
                                    <div class="gallery-img-wr mb55">
                                        <a href="#">
                                            <img src="{{ MediaHelper::getImageUrl($chunkItem) }}" alt="">
                                        </a>
                                        <a class="img-name">{{ $chunkItem->title }}</a>
                                        <p class="img-date">{{ $chunkItem->date->format('d.m.Y') }}</p>
                                    </div>
                                @else
                                    <div class="gallery-img-wr pl95 mmb39">
                                        <a href="#">
                                            <img src="{{ MediaHelper::getImageUrl($chunkItem) }}" alt="">
                                        </a>
                                        <a class="img-name">{{ $chunkItem->title }}</a>
                                        <p class="img-date">{{ $chunkItem->date->format('d.m.Y') }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div class="home-gallery-col">
                            @foreach ($chunkItems as $chunkItem)
                                @if($loop->index === 0)
                                    <div class="gallery-img-wr pl95 mb115">
                                        <a href="#">
                                            <img src="{{ MediaHelper::getImageUrl($chunkItem) }}" alt="">
                                        </a>
                                        <a class="img-name">{{ $chunkItem->title }}</a>
                                        <p class="img-date">{{ $chunkItem->date->format('d.m.Y') }}</p>
                                    </div>
                                @else
                                    <div class="gallery-img-wr pr95 mpt70">
                                        <a href="#">
                                            <img src="{{ MediaHelper::getImageUrl($chunkItem) }}" alt="">
                                        </a>
                                        <a class="img-name">{{ $chunkItem->title }}</a>
                                        <p class="img-date">{{ $chunkItem->date->format('d.m.Y') }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="home-citate">
                <div class="citate-bg-wr"></div>
                <h2 class="form-heading">
                    {{ $vars['home_famous_quotes'] }}
                </h2>
                @foreach($quotes as $quote)
                    <div class="citate-wr brt">
                        <div class="quot-wr">
                            <img src="{{ asset('front/img/home-quot.svg') }}" alt="quotes">
                        </div>
                        <div class="l-wr d-flex">
                            <p class="citate-text">
                                {{ $quote->description }}
                            </p>
                            <div class="citate-person">
                                <img src="{{ $quote->image ? $quote->image->getFullUrl() : '' }}" alt="">
                                <p class="person-name">{{ $quote->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="home-montare">
                <h2 class="form-heading">{{ $vars['home_in_assembly'] }}</h2>
                @foreach($assemblies as $assembly)
                    <div class="montare-row d-flex">
                        <a class="montare-name" href="{{ $assembly->url ?? '' }}">{{ $assembly->name }}</a>
                        <p class="montare-people">
                            <span class="montare-author">{{ $assembly->title }}</span>
                            <span class="montare-group">{{ strip_tags($assembly->description) }}</span>
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="home-map" id="map">
                <div class="map-message">
                    <p class="map-text">{{ $vars['map_address'] }}</p>
                    <p class="map-text">{{ $vars['map_text_phone'] }}</p>
                    <p class="map-text">{{ $vars['map_text_email'] }}</p>
                    <img class="map-geo" src="{{ asset('front/img/home-map-geo.svg') }}" alt="">
                </div>
                <div class="heading-text">
                    <h1 class="heading">{{ $vars['home_map_details_text'] }}</h1>
                    <a href="{{ $vars['home_map_details_button_link'] }}" class="ticket-buy-link link-red">{{ $vars['home_map_details_button_text'] }}</a>
                </div>
            </div>
            <style type="text/css">
                .ymaps-layers-pane {
                    -ms-filter: brightness(0.21) grayscale(1) contrast(1.24);
                    -webkit-filter: brightness(0.21) grayscale(1) contrast(1.24);
                    -moz-filter: brightness(0.21) grayscale(1) contrast(1.24);
                    -o-filter: brightness(0.21) grayscale(1) contrast(1.24);
                    filter: brightness(0.21) grayscale(1) contrast(1.24);
                }

                .yamaps-map {
                    z-index: 0;
                }
            </style>

            <div class="home-team">
                <h2 class="form-heading">{{ $vars['home_team_title'] }}</h2>
                <p class="team-pretext">
                    {{ $vars['home_team_text'] }}
                </p>
                <a class="main-link ml-auto" href="{{ route('workers.index') }}">{{ $vars['home_all_actors'] }} <span class="material-icons">navigate_next</span></a>
                <div class="sl-team-wr">
                    <div class="team-wr swiper-wrapper">
                        @foreach($workers as $worker)
                            <div class="team-item">
                                <a class="item-img-wr">
                                    <img src="{{ MediaHelper::getImageUrl($worker) }}" alt="">
                                </a>
                                <div class="item-text-wr">
                                    <a class="item-text item-text-name">
                                        {{ $worker->name }}
                                    </a>
                                    <p class="item-text">
                                        {{ $worker->title }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="t-swiper-pagination"></div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="{{ asset('front/js/home-swiper.js') }}"></script>
    <script src="{{ asset('front/js/video.js') }}"></script>
    <script src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>
    <script>
        ymaps.ready(init);
        var x = 47.023242
        if (window.innerWidth < 575)
            x = 47.022222

        function init() {
            var myMap = new ymaps.Map("map", {center: [x, 28.837866], zoom: 16});
        }
    </script>

@endsection
