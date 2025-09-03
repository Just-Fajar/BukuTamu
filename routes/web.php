<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;

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
    return view('visitor');
});

Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/calendar', function () {
    return view('admin.calendar');
});

// QR Code routes
Route::get('/admin/qrcode', [QRCodeController::class, 'showQRPage']);
Route::get('/qr/visitor', [QRCodeController::class, 'generateVisitorQR']);
Route::get('/qr/download', [QRCodeController::class, 'downloadQR']);
