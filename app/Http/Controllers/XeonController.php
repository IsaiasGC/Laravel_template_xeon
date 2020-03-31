<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Portafolio;
use App\Team;

class XeonController extends Controller
{
    public function home(){
        $services=Service::all();
        $portafolio=Portafolio::all();
        $team=Team::all();
        return view('xeon', ['services' => $services, 'portafolio' => $portafolio, 'team' => $team]);
    }
}
