<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Guest;
//use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function execute(Request $request){

        if ($request->IsMethod('post')){

//            if (Input::post('зареєструвати') == 1) {
                $input = $request->except('_token');


                $messages = [

                    'required' => "Поле :attribute обов'язкове до заповнення!",
                    'min' => "Мінімальна кількість символів у полі :attribute - 3"

                ];

                $validator = Validator::make($input, [
                    'name' => 'required|max:255',
                    'surname' => 'required|max:255',
                    'pass' => 'required|max:255|min:3'
                ], $messages);

                $input['pass'] = md5($input['pass'] . 'fgb7d72bd4g5rw5ry');

                if ($validator->fails()):
                    return redirect()->route('login')->withErrors($validator)->withInput()->with('status', 'Щось заповнене не правильно');
                endif;

                $guest = Guest::create([

                    'name' => $input['name'],
                    'surname' => $input['surname'],
                    'password' => $input['pass']

                ]);

                if ($guest->save()):

                    return redirect('/planner')->with('status', 'Ви успішно зареєструвались!');

                endif;
//            }else
////                dd('проходить...');
//
////            $result = \mysql::
//            $result = Guest::all();
////            dd($request['name2']);
//
//            $_POST['pass2'] = md5($_POST['pass2'].'fgb7d72bd4g5rw5ry');
//
//            if ($_POST['name2'] = $result['name']|| $_POST['surname2'] = $result['surname'] || $_POST['pass2'] = $result['password']){
//
//                return redirect('/planner')->with('status', 'Ви успішно авторизувались!');
//
//            }




        }



        if (view()->exists('site.login')):

            $data = [
                'title' => 'Планер завдань',

            ];

            return view('site.login', $data);
        endif;
    }
}
