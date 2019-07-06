<footer id="footer-container">
    <div class="grid-x grid-padding-x">
        <div class="cell large-12 text-center">
            <h4>
                <a href="{{ $site_url }}">
                    {{ $site_name }}
                </a>
            </h4>

            <ul class="social-media clearfix">
                @foreach ($social_medias as $social_media => $url)
                    @if ($social_media == 'facebook')
                        @php($class = 'facebook')
                    @elseif ($social_media == 'twitter')
                        @php($class = 'twitter')
                    @elseif ($social_media == 'pinterest')
                        @php($class = 'pinterest')
                    @endif

                    <li>
                        <a href="{{ $url }}" class="{{ $class }}">
                            @if ($social_media == 'facebook')
                                <i class="fab fa-facebook-f"></i>
                            @elseif ($social_media == 'pinterest')
                                <i class="fab fa-pinterest-p"></i>
                            @elseif ($social_media == 'twitter')
                                <i class="fab fa-twitter"></i>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>