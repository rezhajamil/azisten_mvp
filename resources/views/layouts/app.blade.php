<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
    <body>
    <x-loading></x-loading>
    <x-navbar></x-navbar>
    @yield('content')
    @include('layouts.script')
    </body>
</html>