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
        $col1 = VillaImage::whereRaw('filesource = "agavilla" and id > 0 and id < 25 ')->get();
        $col2 = VillaImage::whereRaw('filesource = "agavilla" and id > 24 and id < 46 ')->get();
        $col3 = VillaImage::whereRaw('filesource = "agavilla" and id > 45 and id < 67 ')->get();
        $col4 = VillaImage::whereRaw('filesource = "agavilla" and id > 66 and id < 89 ')->get();
        $villa1 = VillaImage::where('filesource','agavilla')->get();
        // dd($villa1);

        return view('gallery.interiormain', (compact('villa1','col1','col2','col3','col4')));
    }

    public function interiorguest() 
    {
        $col1 = VillaImage::whereRaw('filesource = "agavilla2" and id > 88 and id < 103 ')->get();
        $col2 = VillaImage::whereRaw('filesource = "agavilla2" and id > 102 and id < 113 ')->get();
        $col3 = VillaImage::whereRaw('filesource = "agavilla2" and id > 112 and id < 122 ')->get();
        $col4 = VillaImage::whereRaw('filesource = "agavilla2" and id > 121 and id < 138 ')->get();
        $villa2 = VillaImage::where('filesource','agavilla2')->get();
        // dd($villa1);

        return view('gallery.interiorguest', (compact('villa2','col1','col2','col3','col4')));
    }

    public function exterior() 
    {
        $col1 = VillaImage::whereRaw('filesource = "agavilla3" and id > 137 and id < 148 ')->get();
        $col2 = VillaImage::whereRaw('filesource = "agavilla3" and id > 147 and id < 154 ')->get();
        $col3 = VillaImage::whereRaw('filesource = "agavilla3" and id > 153 and id < 161 ')->get();
        $col4 = VillaImage::whereRaw('filesource = "agavilla3" and id > 160 and id < 170 ')->get();

        return view('gallery.exterior', (compact('col1','col2','col3','col4')));
    }

    public function situation() 
    {
        $col1 = VillaImage::whereRaw('id > 169 and id < 180 ')->get();
        $col2 = VillaImage::whereRaw('id > 181 and id < 192 ')->get();
        $col3 = VillaImage::whereRaw('id > 191 and id < 201 ')->get();
        $col4 = VillaImage::whereRaw('id > 200 and id < 212 ')->get();

        return view('gallery.situation', (compact('col1','col2','col3','col4')));
    }

    public function retouched() 
    {
        $col1 = VillaImage::whereRaw('filesource = "agavilla17" and id > 211 and id < 240 ')->get();
        $col2 = VillaImage::whereRaw('filesource = "agavilla17" and id > 239 and id < 265 ')->get();
        $col3 = VillaImage::whereRaw('filesource = "agavilla17" and id > 264 and id < 294 ')->get();
        $col4 = VillaImage::whereRaw('filesource = "agavilla17" and id > 293 and id < 319 ')->get();

        return view('gallery.retouched', (compact('col1','col2','col3','col4')));
    }
}
