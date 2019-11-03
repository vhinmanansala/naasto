<h1 class="page-header">
    @if (get_post_type() == 'product')
        Menu
    @else
        {!! App::title() !!}

        @if (get_the_ID() == 146)
            <a href="{{ $redirection_page_link }}" class="btn btn-red">
                {{ $redirection_page_button_text }}
            </a>
        @endif
    @endif
</h1>