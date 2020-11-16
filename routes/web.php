<?php

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

Route::get('/', 'LoginController@index');
Route::get('/login','LoginController@login');
Route::post('/doLogin', 'LoginController@submit');
Route::get('/logout', 'LoginController@logout');
Route::get('/admin/home', 'HomeController@index');

// Route Admin
    // Route Admin
    Route::get('/admin/admin', 'AdminController@admin');
    Route::post('/admin/tambahAdmin', 'AdminController@tambahAdmin');
    Route::post('/admin/editAdmin/{id}', 'AdminController@editAdmin');
    Route::get('/admin/hapusAdmin/{id}', 'AdminController@hapusAdmin');
    // End Route Admin
    // Route Admin Pelabuhan
    Route::get('/admin/pelabuhan', 'AdminController@pelabuhan');
    Route::post('/admin/tambahPelabuhan', 'AdminController@tambahPelabuhan');
    Route::post('/admin/editPelabuhan/{id}', 'AdminController@editPelabuhan');
    Route::get('/admin/hapusPelabuhan/{id}', 'AdminController@hapusPelabuhan');
    // End Route Admin Pelabuhan

    // Route Admin Penyeberangan
    Route::get('/admin/penyeberangan', 'AdminController@penyeberangan');
    Route::post('/admin/tambahPenyeberangan', 'AdminController@tambahPenyeberangan');
    Route::post('/admin/editPenyeberangan/{id}', 'AdminController@editPenyeberangan');
    Route::get('/admin/hapusPenyeberangan/{id}', 'AdminController@hapusPenyeberangan');
    // End Route Admin Pelabuhan

    // Route Admin TuksTersus
    Route::get('/admin/tukstersus', 'AdminController@tukstersus');
    Route::post('/admin/tambahTuksTersus', 'AdminController@tambahTuksTersus');
    Route::post('/admin/editTuksTersus/{id}', 'AdminController@editTuksTersus');
    Route::get('/admin/hapusTuksTersus/{id}', 'AdminController@hapusTuksTersus');
    // End Route Admin TuksTersus

    // Route Admin KegiatanPenunjang
    Route::get('/admin/kegiatanpenunjang', 'AdminController@kegiatanpenunjang');
    Route::post('/admin/tambahKegiatanPenunjang', 'AdminController@tambahKegiatanPenunjang');
    Route::post('/admin/editKegiatanPenunjang/{id}', 'AdminController@editKegiatanPenunjang');
    Route::get('/admin/hapusKegiatanPenunjang/{id}', 'AdminController@hapusKegiatanPenunjang');
    // End Route Admin KegiatanPenunjang

// End Route Admin

// Route Pelabuhan
Route::get('/pelabuhan/home', 'PelabuhanController@home');
Route::get('/pelabuhan/profil', 'PelabuhanController@profil');
Route::post('/pelabuhan/editPelabuhan/{id}', 'PelabuhanController@editPelabuhan');
Route::post('/pelabuhan/editPerencanaan/{id}', 'PelabuhanController@editPerencanaan');
Route::post('/pelabuhan/editFasilitasDarat/{id}', 'PelabuhanController@editFasilitasDarat');
Route::post('/pelabuhan/editFasilitasPerairan/{id}', 'PelabuhanController@editFasilitasPerairan');
Route::post('/pelabuhan/editFasilitasDLKRDLKP/{id}', 'PelabuhanController@editFasilitasDLKRDLKP');
Route::post('/pelabuhan/editFasilitasPeralatan/{id}', 'PelabuhanController@editFasilitasPeralatan');
Route::post('/pelabuhan/editFasilitasSarana/{id}', 'PelabuhanController@editFasilitasSarana');

    // Route Operasional Pelabuhan
    Route::get('/pelabuhan/operasional', 'PelabuhanController@dataoperasional');
    Route::post('/pelabuhan/tambahOperasionalPelabuhan', 'PelabuhanController@tambahOperasionalPelabuhan');
    Route::post('/pelabuhan/editOperasionalPelabuhan/{id}', 'PelabuhanController@editOperasionalPelabuhan');
    Route::get('/pelabuhan/hapusOperasionalPelabuhan/{id}', 'PelabuhanController@hapusOperasionalPelabuhan');
    Route::post('/pelabuhan/cetakPDFBulananOperasional', 'PelabuhanController@pdfBulananOperasional');
    Route::post('/pelabuhan/cetakPDFTahunanOperasional', 'PelabuhanController@pdfTahunanOperasional');

    // Route Bongkar Muat Pelabuhan
    Route::get('/pelabuhan/bongkarmuat', 'PelabuhanController@bongkarMuat');
    Route::post('/pelabuhan/tambahBongkarMuatPelabuhan', 'PelabuhanController@tambahBongkarMuatPelabuhan');
    Route::post('/pelabuhan/editBongkarMuatPelabuhan/{id}', 'PelabuhanController@editBongkarMuatPelabuhan');
    Route::get('/pelabuhan/hapusBongkarMuatPelabuhan/{id}', 'PelabuhanController@hapusBongkarMuatPelabuhan');
    Route::post('/pelabuhan/cetakPDFBulananBongkarMuat', 'PelabuhanController@pdfBulananBongkarMuat');
    Route::post('/pelabuhan/cetakPDFTahunanBongkarMuat', 'PelabuhanController@pdfTahunanBongkarMuat');

    // Route Pajak Dan Retribusi Daerah Pelabuhan
    Route::get('/pelabuhan/pajak&RetribusiDaerah', 'PelabuhanController@pajakDanRetribusiDaerah');
    Route::post('/pelabuhan/tambahPajak&RetribusiDaerah', 'PelabuhanController@tambahPajakDanRetribusiDaerah');
    Route::get('/pelabuhan/hapusPajak&RetribusiDaerah/{id}', 'PelabuhanController@hapusPajakDanRetribusiDaerah');
    Route::get('/pelabuhan/detailPajak&RetribusiDaerah/{id}', 'PelabuhanController@detailPajakDanRetribusiDaerah');
    Route::post('/pelabuhan/editPajak&RetribusiDaerah/{id}/{i}', 'PelabuhanController@editPajakDanRetribusiDaerah');
    Route::get('/pelabuhan/pdfPajak&RetribusiDaerah/{id}', 'PelabuhanController@pdfPajakDanRetribusiDaerah');
