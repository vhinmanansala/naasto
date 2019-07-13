{{--
    Template Name: Menu
--}}

@extends('layouts.app')

@section('content')
    <div class="page-container grid-container">
        @while(have_posts()) @php the_post() @endphp
            <div class="grid-x grid-padding-x">
                <div class="cell large-12 text-center">
                    @include('partials.page-header')
                </div>
            </div>
        @endwhile

        <div id="menu-list-container">
            <div class="grid-x grid-padding-x medium-up-2 large-up-2">
                
            </div>
        </div>
    </div>
    
@endsection