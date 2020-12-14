@extends('layouts.front-white')

@section('title', $vars['success_title'])

@section('styles')
    <link rel="stylesheet" href="{{ asset('front/css/info-page.css') }}">
@endsection

@section('content')

    <main class="main success">
        <div class="main-content">
            <div class="img-wr">
                <img src="{{ asset('front/img/success-ticket.png') }}" alt="">
            </div>
            <h1 class="heading">
                {{ $vars['success_title'] }}
            </h1>
            <p class="error-info">
                {!! $vars['success_desc'] !!}
            </p>
            <button class="bt home-btn">
                <a class="home-link" href="{{ route('front.home') }}">{{ $vars['cart_success_home'] }}</a>
            </button>
        </div>
    </main>

@endsection
