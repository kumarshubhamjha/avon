<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Admin\Models\BlogCategory;
use App\Admin\Models\Blog;


class BlogController extends Controller
{
    
     public function index()
    {
        $data = Blog::where('status',1)->get();
       
       $data1 = BlogCategory::where('status',1)->get();
      //dd($data,$data1,$data2,$data3);
        return view(' templates.s-cart-light.content.blog', compact('data','data1'));
     
    }
    
    
    
    public function blogdetails($url)
    {
        $data = Blog::where('status',1)->where('url',$url)->first();
        
          $data1 = Blog::where('status',1)->get();
          
         return view(' templates.s-cart-light.content.blogdetails', compact('data','data1'));
    }

}
