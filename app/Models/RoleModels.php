<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleModels extends Model
{
    //
    use HasFactory;
    protected $table = 'role_afs';
    protected $fillable = ['role'];


    
}
