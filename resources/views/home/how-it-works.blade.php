@if ($enable_how_it_works == true)
    <div id="how-it-works-container">
        <div class="grid-container grid-padding-x">
            <div class="cell large-12 text-center">
                <h2>{{ $how_it_works_heading }}</h2>

                <div id="how-it-works" class="grid-x grid-padding-x medium-up-2 large-up-4 medium-centered large-centered">
                    @foreach ($how_it_works_contents as $content)
                        <div class="cell">
                            <div class="how-it-works">
                                <div class="icon">
                                    <img src="{{ $content['icon']['url'] }}">
                                </div>

                                <div class="how-it-works-content">
                                    <h5>{{ $content['title'] }}</h5>
                                    <p>{{ $content['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a href="{{ $how_it_works_button_link }}" class="btn btn-red">
                    {{ $how_it_works_button_text }}
                </a>
            </div>
        </div>
    </div>
@endif