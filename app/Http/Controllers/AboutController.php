<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
        public function aboutus() {
        return view('about-us', 
        ['aboutus' => '<a href=https://www.educastudio.com/about-us>About Us</a>']);
       }
}
