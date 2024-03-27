<?php
 
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MaCoBanController;
use App\Http\Controllers\MaNangCaoController;
 
// Route::get('/', function () {
//     return view('welcome');
// });
 
Auth::routes();
   
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/existing-registrations', [App\Http\Controllers\RegistrationController::class, 'showRegistrations'])->name('existing-registrations');
    Route::get('/ma-co-ban', [App\Http\Controllers\MaCoBanController::class, 'index'])->name('ma-co-ban.index');
    Route::get('/manangcao', [App\Http\Controllers\MaNangCaoController::class, 'index'])->name('ma-nang-cao.index');

});
   
// //Admin Routes List
// Route::middleware(['auth', 'user-access:manager'])->group(function () {
   
//     Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
// });
// routes/web.php
Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'showForm'])->name('registration.showForm');
Route::post('/registration', [App\Http\Controllers\RegistrationController::class, 'store'])->name('registration.store');
// Route::get('/existing-registrations', [App\Http\Controllers\RegistrationController::class, 'showRegistrations'])->name('existing-registrations');

Route::get('/generate-maso', [App\Http\Controllers\MasoController::class, 'generateMaso']);
Route::view('/generate-maso-form', 'generate_maso');

// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
//     Route::post('/register', [App\Http\Controllers\AuthController::class, 'registerPost'])->name('register');
//     Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
//     Route::post('/login', [App\Http\Controllers\AuthController::class, 'loginPost'])->name('login');
// });
 
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
//     Route::delete('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
// });