<?php

namespace App\Livewire\Be\GantiPassword;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\User;

class GantiPassword extends Component
{

    public $password, $password_confirmation;

    public function SavePassword() {
        $this->validate( [
            'password' => [ 'required', 'string', 'confirmed', Password::min( 8 )
            ->mixedCase()
            ->letters()
            ->numbers()
            ->symbols()
            ->uncompromised() ],
            'password_confirmation' => 'required'
        ],
        [
            'password.required' => 'Password Harap Diisi',
            'password.string' => 'Password setidaknya mengandung satu huruf besar dan satu huruf kecil, satu symbol, satu angka',
            'password.min' => 'Panjang Password Min.8',
            'password.confirmed' => 'Password Konfirmasi tidak sesuai',
            'password_confirmation.required' => 'Password konfirmasi belum diisi'
        ] );

        $idUser = Auth::user()->id;
        try {
            User::where('id', $idUser)->update([
                'password' => Hash::make($this->password)
            ]);

            $this->successSave();
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

    public function render() {
        return view( 'livewire.be.ganti-password.ganti-password' )->layout( 'layouts.be.app' );
    }
}
