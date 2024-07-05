<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <!--navigasi-->
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-50 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">POLINDO</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Dashboard</a>
                                @else
                                    <a href="{{ route('register') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">PENDAFTARAN</a>
                                @endauth
                            </nav>
                        @endif
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="home" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
            </li>
            <li>
                <a href="programstudi" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Program Studi</a>
            </li>
            <li>
                <a href="fasilitas" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Fasilitas</a>
            </li>
            <li>
                <a href="kontak" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Kontak Kami</a>
            </li>
            </ul>
        </div>
        </div>
        </nav>
        <!--end navigasi-->
    <!--konten-->
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Hubungi Kami</h2>
            <div class="mx-auto mt-10 grid max-w-lg grid-cols-5 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-5 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5"> 
                <a href="https://wa.me/081216996388" target="blank">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="assets/img/whatsapp.png" alt="Reform">
                </a>
                <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=politeknikindonesia1@gmail.com" target="blank">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="assets/img/email.png" alt="Reform">
                </a>
                <a href="https://www.instagram.com/polindointernasionalsby/" target="blank">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="assets/img/instagram.png" alt="Reform">
                </a>
                <a href="https://www.facebook.com/@polindointernasionalsby" target="blank">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="assets/img/facebook.png" alt="Reform">
                </a>
                <a href="https://www.tiktok.com/@polindointernasionalsby" target="blank">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="assets/img/tiktok.png" alt="Reform">
                </a>
            </div>
            
        </div>
        <h2 class="text-center text-lg font-semibold leading-8 text-gray-900 mt-10">Kunjungi Kami</h2>
            <div class="text-center text-lg font-semibold leading-8 text-gray-900">
            <center>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7915.118511068788!2d112.746496!3d-7.290881000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbb93c0acf59%3A0xbba048d79d8e3c21!2sPoliteknik%20Indonesia!5e0!3m2!1sid!2sid!4v1719927745538!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
            </div>
    </div>

   

    </body>
</html>
