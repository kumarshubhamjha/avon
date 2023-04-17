<?php
namespace App\Admin\Models;
use Illuminate\Database\Eloquent\Model;

class PressCategory extends Model
{
    public $timestamps = false;
    public $table = SC_DB_PREFIX.'presscategory';
    protected $guarded = [];

    protected static $getAll = null;
    protected static $getAllGlobal = null;
    protected static $getAllConfigOfStore = null;
    protected $connection = SC_CONNECTION;
}