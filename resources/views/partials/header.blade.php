<div id="header-section-container">
    @include('partials.secondary-menu')

    <div id="header-container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-middle">
                <div class="cell small-4 medium-2 large-2">
                    <a id="logo" href="{{ $site_url }}">
                        <img src="{{ $logo['url'] }}">
                    </a>
                </div>

                <div class="mobile-menu-icon cell small-8 text-right show-for-small-only">
                    <i class="fal fa-bars"></i>
                </div>

                <div class="cell small-8 medium-10 large-10 text-right hide-for-small-only">
                    @php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'clearfix', 'container' => false)) @endphp

                    <ul id="secondary-menu-list" class="clearfix">
                        <li> 
                            <a href="{{ get_permalink(136) }}">Cart</a>
                        </li>

                        @if (! is_user_logged_in())
                            <li>
                                <a href="#" class="lrm-login lrm-hide-if-logged-in">Login</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ get_permalink(154) }}">Account</a>
                            </li>

                            <li>
                                <a href="{!! wp_logout_url() !!}">Logout</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <div id="mobile-menu-container" style="display: none;">
            @php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'clearfix', 'container' => false)) @endphp
        </div>
    </div>
</div>