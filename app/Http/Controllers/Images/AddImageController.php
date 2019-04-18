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

            /*$imaGE = imageCreateFromJpeg($input['images']);
            $width = imagesx($imaGE);
            $height = imagesy($imaGE);

            for($x = 0; $x <= $width; $x+=23) {//0-450 px.
                for( $y = $height / 2; $y<$height;){
                    $width[$x];
                    $height[$y];
                }//225 px.
            }*/


            $mysize = (integer)Input::get('size') ?? 40;
            $str = $input['text'];
            $strArray = str_split($str);
            $img = Image::make($file)->resize($width = 300,  $height = 300);
            $x = 11;//По Х і У не 0 , а зміщено до 11 і 2 , тому що в intervention image текст накладає /0,0/ з кута , так що з'їдає частину букви , тому зміщення таке
            $y = 2;
            $i = 0;
            $xOffset = 23;
            $yOffset = 23;
            $width = 300;
            $height = 300;
            foreach ($strArray as $key => $value){
                    if ($i !== 0){
                        $x = $x + $xOffset;
                        if ($x >= $width){
                            $x = 11;
                            $y = $y + $yOffset;
                        }
                    }
                    if ($key % 2){
                        $img ->text($value ,$x, $y, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#000000');
                            $font->align('center');
                            $font->valign('top');
                        });
                    }else{
                        $img ->text($value ,$x, $y, function ($font) use ($mysize) {
                            $font->file(public_path('font/Lobster-Regular.ttf'));
                            $font->size($mysize);
                            $font->color('#ffffff');
                            $font->align('center');
                            $font->valign('top');
                        });
                    }

                    $i++;
            }
            $img->save($path.'/'.$filename);

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
