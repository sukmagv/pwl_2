<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id){
        return view('news', ['data' => 'NEWS LIST '.$id.'<br><ol><li><a href=https://www.educastudio.com/news>Berita Ke-1</a></li>
        <li><a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19>Educastudio berbagi untuk warga sekitar terdampak covid-19>Berita Ke-2</a></li></ol>'
        ]);
    }
}
