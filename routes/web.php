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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/id', 'IDGenerator@IDPrint')->name('id');
Route::get('/id/single/{all?}', 'IDGenerator@SinglePrint')->name('id.single');
// Route::get('/id/single/{name?}/{position?}/{byname?}/{idno?}/{pic?}', 'IDGenerator@SinglePrint')->name('id.single');
Route::get('/id/singleid/back', 'IDGenerator@SingleBackPrint')->name('id.single.back');


Route::group(['middleware' => ['auth']], function() {
    Route::group(['prefix' => 'test', 'as' => 'test'], function() {
        Route::get('/index' , 'HomeController@test')->name('.index');
    });
});

Route::get('/test', function()
{
    $img = Image::make('images/front.png');

    // image TOP LEFT
    $img->insert('images/smile.png', 'top-left', 330, 500);
    //image TOP RIGHT
    $img->insert('images/smile.png', 'top-right', 330, 500);
    //image BOTTOM LEFT
    $img->insert('images/smile.png', 'bottom-left', 330, 600);
    //image BOTTOM RIGHT
    $img->insert('images/smile.png', 'bottom-right', 330, 600);

    $img->insert('images/smile.png', 'top-left', 330, 500);
    $img->insert('images/cover.png', 'center');
    $img->insert('images/guide.png', 'center');

    // names and nickname
    $TLName = 'Rolf Cayce P. Dy';   $TRName = 'Keanu F. Acierto';
    $TLPos = 'COMPUTER PROGRAMMER I'; $TRPos = '';
    $TLby = 'CAYCE';     $TRby = 'jhon';
    $TLID = 'JC-DOHCAR-039'; $TRID = '';

    $BLName = 'jhon';   $BRName = 'jhon';
    $BLPos = ''; $BRPos = '';
    $BLby = 'jhon';     $BRby = 'jhon';
    $BLID = ''; $BRID = '';

    $img->text($TLName, 665, 1045, function($font) {
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size(90);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TRName, 1810, 1045, function($font) {
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size(90);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($BLName, 665, 2780, function($font) {
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size(90);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($BRName, 1810, 2780, function($font) {
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size(90);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });


    // position
    $img->text($TLPos, 665, 1150, function($font) {
        $font->file(base_path('public/fonts/MyriadPro-Regular.otf'));
        $font->size(40);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLPos, 1810, 1150, function($font) {
        $font->file(base_path('public/fonts/MyriadPro-Regular.otf'));
        $font->size(40);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLPos, 665, 2870, function($font) {
        $font->file(base_path('public/fonts/MyriadPro-Regular.otf'));
        $font->size(40);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLPos, 1810, 2870, function($font) {
        $font->file(base_path('public/fonts/MyriadPro-Regular.otf'));
        $font->size(40);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });



    // byname
    $img->text($TLby, 655, 1315, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLby, 665, 1310, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#FFFF00');
        $font->align('center');
        $font->valign('top');
    });
    //////////////
    $img->text($TLby, 1800, 1315, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLby, 1810, 1310, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#FFFF00');
        $font->align('center');
        $font->valign('top');
    });
    //////////////
    $img->text($TLby, 655, 3035, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLby, 665, 3030, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#FFFF00');
        $font->align('center');
        $font->valign('top');
    });
    //////////////
    $img->text($TLby, 1800, 3035, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLby, 1810, 3030, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#FFFF00');
        $font->align('center');
        $font->valign('top');
    });


    // IDNUMBER

    $img->text($TLID, 880, 1705, function($font) {
        $font->file(base_path('public/fonts/consolab.ttf'));
        $font->size(45);
        $font->color('#ffff');
        $font->align('left');
        $font->valign('top');
    });

    $img->text($TLID, 2020, 1705, function($font) {
        $font->file(base_path('public/fonts/consolab.ttf'));
        $font->size(45);
        $font->color('#ffff');
        $font->align('left');
        $font->valign('top');
    });

    $img->text($TLID, 880, 3420, function($font) {
        $font->file(base_path('public/fonts/consolab.ttf'));
        $font->size(45);
        $font->color('#ffff');
        $font->align('left');
        $font->valign('top');
    });

    $img->text($TLID, 2020, 3420, function($font) {
        $font->file(base_path('public/fonts/consolab.ttf'));
        $font->size(45);
        $font->color('#ffff');
        $font->align('left');
        $font->valign('top');
    });

    return $img->response('jpg');
});

Route::get('/test1', 'TestsController@test1');
Route::get('/test2', 'TestsController@test2');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'ChatsController@index');
    Route::get('messages', 'ChatsController@fetchMessages');
    Route::post('messages', 'ChatsController@sendMessage');
});
