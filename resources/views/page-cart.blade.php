{{--
    Template Name: Cart
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        <div id="cart" class="page-container">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell large-12">
                        @include('partials.page-header')
                        @php(the_content())
                    </div>
                </div>
            </div>
        </div>
    @endwhile
@endsection