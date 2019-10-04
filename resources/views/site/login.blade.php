<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>{{$title}}</title>

</head>
<body background="voda_volny_riab_143522_1366x768.jpg">
<header>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</header>

<div class="container mt-4">
    <h1 align="center">Форма реєстрації та авторизації</h1><br>
   <div class="row">

       <div class="col">

           <form action="{{route('login')}}" method="post">
               <input type="text" class="form-control" name="name" id="name" placeholder="Введіть ім'я"><br>
               <input type="text" class="form-control" name="surname" id="surname" placeholder="Введіть прізвище"><br>
               <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
               <button type="submit" class="btn btn-success" name="зареєструвати" value="1">Зареєструвати</button>
           </form>
       </div>


       <div class="col">
           {{--<h1>Форма авторизації</h1>--}}
           <form action="{{route('login2')}}" method="post">
               <input type="text" class="form-control" name="name2" id="name2" placeholder="Введіть ім'я"><br>
               <input type="text" class="form-control" name="surname2" id="surname2" placeholder="Введіть прізвище"><br>
               <input type="password" class="form-control" name="pass2" id="pass2" placeholder="Введіть пароль"><br>
               <button type="submit" class="btn btn-success " name="зареєструвати" value="2">Авторизувати</button>
           </form>
       </div>
   </div>
</div>

</body>
{{--<footer class="clear">--}}
    {{--<p>Всі права захищені</p>--}}
{{--</footer>--}}
</html>
