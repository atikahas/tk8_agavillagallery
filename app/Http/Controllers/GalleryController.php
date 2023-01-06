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

        // dd($villaimage);

        return view('gallery.index', (compact('villaimage','menugallery')));
    }
}
