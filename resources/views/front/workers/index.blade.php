@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/actorii.css') }}">
@endsection

@section('content')
    <main class="main actorii">
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
                <h1 class="heading">{{ $vars['team_title_top'] }}</h1>
            </div>
        </div>
        <div class="main-content">
            <h2 class="form-heading">
                {{ $vars['team_title'] }}
            </h2>
            <div class="sl-tabs-wr">
                <p class="tabs swiper-wrapper">
                    <a href="{{ route('workers.index') }}" class="act-link {{ ! request()->input('category_id', null) ? 'active' : '' }}">{{ $vars['base_all'] }}</a>
                    @foreach($categories as $category)
                        <a href="{{ route('workers.index', ['category_id' => $category->id]) }}"
                           class="act-link {{ request()->input('category_id', null) == $category->id ? 'active' : '' }}" >
                            {{ $category->name }}
                        </a>
                    @endforeach
                </p>
            </div>
            <div class="sl-team-wr">
                <div class="team-wr swiper-wrapper">
                    @if($workerTop && ! request()->input('category_id', false))
                        <div class="team-item director">
                            <a class="item-img-wr">
                                <img src="{{ MediaHelper::getImageUrl($workerTop) }}"
                                     alt="{{ $workerTop->name }}. {{ $workerTop->title }}">
                            </a>
                            <div class="item-text-wr">
                                <a class="item-text item-text-name">
                                    {{ $workerTop->name }}
                                </a>
                                <p class="item-text">
                                    {{ $workerTop->title }}
                                </p>
                            </div>
                        </div>
                    @endif

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

                {{ $workers->links('front.partials.paginator') }}

            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="{{ asset('front/js/actorii-swiper.js') }}"></script>
@endsection
