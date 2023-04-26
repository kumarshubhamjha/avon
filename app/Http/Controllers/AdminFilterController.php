<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SCart\Core\Front\Models\ShopProduct;
use DB;

class AdminFilterController extends Controller
{
    
    public function index(Request $request)
    {
           
       $pr = $request->all();
        
       
        $value1 =  $products = (new ShopProduct)
        
        ->getData();


      
      $review = DB::table('sc_product_review')->groupBy('product_id')->select('*', DB::raw('AVG(point) as avg'))->get();
      
      $mainreview=[];
      
      
      
        
        $value = json_decode(json_encode($value1,true));
        if(!empty($pr['price'])){
        $req = explode('-',  $pr['price']);
        
        $requestValue = [
            "min"=>$req[0],
            "max"=>$req[1]
        ];
        
    }else{
        $requestValue = [
            "min"=>null,
            "max"=>null
        ];
    }
       
                         
        //filter for price
        $resta = array_filter($value, function ($price) use ($requestValue) {
           
           
            $approve = true;

            if (!empty($requestValue['min']) && !empty($requestValue['max'])) {
                if ($this->checkPriceRange($price,  $requestValue['min'],  $requestValue['max'], $approve)) {
                    return $approve;
                }
            } else {
                return $price;
            }

        });
        
  

return $resta;
       
    }






  
    public function checkPriceRange($price, $min, $max, bool &$approve = false): bool
    {
            
        $price = floatval(str_replace(',', '', $price->price));
         
        if ($price >= $min && $price <= $max) {
            $approve = true;
        } else {
            $approve = false;
        }

        return $approve;
    }
  
}