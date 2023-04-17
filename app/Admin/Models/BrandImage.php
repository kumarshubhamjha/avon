<?php
namespace App\Admin\Models;
use Illuminate\Database\Eloquent\Model;
use App\Admin\Models\About;

class BrandImage extends Model
{
    
    public $timestamps = false;
    public $table = SC_DB_PREFIX.'brand_logo';
    protected $guarded = [];

    protected static $getAll = null;
    protected static $getAllGlobal = null;
    protected static $getAllConfigOfStore = null;
    protected $connection = SC_CONNECTION;

    

    public function about()
    {
        return $this->hasMany(About::class, 'about_id', 'id');
    }

}