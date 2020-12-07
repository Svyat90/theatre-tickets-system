@extends('layouts.front')

@section('styles')

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
                                                <p class="month">{{ $slider->date ? $slider->date->format('F') : '' }}</p>
                                                <p class="day">{{ $slider->date ? $slider->date->format('d') : '' }}</p>
                                                <p class="author d-flex">
                                                    <span class="name">{{ columnTrans($slider, 'name') }}</span>
                                                    <span class="time">{{ $slider->date ? $slider->date->format('H:i') : '' }}</span>
                                                </p>
                                                <h1 class="spec-name">{{ columnTrans($slider, 'title') }}</h1>
                                                <p class="spec-desc">{{ columnTrans($slider, 'description') }}</p>
                                                <button class="bt home-btn">
                                                    <a href="{{ $slider->url }}" class="home-link">
                                                        {{ getVar('home_add_to_cart') }}
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="slide-img">
                                            <picture>
                                                <source srcset="{{ $slider->image ? $slider->image->getFullUrl() : '' }}" media="(min-width: 576px)">
                                                <source srcset="{{ $slider->image ? $slider->image->getFullUrl() : '' }}" media="(min-width: 280px">
                                                <img src="{{ $slider->image ? $slider->image->getFullUrl() : '' }}" alt="">
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
                    <a href="#" class="soc-link">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="#" class="soc-link">
                        <i class="fa fa-instagram"></i>
                    </a>
                </aside>
            </div>
        </div>
        <div class="main-content">
            <div class="home-heading-wr d-flex">
                <h2 class="form-heading">Repertoriu</h2>
                <a class="main-link d-flex">Toate spectacole <span class="material-icons">navigate_next</span></a>
            </div>
            <div class="cart-tickets d-flex">
                <div class="cart-ticket d-flex">
                    <div class="circle circle-bottom"></div>
                    <div class="circle circle-top"></div>
                    <div class="col-date premiere d-flex">
                        <p class="premiere-text">
                            Premiere
                        </p>
                        <div class="heading-date">
                            <p class="m-age">12+</p>
                            <p class="day">Duminica</p>
                            <h4 class="num-day">26</h4>
                            <p class="month">Iulie</p>
                        </div>
                    </div>
                    <div class="col-content d-flex">
                        <div class="heading-title">
                            <p class="title-author">William Shakespeare</p>
                            <p class="title-group">un spectacol de Sandu GRECU</p>
                            <a href="#" class="title-name">Hamlet</a>
                        </div>
                        <div class="ticket-info">
                            <div class="info-time">
                                <span class="info-text">23:30</span>
                            </div>
                            <div class="info-duration mr-auto">
                                <span class="info-text">150 MIN</span>
                            </div>
                            <div class="info-age">
                                <span class="info-sala">SALA MARE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-tickets d-flex">
                        <div class="tickets-wr">
                            <p class="home-link">Pret: 40-100 lei</p>
                            <a href="#" class="ticket-buy-link">cumpara bitele</a>
                        </div>
                        <div class="tickets-total">
                            <p class="total-text d-flex">
                                <span class="home-age">SALA MARE</span>
                                <span class="home-age-num">12+</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cart-ticket d-flex">
                    <div class="circle circle-bottom"></div>
                    <div class="circle circle-top"></div>
                    <div class="col-date premiere d-flex">
                        <p class="premiere-text">
                            Premiere
                        </p>
                        <div class="heading-date">
                            <p class="m-age">12+</p>
                            <p class="day">Duminica</p>
                            <h4 class="num-day">26</h4>
                            <p class="month">Iulie</p>
                        </div>
                    </div>
                    <div class="col-content d-flex">
                        <div class="heading-title">
                            <p class="title-author">William Shakespeare</p>
                            <p class="title-group">un spectacol de Sandu GRECU</p>
                            <a href="#" class="title-name">Ce vrăji a mai făcut soția mea?</a>
                        </div>
                        <div class="ticket-info">
                            <div class="info-time">
                                <span class="info-text">23:30</span>
                            </div>
                            <div class="info-duration mr-auto">
                                <span class="info-text">150 MIN</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-tickets d-flex">
                        <div class="tickets-wr">
                            <p class="home-link">Pret: 40-100 lei</p>
                            <a href="#" class="ticket-buy-link link-busy">cumpara bitele</a>
                        </div>
                        <div class="tickets-total">
                            <p class="total-text d-flex">
                                <span class="home-age">SALA MARE</span>
                                <span class="home-age-num">12+</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cart-ticket d-flex">
                    <div class="circle circle-bottom"></div>
                    <div class="circle circle-top"></div>
                    <div class="col-date premiere d-flex">
                        <p class="premiere-text">
                            Premiere
                        </p>
                        <div class="heading-date">
                            <p class="m-age">12+</p>
                            <p class="day">Duminica</p>
                            <h4 class="num-day">26</h4>
                            <p class="month">Iulie</p>
                        </div>
                    </div>
                    <div class="col-content d-flex">
                        <div class="heading-title">
                            <p class="title-author">William Shakespeare</p>
                            <p class="title-group">un spectacol de Sandu GRECU</p>
                            <a href="#" class="title-name">Vânătoarea de şobolani</a>
                        </div>
                        <div class="ticket-info">
                            <div class="info-time">
                                <span class="info-text">23:30</span>
                            </div>
                            <div class="info-duration mr-auto">
                                <span class="info-text">150 MIN</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-tickets d-flex">
                        <div class="tickets-wr">
                            <p class="home-link">Pret: 40-100 lei</p>
                            <a href="#" class="ticket-buy-link link-red">cumpara bitele</a>
                        </div>
                        <div class="tickets-total">
                            <p class="total-text d-flex">
                                <span class="home-age">SALA MARE</span>
                                <span class="home-age-num">12+</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cart-ticket d-flex">
                    <div class="circle circle-bottom"></div>
                    <div class="circle circle-top"></div>
                    <div class="col-date d-flex">
                        <p class="premiere-text">
                            Premiere
                        </p>
                        <div class="heading-date">
                            <p class="m-age">12+</p>
                            <p class="day">Duminica</p>
                            <h4 class="num-day">26</h4>
                            <p class="month">Iulie</p>
                        </div>
                    </div>
                    <div class="col-content d-flex">
                        <div class="heading-title">
                            <p class="title-author">William Shakespeare</p>
                            <p class="title-group">un spectacol de Sandu GRECU</p>
                            <a href="#" class="title-name">Bună dimineața, tăticule</a>
                        </div>
                        <div class="ticket-info">
                            <div class="info-time">
                                <span class="info-text">23:30</span>
                            </div>
                            <div class="info-duration mr-auto">
                                <span class="info-text">150 MIN</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-tickets d-flex">
                        <div class="tickets-wr">
                            <p class="home-link">Pret: 40-100 lei</p>
                            <a href="#" class="ticket-buy-link">cumpara bitele</a>
                        </div>
                        <div class="tickets-total">
                            <p class="total-text d-flex">
                                <span class="home-age">SALA MARE</span>
                                <span class="home-age-num">12+</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cart-ticket d-flex">
                    <div class="circle circle-bottom"></div>
                    <div class="circle circle-top"></div>
                    <div class="col-date premiere d-flex">
                        <p class="premiere-text">
                            Premiere
                        </p>
                        <div class="heading-date">
                            <p class="m-age">12+</p>
                            <p class="day">Duminica</p>
                            <h4 class="num-day">26</h4>
                            <p class="month">Iulie</p>
                        </div>
                    </div>
                    <div class="col-content d-flex">
                        <div class="heading-title">
                            <p class="title-author">William Shakespeare</p>
                            <p class="title-group">un spectacol de Sandu GRECU</p>
                            <a href="#" class="title-name">Happy End</a>
                        </div>
                        <div class="ticket-info">
                            <div class="info-time">
                                <span class="info-text">23:30</span>
                            </div>
                            <div class="info-duration mr-auto">
                                <span class="info-text">150 MIN</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-tickets d-flex">
                        <div class="tickets-wr">
                            <p class="home-link">Pret: 40-100 lei</p>
                            <a href="#" class="ticket-buy-link">cumpara bitele</a>
                        </div>
                        <div class="tickets-total">
                            <p class="total-text d-flex">
                                <span class="home-age">SALA MARE</span>
                                <span class="home-age-num">12+</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cart-ticket d-flex">
                    <div class="circle circle-bottom"></div>
                    <div class="circle circle-top"></div>
                    <div class="col-date d-flex">
                        <p class="premiere-text">
                            Premiere
                        </p>
                        <div class="heading-date">
                            <p class="m-age">12+</p>
                            <p class="day">Duminica</p>
                            <h4 class="num-day">26</h4>
                            <p class="month">Iulie</p>
                        </div>
                    </div>
                    <div class="col-content d-flex">
                        <div class="heading-title">
                            <p class="title-author">William Shakespeare</p>
                            <p class="title-group">un spectacol de Sandu GRECU</p>
                            <a href="#" class="title-name">ÎțI vreau soțul..</a>
                        </div>
                        <div class="ticket-info">
                            <div class="info-time">
                                <span class="info-text">23:30</span>
                            </div>
                            <div class="info-duration mr-auto">
                                <span class="info-text">150 MIN</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-tickets d-flex">
                        <div class="tickets-wr">
                            <p class="home-link">Pret: 40-100 lei</p>
                            <a href="#" class="ticket-buy-link">cumpara bitele</a>
                        </div>
                        <div class="tickets-total">
                            <p class="total-text d-flex">
                                <span class="home-age">SALA MARE</span>
                                <span class="home-age-num">12+</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex mob-link">
                    <a href="" class="main-link">Toate spectacole <span class="material-icons">navigate_next</span></a>
                </div>
            </div>
            <div class="home-noutati d-flex">
                <div class="noutati-col noutati-col-video">
                    <div class="home-heading-wr d-flex">
                        <h2 class="form-heading">Noutati</h2>
                        <a class="main-link d-flex">Toate noutati<span class="material-icons">navigate_next</span></a>
                    </div>
                    <div class="main-video-wr">
                        <div class="video_wrapper video_wrapper_full js-videoWrapper">
                            <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true"
                                    allowfullscreen
                                    data-src="https://www.youtube.com/embed/G4cJ4wviwS8?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
                            <button class="videoPoster js-videoPoster"></button>
                        </div>
                        <div class="video-description">
                            <p class="video-title">
                                Teatru tv teatru la tine acasă cu tvr moldova șI tvr international
                            </p>
                            <p class="video-date">
                                22. 07. 2020
                            </p>
                        </div>
                    </div>
                </div>
                <div class="noutati-col noutati-col-text">
                    <div class="text-note d-flex pb30 bb">
                        <div class="note-img">
                            <img src="{{ asset('front/img/home-note1.jpg') }}" alt="">
                        </div>
                        <div class="note-desc">
                            <a class="note-title">
                                Teatru tv teatru la tine acasă cu tvr moldova șI tvr international
                            </a>
                            <p class="desc-text">
                                Proiect de colaborare șI promovare a spectacolelor teatrului național satiricus la tv
                            </p>
                            <a class="main-link">Detali <span class="material-icons">navigate_next</span></a>
                        </div>
                    </div>
                    <div class="text-note d-flex pb30 pt30 bb">
                        <div class="note-img">
                            <img src="{{ asset('front/img/home-note1.jpg') }}" alt="">
                        </div>
                        <div class="note-desc">
                            <a class="note-title">
                                Teatru tv teatru la tine acasă cu tvr moldova șI tvr international
                            </a>
                            <p class="desc-text">
                                Proiect de colaborare șI promovare a spectacolelor teatrului național satiricus la tv
                            </p>
                            <a class="main-link">Detali <span class="material-icons">navigate_next</span></a>
                        </div>
                    </div>
                    <div class="text-note d-flex pb30 pt30 bb">
                        <div class="note-img">
                            <img src="{{ asset('front/img/home-note1.jpg') }}" alt="">
                        </div>
                        <div class="note-desc">
                            <a class="note-title">
                                Teatru tv teatru la tine acasă cu tvr moldova șI tvr international
                            </a>
                            <p class="desc-text">
                                Proiect de colaborare șI promovare a spectacolelor teatrului național satiricus la tv
                            </p>
                            <a class="main-link">Detali <span class="material-icons">navigate_next</span></a>
                        </div>
                    </div>
                    <div class="text-note d-flex pt30">
                        <div class="note-img">
                            <img src="{{ asset('front/img/home-note1.jpg') }}" alt="">
                        </div>
                        <div class="note-desc">
                            <a class="note-title">
                                Teatru tv teatru la tine acasă cu tvr moldova șI tvr international
                            </a>
                            <p class="desc-text">
                                Proiect de colaborare șI promovare a spectacolelor teatrului național satiricus la tv
                            </p>
                            <a class="main-link">Detali <span class="material-icons">navigate_next</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-gallery d-flex">
                <div class="home-gallery-col col-l">
                    <div class="home-heading-wr d-flex">
                        <h2 class="form-heading">Galery</h2>
                        <a class="main-link d-flex">Toate pozele <span class="material-icons">navigate_next</span></a>
                    </div>
                    <p class="gallery-text">
                        În zilele de 26 iunie, ora 23.30 pe TVR INTERNATIONAL și 27 iunie, ora 12.30 pe TVR MOLDOVA va fi
                        difuzat
                        spectacolul CIULEANDRA de Liviu Rebreanu, un spectacol de Sandu Grecu.În zilele de 26 iunie, ora
                        23.30 pe
                        TVR INTERNATIONAL și 27 iunie, ora 12.30 pe TVR MOLDOVA va fi difuzat spectacolul CIULEANDRA de
                        Liviu
                        Rebreanu, un spectacol de Sandu Grecu.
                    </p>
                    <div class="gallery-img-wr mb55">
                        <a href="#">
                            <img src="{{ asset('front/img/home-g-1.jpg') }}" alt="">
                        </a>
                        <a class="img-name">Un spectacol de Viorel CORNESCU</a>
                        <p class="img-date">05.04.2019</p>
                    </div>
                    <div class="gallery-img-wr pl95 mmb39">
                        <a href="#">
                            <img src="{{ asset('front/img/home-g-2.jpg') }}" alt="">
                        </a>
                        <a class="img-name">Un spectacol de Viorel CORNESCU</a>
                        <p class="img-date">05.04.2019</p>
                    </div>
                </div>
                <div class="home-gallery-col">
                    <div class="gallery-img-wr pl95 mb115">
                        <a href="#">
                            <img src="{{ asset('front/img/home-g-3.jpg') }}" alt="">
                        </a>
                        <a class="img-name">Un spectacol de Viorel CORNESCU</a>
                        <p class="img-date">05.04.2019</p>
                    </div>
                    <div class="gallery-img-wr pr95 mpt70">
                        <a href="#">
                            <img src="{{ asset('front/img/home-g-4.jpg') }}" alt="">
                        </a>
                        <a class="img-name">Un spectacol de Viorel CORNESCU</a>
                        <p class="img-date">05.04.2019</p>
                    </div>
                </div>
            </div>
            <div class="home-citate">
                <div class="citate-bg-wr"></div>
                <h2 class="form-heading">
                    {{ getVar('home_famous_quotes') }}
                </h2>
                @foreach($quotes as $quote)
                    <div class="citate-wr brt">
                        <div class="quot-wr">
                            <img src="{{ asset('front/img/home-quot.svg') }}" alt="quotes">
                        </div>
                        <div class="l-wr d-flex">
                            <p class="citate-text">
                                {{ columnTrans($quote, 'description') }}
                            </p>
                            <div class="citate-person">
                                <img src="{{ $quote->image ? $quote->image->getFullUrl() : '' }}" alt="">
                                <p class="person-name">{{ columnTrans($quote, 'name') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="home-montare">
                <h2 class="form-heading">{{ getVar('home_in_assembly') }}</h2>
                @foreach($assemblies as $assembly)
                    <div class="montare-row d-flex">
                        <a class="montare-name">{{ columnTrans($assembly, 'name') }}</a>
                        <p class="montare-people">
                            <span class="montare-author">{{ columnTrans($assembly, 'title') }}</span>
                            <span class="montare-group">{{ strip_tags(columnTrans($assembly, 'description')) }}</span>
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="home-map" id="map">
                <div class="map-message">
                    <p class="map-text">Republica Moldova, mun. Chişinău, str. Mihai Eminescu 55</p>
                    <p class="map-text">373 22-20-28-90</p>
                    <p class="map-text">satiricus@satiricus.md</p>
                    <img class="map-geo" src="{{ asset('front/img/home-map-geo.svg') }}" alt="">
                </div>
                <div class="heading-text">
                    <h1 class="heading">Pentru mai multe detalii</h1>
                    <a href="#" class="ticket-buy-link link-red">cumpara bitele</a>
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
                <h2 class="form-heading">Team</h2>
                <p class="team-pretext">
                    Pentru realizarea unor sarcini artistice atât de dificile era nevoie de actori înzestraţi multilateral.
                    Ei au
                    fost cooptaţi în trupă de-a lungul anilor, nucleul ei însă a fost constituit chiar de la fondare şi a
                    rămas
                    mereu constant. Astăzi trupa numără peste 30 de actori, inclusiv 5 Artiști ai Poporului, 10 Artiști
                    Emeriți şi
                    2 Maeştri ai Artei.
                </p>
                <a class="main-link ml-auto">Toate actorii <span class="material-icons">navigate_next</span></a>
                <div class="sl-team-wr">
                    <div class="team-wr swiper-wrapper">
                        <div class="team-item">
                            <a class="item-img-wr">
                                <img src="{{ asset('front/img/actorii-team-member.jpg') }}" alt="">
                            </a>
                            <div class="item-text-wr">
                                <a class="item-text item-text-name">
                                    Alexandru GRECU
                                </a>
                                <p class="item-text">
                                    Artist Emerit
                                </p>
                            </div>
                        </div>
                        <div class="team-item">
                            <a class="item-img-wr">
                                <img src="{{ asset('front/img/home-team-dir.jpg') }}" alt="">
                            </a>
                            <div class="item-text-wr">
                                <a class="item-text item-text-name">
                                    Alexandru GRECU
                                </a>
                                <p class="item-text">
                                    Director artistic al Teatrului Național Satiricus Ion Luca Caragiale
                                </p>
                            </div>
                        </div>
                        <div class="team-item">
                            <a class="item-img-wr">
                                <img src="{{ asset('front/img/actorii-team-member.jpg') }}" alt="">
                            </a>
                            <div class="item-text-wr">
                                <a class="item-text item-text-name">
                                    Alexandru GRECU
                                </a>
                                <p class="item-text">
                                    Artist Emerit
                                </p>
                            </div>
                        </div>
                        <div class="team-item">
                            <a class="item-img-wr">
                                <img src="{{ asset('front/img/actorii-team-member.jpg') }}" alt="">
                            </a>
                            <div class="item-text-wr">
                                <a class="item-text item-text-name">
                                    Alexandru GRECU
                                </a>
                                <p class="item-text">
                                    Artist al Poporului
                                </p>
                            </div>
                        </div>
                        <div class="team-item">
                            <a class="item-img-wr">
                                <img src="{{ asset('front/img/actorii-team-member.jpg') }}" alt="">
                            </a>
                            <div class="item-text-wr">
                                <a class="item-text item-text-name">
                                    Alexandru GRECU
                                </a>
                                <p class="item-text">
                                    Artist Emerit
                                </p>
                            </div>
                        </div>
                        <div class="team-item">
                            <a class="item-img-wr">
                                <img src="{{ asset('front/img/actorii-team-member.jpg') }}" alt="">
                            </a>
                            <div class="item-text-wr">
                                <a class="item-text item-text-name">
                                    Alexandru GRECU
                                </a>
                                <p class="item-text">
                                    Artist Emerit
                                </p>
                            </div>
                        </div>
                        <div class="team-item">
                            <a class="item-img-wr">
                                <img src="{{ asset('front/img/actorii-team-member.jpg') }}" alt="">
                            </a>
                            <div class="item-text-wr">
                                <a class="item-text item-text-name">
                                    Alexandru GRECU
                                </a>
                                <p class="item-text">
                                    Artist al Poporului
                                </p>
                            </div>
                        </div>
                        <div class="team-item">
                            <a class="item-img-wr">
                                <img src="{{ asset('front/img/actorii-team-member.jpg') }}" alt="">
                            </a>
                            <div class="item-text-wr">
                                <a class="item-text item-text-name">
                                    Alexandru GRECU
                                </a>
                                <p class="item-text">
                                    Director artistic al Teatrului Național Satiricus Ion Luca Caragiale
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="t-swiper-pagination"></div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @parent

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
