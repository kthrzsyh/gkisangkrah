<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title>@yield('title') | Landing Page</title>
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/logo.png') }}">
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    @include('includes.header')
    @yield('content')
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>