<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Admin\Models\CareerCategory;
use App\Admin\Models\Career;


class CareerController extends Controller
{
    
     public function index()
    {
        $data = Career::where('status',1)->get();
       
      $data1 = CareerCategory::where('status',1)->get();
      //dd($data,$data1);
        return view(' templates.s-cart-light.content.career',compact('data1','data'));
     
    }
    
    
    
    public function careerdetails($url)
    {
        $data = Career::where('status',1)->where('url',$url)->first();
        
          $data1 = Career::where('status',1)->get();
          
         return view(' templates.s-cart-light.content.blogdetails', compact('data','data1'));
    }

}