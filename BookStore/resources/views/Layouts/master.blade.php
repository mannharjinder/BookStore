<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('Shared.header')
<body class="container body-content">
@yield('content')
</body>
</html>
