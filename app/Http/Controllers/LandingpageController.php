<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    //
    public function index(Request $Request){
        $data = [
            'title' => 'Landing Page',
            'header' => 'Selamat Datang Di Blog'
        ];

        return view('landingpage',[
            'data' => $data

        ]);
    }
}
