<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Admin\Models\PressCategory;
use App\Admin\Models\Press;


class PressController extends Controller
{
    
     public function index()
    {
        $data = Press::where('status',1)->get();
       
       $data1 = PressCategory::where('status',1)->get();
      //dd($data,$data1);
        return view(' templates.s-cart-light.content.press', compact('data','data1'));
     
    }
    
    
    
    // public function blogdetails($url)
    // {
    //     $data = Blog::where('status',1)->where('url',$url)->first();
        
    //       $data1 = Blog::where('status',1)->get();
          
    //      return view(' templates.s-cart-light.content.blogdetails', compact('data','data1'));
    // }

}
