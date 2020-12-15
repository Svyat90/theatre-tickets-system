<footer class="footer">
    <div class="footer-container">
        <div class="footer-imgwr">
            <img src="{{ asset('front/img/header-logo.png') }}" alt="Satiricus">
        </div>
        <div class="footer-nav">

            <ul class="footer-navlist">
                <li class="footer-item">
                    <span>{{ $vars['footer_column_1_title'] }}</span>
                </li>
                @if(isset($footerPages['column_1']))
                    @foreach($footerPages['column_1'] as $page)
                        <li class="footer-item">
                            <a href="{{ route('pages.show', $page->slug) }}">{{ $page->name }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>

            <ul class="footer-navlist">
                <li class="footer-item">
                    <span>{{ $vars['footer_column_2_title'] }}</span>
                </li>
                @if(isset($footerPages['column_2']))
                    @foreach($footerPages['column_2'] as $page)
                        <li class="footer-item">
                            <a href="{{ route('pages.show', $page->slug) }}">{{ $page->name }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>

            <ul class="footer-navlist">
                <li class="footer-item">
                    <span>{{ $vars['footer_column_3_title'] }}</span>
                </li>
                @if(isset($footerPages['column_3']))
                    @foreach($footerPages['column_3'] as $page)
                        <li class="footer-item">
                            <a href="{{ route('pages.show', $page->slug) }}">{{ $page->name }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>

            <ul class="footer-navlist" id="last">
                <li class="footer-item"><a href="#">Blog</a></li>
                @foreach($footerArticles as $footerArticle)
                    <a class="footer-item" href="{{ route('articles.show', $footerArticle->id) }}">
                        <img src="{{ MediaHelper::getImageUrl($footerArticle, 'image', true) }}" style="max-width: 40px;" alt="{{ $footerArticle->name }}">
                        <span>{{ substr($footerArticle->title, 0, 50) . ' ...' }}</span>
                    </a>
                @endforeach
            </ul>
            <div class="footer-contacts">
                <div class="social-links">
                    <a href="{{ $vars['soc_link_facebook'] }}" class="soc-link">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="{{ $vars['soc_link_intagram'] }}" class="soc-link">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
                <div class="phone">
                    <p class="phone-number"><span class="material-icons">call</span>{{ $vars['footer_call_phone'] }}</p>
                    <p class="phone-time">{{ $vars['footer_work_schedule'] }}</p>
                </div>
            </div>
        </div>
        <div class="footer-c">
            <p class="copy">
                &copy; Copyright Satiricus {{ date('Y') }}
            </p>
            <img src="{{ asset('front/img/footer-visa.jpg') }}" alt="Pay with VISA">
            <img src="{{ asset('front/img/footer-mastercard.png') }}" alt="Pay with MasterCard">
        </div>
    </div>
</footer>
