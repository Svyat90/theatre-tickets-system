@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front/css/ticket-buy.css') }}">
@endsection

@section('content')
    <main class="main ticket-buy">
        <div class="main-content">
            <div class="back-wr">
                <a href="{{ route('cart.show') }}" class="link-back ml-auto">
                    {{ $vars['cart_back'] }}
                </a>
            </div>
            @empty($spectacles)
                {{ $vars['cart_empty'] }}
            @else
                <div class="d-flex content-wr">
                    <form name="order" action="{{ route('cart.order') }}" method="post">
                        @csrf
                        <h2 class="form-heading">
                            {{ $vars['cart_buy_fill_details'] }}
                        </h2>
                        <div class="form-input-wr">
                            <input name="first_name" type="text" class="input-text" required>
                            <span class="floating-label">{{ $vars['contact_form_first_name'] }}</span>
                        </div>
                        <div class="form-input-wr">
                            <input name="last_name" type="text" class="input-text" required>
                            <span class="floating-label">{{ $vars['contact_form_last_name'] }}</span>
                        </div>
                        <div class="form-input-wr">
                            <input name="phone" type="tel" class="input-text" required>
                            <span class="floating-label">{{ $vars['contact_form_phone'] }}</span>
                        </div>
                        <div class="form-input-wr">
                            <input name="email" type="email" class="input-text" required>
                            <span class="floating-label">{{ $vars['contact_form_email'] }}</span>
                        </div>
                        <div class="form-input-wr">
                            <input type="checkbox" class="form-checkbox" id="accept-rules" required>
                            <label for="accept-rules">
                                {{ $vars['cart_buy_accept'] }} &nbsp;<a href="{{ $vars['cart_buy_terms_link'] }}" class="red-link">{{ $vars['cart_buy_terms_and_cond'] }}</a>
                            </label>
                        </div>
                        {{--                    <h2 class="form-heading">--}}
                        {{--                        Plată--}}
                        {{--                    </h2>--}}
                        {{--                    <div class="form-radio-wr">--}}
                        {{--                        <label class="radio-label" for="bank">--}}
                        {{--                            <input type="radio" checked class="form-radio" name="pay" id="bank">--}}
                        {{--                            <span class="checkmark"></span>--}}
                        {{--                            Plata cu card bancar--}}
                        {{--                        </label>--}}
                        {{--                        <div class="pay-img-wr">--}}
                        {{--                            <img src="./img/footer-visa.jpg" alt="Pay with VISA">--}}
                        {{--                        </div>--}}
                        {{--                        <div class="pay-img-wr">--}}
                        {{--                            <img src="./img/ticket-mastercard.png" alt="Pay with MasterCard">--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="form-radio-wr">--}}
                        {{--                        <label class="radio-label" for="cash">--}}
                        {{--                            <input type="radio" class="form-radio" name="pay" id="cash">--}}
                        {{--                            <span class="checkmark"></span>--}}
                        {{--                            Broneaza in teatru--}}
                        {{--                        </label>--}}
                        {{--                    </div>--}}
                        {{--                    <span class="pay-info">trebuie să plătiți un bilet cu cel puțin o oră înainte de sesiune </span>--}}
                        <div class="form-input-wr" style="{{ $errors->any() ? '' : 'display: none;' }} color: red; text-align: center;">
                            @if($errors->any())
                                {!! implode('', $errors->all('<strong>:message</strong><br>')) !!}
                            @endif
                        </div>
                    </form>
                    <div class="confirm-wr mob">
                        <div class="confirm">
                            <p class="total-price">
                                Total: <span class="total-num">{{ $total }} {{ $vars['spectacle_map_lei'] }}</span>
                            </p>
                            <button class="bt home-btn">
                                <a class="home-link" href="{{ route('cart.order') }}">{{ $vars['spectacles_reserve_tickets'] }}</a>
                            </button>
                        </div>
                    </div>
                    <div class="ticket-cart">
                        @foreach($spectacles as $spectacle)
                            <div class="spectacole-block d-flex">
                                <div class="spectacole-heading d-flex">
                                    <div class="heading-title">
                                        <p class="title-author">{{ $spectacle['model']->author }}</p>
                                        <p class="title-group">{{ $spectacle['model']->producer }}</p>
                                        <h3 class="title-name">{{ $spectacle['model']->name }}</h3>
                                    </div>
                                    <div class="heading-date">
                                        <p class="day">{{  DateHelper::dayWeek($spectacle['model'], 'start_at')  }}</p>
                                        <h4 class="num-day">{{ DateHelper::day($spectacle['model'], 'start_at') }}</h4>
                                        <p class="month">{{ DateHelper::month($spectacle['model'], 'start_at') }}, {{ DateHelper::time($spectacle['model'], 'start_at') }}</p>
                                    </div>
                                </div>
                                <div class="spectacole-tickets d-flex">
                                    @foreach($spectacle['places'] as $place)
                                        <p class="tickets-ticket">
                                        <span class="place">
                                            {{ $vars['spectacle_row'] }} {{ $place['row'] }}
                                            {{ $vars['spectacle_place'] }} {{ $place['place'] }}
                                        </span>
                                            <span class="cost">{{ $place['price'] }} {{ $vars['spectacle_map_lei'] }}</span>
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="confirm-wr des">
                    <div class="confirm">
                        <p class="total-price">
                            {{ $vars['spectacle_total'] }}: <span class="total-num">{{ $total }} {{ $vars['spectacle_map_lei'] }}</span>
                        </p>
                        <button class="bt home-btn" id="order-btn">
                            <a class="home-link" href="{{ route('cart.order') }}">{{ $vars['spectacles_reserve_tickets'] }}</a>
                        </button>
                    </div>
                </div>
            @endempty
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        $(function () {
            $("#order-btn").click(function (e) {
                e.preventDefault();
                $('form[name="order"]').submit();;
            })
        });
    </script>
@endsection
