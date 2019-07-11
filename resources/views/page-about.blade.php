{{--
    Template Name: About
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        <div id="about-page-container" class="page-container">
            <div class="grid-container">
                <div class="grid-x grid-padding-x justified-center">
                    <div class="cell medium-10 large-10 text-center">
                        @include('partials.page-header')

                        {!! get_the_content() !!}
                    </div>
                </div>

                <div id="why-choose-us-container">
                    <div class="grid-x grid-padding-x justified-center">
                        <div class="cell medium-10 large-10 text-center">
                            <h4>{{ $heading }}</h4>
                            <p>{{ $content }}</p>
                        </div>
                    </div>

                    <ul class="checklist grid-x grid-padding-x medium-up-4 large-up-4">
                        @foreach ($why_choose_us as $why)
                            <li class="cell">
                                <h6>{{ $why['title'] }}</h6>
                                <p>{{ $why['description'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endwhile
@endsection