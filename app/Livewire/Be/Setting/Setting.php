<?php

namespace App\Livewire\Be\Setting;

use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\SettingModels;

class Setting extends Component {

    use WithFileUploads;

    public  $title_nav,
            $unit,
            $sub_unit,
            $appweb,
            $akronim,
            $deskripsi,
            $jam_layanan,
            $alamat,
            $telp,
            // $instagram,
            // $facebook,
            // $twitter,
            // $youtube,
            $email,
            $website,
            $nav,
            $logo;

    public  $title_navOld,
            $unitOld,
            $sub_unitOld,
            $appwebOld,
            $akronimOld,
            $deskripsiOld,
            $jam_layananOld,
            $alamatOld,
            $telpOld,
            // $instagramOld,
            // $facebookOld,
            // $twitterOld,
            // $youtubeOld,
            $emailOld,
            $websiteOld,
            $navOld,
            $logoOld;

    public $navIter, $logoIter, $IdForm, $branding, $brandingIter, $brandingOld;

    public function mount() {
        $getId = SettingModels::all()->first();
        if ( !empty( $getId ) ) {
            $this->IdForm = $getId->id;
        }

        $this->navIter = 0;
        $this->logoIter = 0;
        $this->brandingIter = 0;
        $this->LoadConfig();
    }

    public function LoadConfig() {
        $dataConfig = SettingModels::where( 'id', $this->IdForm )->first();
        if ( !empty( $dataConfig ) ) {
            $this->title_nav    = $dataConfig->title_nav;
            $this->unit         = $dataConfig->unit;
            $this->sub_unit     = $dataConfig->sub_unit;
            $this->appweb       = $dataConfig->name_apps;
            $this->akronim      = $dataConfig->akronim;
            $this->deskripsi    = $dataConfig->deskripsi;
            $this->jam_layanan  = $dataConfig->jam_layanan;
            $this->alamat       = $dataConfig->alamat;
            $this->telp         = $dataConfig->telp;
            // $this->instagram    = $dataConfig->instagram;
            // $this->facebook     = $dataConfig->facebook;
            // $this->twitter      = $dataConfig->twitter;
            // $this->youtube      = $dataConfig->youtube;
            $this->email        = $dataConfig->email;
            $this->website      = $dataConfig->website;

            $this->title_navOld = $dataConfig->title_nav;
            $this->unitOld      = $dataConfig->unit;
            $this->sub_unitOld  = $dataConfig->sub_unit;
            $this->appwebOld    = $dataConfig->name_apps;
            $this->akronimOld   = $dataConfig->akronim;
            $this->deskripsiOld = $dataConfig->deskripsi;
            $this->jam_layananOld = $dataConfig->jam_layanan;
            $this->alamatOld    = $dataConfig->alamat;
            $this->telpOld      = $dataConfig->telp;
            // $this->instagramOld = $dataConfig->instagram;
            // $this->facebookOld  = $dataConfig->facebook;
            // $this->twitterOld   = $dataConfig->twitter;
            // $this->youtubeOld   = $dataConfig->youtube;
            $this->emailOld     = $dataConfig->email;
            $this->websiteOld   = $dataConfig->website;

            $this->navOld       = $dataConfig->logo_nav;
            $this->logoOld      = $dataConfig->logo_page_login;
            $this->brandingOld  = $dataConfig->logo_branding;
        }

        $this->dispatch('set-deskripsi', ['deskripsi' => $this->deskripsi]);
        $this->dispatch('set-jam_layanan', ['jam_layanan' => $this->jam_layanan]);
    }

