<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
    <body>
    <x-loading></x-loading>
    <x-navbar nav=$nav></x-navbar>
    @yield('content')
    @include('layouts.script')
    </body>
</html>