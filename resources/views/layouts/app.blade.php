<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
    <body>
    <x-loading></x-loading>
    @yield('content')
    @include('layouts.script')
    </body>
</html>