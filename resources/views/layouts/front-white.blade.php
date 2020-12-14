<!DOCTYPE html>
<html lang="en">
<head>
    <title>@section('title', 404)</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('front/img/favicon.ico') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/info-page.css') }}">

    @yield('styles')
</head>
<body>

<div class="wrapper">
    <header class="header header-white">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img id="logo" src="{{ asset('front/img/header-logo-white.png') }}" alt="Satiricus">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="40" onclick="this.classList.toggle('active')">
                <path class="line top"
                      d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"/>
                <path class="line middle" d="m 30,50 h 40"/>
                <path class="line bottom"
                      d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"/>
                </svg>
                </span>
            </button>
            <div class="navbar-c">
                <ul class="navbar-nav collapse navbar-collapse" id="navbarNav">
                    @php
                        $pageRepository = app(\App\Repositories\PageRepository::class);
                        $headerPages = $pageRepository->getHeaderPages();
                        $vars = (new \App\Repositories\VarRepository())->getAllVars();
                    @endphp

                    @foreach($headerPages as $page)
                        @if($page->children->count()))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                {{ $page->name }}
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="angle-down" role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                     class="svg-inline--fa fa-angle-down">
                                    <path fill="currentColor"
                                          d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z"
                                          class=""></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($page->children as $child)
                                    <a class="dropdown-item" href="{{ route('pages.show', $child->slug) }}">{{ $child->name }}</a>
                                @endforeach
                            </div>
                        </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages.show', $page->slug) }}">{{ $page->name }}</a>
                            </li>
                        @endif
                    @endforeach

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('workers.index') }}">{{ $vars['menu_workers_' . app()->getLocale()] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('spectacles.index') }}">{{ $vars['menu_spectacles_' . app()->getLocale()] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles.index') }}">{{ $vars['menu_blog_' . app()->getLocale()] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pages.contacts') }}">{{ $vars['menu_contacts_' . app()->getLocale()] }}</a>
                    </li>
                    <li class="nav-item mob-lang">
                        <a href="{{ route('set_locate', 'ro') }}" class="nav-link {{ app()->getLocale() === 'ro' ? 'active' : '' }}">RO</a>
                        <a href="{{ route('set_locate', 'en') }}" class="nav-link {{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
                        <a href="{{ route('set_locate', 'ru') }}" class="nav-link {{ app()->getLocale() === 'ru' ? 'active' : '' }}">RU</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" id="header-search" type="search" placeholder="{{ $vars['search_' . app()->getLocale()] }}"
                           aria-label="{{ $vars['search_' . app()->getLocale()] }}">
                    <button class="btn my-2 my-sm-0" id="search-button"><span class="material-icons">search</span></button>
                </form>
                <a href="{{ route('cart.show') }}" class="nav-link nav-link-gold d">
                    {{ $vars['my_cart_' . app()->getLocale()] }}
                    @if(\Cart::getTotalQuantity() > 0)
                        <span id="count">{{ \Cart::getTotalQuantity() }}</span>
                    @endif
                </a>
                <div class="lang">
                    <a href="{{ route('set_locate', 'ro') }}" class="nav-link {{ app()->getLocale() === 'ro' ? 'active' : '' }}">RO</a>
                    <a href="{{ route('set_locate', 'en') }}" class="nav-link {{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
                    <a href="{{ route('set_locate', 'ru') }}" class="nav-link {{ app()->getLocale() === 'ru' ? 'active' : '' }}">RU</a>
                </div>
            </div>
            <a href="{{ route('cart.show') }}" class="nav-link nav-link-gold m">
                <img src="{{ asset('front/img/mobile-cart.svg') }}" alt="">
                @if(\Cart::getTotalQuantity() > 0)
                    <span id="count">{{ \Cart::getTotalQuantity() }}</span>
                @endif
            </a>
        </nav>
    </header>

    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('front/js/header.js') }}"></script>

</body>
</html>
