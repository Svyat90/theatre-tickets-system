@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front/css/contacte.css') }}">
@endsection

@section('content')
    <main class="main contacte">
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
                <h1 class="heading">{{ $vars['contact_title_top'] }}</h1>
            </div>
        </div>
        <div class="main-content">
            <div class="contacts">
                <h2 class="form-heading">
                    {{ $vars['contact_title'] }}
                </h2>
                <p class="contacts-info">
                    {{ $vars['map_address'] }} <br>
                    <span class="info-name">{{ $vars['contact_ticket_office_text'] }}</span> {{ $vars['contact_ticket_office_phones'] }} <br>
                    <span class="info-name">{{ $vars['contact_show_organizer_text'] }}</span> {{ $vars['contact_show_organizer_phones'] }} <br>
                    <span class="info-name">{{ $vars['contact_accounting_text'] }}</span> {{ $vars['contact_accounting_content'] }} <br>
                    <span class="info-name" {{ $vars['contact_fax'] }}</span> <br>
                    <span class="info-name">{{ $vars['contact_email_text'] }}</span> {{ $vars['contact_email_content'] }} <br>
                </p>
                <div class="contacts-map" id="map">
                    <div class="map-message">
                        <p class="map-text">{{ $vars['map_address'] }}</p>
                        <p class="map-text">{{ $vars['map_text_phone'] }}</p>
                        <p class="map-text">{{ $vars['map_text_email'] }}</p>
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

                    .ymaps-map {
                        height: 277px;
                    }
                </style>
            </div>
            <div class="write-us">
                <h2 class="form-heading">
                    {{ $vars['contact_write_to_us_title'] }}
                </h2>
                <form action="{{ route('emails.contact') }}" method="post">
                    @csrf
                    <div class="form-input-wr">
                        <input name="name" type="text" class="input-text" required>
                        <span class="floating-label">{{ $vars['contact_form_name'] }}</span>
                    </div>
                    <div class="form-input-wr">
                        <input name="first_name" type="text" class="input-text" required>
                        <span class="floating-label">{{ $vars['contact_form_fist_name'] }}</span>
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
                        <textarea name="message" class="input-text" required></textarea>
                        <span class="floating-label">{{ $vars['contact_form_message'] }}</span>
                    </div>
                    @if(session()->has('message'))
                        <div class="form-input-wr" style="color: green; text-align: center;">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="form-input-wr" style="{{ $errors->any() ? '' : 'display: none;' }} color: red; text-align: center;">
                        @if($errors->any())
                            {!! implode('', $errors->all('<strong>:message</strong><br>')) !!}
                        @endif
                    </div>
                    <button class="bt home-btn">
                        <a href="/" class="home-link">
                            {{ $vars['contact_form_send'] }}
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @parent
    <script src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>
    <script>
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {center: [47.023242, 28.837566], zoom: 16});
        }
    </script>
@endsection
