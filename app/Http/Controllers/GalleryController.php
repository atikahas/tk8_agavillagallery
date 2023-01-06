<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\VillaImage;
use App\Models\MenuGallery;

class GalleryController extends Controller
{
    public function index() 
    {
        $villaimage = VillaImage::all();
        $menugallery = MenuGallery::all();

        return view('gallery.index', (compact('villaimage','menugallery')));
    }

    public function interiormain() 
    {
        $villa1 = VillaImage::where('filesource','agavilla')->get();
        // dd($villa1);

        return view('gallery.interiormain', (compact('villa1')));
    }

    public function interiorguest() 
    {
        $villa2 = VillaImage::where('filesource','agavilla2')->get();
        // dd($villa1);

        return view('gallery.interiorguest', (compact('villa2')));
    }

    public function exterior() 
    {
        $exterior = VillaImage::where('filesource','agavilla3')->get();
        // dd($villa1);

        return view('gallery.exterior', (compact('exterior')));
    }
}
