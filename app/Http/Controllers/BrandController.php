<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Admin\Models\AssectBrandCategory;
use App\Admin\Models\AssectBrand;


class BrandController extends Controller
{
    
     public function index()
    {
        $data = AssectBrand::where('status',1)->get();
        $data1 = AssectBrandCategory::where('status',1)->get();
     
        return view(' templates.s-cart-light.content.assetbrand',compact('data','data1'));
     
    }
    
    
    
  

}
