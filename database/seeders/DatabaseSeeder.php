<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\SettingModels;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        $this->call([
            InstansiModelsSeeder::class,
            PasarSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            KomoditasSeeder::class,
        ]);

       $pp = User::where('name','Yoga Bayu P')->first();

        SettingModels::create([
            'id' => 1,
            'title_nav' => 'Diskominfo SP Kota Surakarta',
            'unit' => 'Surakarta',
            'sub_unit' => 'Diskominfo SP Kota Surakarta',
            'name_apps' => 'Website Dinas Komunikasi Informatika Statistik Dan Persandian Kota Surakarta',
            'akronim' => 'Website Diskominfo SP Kota Surakarta',
            'deskripsi' => '<b>Selamat Datang Di Website Resmi Dinas Komunikasi Informatika Statistik Dan Persandian Kota Surakarta</b><br>',
            'jam_layanan' => '<pre><table class="table table-bordered" style="font-family: Poppins; background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);"><tbody><tr></tr><tr></tr><tr></tr></tbody></table></pre>',
            'alamat' => "Gedung Bale Upakari Lantai 3.\nJl. Jenderal Sudirman No. 2, Komplek Balaikota Surakarta\nKode Pos 57133",
            'telp' => ' (0271) 2931667',
            'instagram' => 'https://instagram.com/pemkot_solo',
            'facebook' => 'https://facebook.com/pemkotsolo',
            'twitter' => 'https://twitter.com/PEMKOT_SOLO',
            'youtube' => 'https://youtube.com/channel/UCL-EOcz_vh_2OlIMIh3zkyg',
            'email' => 'diskominfosp@surakarta.go.id',
            'website' => 'https://diskominfosp.surakarta.go.id/',
            'logo_nav' => 'setting/aebc2d75-cd64-4f4e-af11-f4ab4353053d.png',
            'logo_page_login' => 'setting/20f31042-f0db-4a39-b86b-3823907fcd9a.png',
            'logo_branding' => 'setting/eb14d2b9-88b8-420f-acc5-bed31150abd9.png',
            'fk_id_user' => $pp->id,
            'created_at' => Carbon::parse('2024-07-16 18:46:51'),
            'updated_at' => Carbon::parse('2025-05-28 00:29:21'),

        ]);
    }
}
