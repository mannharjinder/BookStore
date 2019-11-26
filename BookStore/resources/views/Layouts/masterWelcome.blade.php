<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('Shared.header')
<body>
@yield('content')
</body>
</html>
