<?php

use App\Http\Controllers\DOutletGroupController;
use App\Http\Controllers\DOutletLocationController;
use App\Http\Controllers\DQrCodeController;
use App\Http\Controllers\DQrController;
use App\Http\Controllers\DUniqodeController;
use App\Http\Controllers\MBatchController;
use App\Http\Controllers\MFlavorController;
use App\Http\Controllers\MPackageController;
use App\Http\Controllers\MProductController;
use App\Http\Controllers\MProductGrammageController;
use App\Http\Controllers\MQrStatusController;
use App\Models\MProductGrammage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::resource('m-flavor', MFlavorController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy');
Route::resource('m-product', MProductController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy');
Route::resource('m-product-grammage', MProductGrammageController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy');
Route::resource('m-batch', MBatchController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy');
Route::resource('m-package', MPackageController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy');
Route::resource('Dqr', DQrController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy','generate');
Route::resource('Dqr-code', DQrCodeController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy');
Route::post('/generate-codes', [DQrController::class, 'generate'])->name('generate.codes');
Route::resource('outletloc', DOutletLocationController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy');
Route::resource('outletgroup', DOutletGroupController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy');
Route::resource('m-qr-status', MQrStatusController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy');
Route::resource('uniqcode', DUniqodeController::class)->only('index', 'store', 'create', 'edit', 'update', 'destroy');

// Tambahkan rute khusus untuk endpoint getData
Route::get('/get-data/{grammid}', [MBatchController::class, 'getData']);
