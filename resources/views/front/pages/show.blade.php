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
                    {{ $page->name }}
                </h1>
                <div class="article-imgwr">
                    <img src="{{ MediaHelper::getImageUrl($page) }}" alt="">
                </div>
                <p class="article-text article-text-bold">
                    {{ $page->title }}
                </p>
                <p class="article-text">
                    {!! $page->content !!}
                </p>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
@endsection
