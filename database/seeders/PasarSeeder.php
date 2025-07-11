<?php

namespace Database\Seeders;

use App\Models\PasarModels;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PasarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PasarModels::create([
            'id' => Str::uuid(),
            'nama_pasar' => 'Pasar Legi',
            'alamat' => '',
        ]);
    }
}
