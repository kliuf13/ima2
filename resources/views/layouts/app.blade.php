<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<title>{{$title}} | {{config('app.name', 'IMA')}}</title>--}}
    {{--<meta name="description" content="{{$description}}">--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('inc.navbar')
    @yield('content')
</body>
</html>
