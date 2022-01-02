<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Azisten adalah sebuah platform yang menghubungkan antara mahasiswa dan pemilik 
kos. Dengan fitur yang kami miliki, mahasiswa dapat mencari kos yang sesuai dengan
preferensi mereka. Selain itu kami juga menyediakan beberapa fitur yang membantu 
mahasiswa dalam memenuhi kebutuhan lainnya">
        <meta name="author" content="Azisten">
        <link rel="icon" href="{{ asset("images/logo_azisten_icon.svg") }}">
        <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
        <link rel="stylesheet" href="{{ asset("css/theme.css") }}">
        <link rel="stylesheet" href="{{ asset("css/styles.css") }}">
        <link rel="stylesheet" href="{{ asset("vendor/wow/animate.css") }}">
        <link rel="stylesheet" href="{{ asset("vendor/owl-carousel/dist/assets/owl.carousel.min.css") }}">
        <link rel="stylesheet" href="{{ asset("vendor/owl-carousel/dist/assets/owl.theme.default.min.css") }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap');</style>
        <style>@import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');</style>
        <script src="https://kit.fontawesome.com/b2ba1193ce.js" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>{{ $title??"" }}AZISTEN-Startup Pencarian Kos di Medan</title>
    </head>
    <body>
    <x-loading></x-loading>
    <x-navbar></x-navbar>
    @yield('content')
    @include('layouts.script')
    </body>
</html>