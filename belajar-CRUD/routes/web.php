<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\Route;

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

route::get( uri: '/', action: [HomeController::class, 'index'])->name('home');
route::get( uri: '/halaman/1', action: [HomeController::class, 'halaman1'])->name('halaman1');
route::get( uri: '/halaman/2', action: [HomeController::class, 'halaman2'])->name('halaman2');

route::get( uri: '/mahasiswa', action: [MahasiswaController::class, 'index'])->name('mahasiswa');
route::post( uri: '/mahasiswa', action: [MahasiswaController::class, 'store'])->name('mahasiswa.store');
route::get( uri: '/mahasiswa/edit/{id}', action: [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
route::put( uri: '/mahasiswa/edit/{id}', action: [MahasiswaController::class, 'update'])->name('mahasiswa.update');
route::get( uri: '/mahasiswa/hapus/{id}', action: [MahasiswaController::class, 'hapus'])->name('mahasiswa.hapus');