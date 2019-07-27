<div id="secondary-menu-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12 text-right">
                <ul class="clearfix">
                    <li>
                        <a href="{{ get_permalink(136) }}">Cart</a>
                    </li>

                    <li>
                        @if (! is_user_logged_in())
                           <a href="#" class="lrm-login lrm-hide-if-logged-in">Account</a>
                        @else
                            <a href="{{ get_permalink(154) }}">Account</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

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
            </div>
        </div>
    </div>

    <div id="mobile-menu-container" style="display: none;">
        @php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'clearfix', 'container' => false)) @endphp
    </div>
</div>