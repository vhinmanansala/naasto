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