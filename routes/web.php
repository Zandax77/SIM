<?php

use App\Http\Controllers\KendaliAdm;
use App\Http\Controllers\KendaliUtama;
use App\Http\Controllers\KendaliKesiswaan;
use App\Http\Controllers\KendaliKurikulum;
use App\Http\Controllers\KendaliHumas;
use App\Http\Controllers\KendaliSarana;
use App\Http\Controllers\KendaliAkl;
use Illuminate\Support\Facades\Route;

Route::get('',[KendaliUtama::class,'info']);
Route::get('admin',[KendaliUtama::class,'index']);
Route::get('login',[KendaliUtama::class,'login']);
Route::post('prosesLogin',[KendaliUtama::class,'prosesLogin']);
Route::get('logout',[KendaliUtama::class,'logout']);
Route::get('regOperator',[KendaliUtama::class,'regOperator']);
Route::post('simpanOperator',[KendaliUtama::class,'simpanOperator']);
Route::get('operator',[KendaliUtama::class,'operator']);
Route::get('setujui/{kode}',[KendaliUtama::class,'setujuiUser']);
Route::get('blokir/{kode}',[KendaliUtama::class,'blokirUser']);
Route::get('hapus/{kode}',[KendaliUtama::class,'hapusUser']);

Route::get('grafikGuru',[KendaliAdm::class,'grafikGuru']);
Route::get('grafikTendik',[KendaliAdm::class,'grafikTendik']);

//jurusan ->data
//akl
Route::get('dokAkl',[KendaliUtama::class,'proAkl']);

//rpl
Route::get('dokRpl',[KendaliUtama::class,'proRpl']);

//bdp
Route::get('dokBd',[KendaliUtama::class,'proBdp']);

//mp
Route::get('dokMp',[KendaliUtama::class,'proMp']);

//dkv
Route::get('dokDkv',[KendaliUtama::class,'proDkv']);

//kkbt
Route::get('dokKkbt',[KendaliUtama::class,'proKkbt']);

//waka  ->data
Route::get('doKurikulum',[KendaliUtama::class,'dokKurikulum']);
Route::get('doKesiswaan',[KendaliUtama::class,'dokKesiswaan']);
Route::get('doHumas',[KendaliUtama::class,'dokHumas']);
Route::get('doSarana',[KendaliUtama::class,'dokSarana']);

//kbm ->data
Route::get('presensi',[KendaliUtama::class,'rekapPresensi']);
Route::get('jurnal',[KendaliUtama::class,'rekapJurnal']);


//Akl->admin
Route::get('akl',[KendaliAkl::class,'dokumenAKL']);

//kesiswaan->admin
Route::get('kesiswaan',[KendaliKesiswaan::class,'dokumenKesiswaan']);
Route::post('simpanDokumenKesiswaan',[KendaliKesiswaan::class,'simpanDokumenKesiswaan']);
Route::get('hapusDokumenKesiswaan/{id}',[KendaliKesiswaan::class,'hapusDokumenKesiswaan']);

//kurikulum->admin
Route::get('kurikulum',[KendaliKurikulum::class,'dokumenKurikulum']);
Route::post('simpanDokumenKurikulum',[KendaliKurikulum::class,'simpanDokumenKurikulum']);
Route::get('hapusDokumenKurikulum/{id}',[KendaliKurikulum::class,'hapusDokumenKurikulum']);

//sarana->admin
Route::get('sarana',[KendaliSarana::class,'dokumenSarana']);
Route::post('simpanDokumenSarana',[KendaliSarana::class,'simpanDokumenSarana']);
Route::get('hapusDokumenSarana/{id}',[KendaliSarana::class,'hapusDokumenSarana']);

//humas->admin
Route::get('humas',[KendaliHumas::class,'dokumenHumas']);
Route::post('simpanDokumenHumas',[KendaliHumas::class,'simpanDokumenHumas']);
Route::get('hapusDokumenHumas/{id}',[KendaliHumas::class,'hapusDokumenHumas']);


//admin-Waka
Route::get('adminWaka',[KendaliUtama::class,'adminWaka']);