    public function SaveSetting() {
        $this->validate(
            [
                'title_nav' => 'required',
                'appweb'    => 'required',
                'nav'       => empty( $this->navOld ) || !empty( $this->nav ) ? 'required|file|mimes:png,jpg,jpeg|max:2000' : 'nullable',
                'logo'      => empty( $this->logoOld ) || !empty( $this->logo ) ? 'required|file|mimes:png,jpg,jpeg|max:2000' : 'nullable',
                'branding'  => empty( $this->brandingOld ) || !empty( $this->branding ) ? 'required|file|mimes:png,jpg,jpeg|max:2000' : 'nullable'
            ],
            [
                'title_nav.required'    => 'Judul Nav Harus Diisi',
                'appweb.required'       => 'Nama Aplikasi/Website Harus Diisi',
                'nav.required'          => 'Icon Navbar Tidak Boleh Kosong',
                'nav.mimes'             => 'Format File Tidak Sesuai',
                'nav.max'               => 'Ukuran File Maksimal 2000 kb',
                'logo.required'         => 'Logo Tidak Boleh Kosong',
                'logo.mimes'            => 'Format File Tidak Sesuai',
                'logo.max'              => 'Ukuran File Maksimal 2000 kb',
                'branding.required'     => 'Branding Tidak Boleh Kosong',
                'branding.mimes'        => 'Format File Tidak Sesuai',
                'branding.max'          => 'Ukuran File Maksimal 2000 kb'
            ]
        );

        try {
            if ( $this->nav && $this->navOld != null ) {
                Storage::delete( $this->navOld );
            }
            if ( $this->logo && $this->logoOld != null ) {
                Storage::delete( $this->logoOld );
            }
            if ( $this->branding && $this->brandingOld != null ) {
                Storage::delete( $this->brandingOld );
            }

            if ( $this->nav != null ) {
                $ext_nav        = $this->nav->getClientOriginalExtension();
                $filename_nav   = Str::uuid() . '.' . $ext_nav;
                $path_nav       = $this->nav->storeAs( 'setting', $filename_nav );
            }
            if ( $this->logo != null ) {
                $ext_logo       = $this->logo->getClientOriginalExtension();
                $filename_logo  = Str::uuid() . '.' . $ext_logo;
                $path_logo      = $this->logo->storeAs( 'setting', $filename_logo );
            }
            if ( $this->branding != null ) {
                $ext_branding       = $this->branding->getClientOriginalExtension();
                $filename_branding  = Str::uuid() . '.' . $ext_branding;
                $path_branding      = $this->branding->storeAs( 'setting', $filename_branding );
            }

            // if ( $this->youtube == null ) {
            //     $this->youtube = 'https://youtube.com';
            // }

            // if ( $this->instagram == null ) {
            //     $this->instagram = 'https://instagram.com';
            // }

            // if ( $this->twitter == null ) {
            //     $this->twitter = 'https://twitter.com';
            // }

            // if ( $this->facebook == null ) {
            //     $this->facebook = 'https://facebook.com';
            // }

            // Script Save Database
            $dataInput = array(
                'title_nav'     => $this->title_nav,
                'unit'          => $this->unit,
                'sub_unit'      => $this->sub_unit,
                'name_apps'     => $this->appweb,
                'akronim'       => $this->akronim,
                'deskripsi'     => $this->deskripsi,
                'jam_layanan'   => $this->jam_layanan,
                'alamat'        => $this->alamat,
                'telp'          => $this->telp,
                // 'instagram'     => $this->instagram,
                // 'facebook'      => $this->facebook,
                // 'twitter'       => $this->twitter,
                // 'youtube'       => $this->youtube,
                'email'         => $this->email,
                'website'       => $this->website,
                'fk_id_user'    => Auth::user()->id
            );

            if ( $this->nav ) {
                $dataInput[ 'logo_nav' ]        = $path_nav;
            }
            if ( $this->logo ) {
                $dataInput[ 'logo_page_login' ] = $path_logo;
            }
            if ( $this->branding ) {
                $dataInput[ 'logo_branding' ] = $path_branding;
            }

            SettingModels::updateorCreate( [ 'id' => $this->IdForm ], $dataInput );

            // Log History Activity
            $imageOld   = SettingModels::where( 'id', $this->IdForm )->first();
            $LogAksi    = 'Menu Setting';

            $Line1  = $this->title_navOld == $this->title_nav ? 'title_nav : -' : 'title_nav :' . ' ' . $this->title_navOld . ' <span style=color:red> => </span> ' . $this->title_nav;
            $Line2  = $this->unitOld == $this->unit ? 'Unit : -' : 'Unit :' . ' ' . $this->unitOld . ' <span style=color:red> => </span> ' . $this->unit;
            $Line3  = $this->sub_unitOld == $this->sub_unit ? 'Sub_unit : -' : 'Sub_unit :' . ' ' . $this->sub_unitOld . ' <span style=color:red> => </span> ' . $this->sub_unit;
            $Line4  = $this->appwebOld == $this->appweb ? 'appweb : -' : 'appweb :' . ' ' . $this->appwebOld . ' <span style=color:red> => </span> ' . $this->appweb;
            $Line5  = $this->akronimOld == $this->akronim ? 'Akronim : -' : 'Akronim :' . ' ' . $this->akronimOld . ' <span style=color:red> => </span> ' . $this->akronim;
            $Line6  = $this->deskripsiOld == $this->deskripsi ? 'Deskripsi : -' : 'Deskripsi :' . ' ' . $this->deskripsiOld . ' <span style=color:red> => </span> ' . $this->deskripsi;
            $Line7  = $this->jam_layananOld == $this->jam_layanan ? 'Jam Layanan : -' : 'Jam Layanan :' . ' ' . $this->jam_layananOld . ' <span style=color:red> => </span> ' . $this->jam_layanan;
            $Line8  = $this->alamatOld == $this->alamat ? 'Alamat : -' : 'Alamat :' . ' ' . $this->alamatOld . ' <span style=color:red> => </span> ' . $this->alamat;
            $Line9  = $this->telpOld == $this->telp ? 'Telp : -' : 'Telp :' . ' ' . $this->telpOld . ' <span style=color:red> => </span> ' . $this->telp;
            // $Line10 = $this->instagramOld == $this->instagram ? 'Instagram : -' : 'Instagram :' . ' ' . $this->instagramOld . ' <span style=color:red> => </span> ' . $this->instagram;
            // $Line11 = $this->facebookOld == $this->facebook ? 'Facebook : -' : 'Facebook :' . ' ' . $this->facebookOld . ' <span style=color:red> => </span> ' . $this->facebook;
            // $Line12 = $this->twitterOld == $this->twitter ? 'Twitter : -' : 'Twitter :' . ' ' . $this->twitterOld . ' <span style=color:red> => </span> ' . $this->twitter;
            // $Line13 = $this->youtubeOld == $this->youtube ? 'Youtube : -' : 'Youtube :' . ' ' . $this->youtubeOld . ' <span style=color:red> => </span> ' . $this->youtube;
            $Line14 = $this->emailOld == $this->email ? 'Email : -' : 'Email :' . ' ' . $this->emailOld . ' <span style=color:red> => </span> ' . $this->email;
            $Line15 = $this->websiteOld == $this->website ? 'Website : -' : 'Website :' . ' ' . $this->websiteOld . ' <span style=color:red> => </span> ' . $this->website;
            $Line16 = $this->navOld == $imageOld->logo_nav ? 'Nav : -' :'Nav :' . ' ' . $this->navOld . ' <span style=color:red> => </span> ' . $imageOld->logo_nav ;
            $Line17 = $this->logoOld == $imageOld->logo ? 'Logo : -' :'Logo :' . ' ' . $this->logoOld . ' <span style=color:red> => </span> ' . $imageOld->logo ;
            $Line18 = $this->brandingOld == $imageOld->branding ? 'Branding : -' :'Branding :' . ' ' . $this->brandingOld . ' <span style=color:red> => </span> ' . $imageOld->branding ;

            $Keterangan = $Line1 . '<br>' .
                          $Line2 . '<br>' .
                          $Line3 . '<br>' .
                          $Line4 . '<br>' .
                          $Line5 . '<br>' .
                          $Line6 . '<br>' .
                          $Line7 . '<br>' .
                          $Line8 . '<br>' .
                          $Line9 . '<br>' .
                        //   $Line10 . '<br>' .
                        //   $Line11 . '<br>' .
                        //   $Line12 . '<br>' .
                        //   $Line13 . '<br>' .
                          $Line14 . '<br>' .
                          $Line15 . '<br>' .
                          $Line16 . '<br>' .
                          $Line17 . '<br>' .
                          $Line18;
            \LogNote::LogHistory( 'Update', $LogAksi, $Keterangan );

            $this->successSave();
            $this->resetForm();
            $this->dispatch('LoadConfig');

        } catch ( \Throwable $th ) {
            $this->error();
        }
    }

