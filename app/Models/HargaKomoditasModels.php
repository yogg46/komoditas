<?php

namespace App\Models;

use App\Helpers\Uuids;
use Illuminate\Database\Eloquent\Model;

class HargaKomoditasModels extends Model
{
    //
    use Uuids;

    protected $table = 'harga_komoditas_afs';
    protected $fillable = [
        'id',
        'fk_sub_komoditas_id',
        'tanggal',
        'harga_lama',
        'harga_baru'
    ];

     public function scopeSearch($query, $value){
        // $query->where('name','like',"%{$value}%")
        //         ->orWhere('username','like',"%{$value}%")
        //         ->orWhere('nip','like',"%{$value}%")
        //         ->orWhere('instansi_afs.instansi','like',"%{$value}%")
        //         ->orWhere('role_afs.role','like',"%{$value}%");
        $query->where('tanggal','like',"%{$value}%")
                ->orWhere('harga_lama','like',"%{$value}%")
                ->orWhere('harga_baru','like',"%{$value}%")
                ->orWhere('sub_komoditas_afs.sub_komoditas','like',"%{$value}%");
    }
}
