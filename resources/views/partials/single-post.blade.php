<div class="page-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <div class="blog-post-container">
                    @php($thumbnail = get_the_post_thumbnail_url())
                    @php($params = array( 'width' => 800, 'height' => 500 ))

                    <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="{{ get_the_title() }}">

                    <div class="blog-post-content-container">
                        <h2>{{ get_the_title() }}</h2>

                        <div class="meta">
                            <span>{{ get_the_date('F j, Y') }}</span>
                        </div>

                        {!! get_the_content() !!}
                    </div>
                </div>
            </div>

            <div class="cell medium-4 large-4">
                <div class="sidebar-container">
                    <?php dynamic_sidebar('sidebar-primary') ?>
                </div>
            </div>
        </div>
    </div>
</div>