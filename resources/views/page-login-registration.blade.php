{{--
    Template Name: Login/Registration
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        <div class="page-container">
            <div class="grid-x grid-padding-x justified-center">
                <div class="cell medium-3 large-3 text-center">
                    {!! do_shortcode(get_the_content()) !!}
                </div>
            </div>
        </div>
    @endwhile
@endsection
