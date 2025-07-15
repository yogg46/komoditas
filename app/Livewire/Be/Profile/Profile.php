<?php

namespace App\Livewire\Be\Profile;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

use App\Models\User;

class Profile extends Component {

    public $nama, $email, $emailOld, $getIdUser;

    public function mount() {
        $this->getIdUser    = Auth::user()->id;
        $this->getDataUser  = user::where( 'id', $this->getIdUser )->first();
        $this->nama         = $this->getDataUser->name;
        $this->email        = $this->getDataUser->email;
        $this->emailOld     = $this->getDataUser->email;
    }

    public function SaveProfile() {
        $this->validate( [
            'nama'  => 'required',
            'email' => 'required'
        ],
        [
            'nama.required' => 'Masukkan Nama'
        ] );
        try {
            if ( $this->emailOld == $this->email ) {
                User::find( $this->getIdUser )->update( [
                    'name' => $this->nama
                ] );
                $this->successSave();
                $this->clearForm();
            } else {
                $cekMail = User::where('email', $this->email )->first();
                if(!empty($cekMail)) {
                    $this->cekEmail();
                } else {
                    User::find( $this->getIdUser )->update( [
                        'name'  => $this->nama,
                        'email' => $this->email
                    ] );
                    $this->successSave();
                    $this->clearForm();
                }
            }
        } catch ( \Throwable $th ) {
            $this->error();
        }
    }

    public function successSave() {
        $this->dispatch('msgSuksesSimpan');
    }

    public function error() {
        $this->dispatch('msgError');
    }

    public function clearForm()
    {
        $this->reset('nama');
        $this->reset('email');
        $this->mount();
    }

    public function cekEmail() {
        $this->dispatch('msgCekEmail');
    }

    public function render() {
        return view( 'livewire.be.profile.profile' )->layout( 'layouts.be.app' );
    }
}
