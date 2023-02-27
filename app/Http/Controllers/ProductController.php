<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
            return view('product', 
            ['data' => 'PRODUCT LIST <br>
            <ol>
            <li><a href=https://www.educastudio.com/category/marbel-edu-games>Marbel Edu Games</a></li>
            <li><a href=https://www.educastudio.com/category/marbel-and-friends-kids-games>Marbel and Friends Kids Games</a></li>
            <li><a href=https://www.educastudio.com/category/riri-story-books>Riri Story Books</a></li>
            <li><a href=https://www.educastudio.com/category/kolak-kids-songs>Kolak Kids Songs</a></li>
            </ul>']);
        }
}
