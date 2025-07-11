<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Helpers\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'username',
        'password',
        'name',
        'nip',
        'email_verified_at',
        'roles',
        'st_user',
        'fk_instansi_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn($word) => Str::substr($word, 0, 1))
            ->implode('');
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
                ->orWhere('nip','like',"%{$value}%")
                ->orWhere('instansi_afs.instansi','like',"%{$value}%")
                ->orWhere('role_afs.role','like',"%{$value}%");
    }
}
