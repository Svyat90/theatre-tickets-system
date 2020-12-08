@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front/css/blog.css') }}">
@endsection

@section('content')
    <main class="main blog">
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
            <div class="heading-text">
                <h1 class="heading">Festivalul national de teatru, ediţia a 23-a</h1>
            </div>
        </div>
        <div class="main-content">
            <h2 class="form-heading">
                Noutati
            </h2>
            <p class="tabs">
                <a href="{{ route('articles.index') }}" class="blog-link {{ ! request()->input('category_id', null) ? 'active' : '' }}">Toate</a>
                @foreach($categories as $category)
                    <a href="{{ route('articles.index', ['category_id' => $category->id]) }}"
                       class="blog-link {{ request()->input('category_id', null) == $category->id ? 'active' : '' }}" >
                        {{ $category->name }}
                    </a>
                @endforeach
            </p>
            @if($articleVideo)
                <div class="main-video-wr">
                    <div class="video_wrapper video_wrapper_full js-videoWrapper">
                        <iframe class="videoIframe js-videoIframe" src="" controls frameborder="0" allowTransparency="true"
                                allowfullscreen
                                data-src="{{ $articleVideo->video_url }}?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
                        <button class="videoPoster js-videoPoster"></button>
                    </div>
                    <div class="video-description">
                        <h4 class="video-heading">
                            {{ $articleVideo->name }}
                        </h4>
                        <p class="video-text">
                            {{ $articleVideo->title }}
                        </p>
                        <div class="description-footer">
                            <span class="date">{{ $articleVideo->date ? $articleVideo->date->format('d. m. Y') : '' }}</span>
                            <a href="#" class="video-link">citeste mai mult
                                <span class="material-icons">navigate_next</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            <div class="main-cards-wr">
                @foreach($articles as $article)
                    <div class="card cards-card">
                        <img class="card-img-top" src="{{ MediaHelper::getImageUrl($article) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $article->name }}
                            </h5>
                            <p class="card-text">{{ $articleVideo->date ? $articleVideo->date->format('d. m. Y') : '' }}
                                <a href="{{ route('articles.show', $article->id) }}" class="card-link">{{ $article->category ? $article->category->name : ''}}</a>
                            </p>
                        </div>
                    </div>
                @endforeach

{{--                <div class="card cards-card">--}}
{{--                    <img class="card-img-top" src="./img/blog-cards-1.jpg" alt="Card image cap">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">--}}
{{--                            Teatru tv teatru la tine acasă cu tvr moldova șI tvr international--}}
{{--                        </h5>--}}
{{--                        <p class="card-text">22.07.2020--}}
{{--                            <a href="#" class="card-link">Eveniment</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card cards-card">--}}
{{--                    <img class="card-img-top" src="./img/blog-cards-1.jpg" alt="Card image cap">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">--}}
{{--                            Teatru tv teatru la tine acasă cu tvr moldova șI tvr international--}}
{{--                        </h5>--}}
{{--                        <p class="card-text">22.07.2020--}}
{{--                            <a href="#" class="card-link">Eveniment</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card cards-card">--}}
{{--                    <img class="card-img-top" src="./img/blog-cards-1.jpg" alt="Card image cap">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">--}}
{{--                            Teatru tv teatru la tine acasă cu tvr moldova șI tvr international--}}
{{--                        </h5>--}}
{{--                        <p class="card-text">22.07.2020--}}
{{--                            <a href="#" class="card-link">Eveniment</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card cards-card">--}}
{{--                    <img class="card-img-top" src="./img/blog-cards-1.jpg" alt="Card image cap">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">--}}
{{--                            Teatru tv teatru la tine acasă cu tvr moldova șI tvr international--}}
{{--                        </h5>--}}
{{--                        <p class="card-text">22.07.2020--}}
{{--                            <a href="#" class="card-link">Eveniment</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card cards-card">--}}
{{--                    <img class="card-img-top" src="./img/blog-cards-1.jpg" alt="Card image cap">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">--}}
{{--                            Teatru tv teatru la tine acasă cu tvr moldova șI tvr international--}}
{{--                        </h5>--}}
{{--                        <p class="card-text">22.07.2020--}}
{{--                            <a href="#" class="card-link">Eveniment</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card cards-card">--}}
{{--                    <img class="card-img-top" src="./img/blog-cards-1.jpg" alt="Card image cap">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">--}}
{{--                            Teatru tv teatru la tine acasă cu tvr moldova șI tvr international--}}
{{--                        </h5>--}}
{{--                        <p class="card-text">22.07.2020--}}
{{--                            <a href="#" class="card-link">Eveniment</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card cards-card">--}}
{{--                    <img class="card-img-top" src="./img/blog-cards-1.jpg" alt="Card image cap">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">--}}
{{--                            Teatru tv teatru la tine acasă cu tvr moldova șI tvr international--}}
{{--                        </h5>--}}
{{--                        <p class="card-text">22.07.2020--}}
{{--                            <a href="#" class="card-link">Eveniment</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card cards-card">--}}
{{--                    <img class="card-img-top" src="./img/blog-cards-1.jpg" alt="Card image cap">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">--}}
{{--                            Teatru tv teatru la tine acasă cu tvr moldova șI tvr international--}}
{{--                        </h5>--}}
{{--                        <p class="card-text">22.07.2020--}}
{{--                            <a href="#" class="card-link">Eveniment</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card cards-card">--}}
{{--                    <img class="card-img-top" src="./img/blog-cards-1.jpg" alt="Card image cap">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">--}}
{{--                            Teatru tv teatru la tine acasă cu tvr moldova șI tvr international--}}
{{--                        </h5>--}}
{{--                        <p class="card-text">22.07.2020--}}
{{--                            <a href="#" class="card-link">Eveniment</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

                {{ $articles->links('front.partials.paginator') }}

            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('front/js/video.js') }}"></script>
@endsection