// End Route Pelabuhan

// Route Penyeberangan
Route::get('/penyeberangan/home', 'PenyeberanganController@home');
Route::get('/penyeberangan/profil', 'PenyeberanganController@profil');
Route::post('/penyeberangan/editPenyeberangan/{id}', 'PenyeberanganController@editPenyeberangan');
Route::post('/penyeberangan/editPerencanaan/{id}', 'PenyeberanganController@editPerencanaan');
Route::post('/penyeberangan/editFasilitasDarat/{id}', 'PenyeberanganController@editFasilitasDarat');
Route::post('/penyeberangan/editFasilitasPerairan/{id}', 'PenyeberanganController@editFasilitasPerairan');
Route::post('/penyeberangan/editFasilitasDLKRDLKP/{id}', 'PenyeberanganController@editFasilitasDLKRDLKP');
Route::post('/penyeberangan/editFasilitasPeralatan/{id}', 'PenyeberanganController@editFasilitasPeralatan');
Route::post('/penyeberangan/editFasilitasSarana/{id}', 'PenyeberanganController@editFasilitasSarana');
    // Route Operasional Penyeberangan
    Route::get('/penyeberangan/operasional', 'PenyeberanganController@dataoperasional');
    Route::post('/penyeberangan/tambahOperasionalPenyeberangan', 'PenyeberanganController@tambahOperasionalPenyeberangan');
    Route::post('/penyeberangan/editOperasionalPenyeberangan/{id}', 'PenyeberanganController@editOperasionalPenyeberangan');
    Route::get('/penyeberangan/hapusOperasionalPenyeberangan/{id}', 'PenyeberanganController@hapusOperasionalPenyeberangan');
    Route::post('/penyeberangan/cetakPDFBulananOperasional', 'PenyeberanganController@pdfBulananOperasional');
    Route::post('/penyeberangan/cetakPDFTahunanOperasional', 'PenyeberanganController@pdfTahunanOperasional');
    // Route Bongkar Muat Penyeberangan
    Route::get('/penyeberangan/bongkarmuat', 'PenyeberanganController@bongkarMuat');
    Route::post('/penyeberangan/tambahBongkarMuatPenyeberangan', 'PenyeberanganController@tambahBongkarMuatPenyeberangan');
    Route::post('/penyeberangan/editBongkarMuatPenyeberangan/{id}', 'PenyeberanganController@editBongkarMuatPenyeberangan');
    Route::get('/penyeberangan/hapusBongkarMuatPenyeberangan/{id}', 'PenyeberanganController@hapusBongkarMuatPenyeberangan');
    Route::post('/penyeberangan/cetakPDFBulananBongkarMuat', 'PenyeberanganController@pdfBulananBongkarMuat');
    Route::post('/penyeberangan/cetakPDFTahunanBongkarMuat', 'PenyeberanganController@pdfTahunanBongkarMuat');
    // Route Pajak Dan Retribusi Daerah Pelabuhan
    Route::get('/penyeberangan/pajak&RetribusiDaerah', 'PenyeberanganController@pajakDanRetribusiDaerah');
    Route::post('/penyeberangan/tambahPajak&RetribusiDaerah', 'PenyeberanganController@tambahPajakDanRetribusiDaerah');
    Route::get('/penyeberangan/hapusPajak&RetribusiDaerah/{id}', 'PenyeberanganController@hapusPajakDanRetribusiDaerah');
    Route::get('/penyeberangan/detailPajak&RetribusiDaerah/{id}', 'PenyeberanganController@detailPajakDanRetribusiDaerah');
    Route::post('/penyeberangan/editPajak&RetribusiDaerah/{id}/{i}', 'PenyeberanganController@editPajakDanRetribusiDaerah');
    Route::get('/penyeberangan/pdfPajak&RetribusiDaerah/{id}', 'PenyeberanganController@pdfPajakDanRetribusiDaerah');
    // Route Penjualan Pas Masuk Penyeberangan
    Route::get('/penyeberangan/penjualanPasMasuk', 'PenyeberanganController@penjualanPasMasuk');
    Route::post('/penyeberangan/tambahPenjualanPasMasuk', 'PenyeberanganController@tambahPenjualanPasMasuk');
    Route::get('/penyeberangan/hapusPenjualanPasMasuk/{id}', 'PenyeberanganController@hapusPenjualanPasMasuk');
    Route::get('/penyeberangan/detailPenjualanPasMasuk/{id}', 'PenyeberanganController@detailPenjualanPasMasuk');
    Route::post('/penyeberangan/editPenjualanPasMasuk/{id}/{i}', 'PenyeberanganController@editPenjualanPasMasuk');
    Route::get('/penyeberangan/pdfPenjualanPasMasuk/{id}', 'PenyeberanganController@pdfPenjualanPasMasuk');
