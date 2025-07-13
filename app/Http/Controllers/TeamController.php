<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $title = 'MapBiomas Indonesia - Team';
        $description = 'Learning from the past for the future';
        return view('frontends.team', compact('title', 'description'));
    }
}
