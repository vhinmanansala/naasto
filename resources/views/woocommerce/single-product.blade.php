@extends('layouts.app')


@section('content')
    @while(have_posts()) @php the_post() @endphp
        <div class="page-container grid-container">
            <?php
                defined('ABSPATH') || exit;
                global $product;

                do_action('woocommerce_before_single_product');

                if (post_password_required()) {
                    echo get_the_password_form(); // WPCS: XSS ok.
                    return;
                }
            ?>

            <div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
                <div class="grid-x grid-padding-x">
                    <div class="cell large-6 medium-6">
                        @php(do_action('woocommerce_before_single_product_summary'))
                    </div>

                    <div class="cell medium-5 large-5 medium-offset-1 large-offset-1">
                        @php(do_action('woocommerce_single_product_summary'))
                    </div>
                </div>
            </div>

            @php(do_action('woocommerce_after_single_product'))
        </div>
    @endwhile
@endsection