<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $data =[
            "title" => "SIMBA's Map",
        ];

        //memeriksa apakah user sedang login
        if (auth ()->check()) {
            return view('index', $data);
        } else {
        return view('index-public', $data);
        }
    }

    public function table()
    {
        $data =[
            "title" => "Table",
        ];
        return view('table', $data);
    }
}
