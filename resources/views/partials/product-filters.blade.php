<div class="grid-x grid-padding-x">
    <div class="cell large-12">
        <div id="product-categories-container">
            <strong>Filter menu: </strong>

            <ul class="clearfix">
                @foreach ($product_categories as $product_category)
                    <li>
                        <a href="{{ get_term_link($product_category) }}" @if (($selected_category->name == $product_category->name))) class="active" @endif>
                            {{ $product_category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>    
</div>