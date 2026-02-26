<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Display the privacy policy page.
     */
    public function privacy()
    {
        return view('privacy');
    }

    /**
     * Display the terms of use page.
     */
    public function terms()
    {
        return view('terms');
    }
}
