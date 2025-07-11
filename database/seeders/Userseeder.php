<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'id'        => Str::uuid(),
            'username'  => 'afs@afs.dev',
            'nip'     => '198307182022211005',
            'password'  => Hash::make('!123123@Afs'),
            'name'      => 'Ardika Fajar S',
            // 'email_verified_at' => date('Y-m-d H:m:s'),
            'roles'     => 1,
            'st_user'   => 'Y'
        ]);
        User::create([
            'id'        => Str::uuid(),
            'username'  => 'ybp@ybp.dev',
            'nip'     => '200009142025051002',
            'password'  => Hash::make('!123123@Ybp'),
            'name'      => 'Yoga Bayu P',
            // 'email_verified_at' => date('Y-m-d H:m:s'),
            'roles'     => 1,
            'st_user'   => 'Y'
        ]);
    }
}
