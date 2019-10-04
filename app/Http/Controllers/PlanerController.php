<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Planer;
use App\Guest;

class PlanerController extends Controller
{
    public function execute(Request $request){

//        $guests = Guest::with('planers')->get();
//        dd($guests);

        if ($request->isMethod('post')){


            $input = $request->except('_token') ;

//            $messages = "поле :attribute обов'язкове до заповнення!";

            $validator = Validator::make($input,[
                'name' => 'required|max:255',
            ]);


            if ($validator->fails()):
                return redirect('/planner')->withErrors($validator)->withInput()->with('status','Щось пішло не так......запис не додано!');
            endif;


//            if (!empty($input['name'])){
//
//                //dd($input['name']);
//                $input['guest_id'] = 1;
//                for (;$input['guest_id'] <=100;$input['guest_id']++){
//
////                    if (){
////
////                    }
//                };
//
//
//            }

            $planer = Planer::create([
                'name' => $input['name'],
            ]);

            if ($planer->save()):
                return redirect('/planner')->with('status', "Вітаю!Ви успішно додали запис!");
            endif;
        }


        if (view()->exists('site.planer')){

//            $planers = Planer::get(['id','name']);
            $planers = DB::table('planers')
                ->orderBy('name', 'desc')
                ->get();
//            $planers = Planer::find(1)->guest()->where('name')->first();

//            $background = public_path('22544-Kycb_1920x1080.jpg');

            $data = [
                'title' => 'Планер Завдань',
                'planers' => $planers,

            ];

            return view('site.planer',$data);

        }
        else('Щось пішло не так');

    }
}
