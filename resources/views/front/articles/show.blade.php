@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front/css/blog-detail.css') }}">
@endsection

@section('content')
    <main class="main blog-detail">
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
        </div>
        <div class="main-content">
            <div class="blog-detail-article d-flex" style="color: #afafaf;">
                <h1 class="heading">
                    {{ $article->name }}
                </h1>
                <div class="article-imgwr">
                    <img src="{{ MediaHelper::getImageUrl($article) }}" alt="">
                </div>
                <div class="article-text article-text-bold">
                    {{ $article->title }}
                </div>
                <div class="article-text">
                    {!! $article->content !!}
                </div>
            </div>
            <div class="blog-detail-blocks">
                @if($article->text_1)
                    <div class="blog-detail-block block-img-first">
                        <div class="block-text-wr pt-0">
                            <div class="block-text">
                                {!! $article->text_1 !!}
                            </div>
                        </div>
                        @if($article->image_1)
                            <div class="block-img-wr">
                                <img src="{{ MediaHelper::getImageUrl($article, 'image_1') }}" alt="" style="max-width: 350px;">
                            </div>
                        @endif
                    </div>
                @endif
                @if($article->text_2)
                    <div class="blog-detail-text-wr">
                        <div class="block-text">
                            {!! $article->text_2 !!}
                        </div>
                    </div>
                @endif
                @if($article->text_3)
                    <div class="blog-detail-block">
                        <div class="block-text-wr pt-0">
                            <div class="block-text">
                                {!! $article->text_3 !!}
                            </div>
                        </div>
                        @if($article->image_2)
                            <div class="block-img-wr">
                                <img src="{{ MediaHelper::getImageUrl($article, 'image_2') }}" alt="" style="max-width: 540px;">
                            </div>
                        @endif
                    </div>
                @endif
                @if($article->text_4)
                    <div class="blog-detail-spectacles d-flex">
                        {!! $article->text_4 !!}
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection

@section('scripts')
@endsection
