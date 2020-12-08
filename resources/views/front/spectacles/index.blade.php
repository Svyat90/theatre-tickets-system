@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/spectacole.css') }}">
@endsection

@section('content')
    <main class="main spectacole">
        <img class="spec-main-bg spec-face-1" src="{{ asset('front/img/spectacole-face-1.png') }}" alt="">
        <img class="spec-main-bg spec-face-2" src="{{ asset('front/img/spectacole-face-2.png') }}" alt="">
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
                <h1 class="heading">Echipa</h1>
            </div>
        </div>
        <div class="main-content">
            <h2 class="form-heading">
                {{ getVar('spectacles_select') }}
            </h2>
            <div class="sl-tabs-wr">
                <p class="tabs swiper-wrapper">
                    @foreach($categories as $category)
                        <a href="{{ route('spectacles.index', ['category_id' => $category->id]) }}"
                            class="act-link {{ request()->input('category_id', null) == $category->id ? 'active' : '' }}" >
                            {{ $category->name }}
                        </a>
                    @endforeach
                </p>
            </div>
            <div class="cart-tickets d-flex">
                @foreach($spectacles as $spectacle)
                    <div class="cart-ticket d-flex">
                        <div class="circle circle-bottom"></div>
                        <div class="circle circle-top"></div>
                        <div class="col-date premiere d-flex">
                            <p class="premiere-text">
                                @if($spectacle->is_premiera)
                                    {{ getVar('spectacles_premiera') }}
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
                                    <span class="info-text">{{  $spectacle->duration  }} {{ getVar('spectacles_min') }}</span>
                                </div>
                                <div class="info-age">
                                    <span class="info-sala">SALA MARE</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-tickets d-flex">
                            <div class="tickets-wr">
                                <p class="home-link">Pret: 40-100 lei</p>
                                <a href="{{ route('spectacles.show', $spectacle->id) }}" class="ticket-buy-link">{{ getVar('spectacles_buy_tickets') }}</a>
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
            </div>

            {{ $spectacles->links('front.partials.paginator') }}

        </div>
    </main>
@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="{{ asset('front/js/spectacole-swiper.js') }}"></script>
@endsection
