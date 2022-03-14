<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
    <body x-data="{bsc:false}" x-bind:class="bsc? 'overflow-hidden':'overflow-auto'">
    <x-loading></x-loading>
    <x-navbar></x-navbar>
    @yield('content')
    @include('layouts.script')
    @yield('scripts')
    </body>
</html>