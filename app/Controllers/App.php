<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function site_url()
    {
        return get_bloginfo('url');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function logo()
    {
        return get_field('logo', 'options');
    }

    public function social_medias()
    {
        return get_field('social_medias', 'option');
    }

    public function address()
    {
        return get_field('address', 'option');
    }

    public function phone()
    {
        return get_field('phone', 'option');
    }

    public function email()
    {
        return get_field('email', 'option');
    }
}
