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
        $col1 = VillaImage::whereRaw('filesource = "agavilla" and id > 0 and id < 73 ')->get();
        $col2 = VillaImage::whereRaw('filesource = "agavilla" and id > 72 and id < 142 ')->get();
        $col3 = VillaImage::whereRaw('filesource = "agavilla" and id > 141 and id < 226 ')->get();
        $col4 = VillaImage::whereRaw('filesource = "agavilla" and id > 225 and id < 304 ')->get();
        $villa1 = VillaImage::where('filesource','agavilla')->get();
        // dd($villa1);

        return view('gallery.interiormain', (compact('villa1','col1','col2','col3','col4')));
    }

    public function interiorguest() 
    {
        $col1 = VillaImage::whereRaw('filesource = "agavilla2" and id > 305 and id < 349 ')->get();
        $col2 = VillaImage::whereRaw('filesource = "agavilla2" and id > 348 and id < 397 ')->get();
        $col3 = VillaImage::whereRaw('filesource = "agavilla2" and id > 396 and id < 437 ')->get();
        $col4 = VillaImage::whereRaw('filesource = "agavilla2" and id > 436 and id < 476 ')->get();
        $villa2 = VillaImage::where('filesource','agavilla2')->get();
        // dd($villa1);

        return view('gallery.interiorguest', (compact('villa2','col1','col2','col3','col4')));
    }

    public function exterior() 
    {
        $col1 = VillaImage::whereRaw('filesource = "agavilla3" and id > 475 and id < 540 ')->get();
        $col2 = VillaImage::whereRaw('filesource = "agavilla3" and id > 539 and id < 602 ')->get();
        $col3 = VillaImage::whereRaw('filesource = "agavilla3" and id > 601 and id < 663 ')->get();
        $col4 = VillaImage::whereRaw('filesource = "agavilla3" and id > 662 and id < 717 ')->get();

        return view('gallery.exterior', (compact('col1','col2','col3','col4')));
    }
}
