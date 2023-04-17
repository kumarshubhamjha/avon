<?php
namespace App\Admin\Models;
use Illuminate\Database\Eloquent\Model;
use App\Admin\Models\About;

class SquareImage extends Model
{
    
    public $timestamps = false;
    public $table = SC_DB_PREFIX.'square_image';
    protected $guarded = [];

    protected static $getAll = null;
    protected static $getAllGlobal = null;
    protected static $getAllConfigOfStore = null;
    protected $connection = SC_CONNECTION;

    

    
}