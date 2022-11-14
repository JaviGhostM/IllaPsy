<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Homeslider;
use App\Models\Homebanner;
use App\Models\Homead;
use App\Models\Homenew;
use App\Models\Psychologist;

class HomeAdminController extends Controller
{
    public function index()
    {
        $Slider = Homeslider::orderBy('id', 'desc')->paginate();
        $Banner = Homebanner::orderBy('id', 'desc')->paginate();     
        return  view('Admin.Home', compact('Slider'));
    }

    public function storeslider(Request $request)
    {
        $Slider = new Homeslider();
        $Slider->texto1 = $request->texto1;
        $Slider->texto2 = $request->texto2;
        $request->validate(['image' => 'required|image']);
        $imagen = $request->file('image')->store('public/images');
        $url = Storage::url($imagen);
        $Slider->image = $url;
        $Slider->save();
        return redirect()->route('slider.index');
        
    }
    public function storebanner(Request $request)
    {
        $Banner = new Homebanner();
        $Banner->texto = $request->texto;
        $request->validate(['image' => 'required|image']);
        $imagen = $request->file('image')->store('public/images');
        $url = Storage::url($imagen);
        $Banner->image = $url;
        $Banner->save();
        return redirect()->route('slider.index');        
    }
    public function storead(Request $request)
    {
        $Ad = new Homead();
        $Ad->texto = $request->texto;
        $request->validate(['image' => 'required|image']);
        $imagen = $request->file('image')->store('public/images');
        $url = Storage::url($imagen);
        $Ad->image = $url;
        $Ad->save();
        return redirect()->route('slider.index');        
    }
    public function storenew(Request $request)
    {
        $New = new Homenew();
        $request->validate(['homeimage' => 'required|image']);
        $imagen1 = $request->file('homeimage')->store('public/images');
        $url1 = Storage::url($imagen1);
        $New->hometittle = $request->hometittle;
        $New->homedesc = $request->homedesc;
        $request->validate(['bannerimage' => 'required|image']);
        $imagen2 = $request->file('bannerimage')->store('public/images');
        $url2 = Storage::url($imagen2);
        $New->newtittle = $request->newtittle;
        $New->newdesc = $request->newdesc; 
        $New->urltittle = $request->urltittle;
        $New->homeimage = $url1;
        $New->bannerimage = $url2;
        $New->save();
        return redirect()->route('slider.index');      
    }
    public function storepsy(Request $request)
    {
        $Psy = new Psychologist();        
        $Psy->name = $request->name;
        $Psy->app = $request->app;        
        $Psy->apm = $request->apm;
        $Psy->specialty = $request->specialty; 
        $Psy->NDC = $request->NDC;
        $Psy->descprofession = $request->descprofession;
        $request->validate(['image' => 'required|image']);
        $imagen = $request->file('image')->store('public/images');
        $url = Storage::url($imagen);
        $Psy->image = $url;
        $Psy->save();
        return redirect()->route('slider.index');      
    }
    public function show()
    {

    }
}
