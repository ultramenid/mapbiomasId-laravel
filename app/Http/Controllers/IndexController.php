<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $title = 'MapBiomas Indonesia';
        $description = 'Learning from the past for the future';
        return view('frontends.index', compact('title', 'description'));
    }
}
