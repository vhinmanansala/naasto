<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageAbout extends Controller
{
    public function heading()
    {
        return get_field('heading');
    }

    public function content()
    {
        return get_field('content');
    }

    public function why_choose_us()
    {
        return get_field('why_choose_us');
    }
}