{{--
    Template Name: Blog
--}}

@extends('layouts.app')

@section('content')
    <div class="blog-page-container page-container">
        <div class="grid-container">
            <div class="text-center">
                @include('partials.page-header')
            </div>

            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts(array('posts_per_page' => 5, 'paged' => $paged));
            ?>

            @while(have_posts()) @php(the_post())
                @php($thumbnail = get_the_post_thumbnail_url())
                @php($params = array( 'width' => 530, 'height' => 530 ))

                <div class="blog-post grid-x align-middle">
                    <div class="cell medium-5 large-5">
                        <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="{{ get_the_title() }}">
                    </div>

                    <div class="blog-post-content cell medium-7 large-7">
                        <h4>
                            <a href="{{ get_permalink() }}">
                                {{ get_the_title() }}
                            </a>
                        </h4>

                        <div class="meta">
                            <span>{{ get_the_date('F j, Y') }}</span>
                        </div>

                        <p>{!! trunc(get_the_content(), 30) !!}</p>

                        <a href="{{ get_permalink() }}" class="btn btn-red">Read more</a>
                    </div>
                </div>
            @endwhile 

            <div id="pagination" class="grid-x medium-up-2 large-up-2">
               <div class="cell text-left">
                    <?php previous_posts_link('Previous'); ?>
                </div>

                <div class="cell text-right">
                    <?php next_posts_link('Next'); ?>
                </div>
            </div>
        </div>
    </div>
@endsection