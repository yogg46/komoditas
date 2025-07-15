<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModels extends Model
{
    use HasFactory;

    public $table       = 'setting_afs';
    public $timestamps  = true;

    protected $fillable = [
        'id',
        'title_nav',
        'unit',
        'sub_unit',
        'name_apps',
        'akronim',
        'deskripsi',
        'jam_layanan',
        'alamat',
        'telp',
        'instagram',
        'facebook',
        'twitter',
        'youtube',
        'email',
        'website',
        'logo_nav',
        'logo_page_login',
        'logo_branding',
        'fk_id_user'
    ];

}
