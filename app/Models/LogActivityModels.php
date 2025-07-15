<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Helpers\Uuids;

class LogActivityModels extends Model
{
    use HasFactory;
    use Uuids;

    public $table       = 'log_activity_afs';
    public $timestamps  = true;

    protected $fillable = [
        'id',
        'subject',
        'url',
        'method',
        'aksi',
        'agent',
        'user',
        'keterangan',
        'ip'
    ];

    public function scopeSearch($query, $value){
        $query->where('user','like',"%{$value}%")
                ->orwhere('keterangan','like',"%{$value}%")
                ->orwhere('ip','like',"%{$value}%")
                ->orwhere('aksi','like',"%{$value}%");
    }

}
