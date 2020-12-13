@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front/css/cart.css') }}">
@endsection

@section('content')
    <main class="main cart">
        <div class="main-content">
            <div class="d-flex content-wr">
                <h2 class="form-heading">
                    {{ $vars['my_cart'] }}
                </h2>
                <div class="cart-tickets d-flex">
                    @empty($spectacles)
                        {{ $vars['cart_empty'] }}
                    @else
                        @foreach($spectacles as $spectacle)
                            <div class="cart-ticket d-flex">
                                <div class="circle circle-bottom"></div>
                                <div class="circle circle-top"></div>
                                <div class="col-date premiera d-flex">
                                    <p class="premiera-text">
                                        @if($spectacle['model']->is_premiera)
                                            {{ $vars['spectacles_premiera'] }}
                                        @endif
                                    </p>
                                    <div class="heading-date">
                                        <p class="m-age">{{ $spectacle['model']->min_age }}+</p>
                                        <p class="day">{{ DateHelper::dayWeek($spectacle['model'], 'start_at') }}</p>
                                        <h4 class="num-day">{{ DateHelper::day($spectacle['model'], 'start_at') }}</h4>
                                        <p class="month">{{ DateHelper::month($spectacle['model'], 'start_at') }}</p>
                                    </div>
                                </div>
                                <div class="col-content d-flex">
                                    <div class="heading-title">
                                        <p class="title-author">{{ $spectacle['model']->author }}</p>
                                        <p class="title-group">{{ $spectacle['model']->producer }}</p>
                                        <h3 class="title-name">{{ $spectacle['model']->name }}</h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div class="info-time">
                                            <span class="info-text">{{  DateHelper::time($spectacle['model'], 'start_at') }}</span>
                                        </div>
                                        <div class="info-duration">
                                            <span class="info-text">{{  $spectacle['model']->duration  }} {{ $vars['spectacles_min'] }}</span>
                                        </div>
                                        <div class="info-age">
                                            <span class="info-text">{{ $spectacle['model']->min_age }}+</span>
                                            <span class="info-sala">{{ $spectacle['model']->schema->name }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-tickets d-flex">
                                    <div class="tickets-wr">
                                        <div class="cancel-wr">
                                            <a href="{{ route('cart.delete_all') }}" class="material-icons delete cancel">close</a>
                                        </div>
                                        @foreach($spectacle['places'] as $place)
                                            <p class="tickets-ticket">
                                            <span class="place">
                                                {{ $vars['spectacle_row'] }} {{ $place['row'] }}
                                                {{ $vars['spectacle_place'] }} {{ $place['place'] }}
                                            </span>
                                                <span class="cost">{{ $place['price'] }} {{ $vars['spectacle_map_lei'] }}</span>
                                                <a href="{{ route('cart.delete', $place['col_id']) }}" class="material-icons delete">close</a>
                                            </p>
                                        @endforeach
                                    </div>
                                    <div class="tickets-total">
                                        <p class="total-text">
                                            {{ $vars['spectacle_total'] }}: <span class="total-num">{{ $total }} {{ $vars['spectacle_map_lei'] }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endempty
                </div>
            </div>

            @empty($spectacles)

            @else
                <div class="confirm-wr">
                    <div class="confirm">
                        <p class="total-price">
                            {{ $vars['spectacle_total'] }}: <span class="total-num">{{ $total }} {{ $vars['spectacle_map_lei'] }}</span>
                        </p>
                        <button class="bt book-btn">
                            <a href="{{ route('cart.buy') }}" class="home-link">
                                {{ $vars['spectacles_reserve_tickets'] }}
                            </a>
                        </button>
                        <button class="bt home-btn">
                            <a class="home-link" href="{{ route('cart.buy') }}">{{ $vars['spectacles_buy_tickets'] }}</a>
                        </button>
                    </div>
                </div>
            @endempty
        </div>
    </main>
@endsection

@section('scripts')
@endsection
