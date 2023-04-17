<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Admin\Models\Square;
use App\Admin\Models\SquareImage;
use App\Admin\Models\BrandImage;


class AdminSqureController extends BaseController
{
   

    public function addEdit(Request $request, $id = null)
    {
            $url_action = sc_route_admin('square.storeUpdate');
            $data2 =  SquareImage::where('about_id',1)->get();
            $data1 = BrandImage::where('about_id',1)->get();
            $data = Square::where('id',1)->first();
            //dd($data);
            return view('s-cart-admin::'.'screen.about.squareEdit',compact('url_action','data','data2','data1'));
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
     
     //dd($data);
        $dataOrigin = request()->all();
       

        $dataInsert = [
             'banner_image'    => $data['banner_image'],
             'banner_heading'    => $data['banner_title'],
             'image'    => $data['image'],
             'brand_logo' =>$data['brand_logo'],
             'second_title'=>$data['second_title'],
             'second_subtitle'=>$data['second_subtitle'],
             'second_content'=>$data['second_content'],
            
            
        ];
        
        
        
            
      
            $banner = Square::where('id',1)->update($dataInsert);
            
            
            if($request->brand_sub_image)
            {
             foreach ($request->brand_sub_image as $feature1) {
                 //dd($feature);
                 
             BrandImage::firstOrCreate([
              "about_id" => 1,
              "image" => $feature1,
        ]);
        }
            }
            else{
                BrandImage::query()->truncate();
            }
            
         if($request->banner_sub_image)
            {
             foreach ($request->banner_sub_image as $feature) {
                 //dd($feature);
                 
             SquareImage::firstOrCreate([
              "about_id" => 1,
              "image" => $feature,
        ]);
        }
            }
            else{
                SquareImage::query()->truncate();
            }
            
            
            return redirect()->back()->with('success', sc_language_render('action.edit_success'));
        
    }

}