<?php

namespace App\Models;

use App\Helpers\Uuids;
use Illuminate\Database\Eloquent\Model;

class PasarModels extends Model
{
    //
    use Uuids;
    protected $table = 'pasar_afs';
    protected $fillable = [
        'id',
        'nama_pasar',
        'alamat',
    ];
}
