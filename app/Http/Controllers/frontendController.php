<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index() {
        return view('frontend.pages.home');
    }

    public function matches() {
        return view('frontend.pages.matches');
    }

    public function teams() {
        return view('frontend.pages.teams');
    }

    public function news() {
        return view('frontend.pages.news');
    }

    public function shop() {
        return view('frontend.pages.shop');
    }

    public function media() {
        return view('frontend.pages.media');
    }

    public function contact() {
        return view('frontend.pages.contact');
    }

    public function information() {
        return view('frontend.pages.information');
    }

    public function register() {
        return view('frontend.pages.register');
    }

    public function about() {
        return view('frontend.pages.about');
    }

    public function policy() {
        return view('frontend.pages.policy');
    }

    
}
