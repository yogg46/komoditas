<?php

namespace App\Models;

use App\Helpers\Uuids;
use Illuminate\Database\Eloquent\Model;

class KomoditasModels extends Model
{
    //
    use Uuids;
    protected $table = 'komoditas_afs';
    protected $fillable = ['id', 'komoditas','fk_pasar_id','urutan'];


    public function scopeSearch($query, $value) {
        $query->where('komoditas', 'like', "%{$value}%");
    }

}
