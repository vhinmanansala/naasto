<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function background_image()
    {
        return get_field('background_image');
    }

    public function heading()
    {
        return get_field('heading');
    }

    public function subheading()
    {
        return get_field('subheading');
    }

    public function call_to_action_link()
    {
        return get_field('call_to_action_link');
    }

    public function call_to_action_text()
    {
        return get_field('call_to_action_text');
    }

    public function enable_how_it_works()
    {
        return get_field('enable_how_it_works');
    }

    public function how_it_works_heading()
    {
        return get_field('how_it_works_heading');
    }

    public function how_it_works_contents()
    {
        return get_field('how_it_works_contents');
    }

    public function how_it_works_button_text()
    {
        return get_field('how_it_works_button_text');
    }

    public function how_it_works_button_link()
    {
        return get_field('how_it_works_button_link');
    }

    public function menu_heading()
    {
        return get_field('menu_heading');
    }

    public function menu_sub_heading()
    {
        return get_field('menu_sub_heading');
    }

    public function featured_products()
    {
        return get_field('featured_products');
    }

    public function menu_button_text()
    {
        return get_field('menu_button_text');
    }

    public function menu_button_link()
    {
        return get_field('menu_button_link');
    }

    public function about_heading()
    {
        return get_field('about_heading');
    }

    public function about_sub_heading()
    {
        return get_field('about_sub_heading');
    }

    public function about_button_text()
    {
        return get_field('about_button_text');
    }

    public function about_button_link()
    {
        return get_field('about_button_link');
    }

    public function about_background()
    {
        return get_field('about_background');
    }
}
