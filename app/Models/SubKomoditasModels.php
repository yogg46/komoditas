<?php

namespace App\Models;

use App\Helpers\Uuids;
use Illuminate\Database\Eloquent\Model;

class SubKomoditasModels extends Model
{
    //
    use Uuids;
    protected $table = 'sub_komoditas_afs';
    protected $fillable = ['id', 'sub_komoditas', 'komoditas_id'];




}

