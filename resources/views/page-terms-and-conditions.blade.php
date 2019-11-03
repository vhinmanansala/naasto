{{--
    Template Name: Terms and conditions
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        <div class="page-container">
           <div class="grid-container">
               <div class="grid-x grid-padding-x justified-center">
                   <div class="cell medium-8 large 8">
                        @include('partials.page-header')

                        {!! get_the_content() !!}
                   </div>
               </div>
           </div>
        </div>
    @endwhile
@endsection