<div id="banner-container" style="background: url('{{ $background_image['url'] }}')">
    @if ($banner_heading_font_type['font'])
        <h1 style="font-family: {{ $banner_heading_font_type['font'] }}; margin-bottom: 0; line-height: .75">
            {{ $heading }}
        </h1>
    @else
        <h1>{{ $heading }}</h1>
    @endif
    <p>{{ $subheading }}</p>

    <a href="{{ $call_to_action_link }}" class="btn btn-red">
        {{ $call_to_action_text }}
    </a>

</div>
