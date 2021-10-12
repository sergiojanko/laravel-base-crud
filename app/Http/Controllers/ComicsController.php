<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;


class ComicsController extends Controller
{
    public function index()
    {
        $comics = Comics::all();
        return view('comics.index', compact('comics'));
    }

    public function show($id)
    {
        $comics = Comics::all();
        $comic = $comics[$id];
        dd($comic);
        return view('comics.show', compact('comic'));
    }
}
