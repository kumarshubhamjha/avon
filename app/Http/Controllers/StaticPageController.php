<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Admin\Models\PressCategory;
use App\Admin\Models\StaticPage;


use App\Admin\Models\ReturnsRefund;
use App\Admin\Models\ReturnFaq;
class StaticPageController extends Controller
{
    
     public function index()
    {
       $data = StaticPage::where('id', 1)->first();
       
      
        return view(' templates.s-cart-light.content.termcondition', compact('data'));
     
    }
    
    
   
     public function shiping()
    {
       $data = StaticPage::where('id', 2)->first();
       
      
        return view(' templates.s-cart-light.content.shiping', compact('data'));
     
    }
    
    
     public function pricing ()
    {
       $data = StaticPage::where('id', 3)->first();
       
      
        return view(' templates.s-cart-light.content.pricing', compact('data'));
     
    }
    
    
    
     public function warranty()
    {
       $data = StaticPage::where('id', 4)->first();
       
      
        return view(' templates.s-cart-light.content.warranty', compact('data'));
     
    }
    
    
     public function refund()
    {
       $data = ReturnsRefund::where('id', 1)->first();
       
      $data1 = ReturnFaq::get();
        return view(' templates.s-cart-light.content.refund', compact('data','data1'));
     
    }
   

}
