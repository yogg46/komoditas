<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleModels;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        RoleModels::create(['role' => 'Super Admin']);
        RoleModels::create(['role' => 'Admin']);
        RoleModels::create(['role' => 'User']);
    }
}