    public function updatedNav() {
        $this->validate(
            [
                'nav' => 'file|mimes:png,jpg,jpeg|max:2000'
            ],
            [
                'nav.mimes' => 'Format File png,jpg,jpeg',
                'nav.max'   => 'Ukuran File Melebihi 2000 kb'
            ]
        );
    }

    public function updatedLogo() {
        $this->validate(
            [
                'logo' => 'file|mimes:png,jpg,jpeg|max:2000',
            ],
            [
                'logo.mimes' => 'Format File png,jpg,jpeg',
                'logo.max'   => 'Ukuran File Melebihi 2000 kb'
            ]
        );
    }

    public function updatedBranding() {
        $this->validate(
            [
                'branding' => 'file|mimes:png,jpg,jpeg|max:2000',
            ],
            [
                'branding.mimes' => 'Format File png,jpg,jpeg',
                'branding.max'   => 'Ukuran File Melebihi 2000 kb'
            ]
        );
    }

    public function resetForm() {
        $this->reset( 'nav', 'logo', 'branding' );
        $this->resetvalidation();
        $this->navIter += 1;
        $this->logoIter += 1;
        $this->brandingIter += 1;
    }

    public function successSave() {
        $this->dispatch('msgSuksesSimpan');
    }

    public function error () {
        $this->dispatch('msgError');
    }

    public function render() {
        // $dataConfigView = SettingModels::where( 'id', $this->IdForm )->first();
        $dataConfigView = SettingModels::whereRaw('id = :id', ['id' => $this->IdForm])->first();
        return view( 'livewire.be.setting.setting', compact( 'dataConfigView' ) )->layout( 'layouts.be.app' );
    }
}
