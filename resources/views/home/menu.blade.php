<div id="menu-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x justified-center">
            <div class="cell large-7 text-center">
                <h2>{{ $menu_heading }}</h2>
                <p>{{ $menu_sub_heading }}</p>
            </div>
        </div>

        <div id="menu-list-container">
            <div class="grid-x grid-padding-x medium-up-2 large-up-2">
                @foreach ($featured_products as $product)
                    @php($_product = wc_get_product($product['product']->ID))

                    <div class="cell">
                        <div class="product">
                            <div class="grid-x grid-padding-x">
                                <div class="cell medium-4 large-4">
                                    <a href="{{ get_permalink($product['product']->ID) }}">
                                        {!! $_product->get_image() !!}
                                    </a>
                                </div>

                                <div class="cell medium-8 large-8">
                                    <h5>
                                        <a href="{{ get_permalink($product['product']->ID) }}">
                                            {{ $_product->get_name() }}
                                        </a>
                                    </h5>
                                    
                                    {!! wc_price($_product->get_price()) !!}

                                    <p>
                                        {{ $_product->get_description() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center">
            <a href="{{ $menu_button_link }}" class="btn btn-red">
                {{ $menu_button_text }}
            </a>
        </div>
    </div>
</div>