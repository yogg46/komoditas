<?php



use App\Livewire\Be\Profile\Profile;
use App\Livewire\Be\Setting\Setting;
use Illuminate\Support\Facades\Route;
use App\Livewire\Be\Dashboard\Dashboard;
use App\Http\Controllers\Auth\AuthController;
use App\Livewire\Be\GantiPassword\GantiPassword;
use App\Livewire\Be\Komoditas\Komoditas;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('not-found', function () {
    return view('errors.not-found');
})->name('not-found');




Route::get('/sitelogin', [AuthController::class, 'index'])->name('login');
Route::post('/sitelogin', [AuthController::class, 'login'])->name('login.post')->middleware('throttle:login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/password', GantiPassword::class)->name('ganti-password')->middleware(['akses:1,2,3,4']);
    Route::get('/profile', Profile::class)->name('profile')->middleware(['akses:1,2,3,4']);



    Route::group(['middleware' => ['akses:1,2']], function () {
        Route::get('/setting', Setting::class)->name('setting');
        Route::get('/komoditas', Komoditas::class)->name('komoditas');

    });
});
