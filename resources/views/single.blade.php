@if (get_post_type() == 'product')
    @include('woocommerce.single-'.get_post_type())
@else
    @extends('layouts.app')

    @section('content')
        @while(have_posts()) @php the_post() @endphp
            @include('partials.single-'.get_post_type())
        @endwhile
    @endsection
@endif