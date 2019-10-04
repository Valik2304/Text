<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css   ">



</head>
<body background="DSC100135013_1920x1030.jpg">
<header>
    {{--@if(isset($result2))--}}
        {{--@foreach($result2 as $result)--}}
            {{--<ul>--}}
                    {{--{{$result->name}}--}}
            {{--</ul>--}}
        {{--@endforeach--}}
    {{--@endif--}}

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</header>

<div align="center" class="container">
    <h1>Список справ</h1>
    <form action="{{route('plans')}}" method="post">
        <input type="text" name="name" id="task" placeholder="Потрібно зробити..." class="form-control">
        <button type="submit" name="sendTask" class="btn btn-success ">Відправити</button>
    </form>

    {{--<video src="https://www.youtube.com/watch?v=tGKlj-g6dWY" controls></video>--}}

    @if(isset($planers))


        <ul>
            @foreach($planers as $planer)

                <p><b>{{$planer->name}}</b></p><hr />

            @endforeach
        </ul>
    @endif

</div>


</body>
</html>
{{--@if(isset($result2))--}}
{{--@foreach($result2 as $result)--}}
{{--@foreach($input2 as $input)--}}
{{--@if(($input2['name2'] == $result['name'] and $input2['surname2'] == $result['surname'] and $input2['pass2'] == $result['password']))--}}
{{--<!--            --><?php //return redirect('/planner')?>--}}
{{--@endif--}}
{{--@endforeach--}}
{{--@endforeach--}}
{{--@endif--}}
