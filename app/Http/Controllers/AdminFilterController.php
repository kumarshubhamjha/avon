<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SCart\Core\Front\Models\ShopProduct;


class AdminFilterController extends Controller
{
    
    public function index(Request $request)
    {
           
       $pr = $request->all();
        
       
       $req = explode('-',  $pr['price']);
       
       
       

        $value1 =  $products = (new ShopProduct)
        ->getData();
     
        $value = json_decode(json_encode($value1,true));
        //dd($value);
     
        $requestValue = [
            "min"=>$req[0],
            "max"=>$req[1]
        ];
    
    
              
                         
        //filter for price
        $resta = array_filter($value, function ($price) use ($requestValue) {
           
           
            $approve = true;

            if ($requestValue) {
                if ($this->checkPriceRange($price,  $requestValue['min'],  $requestValue['max'], $approve)) {
                    return $approve;
                }
            } else {
                return $price;
            }

        });
        
    return $resta;
       
       

        return view('s-cart-admin::'.'screen.about.about');
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