<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Admin\Models\About;
use App\Admin\Models\ProductionImage;
use App\Admin\Models\PrideImage;
use App\Admin\Models\Csr;
class AdminAboutController extends BaseController
{
    

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('about.storeUpdate');
      
            $data = About::where('id',1)->first();
          
            return view('s-cart-admin::'.'screen.about.addEdit',compact('url_action','data'));
        
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
     
    
        $dataOrigin = request()->all();
       


   
        $dataInsert = [
             'banner_image'    => $data['banner_image'],
             'banner_title'    => $data['banner_title'],
             'button'    => $data['button'],
             'image'    => $data['image'],
             'imagetwo'=> $data['imagetwo'],
             'pride_title'    => $data['pride_title'],
             'pride_subtitle'    => $data['pride_subtitle'],
             'pride_content'    => $data['pride_content'],
             'pride_contenttwo'  => $data['pride_contenttwo'],
             'pride_contentthree' => $data['pride_contentthree'],
             'productionimage'    => $data['productionimage'],
             'productionimageleft'=>$data['productionimageleft'],
             'productionimageright'=>$data['productionimageright'],
             'pride_subtitle'    => $data['pride_subtitle'],
             'production_title'    => $data['production_title'],
             'production_banner'=>$data['production_banner'],
             'pride_banner'=>$data['pride_banner'],
             'production_subtitle'    => $data['production_subtitle'],
             'production_content'    => $data['production_content'],
             'production_contenttwo'    => $data['production_contenttwo'],
             'production_contentthree'    => $data['production_contentthree'],
            
        ];
      
            $banner = About::where('id',1)->update($dataInsert);
            
       
            
            
            return redirect()->back()->with('success', sc_language_render('action.edit_success'));
        
    }
    
    
    
    
    public function csraddEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('csr.storeUpdate');
      
            $data = Csr::where('id',1)->first();
          
            return view('s-cart-admin::'.'screen.about.csraddEdit',compact('url_action','data'));
        
        
    }



  public function csrstoreUpdate(Request $request)
    {
        $data = request()->all();
     
    
        $dataOrigin = request()->all();
       


   
        $dataInsert = [
             'heading'    => $data['heading'],
             'content'    => $data['content'],
             'headingnew'    => $data['headingnew'],
             'contenttwo'    => $data['contenttwo'],
             'image'    => $data['image'],
             'imagetwo'=> $data['imagetwo'],
             'imagethree'=> $data['imagethree'],
             'headingone'    => $data['headingone'],
             'headingtwo'    => $data['headingtwo'],
             'headingthree'    => $data['headingthree'],
             'contentthree'    => $data['contentthree'],
             'contentfour'    => $data['contentfour'],
             'contentfive'    => $data['contentfive'],
            
            
        ];
      
            $banner = Csr::where('id',1)->update($dataInsert);
            
       
            
            return redirect()->back()->with('success', sc_language_render('action.edit_success'));
        
    }
    
}