<div id="secondary-menu-container" class="show-for-small-only">
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
                            <div class="dropdown">
                                <a href="#" class="user">Hello {{ wp_get_current_user()->user_nicename }}</a>

                                <ul class="submenu">

                                    <li>
                                        <a href="{{ get_permalink(154) }}">Account</a>
                                    </li>

                                    <li>
                                        <a href="{!! wp_logout_url() !!}">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>