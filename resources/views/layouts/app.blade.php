<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moj sajt</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

@yield('topbar')

@include('partials._header')

<div id="app">
@yield('content')
</div>

@include('partials._footer')

<script src="{{mix('js/app.js')}}"></script>
@yield('scripts')
</body>
</html>