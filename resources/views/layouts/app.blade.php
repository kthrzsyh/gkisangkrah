<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title>@yield('title') | Landing Page</title>

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/logo.png') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    @stack('before-style')

    @include('includes.style')
    @yield('css')
    @stack('after-style')
</head>

<body>
    @include('includes.header')
    <div style="min-height: 350px;" class="bg-gray-200">@yield('content')</div>

    @include('includes.footer')

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>