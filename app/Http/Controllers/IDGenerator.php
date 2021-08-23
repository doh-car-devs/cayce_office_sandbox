<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class IDGenerator extends Controller
{
 public function  IDPrint(){
    $img = Image::make('images/front.png');

    // image TOP LEFT
    $img->insert('images/smile.png', 'top-left', 330, 500);
    //image TOP RIGHT
    $img->insert('images/smile.png', 'top-right', 330, 500);
    //image BOTTOM LEFT
    $img->insert('images/smile.png', 'bottom-left', 330, 600);
    //image BOTTOM RIGHT
    $img->insert('images/smile.png', 'bottom-right', 330, 600);

    $img->insert('images/cover.png', 'center');
    $img->insert('images/guide.png', 'center');

    // names and nickname
    $TLName = 'Rolf Cayce P. Dy';   $TRName = 'Keanu F. Acierto';
    $TLPos = 'COMPUTER PROGRAMMER I'; $TRPos = '';
    $TLby = 'CAYCE';     $TRby = 'jhon';
    $TLID = 'JC-DOHCAR-039'; $TRID = '';

    $BLName = 'KELVIN M. VALDEZ';   $BRName = 'jhon';
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
 }

 public function  SinglePrint($all){
//  public function  SinglePrint( $name = null, $position = null, $byname = null, $idno = null, $pic = null){
    $allArray = explode("|||",$all);
    $allArray[4] = str_replace("!!","/",$allArray[4]);
    $allArray[4] = str_replace("all","storage/all",$allArray[4]);
    // return $pic;
    // $data = 'hello';
    if($allArray[4] == null){
        $hello = $this->hrh($allArray);
        return $hello;
    }
    $img = Image::make('single/single-front.png');

    // image TOP LEFT
    $img->insert($allArray[4], 'top-left', 270, 350);
    // $img->insert($name, 'top-left', 270, 350);

    $img->insert('single/cover.png', 'center');
    // $img->insert('single/guide.png', 'center');

    // names and nickname
    $TLName = $allArray[0];
    $TLPos = $allArray[1];
    $TLby = $allArray[2];
    $TLID = $allArray[3];

    $img->text($TLName, 615, 1050, function($font) use ($TLName) {
        $fontSize = 90;
        $fontSize = strlen($TLName) >= 35 ? 80 : $fontSize;
        $fontSize = strlen($TLName) >= 40 ? 70 : $fontSize;
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size($fontSize);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLName, 615, 1040, function($font) use ($TLName) {
        $fontSize = 90;
        $fontSize = strlen($TLName) >= 35 ? 80 : $fontSize;
        $fontSize = strlen($TLName) >= 40 ? 70 : $fontSize;
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size($fontSize);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLName, 610, 1045, function($font) use ($TLName) {
        $fontSize = 90;
        $fontSize = strlen($TLName) >= 35 ? 80 : $fontSize;
        $fontSize = strlen($TLName) >= 40 ? 70 : $fontSize;
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size($fontSize);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLName, 620, 1045, function($font) use ($TLName) {
        $fontSize = 90;
        $fontSize = strlen($TLName) >= 35 ? 80 : $fontSize;
        $fontSize = strlen($TLName) >= 40 ? 70 : $fontSize;
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size($fontSize);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLName, 615, 1045, function($font) use ($TLName) {
        $fontSize = 90;
        $fontSize = strlen($TLName) >= 35 ? 80 : $fontSize;
        $fontSize = strlen($TLName) >= 40 ? 70 : $fontSize;
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size($fontSize);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });

    // position
    $img->text($TLPos, 615, 1150, function($font) {
        $font->file(base_path('public/fonts/MyriadPro-Regular.otf'));
        $font->size(40);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });

    // byname
    $img->text($TLby, 590, 1295, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLby, 605, 1290, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#FFFF00');
        $font->align('center');
        $font->valign('top');
    });

    // IDNUMBER

    $img->text($TLID, 1150, 1733, function($font) {
        $font->file(base_path('public/fonts/consolab.ttf'));
        $font->size(45);
        $font->color('#ffff');
        $font->align('right');
        $font->valign('bottom');
    });

    $path = Storage::path('ID/'.$TLName.'.png');
    $img->save($path,'png');
    return $img->response();

    // return $img->response('jpg');
    // return $img->response('jpg');
    // return 'hello';
 }
 public function hrh($allArray){
    //  return $allArray;
    $img = Image::make('single/single-hrh.png');
    // image TOP LEFT
    // $img->insert($allArray[4], 'top-left', 270, 350);
    // $img->insert($name, 'top-left', 270, 350);

    // $img->insert('single/cover.png', 'center');
    // $img->insert('single/guide.png', 'center');

    // names and nickname
    $TLName = $allArray[0];
    $TLPos = $allArray[1];
    $TLby = $allArray[2];
    $TLID = $allArray[3];
    $name_size = 90;
    $name_size = strlen($TLName) >= 35 ? 80 : $name_size;
    $name_size = strlen($TLName) >= 38 ? 75 : $name_size;

    $img->text($TLName, 615, 1050, function($font) use($name_size) {
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size($name_size);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLName, 615, 1040, function($font) use($name_size) {
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size($name_size);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLName, 610, 1045, function($font) use($name_size) {
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size($name_size);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLName, 620, 1045, function($font) use($name_size) {
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size($name_size);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLName, 615, 1045, function($font) use($name_size) {
        $font->file(base_path('public/fonts/Bebas-Regular.ttf'));
        $font->size($name_size);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });

    // position
    $img->text($TLPos, 615, 1150, function($font) {
        $font->file(base_path('public/fonts/MyriadPro-Regular.otf'));
        $font->size(40);
        $font->color('#ffff');
        $font->align('center');
        $font->valign('top');
    });

    // byname
    $img->text($TLby, 590, 1295, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });

    $img->text($TLby, 605, 1290, function($font) {
        $font->file(base_path('public/fonts/Montserrat-BlackItalic.ttf'));
        $font->size(120);
        $font->color('#FFFF00');
        $font->align('center');
        $font->valign('top');
    });

    // IDNUMBER

    $img->text($TLID, 1150, 1727, function($font) {
        $font->file(base_path('public/fonts/consolab.ttf'));
        $font->size(45);
        $font->color('#ffff');
        $font->align('right');
        $font->valign('bottom');
    });
    // return $img->response();
    // $path = public_path('')
    $path = Storage::path('ID/'.$TLName.'.png');
    $img->save($path,'png');
    return $img->response();
 }
 public function  SingleBackPrint(){
    $img = Image::make('single/back.png');
    return $img->response('jpg');
 }
}

