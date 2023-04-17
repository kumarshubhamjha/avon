<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Admin\Models\StaticPage;

class AdminShippingDeliveryController extends BaseController
{
    // public function index(Request $request)
    // {
       
    //     return view('s-cart-admin::'.'screen.about.about');
    // }

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('shipping.storeUpdate');
      
            $data = StaticPage::where('id',2)->first();
          
            return view('s-cart-admin::'.'screen.static.shiping',compact('url_action','data'));
        
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
     
   
        $dataOrigin = request()->all();
       

        $dataInsert = [
             'content'    => $data['content'],
             
           
            
        ];
      
            $banner = StaticPage::where('id',2)->update($dataInsert);
            
   
            
            return redirect()->back()->with('success', sc_language_render('action.edit_success'));
        
    }

}