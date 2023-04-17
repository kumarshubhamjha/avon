<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Admin\Models\About;
use App\Admin\Models\Csr;

class AboutController extends Controller
{
    
     public function index()
    {
        $data = About::find(1);
        
       
     
      //dd($data1,$data2);
        return view(' templates.s-cart-light.content.about', compact('data'));
     
    }


     public function pride()
     {
         $data = About::find(1);
        
         return view(' templates.s-cart-light.content.pride', compact('data'));
     }
     
     
      public function production()
     {
         $data = About::find(1);
       
         return view(' templates.s-cart-light.content.production', compact('data'));
     }
     
     
     public function csr()
     {
         $data = Csr::find(1);
        
        return view(' templates.s-cart-light.content.csr', compact('data'));
     }

}
