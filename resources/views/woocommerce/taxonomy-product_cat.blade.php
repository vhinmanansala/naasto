@extends('layouts.app')

@section('content')
    <div class="page-container grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12 text-center">
                @include('partials.page-header')
            </div>
        </div>

        <div id="menu-container">
            <div id="menu-list-container">
                <?php 
                    $selected_category = get_queried_object();

                    $args = array(
                        'post_type' => 'product', 
                        'paged' => $current_page,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => $selected_category->slug
                            )
                        )
                    );

                    $products = new WP_Query($args);
                ?>

                @include('partials.product-filters')

                @if ($products->have_posts())
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

                                            @if ($product->manage_stock)
                                                @if ($product->stock_quantity > 0)
                                                    <p class="stock in-stock">
                                                        {{ $product->stock_quantity }} in stock
                                                    </p>
                                                @else
                                                    <p class="stock out-of-stock">
                                                        Out of stock
                                                    </p>
                                                @endif
                                            @endif

                                            <p>
                                                {{ $product->get_description() }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endwhile @php(wp_reset_postdata())
                    </div>
                @else
                    <h4 class="text-center">
                        No products found for {{ strtolower($selected_category->name) }}.
                    </h4>
                @endif
            </div>
        </div>
    </div>
@endsection