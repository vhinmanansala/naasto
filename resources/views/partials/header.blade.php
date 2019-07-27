<div id="secondary-menu-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12 text-right">
                <ul class="clearfix">
                    <li>test test test test 2</li>
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
            <div class="cell medium-2 large-2">
                <a id="logo" href="{{ $site_url }}">
                    <img src="{{ $logo['url'] }}">
                </a>
            </div>

            <div class="cell medium-10 large-10 text-right">
                @php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'clearfix', 'container' => false)) @endphp
            </div>
        </div>
    </div>
</div>