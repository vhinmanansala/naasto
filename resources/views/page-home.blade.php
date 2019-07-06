{{--
    Template Name: Home
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('home.banner')
        @include('home.how-it-works')
        @include('home.menu')
        @include('home.about')
    @endwhile
@endsection
