<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // // nomor 1
    // public function index() {
    //     return 'WELCOME TO EDUCASTUDIO!!';
    //    }

    // // nomor 2
    // public function product(){
    //     return 'PRODUCT LIST <br>
    //     <ol>
    //     <li><a href=https://www.educastudio.com/category/marbel-edu-games>Marbel Edu Games</a></li>
    //     <li><a href=https://www.educastudio.com/category/marbel-and-friends-kids-games>Marbel and Friends Kids Games</a></li>
    //     <li><a href=https://www.educastudio.com/category/riri-story-books>Riri Story Books</a></li>
    //     <li><a href=https://www.educastudio.com/category/kolak-kids-songs>Kolak Kids Songs</a></li>
    //     </ul>';
    // }

    // public function news($id){
    //     return 'NEWS LIST '.$id.'<br><ol><li><a href=https://www.educastudio.com/news>Berita Ke-1</a></li>
    // <li><a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19>Educastudio berbagi untuk warga sekitar terdampak covid-19>Berita Ke-2</a></li></ol>';
    // }

    // // nomor 4
    // public function program(){
    //     return 'PROGRAM LIST <br>
    //     <ol>
    //     <li><a href=https://www.educastudio.com/program/karir>Program Karir</a></li>
    //     <li><a href=https://www.educastudio.com/program/magang>Program Magang</a></li>
    //     <li><a href=https://www.educastudio.com/program/kunjungan-industri>Program Kunjungan Industri</a></li>
    //     </ul>';
    // }

    // // nomor 5
    // public function aboutus() {
    //     return '<a href=https://www.educastudio.com/about-us>About Us</a>';
    //    }

    // nomor 6
    public function index() {
        return '<a href=https://www.educastudio.com/contact-us>Contact Us</a>';
       }
}
