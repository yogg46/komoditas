<?php

namespace App\Models;

use App\Helpers\Uuids;
use Illuminate\Database\Eloquent\Model;

class LogStockModels extends Model
{
    //
    use Uuids;
    protected $table = 'log_stok_komoditas_afs';
    protected $fillable = [
        'id',
        'fk_stok_komoditas_id',
        'tanggal',
        'old_stock',
        'new_stock',
        'created_by',
        'keterangan',
    ];
}
