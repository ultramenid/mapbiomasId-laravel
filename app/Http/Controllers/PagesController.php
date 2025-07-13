<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function cmsabout(){
        $title = 'MapBiomas Indonesia - About';
        $nav = 'pages';
        return view('backends.about', compact('title', 'nav'));
    }
    public function about(){
        $data = $this->getAbout();
        $title = 'MapBiomas Indonesia - About';
        $description = 'Learning from the past for the future';
        return view('frontends.about', compact('title', 'description', 'data'));
    }

     public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, contentID as content';
        }else{
            return 'id, contentEN as content';
        }
    }

    public function getAbout(){
        return DB::table('pages')
                ->selectRaw($this->getSelect())
                ->where('name', 'about')
                ->first();
    }
}