// End Route Penyeberangan

// Route Tuks Tersus
Route::get('/tukstersus/home', 'TuksTersusController@home');
Route::get('/tukstersus/profil', 'TuksTersusController@profil');
Route::post('/tukstersus/editTuksTersus/{id}', 'TuksTersusController@editTuksTersus');
Route::post('/tukstersus/editPerencanaan/{id}', 'TuksTersusController@editPerencanaan');
Route::post('/tukstersus/editFasilitasDarat/{id}', 'TuksTersusController@editFasilitasDarat');
Route::post('/tukstersus/editFasilitasPerairan/{id}', 'TuksTersusController@editFasilitasPerairan');
Route::post('/tukstersus/editFasilitasDLKRDLKP/{id}', 'TuksTersusController@editFasilitasDLKRDLKP');
Route::post('/tukstersus/editFasilitasPeralatan/{id}', 'TuksTersusController@editFasilitasPeralatan');
Route::post('/tukstersus/editFasilitasSarana/{id}', 'TuksTersusController@editFasilitasSarana');
    // Route Operasional Tuks Tersus
    Route::get('/tukstersus/operasional', 'TuksTersusController@dataoperasional');
    Route::post('/tukstersus/tambahOperasionalTuksTersus', 'TuksTersusController@tambahOperasionalTuksTersus');
    Route::post('/tukstersus/editOperasionalTuksTersus/{id}', 'TuksTersusController@editOperasionalTuksTersus');
    Route::get('/tukstersus/hapusOperasionalTuksTersus/{id}', 'TuksTersusController@hapusOperasionalTuksTersus');
    Route::post('/tukstersus/cetakPDFBulananOperasional', 'TuksTersusController@pdfBulananOperasional');
    Route::post('/tukstersus/cetakPDFTahunanOperasional', 'TuksTersusController@pdfTahunanOperasional');
    // Route Bongkar Muat Tuks Tersus
    Route::get('/tukstersus/bongkarmuat', 'TuksTersusController@bongkarMuat');
    Route::post('/tukstersus/tambahBongkarMuatTuksTersus', 'TuksTersusController@tambahBongkarMuatTuksTersus');
    Route::post('/tukstersus/editBongkarMuatTuksTersus/{id}', 'TuksTersusController@editBongkarMuatTuksTersus');
    Route::get('/tukstersus/hapusBongkarMuatTuksTersus/{id}', 'TuksTersusController@hapusBongkarMuatTuksTersus');
    Route::post('/tukstersus/cetakPDFBulananBongkarMuat', 'TuksTersusController@pdfBulananBongkarMuat');
    Route::post('/tukstersus/cetakPDFTahunanBongkarMuat', 'TuksTersusController@pdfTahunanBongkarMuat');
    // Route Sewa Perairan Tuks Tersus
    Route::get('/tukstersus/sewaperairan', 'TuksTersusController@sewaPerairan');
    Route::post('/tukstersus/tambahSewaPerairan', 'TuksTersusController@tambahSewaPerairan');
    Route::post('/tukstersus/editSewaPerairan/{id}', 'TuksTersusController@editSewaPerairan');
    Route::get('/tukstersus/hapusSewaPerairan/{id}', 'TuksTersusController@hapusSewaPerairan');
    Route::post('/tukstersus/cetakPDFBulananSewaPerairan', 'TuksTersusController@pdfBulananSewaPerairan');
