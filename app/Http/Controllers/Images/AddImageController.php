<?php

namespace App\Http\Controllers\Images;
use App\Imageken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use stdClass;

//use Intervention\Image\ImageManagerStatic;
//use Intervention\Image\ImageManager;

class AddImageController extends Controller
{


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function execute(Request $request){


        if ($request->isMethod('post')){

            $input = $request->except('_token');

            $messages = [
                'required' => "Поле :attribute обов'язкове до заповнення"
            ];

            $validator = Validator::make($input,[
                'name' => 'required|max:255',
                'images' => 'required|max:255',
                'text' => 'required|max:255',
            ],$messages);


            if ($validator->fails()){
                return redirect()->route('imagesAdd')->withErrors($validator)->withInput();
            }


            $path = public_path().'/img';

            $file = $request->file('images');

            $filename =  $file->getClientOriginalName();

            $imaGE = imageCreateFromJpeg($input['images']);
            $width = imagesx($imaGE);
            $height = imagesy($imaGE);
            for($x = 0; $x < $width; $x++) {//0-450 px.
                $y = $height / 2;//175 px.
                // pixel color at (x, y)
                $color = imagecolorat($imaGE, $x, $y);
            }

            $red = ($color >> 16) & 0xFF;
            $green = ($color >> 8) & 0xFF;
            $blue = $color & 0xFF;
            "RGB($red, $green, $blue)";
            // imageDestroy($imaGE);

            $mysize = 40;
            if (Input::get('size') === '10'){$mysize = 10;}
            elseif (Input::get('size') === '15'){$mysize = 15;}
            elseif (Input::get('size') === '20'){$mysize = 20;}
            elseif (Input::get('size') === '25'){$mysize = 25;}
            elseif (Input::get('size') === '30'){$mysize = 30;}
            elseif (Input::get('size') === '35'){$mysize = 35;}
            elseif (Input::get('size') === '40'){$mysize = 40;}
            //else {$mysize = 50;}

            //['red'] == 197 and $arr_col['green'] == 197 and $arr_col['blue'] == 197
            $color = 1 - ( 0.299 * $red + 0.587 * $green + 0.114 * $blue)/255;

            $str = $input['text'];
            $strArray = str_split($str);
           // dd($strArray);
            foreach ($strArray as $item => $value){
              // dd($item . '-' . $value);
                for ($item; $item<=30 ;$item++ ){

                    if ($color < 0.5) {// СВІТЛЕ

                        $img = Image::make($file)
                            ->resize(300, 300);
                        // if ($color < 0.5){
                        $img ->text($value ,$img->width() / 2 - 138, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text( $value  ,$img->width() / 2 - 116, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(  $value  ,$img->width() / 2 - 92, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text( $value  ,$img->width() / 2 - 70, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $value ,$img->width() / 2 -46, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });

                        $img ->text(   $value ,$img->width() / 2 -24, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $value ,$img->width() / 2 + 0, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(  $value ,$img->width() / 2 + 22, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $value ,$img->width() / 2 + 46, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $value ,$img->width() / 2 + 68, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $value ,$img->width() / 2 + 92, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $value ,$img->width() / 2 + 114, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $value ,$img->width() / 2 + 138, $img->height() / 2 - 8, function ($font) use ($mysize) {//13
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });//2 string
                            break;
                        /*$img ->text(   $item,$img->width() / 2 -138, $img->height() / 2 +23 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 -114, $img->height() / 2 +22 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 -93, $img->height() / 2 +22- 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 -68, $img->height() / 2 +22 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 -47, $img->height() / 2 +22 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 -23, $img->height() / 2 +22 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 -1, $img->height() / 2 +22 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 +24, $img->height() / 2 +22- 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 + 45, $img->height() / 2 +22 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 + 69, $img->height() / 2 +22 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 + 91, $img->height() / 2 +22- 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 + 115, $img->height() / 2 +22 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });$img ->text(   $item,$img->width() / 2 + 137, $img->height() / 2 +22 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });*/
                        //}
                        $img->save($path.'/'.$filename);
                    }else {// ТЕМНЕ ФОТО
                        $img = Image::make($file)
                            ->resize(300, 300);
                        $img ->text($item->$value ,$img->width() / 2, $img->height() / 2 - 8, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });
                        $img->save($path.'/'.$filename);
                    }
                }

            }




            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }


            $image = Imageken::create([
                'name' => $filename,
                'images' =>'img/'.$filename,
                'text' => $input['text']

            ]);

            if ($image){
                return redirect('/images')->with('status','Запис додано');
            }
        }
//--------------------------------------------------------------------------------------------------------------------------------------
        if (view()->exists('images.images_add')){
            $data = [
                'title' => 'Нова Інфа'
            ];
            return view('images.images_add',$data);

        }
    }
}
