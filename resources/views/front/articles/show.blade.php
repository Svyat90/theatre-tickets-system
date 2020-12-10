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
                <p class="article-text article-text-bold">
                    {{ $article->title }}
                </p>
                <p class="article-text">
                    {!! $article->content !!}
                </p>
            </div>
{{--            <div class="blog-detail-blocks">--}}
{{--                <div class="blog-detail-block block-img-first">--}}
{{--                    <div class="block-text-wr pt-0">--}}
{{--                        <p class="block-text">--}}
{{--                            The show, which plays into the contemporary fascination our world seems to have for reality--}}
{{--                            shows combined--}}
{{--                            with the brevity of online videos, is quite an impressive spectacle. The show starts closer to--}}
{{--                            an actual--}}
{{--                            narrative than most other Cirque shows featuring a show-within-a-show called The Mr. Wow Show.--}}
{{--                            Mr. Wow--}}
{{--                            (Andrey Kislitsin) is the host of a talent competition show- much in the vein of America’s Volta--}}
{{--                            is--}}
{{--                            Electrifying New Cirque Show--}}
{{--                        </p>--}}
{{--                        <p class="block-text">--}}
{{--                            The show, which plays into the contemporary fascination our world seems to have for reality--}}
{{--                            shows combined--}}
{{--                            with the brevity of online videos, is quite an impressive spectacle. The show starts closer to--}}
{{--                            an actual--}}
{{--                            narrative than most other Cirque shows featuring a show-within-a-show called The Mr. Wow Show.--}}
{{--                            Mr.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="block-img-wr">--}}
{{--                        <img src="{{ asset('front/img/blog-detail-img-2-1.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="blog-detail-text-wr">--}}
{{--                    <p class="block-text">--}}
{{--                        The acts are, as always, impressive feats of physical prowess, some of which leave you wondering how--}}
{{--                        any--}}
{{--                        human can do that. It’s a mix of aerial artists, acrobatics and, in once instance, an impressive--}}
{{--                        hair--}}
{{--                        suspension act that absolutely has to be a literal pain in the neck. The trampowall routine was one--}}
{{--                        of the--}}
{{--                        highlights for sure. For those unfamiliar with Cirque, this is when trampolines are lined at the--}}
{{--                        base of--}}
{{--                        constructed walls and acrobats bounce and flip on and off in what appears to be feats of defying--}}
{{--                        gravity.--}}
{{--                        This time around there is also a crazy impressive finale with BMX bikes--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="blog-detail-block">--}}
{{--                    <div class="block-text-wr pt-0">--}}
{{--                        <p class="block-text">--}}
{{--                            <b>The show</b> <br> Which plays into the contemporary fascination our world seems to have for--}}
{{--                            reality--}}
{{--                            shows combined with the brevity of online videos, is quite an impressive spectacle. The show--}}
{{--                            starts closer--}}
{{--                            to an actual narrative than most other Cirque shows featuring a show-within-a-show called The--}}
{{--                            Mr. Wow--}}
{{--                            Show. Mr. Wow (Andrey Kislitsin) is the host of a talent competition show- much in the vein of--}}
{{--                            America’s--}}
{{--                            Volta is Electrifying New Cirque Show--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="block-img-wr">--}}
{{--                        <img src="{{ asset('front/img/blog-detail-img-2-2.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </main>
@endsection

@section('scripts')
@endsection
