<?php

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

use App\candidates;
use App\Http\Controllers\spaController;
use App\userLogs;
use Illuminate\Http\Request;

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return redirect('/');
});
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return redirect('/');
});
Route::get('/optimize-clear', function () {
    $exitCode = Artisan::call('optimize:clear');
    return redirect('/');
});
Route::get('/clear-view', function () {
    $exitCode = Artisan::call('view:clear');
    return redirect('/');
});
Route::get('/21anniversary', function () {
    return Redirect::to('https://infinitysolutions.co.id/assets/21anniversaryBTSA.mp4');
});

// Social Media Redirect
Route::get('/facebook', function () {
    return Redirect::to('https://facebook.com/BTSALogistics');
});
Route::get('/whatsapp', function () {
    return Redirect::to('https://wa.me/628111507989');
});
Route::get('/instagram', function () {
    return Redirect::to('https://www.instagram.com/btsalogistics');
});
Route::get('/youtube', function () {
    return Redirect::to('https://www.youtube.com/c/BTSALogisticsYourReliableLogisticsPartner');
});
Route::get('/wikipedia', function () {
    return Redirect::to('https://id.wikipedia.org/wiki/Pengguna:Btsalogistics');
});
Route::get('/linkedin', function () {
    return Redirect::to('https://www.linkedin.com/company/btsa-logistics/about');
});
Route::get('/tools', function () {
    return Redirect::to('https://tools.btsa.co.id');
});

// Candidate proses
Route::prefix('candidate')->group(function () {
    Route::get('/get-provinsi', 'webpageController@getprovinsi');
    Route::get('/get-domisili/{province_id}', 'webpageController@getdomisili');
    Route::get('/get-kecamatan/{id}', 'webpageController@getkecamatan');
    Route::get('/get-kelurahan/{id}', 'webpageController@getkelurahan');
});
// Homepage Data
Route::get('/', 'webpageController@index');
Route::get('/connect', 'webpageController@connect');
Route::get('/tentang-kami', 'webpageController@tentangkami');
Route::get('/blog', 'webpageController@blog');
// View details blog
Route::get('/blog/v/{title}', 'webpageController@viewBlog');
Route::get('/galeri', 'webpageController@galeri');
Route::get('/karir', 'webpageController@karir');
Route::get('/karir/detail/{slug}', 'webpageController@getKarirDetail');
Route::get('/karir/daftar/{title}/{csrf_token}', 'webpageController@formRegisterKarir');
Route::post('/karir/daftar/{title}/apply', 'webpageController@applyKarir');
Route::get('/generatePDF/{id}', function ($id) {
    $candidate = candidates::where('id', $id)->with('posisi')->with('provinsi')->with('domisili')->with('kecamatan')->with('kelurahan')->with('agama')->with('suku')->orderBy('created_at', 'DESC')->first();
    return view('dashboard.pdf.candidate', ['candidate' => $candidate]);
});
