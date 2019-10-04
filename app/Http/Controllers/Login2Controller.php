<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Guest;
use Illuminate\Support\Facades\Input;

class Login2Controller extends Controller
{
    public function execute(Request $request){

        if ($request->isMethod('post')){


            $input2 = $request->except('_token');

            $message2 = [
                'required' => "Поле :attribute обов'язкове до заповнення!",
                'min' => "Мінімальна кількість символів у полі :attribute - 3"
            ];
            $validator2 = Validator::make($input2, [
                'name2' => 'required|max:255',
                'surname2' => 'required|max:255',
                'pass2' => 'required|max:255|min:3'
            ], $message2);

            $input2['pass2'] = md5($input2['pass2'] . 'fgb7d72bd4g5rw5ry');
            //dd($input2['name2'],$input2['surname2'],$input2['pass2']);

            if ($validator2->fails()):

                return redirect()->route('login')->withErrors($validator2)->withInput()->with('status', 'ПОМИЛКА!');
            endif;


//            if (!empty($_POST['name2'] and $_POST['surname2'] and $_POST['pass2'])){
//
//                return redirect('/planner')->withErrors($validator2);
//            }
            $name = $input2['name2'];
            $surname = $input2['surname2'];
            $pass = $input2['pass2'];
            $mysql = new \mysqli('localhost','root','','planer');
            $db = $mysql->query("SELECT * FROM `guests` WHERE `name` = '$name' AND 
            `surname` = '$surname' AND `password` = '$pass'");
            $user = $db->fetch_array();
            if (empty($user )):
                return redirect()->route('login')->with('status', 'Такий користувач не знайдений! Спробуйте знову!');
                exit();
            endif;
            return redirect('/planner')->withErrors($validator2)->with('status', 'Ви успішно авторизувались!');



            $mysql->close();
        }




//        $result2 = Guest::all();
////            dd($result2['name']);
//        $data = [
//            'title' => 'Планер завдань',
//            'result2' => $result2,
//            'input2' => $input2
//        ];
//
////        foreach ($result2 as $result){
////            if ($input2['name2'] == $result['name'] and $input2['surname2'] == $result['surname'] and $input2['pass2'] == $result['password']){
////
////                return view('site.planer', $data);
////                return redirect()->route('/planer');
////
////            }
////        }
//
//            return view('site.planer', $data);
//            return redirect('/planer');// рядок коду перевірки чи виведе імена з бази->табл-GUESTS!
//
//

    }
}
