<?php
namespace App\Admin\Models;
use Illuminate\Database\Eloquent\Model;

class ProductBenefit extends Model
{
    public $timestamps = false;
    public $table = SC_DB_PREFIX.'productbenefits';
    protected $guarded = [];

    protected static $getAll = null;
    protected static $getAllGlobal = null;
    protected static $getAllConfigOfStore = null;
    protected $connection = SC_CONNECTION;
}