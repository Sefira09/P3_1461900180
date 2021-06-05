<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Prak3Controller;

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
Route::get('/test-koneksi-database', function () {
    try{
        \DB::connection()->getPdo();

        echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();
    }catch (\Exeption $e){
        echo 'Belum terkoneksi dengan database, error: ' . $e->getMessage();
    }
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home0180', [Prak3Controller::class, 'index']);
Route::get('dokte0180', Prak3Controller::class);
