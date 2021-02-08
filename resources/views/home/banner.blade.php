@section('custom_style')
    <style>
        body #banner-container h1 {
            color: {{ $banner_heading_font_color ? $banner_heading_font_color . ' !important' : '#ffffff' }};
            font-family: "{{ $banner_heading_font_type['font'] ? $banner_heading_font_type['font'] . ' !important' : 'inherit' }}";
            font-size: {{ $banner_heading_font_size ? $banner_heading_font_size . 'px !important' : 'inherit' }};
            margin-bottom: {{ $banner_heading_margin_bottom ? $banner_heading_margin_bottom . 'px !important' : 'inherit' }};
        }
    </style>
@endsection

<div id="banner-container" style="background: url('{{ $background_image['url'] }}')">
    <h1>{{ $heading }}</h1>

    <p>{{ $subheading }}</p>

    <a href="{{ $call_to_action_link }}" class="btn btn-red">
        {{ $call_to_action_text }}
    </a>

</div>
