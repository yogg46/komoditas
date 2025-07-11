<?php

namespace App\Models;

use App\Helpers\Uuids;
use Illuminate\Database\Eloquent\Model;

class StokKomoditasModels extends Model
{
    //
    use Uuids;
    protected $table = 'stok_komoditas_afs';
    protected $fillable = [
        'id',
        'fk_sub_komoditas_id',
        'fk_pasar_id',
        'tanggal',
        'stok',
        'created_by',
        'keterangan',
    ];
}
