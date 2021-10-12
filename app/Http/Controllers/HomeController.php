<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        $title = 'DC Comics';
        return view('home', compact('title'));
    }
}
