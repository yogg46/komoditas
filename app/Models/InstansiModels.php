<?php

namespace App\Models;

use App\Helpers\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstansiModels extends Model
{
    //
    use Uuids,HasFactory;

    protected $table = 'instansi_afs';
    protected $fillable = ['id', 'instansi'];

     public function scopeSearch($query, $value){
        $query->where('instansi','like',"%{$value}%");
            //   ->orWhere('kategori_instansi_afs.kategori','like',"%{$value}%");
            //   ->orWhere('kelembagaan_afs.kelembagaan', 'like', "%{$value}%");
    }
}
