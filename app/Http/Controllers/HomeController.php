<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeslider;
use App\Models\Homebanner;
use App\Models\Homead;
use App\Models\Homenew;
use App\Models\Psychologist;

class HomeController extends Controller
{
    public function index()
    {
        $Slider = Homeslider::orderBy('id', 'desc')->latest()->take(4)->get();
        $Banner = Homebanner::orderBy('id', 'desc')->latest()->take(1)->get(); 
        $Ad = Homead::orderBy('id', 'desc')->latest()->take(4)->get();
        $New = Homenew::orderBy('id', 'desc')->latest()->take(5)->get();
        $Psy = Psychologist::orderBy('id', 'desc')->latest()->take(3)->get();   
        return  view('home.home', compact('Slider', 'Banner', 'Ad', 'New', 'Psy'));
    }
}
