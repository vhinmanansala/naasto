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

        <div id="menu-container">
            <div id="menu-list-container">
                @include('partials.product-filters')
            
                <div class="grid-x grid-padding-x medium-up-2 large-up-2">
                    @while ($products->have_posts()) @php($products->the_post())
                        @php($product = wc_get_product(get_the_ID()))

                        <div class="cell">
                            <div class="product">
                                <div class="grid-x grid-padding-x">
                                    <div class="cell medium-4 large-4">
                                        <a href="{{ get_permalink(get_the_ID()) }}">
                                            {!! $product->get_image() !!}
                                        </a>
                                    </div>

                                    <div class="cell medium-8 large-8">
                                        <h5>
                                            <a href="{{ get_permalink(get_the_ID()) }}">
                                                {{ $product->get_name() }}
                                            </a>
                                        </h5>
                                        
                                        {!! wc_price($product->get_price()) !!}

                                        <p>
                                            {{ $product->get_description() }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endwhile @php(wp_reset_postdata())
                </div>
            </div>
        </div>
    </div>
    
@endsection