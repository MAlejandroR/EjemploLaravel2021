<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    <x-layout.cabecera class="h-15v bg-enlaces"/>


    <x-layout.menu class="h-10v bg-gray-200"/>
    <main class="h-65v bg-yellow-100">
        @yield("contenido")
    </main>
    <x-layout.footer class="h-10v bg-green-600"/>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
