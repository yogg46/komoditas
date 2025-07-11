<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\InstansiModels;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstansiModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        InstansiModels::create([
            'id'        => Str::uuid(),
            'instansi' => 'Dinas Komunikasi Informatika Statistik Dan Persandian',
        ]);
        InstansiModels::create([
            'id'        => Str::uuid(),
            'instansi' => 'Dinas Perdagangan',
        ]);
        InstansiModels::create([
            'id'        => Str::uuid(),
            'instansi' => 'Dinas Ketahanan Pangan dan Pertanian',
        ]);
    }
}
