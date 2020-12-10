<footer class="footer">
    <div class="footer-container">
        <div class="footer-imgwr">
            <img src="{{ asset('front/img/header-logo.png') }}" alt="Satiricus">
        </div>
        <div class="footer-nav">
            @foreach($footerPages as $chunkPages)
                <ul class="footer-navlist" id="{{ $loop->last ? 'last' : '' }}">
                    @if($loop->first)
                        <li class="footer-item">
                            <a href="{{ route('spectacles.index') }}">{{ $vars['menu_spectacles'] }}</a>
                        </li>
                    @elseif($loop->last)
                        <li class="footer-item">
                            <a href="{{ route('pages.account') }}">{{ $vars['my_account'] }}</a>
                        </li>
                    @else
                        <li class="footer-item">
                            <a href="{{ route('pages.contacts') }}">{{ $vars['menu_contacts'] }}</a>
                        </li>
                    @endif

                    @foreach($chunkPages as $chunkPage)
                        <li class="footer-item">
                            <a href="{{ route('pages.show', $chunkPage->slug) }}">{{ $chunkPage->name }}</a>
                        </li>
                    @endforeach
                </ul>
            @endforeach
            <ul class="footer-navlist" id="last">
                <li class="footer-item"><a href="#">Blog</a></li>
                @foreach($footerArticles as $footerArticle)
                    <a class="footer-item" href="{{ route('articles.show', $footerArticle->id) }}">
                        <img src="{{ MediaHelper::getImageUrl($footerArticle) }}" style="max-width: 40px;" alt="{{ $footerArticle->name }}">
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
