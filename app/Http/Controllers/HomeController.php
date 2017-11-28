<?php

namespace App\Http\Controllers;

use App\Advertisement;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'ads' => Advertisement::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }
}
