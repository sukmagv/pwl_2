<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program(){
            return view('program', 
            ['data' => 'PROGRAM LIST <br>
            <ol>
            <li><a href=https://www.educastudio.com/program/karir>Program Karir</a></li>
            <li><a href=https://www.educastudio.com/program/magang>Program Magang</a></li>
            <li><a href=https://www.educastudio.com/program/kunjungan-industri>Program Kunjungan Industri</a></li>
            </ul>']);
        }
}
