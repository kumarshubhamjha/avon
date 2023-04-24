<?php

namespace App\Helper;

use App\Admin\Models\PressCategory;
use App\Admin\Models\Brand;

class Helpers
{

    static public function getHomePressCoverage() {

        return $allPressCat = PressCategory::all();
        
    }

    static public function getHomeBrand() {

        return $allBrand = Brand::all();
        
    }

}