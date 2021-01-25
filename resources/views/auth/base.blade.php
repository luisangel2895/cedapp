<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bs4.min.css') }}" rel="stylesheet">
    <title>Dashboard</title>

</head>
<body>
    @yield('content')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bs4-popper.min.js')}}"></script>
    <script src="{{asset('js/bs4.min.js')}}"></script>
</body>
</html>
