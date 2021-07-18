<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title>@yield('title') | Admin </title>

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/logo.png') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    @stack('before-style')

    @include('includes.style')

    @stack('after-style')
</head>

<body>
    @include('includes.headerAdmin')

    @yield('content')


    @stack('before-script')

    @include('includes.script')

    @stack('after-script')
</body>

</html>