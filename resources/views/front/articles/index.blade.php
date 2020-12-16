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
                            {{ $vars['blog_top_text_1'] }}
                        </p>
                        <h2 class="num-day">
                            {{ $vars['blog_top_text_2'] }}
                        </h2>
                        <p class="month">
                            {{ $vars['blog_top_text_3'] }}
                        </p>
                    </div>
                </div>
                <aside class="social-links">
                    <a href="{{ $vars['soc_link_facebook'] }}" class="soc-link">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="{{ $vars['soc_link_intagram'] }}" class="soc-link">
                        <i class="fa fa-instagram"></i>
                    </a>
                </aside>
            </div>
            <div class="heading-text">
                <h1 class="heading">{{ $vars['blog_title_top'] }}</h1>
            </div>
        </div>
        <div class="main-content">
            <h2 class="form-heading">
                {{ $vars['blog_title'] }}
            </h2>
            <p class="tabs">
                <a href="{{ route('articles.index') }}" class="blog-link {{ ! request()->input('category_id', null) ? 'active' : '' }}">{{ $vars['base_all'] }}</a>
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
                            <a href="{{ route('articles.show', $articleVideo->id) }}" class="video-link" style="text-decoration: none;">{{ $vars['blog_read_more'] }}
                                <span class="material-icons">navigate_next</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            <div class="main-cards-wr">
                @foreach($articles as $article)
                    <div class="card cards-card" style="cursor: auto;">
                        <img class="card-img-top" src="{{ MediaHelper::getImageUrl($article) }}" alt="Card image cap">
                        <div class="card-body">
                            <a class="card-title" href="{{ route('articles.show', $article->id) }}" style="text-decoration: none;">
                                {{ $article->name }}
                            </a>
                            <p class="card-text">{{ $article->date ? $article->date->format('d. m. Y') : '' }}
                                @if($article->category)
                                    <a href="{{ route('articles.index', ['category_id' => $article->category->id]) }}" class="card-link">
                                        {{ $article->category->name }}
                                    </a>
                                @endif
                            </p>
                        </div>
                    </div>
                @endforeach

                {{ $articles->links('front.partials.paginator') }}

            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('front/js/video.js') }}"></script>
@endsection
