<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\SettingModels;
use App\Models\LokasiModels;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         $setting = SettingModels::first();
         config()->set('id', $setting->id ?? null);
         config()->set('title_nav', $setting->title_nav ?? null);
         config()->set('unit', $setting->unit ?? null);
         config()->set('sub_unit', $setting->sub_unit ?? null);
         config()->set('name_apps', $setting->name_apps ?? null);
         config()->set('akronim', $setting->akronim ?? null);
         config()->set('deskripsi', $setting->deskripsi ?? null);
         config()->set('jam_layanan', $setting->jam_layanan ?? null);
         config()->set('alamat', $setting->alamat ?? null);
         config()->set('telp', $setting->telp ?? null);
         // config()->set('instagram', $setting->instagram ?? null);
         // config()->set('facebook', $setting->facebook ?? null);
         // config()->set('twitter', $setting->twitter ?? null);
         // config()->set('youtube', $setting->youtube ?? null);
         config()->set('email', $setting->email ?? null);
         config()->set('website', $setting->website ?? null);
         config()->set('logo_nav', $setting->logo_nav ?? null);
         config()->set('logo_page_login', $setting->logo_page_login ?? null);
         config()->set('logo_branding', $setting->logo_branding ?? null);

        //  $lokasi = LokasiModels::where('publish', 'Y')->first();
         config()->set('lokasi', $lokasi->lokasi ?? null);      }
}
