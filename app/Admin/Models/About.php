<?php
namespace App\Admin\Models;
use Illuminate\Database\Eloquent\Model;
use App\Admin\Models\ProductionImage;

class About extends Model
{
    public $timestamps = false;
    public $table = SC_DB_PREFIX.'about';
    protected $guarded = [];

    protected static $getAll = null;
    protected static $getAllGlobal = null;
    protected static $getAllConfigOfStore = null;
    protected $connection = SC_CONNECTION;
    
      public function production()
    {
        return $this->belongsTo(ProductionImage::class, 'about_id', 'id');
    }

}