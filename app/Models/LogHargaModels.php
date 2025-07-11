<?php

namespace App\Models;

use App\Helpers\Uuids;
use Illuminate\Database\Eloquent\Model;

class LogHargaModels extends Model
{
    //
    use Uuids;
    protected $table = 'log_harga_komoditas_afs';
    protected $fillable = [
        'id',
        'fk_harga_komoditas_id',
        'tanggal',
        'old_price',
        'new_price',
        'created_by'
    ];
}
