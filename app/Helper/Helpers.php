<?php

namespace App\Helper;

use App\Admin\Models\PressCategory;
use App\Admin\Models\Brand;
use SCart\Core\Front\Models\ShopProductDescription;

class Helpers
{

    static public function getHomePressCoverage() {

        return $allPressCat = PressCategory::all();
        
    }

    static public function getHomeBrand() {

        return $allBrand = Brand::all();
        
    }

    static public function getProductName($id) {

        $productData = ShopProductDescription::select('name')->where('product_id', $id)->where('lang', 'en')->get();
        foreach($productData as $pr) {
            return $pr->name;
        }
        //echo '<pre>';print_r($name);die;
        //return $name;
    }

}