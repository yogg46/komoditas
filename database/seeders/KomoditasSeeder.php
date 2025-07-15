<?php

namespace Database\Seeders;

use App\Models\PasarModels;
use Illuminate\Support\Str;
use App\Models\KomoditasModels;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KomoditasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $pasar = PasarModels::where('nama_pasar', 'Pasar Legi')->first();
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Beras',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 1,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Gula',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 2,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Minyak Goreng',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 3,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Daging Sapi',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 4,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Daging Ayam',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 5,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Telur Ayam',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 6,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Terigu',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 7,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Kedelai',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 8,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Kacang',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 9,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Cabai',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 10,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Bawang Merah',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 11,
            'publish' => 'Y',
        ]);

        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Bawang Putih',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 12,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Garam',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 13,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Ikan',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 14,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Nangka Muda',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 15,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Pepaya',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 16,
            'publish' => 'Y',
        ]);
        KomoditasModels::create([
            'id' => Str::uuid(),
            'komoditas' => 'Jeruk Lokal',
            'fk_pasar_id' => $pasar->id,
            'urutan' => 17,
            'publish' => 'Y',
        ]);
    }
}
