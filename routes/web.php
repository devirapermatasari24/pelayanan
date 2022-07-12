<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BPkelit;
use App\Http\Controllers\BPhardware;
use App\Http\Controllers\BPsoftware;
use App\Http\Controllers\BPsistem;
use App\Http\Controllers\BPpddikti;
use App\Http\Controllers\SDhardware;
use App\Http\Controllers\SDsoftware;
use App\Http\Controllers\SDsistem;
use App\Http\Controllers\SDpddikti;
use App\Http\Controllers\KeseluruhanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

//<!-------------------------------------Login,User Login,Logout---------------------------------------------->

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/userlogin', [AuthController::class, 'user_login']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/user_register', [AuthController::class, 'user_register']);

Route::get('/register', [AuthController::class, 'register']);


//<!-------------------------------------------End Login,user login and Logout------------------------------------>

//<!------------------------------------------------Awal Middleware----------------------------------------------->
Route::group(['middleware' => 'auth'], function() {
	
	Route::get('/beranda', [DashboardController::class, 'beranda']);

	Route::get('/profil', [DashboardController::class, 'profil']);

	Route::get('/semua_pengguna', [DashboardController::class, 'semua_pengguna']);

	Route::get('/edit_semuapengguna', [DashboardController::class, 'edit_semuapengguna']);

	Route::get('/pertanyaan', [DashboardController::class, 'pertanyaan']);

	Route::resource('/tabel_keseluruhan', KeseluruhanController::class);

	Route::get('/cari', [SDhardware::class, 'create']);

	Route::get('/cari1', [SDsoftware::class, 'create']);

	Route::get('/cari2', [SDsistem::class, 'create']);

	Route::get('/cari3', [SDpddikti::class, 'create']);

	Route::get('/cari4', [KeseluruhanController::class, 'cari']);


	//<!-----------------------------------------------------kelit--------------------------------------------->

	Route::get('/kelit', [BPkelit::class, 'tambahkelit']);



	//<!-----------------------------------------------------hardware--------------------------------------------->

	Route::get('/tombol_pengisian', [BPhardware::class, 'tombol_pengisian']);

	Route::post('/updatekelhardware', [BPhardware::class, 'updatekelhardware']);

	Route::get('/dikerjakan_hardware', [BPhardware::class, 'viewkelhardware'])->name('hardware');

   	Route::get('/kelhardware', [BPhardware::class, 'tambahkelhardware']);

	Route::post('/simpankelhardware', [BPhardware::class, 'simpankelhardware']);

	Route::post('/deletekelhardware/{id_hardware}', [BPhardware::class, 'deletekelhardware']);

	Route::get('/editkelhardware/{id_hardware}', [BPhardware::class, 'editkelhardware']);

	Route::get('/editkelhardware/Status/{id_hardware}', [BPhardware::class, 'updatestatus']);

	Route::get('/editkelhardware/Batal/{id_hardware}', [BPhardware::class, 'batalstatus']);

	//<!----------------------------------------------------Software------------------------------------------->

	Route::get('/kelsoftware', [BPsoftware::class, 'tambahkelsoftware']);

	Route::post('/simpankelsoftware', [BPsoftware::class, 'simpankelsoftware']);

	Route::post('/deletekelsoftware/{id_software}', [BPsoftware::class, 'deletekelsoftware']);

	Route::post('/updatekelsoftware', [BPsoftware::class, 'updatekelsoftware']);

	Route::get('/dikerjakan_software', [BPsoftware::class, 'viewkelsoftware'])->name('software');

	Route::get('/editkelsoftware/{id_software}', [BPsoftware::class, 'editkelsoftware']);

	Route::get('/editkelsoftware/Status/{id_software}', [BPsoftware::class, 'updatestatus']);

	Route::get('/editkelsoftware/Batal/{id_software}', [BPsoftware::class, 'batalstatus']);

	//<!------------------------------------------Sistem------------------------------------------------------->
	Route::get('/kelsistem', [BPsistem::class, 'tambahkelsistem']);

	Route::post('/simpankelsistem', [BPsistem::class, 'simpankelsistem']);

	Route::post('/deletekelsistem/{id_sistems}', [BPsistem::class, 'deletekelsistem']);

	Route::post('/updatekelsistem', [BPsistem::class, 'updatekelsistem']);

	Route::get('/dikerjakan_sistem', [BPsistem::class, 'viewkelsistem'])->name('sistem');

	Route::get('/editkelsistem/{id_sistems}', [BPsistem::class, 'editkelsistem']);

	Route::get('/editkelsistem/Status/{id_sistems}', [BPsistem::class, 'updatestatus']);

	Route::get('/editkelsistem/Batal/{id_sistems}', [BPsistem::class, 'batalstatus']);

	//<!------------------------------------------PDDikti-------------------------------------------------------->
	Route::get('/kelpddikti', [BPpddikti::class, 'tambahkelpddikti']);

	Route::post('/simpankelpddikti', [BPpddikti::class, 'simpankelpddikti']);

	Route::post('/deletekelpddikti/{id_pddiktis}', [BPpddikti::class, 'deletekelpddikti']);

	Route::post('/updatekelpddikti', [BPpddikti::class, 'updatekelpddikti']);

	Route::get('/dikerjakan_pddikti', [BPpddikti::class, 'viewkelpddikti'])->name('pddikti');

	Route::get('/editkelpddikti/{id_pddiktis}', [BPpddikti::class, 'editkelpddikti']);

	Route::get('/editkelpddikti/Status/{id_pddiktis}', [BPpddikti::class, 'updatestatus']);

	Route::get('/editkelpddikti/Batal/{id_pddiktis}', [BPpddikti::class, 'batalstatus']);

});


//Route::get('/kelsistem', [DashboardController::class, 'kelsistem']);

//Route::get('/kelpddikti', [DashboardController::class, 'kelpddikti']);

// Route::get('/dikerjakan_software', [DashboardController::class, 'dikerjakan_software']);

// Route::get('/dikerjakan_sistem', [DashboardController::class, 'dikerjakan_sistem']);

// Route::get('/dikerjakan_pddikti', [DashboardController::class, 'dikerjakan_pddikti']);


