<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact-us',
        ['contactus' => '<a href=https://www.educastudio.com/contact-us>Contact Us</a>']);
       }
}
