<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Helpers\Uuids;
use App\Models\RoleModels;
use App\Models\InstansiModels;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // protected $primaryKey   = 'id';
    // protected $keyType      = 'string';
    // public $incrementing    = false;

    protected $fillable = [
        'id',
        'username',
        'password',
        'name',
        'nip',
        // 'email_verified_at',
        'roles',
        'st_user',
        'fk_instansi_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function toRoleModels()
    {
        return $this->belongsTo(RoleModels::class, 'roles', 'id');
    }

    public function toInstansiModels()
    {
        return $this->belongsTo(InstansiModels::class, 'fk_instansi_id', 'id');
    }

    public function scopeSearch($query, $value){
        $query->where('name','like',"%{$value}%")
                ->orWhere('username','like',"%{$value}%")
                ->orWhere('email','like',"%{$value}%")
                ->orWhere('instansi_afs.instansi','like',"%{$value}%")
                ->orWhere('role_afs.role','like',"%{$value}%");
    }
}
