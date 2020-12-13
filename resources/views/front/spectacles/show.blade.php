@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/detail.css') }}">
@endsection

@section('content')
    <main class="main detail">
        <div class="page-heading">
            <div class="heading-imgwr">
                <div class="bg">
                    <div class="heading-date">
                        <p class="day">
                            Duminica
                        </p>
                        <h2 class="num-day">
                            26
                        </h2>
                        <p class="month">
                            Iulie
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
                <h1 class="heading">Năpasta</h1>
                <p class="multiple-text">de Ion Luca Caragiale</p>
            </div>
        </div>
        <div class="main-content">
            <div class="detail-seats detail-col">
                <h2 class="form-heading">
                    Alege un loc
                </h2>

                @include('front.schemas.schema-' . $spectacle->schema->id, ['spectacle' => $spectacle])

                <div class="seats-total-wr d-flex">
                    <p class="total-price">
                        <span id="totals">
                            @foreach($cartTotals as $price => $qty)
                                <span>{{ $qty }} {{ $vars['spectacle_map_tickets_for'] }} {{ $price }}, </span>
                            @endforeach
                        </span>
                        <span class="total-num" id="total-base">{{ $total }} {{ $vars['spectacle_map_lei'] }}</span>
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
                        Galerie
                    </h2>
                    <div class="detail-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="./img/detail-slider-img1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/detail-slider-img2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/detail-slider-img3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/detail-slider-img4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="next swiper-button-next"></div>
                        <div class="prev swiper-button-prev"></div>
                    </div>
                    <div class="detail-video-wr">
                        <div class="video_wrapper video_wrapper_full js-videoWrapper">
                            <iframe class="videoIframe js-videoIframe" src="" controls frameborder="0"
                                    allowTransparency="true"
                                    allowfullscreen
                                    data-src="https://www.youtube.com/embed/G4cJ4wviwS8?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
                            <button class="videoPoster js-videoPoster"></button>
                        </div>
                        <div class="video-description">
                            <h4 class="video-heading">
                                Teatru tv teatru la tine acasă cu tvr moldova șI tvr international
                            </h4>
                            <p class="video-text">
                                În zilele de 26 iunie, ora 23.30 pe TVR INTERNATIONAL și 27 iunie, ora 12.30 pe TVR MOLDOVA
                                va fi
                                difuzat spectacolul CIULEANDRA de Liviu Rebreanu, un spectacol de Sandu Grecu.
                            </p>
                            <div class="description-footer">
                                <span class="date">22.07.2020</span>
                                <a href="#" class="video-link">citeste mai mult
                                    <span class="material-icons">navigate_next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-col-wr detail-program">
                <div class="detail-col">
                    <h2 class="detail-heading">
                        Program spectacole
                    </h2>
                    <div class="program-wr d-flex mb-130">
                        <div class="program-col d-flex">
                            <div class="program-row">
                                <span class="program-name">Start</span>
                                <a href="#" class="info-time program-desc">23:30</a>
                            </div>
                            <div class="program-row mb-70">
                                <span class="program-name">Durata performanței</span>
                                <a href="#" class="info-dur program-desc">150 MIN</a>
                            </div>
                            <p class="program-row-divider">Distribuția:</p>
                            <div class="program-row">
                                <span class="program-name">Regia artistica, scenografia:</span>
                                <a href="#" class="program-person">Alexandru GRECU</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Muzica:</span>
                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>
                            </div>
                            <div class="program-row mb-30 bb-0">
                                <span class="program-name">Costume:</span>
                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>
                            </div>
                            <p class="program-row-divider">Actorii</p>
                            <div class="program-row">
                                <span class="program-name">Ance</span>
                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Dragomir</span>
                                <a href="#" class="program-person">Ion GROSU</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Gheorghe</span>
                                <a href="#" class="program-person">Gheorghe GUSAN</a>
                            </div>
                            <div class="program-row bb-0">
                                <span class="program-name">Ion</span>
                                <a href="#" class="program-person">Alexandru CRILOV</a>
                            </div>
                        </div>
                        <div class="program-col d-flex">
                            <p class="program-text">
                                In pragul sărbătorilor de iarnă, Teatrul Național „Satiricus I.L. Caragiale” va prezenta, pe
                                13
                                decembrie, încă o premieră. E vorba de spectacolul „Năpasta” de Ion Luca Caragiale, într-o
                                formulă
                                scenică nouă. <br>În „Năpasta”, regizorul Alexandru Grecu structurează colizia motrice în
                                jurul Ancăi în
                                interpretarea Ludmilei Gheorghiţă: ea e femeia dorită de toţi, asaltată, asediată, ea
                                propulsează
                                acţiunea, dând dovadă de temperament şi expresivitate. Bioenergetica protagonistei rămâne
                                incontestabilă în acest spectacol neordinar. <br>Şi mai are spectacolul un punct forte:
                                muzica purtând
                                semnătura lui Anatol Ştefăneţ şi a prestigioasei formaţii Trigon. Ambianţa dramatică a
                                evenimentelor
                                impunea o coloană sonoră adecvată şi ea s-a găsit: starea sufletească a personajelor o redă
                                toaca în
                                diferite ritmuri, uneori scoţând esenţa, fiorul acţiunii, în altele anticipându-l cu
                                subtilitate.
                                Forţa de sugestie a componentului muzical e întregită pe alocuri de discrete bătăi de
                                clopot, dar şi
                                de urletele sinistre ale lupilor... <br>Este remarcabilă și scenografia spectacolului,
                                purtând, de
                                asemenea, semnătură lui Alexandru Grecu, artist al poporului. Costumele sunt realizate
                                Rodica Bargan
                                și Lilia Căruță. În afară de Ludmila Gheorghiță în rolul Ancăi, din distribuție mai fac
                                parte Ion
                                Grosu (Dragomir), Gheorghe Gușan (Gheorghe) și Alexandru Crâlov (Ion). <br>Durata 1h 20 min
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="{{ asset('front/js/detail-swiper.js') }}"></script>
    <script src="{{ asset('front/js/video.js') }}"></script>
@endsection
