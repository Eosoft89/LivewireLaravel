<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @livewireStyles    <!--Necesario para trabajar con livewire-->
</head>
<body>
    @yield('content')
    @livewireScripts <!--Necesario para trabajar con livewire-->
</body>
</html>