<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Admin\Models\Square;
use App\Admin\Models\Brand;
use App\Admin\Models\SquareImage;
use App\Admin\Models\BrandImage;

class AvonSquareController extends Controller
{
    
     public function index()
    {
        $data = Square::find(1);
        $data1 = Brand::get();
        $data2 = SquareImage::get();
       $data3 = BrandImage::get();
     
      //dd($data,$data1,$data2,$data3);
        return view(' templates.s-cart-light.content.avonsquare', compact('data','data1','data2','data3'));
     
    }

}
