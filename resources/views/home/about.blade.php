<div id="about-container" style="background: url('{{ $about_background['url'] }}') center scroll transparent; background-size: cover;">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-6 large-6">
                <p>{{ $about_sub_heading }}</p>
                <h2>{{ $about_heading }}</h2>

                <a href="{{ $about_button_link }}" class="btn btn-red">
                    {{ $about_button_text }}
                </a>
            </div>
        </div>
    </div>
</div>