<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Admin\Models\ReturnsRefund;
use App\Admin\Models\ReturnFaq;

class AdminReturnsRefundController extends BaseController
{
    // public function index(Request $request)
    // {
       
    //     return view('s-cart-admin::'.'screen.about.about');
    // }

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('return.storeUpdate');
      
            $data = ReturnsRefund::where('id',1)->first();
          
          $data1 = ReturnFaq::get();
          //dd($data);
            return view('s-cart-admin::'.'screen.static.returnrefund',compact('url_action','data','data1'));
        
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
     
     // dd($data);
        $dataInsert = [
             'content'    => $data['content'],
             'faq_question'=>$data['faq_question'],
             'faq_answer'=>$data['faq_answer'],
        ];
        
        
      
            $banner = ReturnsRefund::where('id',1)->update($dataInsert);
            
            
            if($request->sub_faq_question)
            {
                $i = 0;
             foreach ($request->sub_faq_question as $feature) {
                 //dd($feature);
           $i++;
                 
             ReturnFaq::firstOrCreate([
              "faq_question" => $feature,
              "faq_answer" =>$request->sub_faq_answer[$i -1],
        ]);
            
        }
            }
            else{
                ReturnFaq::query()->truncate();
            }
            
            
           
            
            
            return redirect()->back()->with('success', sc_language_render('action.edit_success'));
        
    }

}