// End Route Tuks Tersus

// Route Kegiatan Penunjang
Route::post('/kegiatanpenunjang/editPerusahaan/{id}', 'KegiatanPenunjangController@editPerusahaan');
    // Route Perusahaan Bongkar Muat
    Route::get('/kegiatanpenunjang/bongkarmuat/home', 'KegiatanPenunjangController@homeBongkarMuat');
    Route::get('/kegiatanpenunjang/bongkarmuat/profil', 'KegiatanPenunjangController@profilBongkarMuat');
    Route::get('/kegiatanpenunjang/bongkarmuat', 'KegiatanPenunjangController@bongkarMuat');
    Route::post('/kegiatanpenunjang/tambahBongkarMuat', 'KegiatanPenunjangController@tambahBongkarMuat');
    Route::post('/kegiatanpenunjang/editBongkarMuat/{id}', 'KegiatanPenunjangController@editBongkarMuat');
    Route::get('/kegiatanpenunjang/hapusBongkarMuat/{id}', 'KegiatanPenunjangController@hapusBongkarMuat');
    Route::post('/kegiatanpenunjang/cetakPDFBulananBongkarMuat', 'KegiatanPenunjangController@pdfBulananBongkarMuat');
    Route::post('/kegiatanpenunjang/cetakPDFTahunanBongkarMuat', 'KegiatanPenunjangController@pdfTahunanBongkarMuat');
    // End Route Perusahaan Bongkar Muat
    // Route Perusahaan Pelayaran Rakyat
    Route::get('/kegiatanpenunjang/pelayaranrakyat/home', 'KegiatanPenunjangController@homePelayaranRakyat');
    Route::get('/kegiatanpenunjang/pelayaranrakyat/profil', 'KegiatanPenunjangController@profilPelayaranRakyat');
    Route::get('/kegiatanpenunjang/perla', 'KegiatanPenunjangController@perla');
    Route::post('/kegiatanpenunjang/tambahPerla', 'KegiatanPenunjangController@tambahPerla');
    Route::post('/kegiatanpenunjang/editPerla/{id}', 'KegiatanPenunjangController@editPerla');
    Route::get('/kegiatanpenunjang/hapusPerla/{id}', 'KegiatanPenunjangController@hapusPerla');
    Route::post('/kegiatanpenunjang/cetakPDFBulananPerla', 'KegiatanPenunjangController@pdfBulananPerla');
    Route::post('/kegiatanpenunjang/cetakPDFTahunanPerla', 'KegiatanPenunjangController@pdfTahunanPerla');
    // End Route Perusahaan Pelayaran Rakyat
    // Route Perusahaan Pengurusan Transportasi
    Route::get('/kegiatanpenunjang/pengurusantransportasi/home', 'KegiatanPenunjangController@homePengurusanTransportasi');
    Route::get('/kegiatanpenunjang/pengurusantransportasi/profil', 'KegiatanPenunjangController@profilPengurusanTransportasi');
    Route::get('/kegiatanpenunjang/pengurusantransportasi', 'KegiatanPenunjangController@pengurusanTransportasi');
    Route::post('/kegiatanpenunjang/tambahPengurusanTransportasi', 'KegiatanPenunjangController@tambahPengurusanTransportasi');
    Route::post('/kegiatanpenunjang/editPengurusanTransportasi/{id}', 'KegiatanPenunjangController@editPengurusanTransportasi');
    Route::get('/kegiatanpenunjang/hapusPengurusanTransportasi/{id}', 'KegiatanPenunjangController@hapusPengurusanTransportasi');
    Route::post('/kegiatanpenunjang/cetakPDFBulananPengurusanTransportasi', 'KegiatanPenunjangController@pdfBulananPengurusanTransportasi');
    Route::post('/kegiatanpenunjang/cetakPDFTahunanPengurusanTransportasi', 'KegiatanPenunjangController@pdfTahunanPengurusanTransportasi');
    // End Route Perusahaan Pengurusan Transportasi
// End Route Kegiatan Penunjang
