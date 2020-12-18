@extends('layouts.front-white')

@section('title', 500)

@section('content')

    @php
        $vars = (new \App\Repositories\VarRepository())->getAllVars();
    @endphp

    <main class="main not-found">
        <div class="main-content">
            <div class="img-wr">
                <img src="{{ asset('front/img/404-face.png') }}" alt="Sad face">
            </div>
            <h1 class="heading">
                {{ $vars['500_title_' . app()->getLocale()] }}
            </h1>
            <p class="error-info">
                {{ $vars['500_info_' . app()->getLocale()] }}
            </p>
            <button class="bt home-btn">
                <a class="home-link" href="{{  \App\Helpers\SlugHelper::href('home') }}">{{ $vars['500_home_' . app()->getLocale()] }}</a>
            </button>
        </div>
    </main>

@endsection
