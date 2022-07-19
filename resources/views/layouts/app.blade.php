@props(['scripts'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/magnific-popup.css">
        <link rel="stylesheet" href="/css/nouislider.min.css">
        <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="/css/paymentfont.min.css">
        <link rel="stylesheet" href="/css/main.css">

        <link rel="icon" type="/image/png" href="/icon/favicon-32x32.png" sizes="32x32">
        <link rel="/apple-touch-icon" href="/icon/favicon-32x32.png">

        <meta name="description" content="Digital marketplace HTML Template by Dmitry Volkov">
        <meta name="keywords" content="">
        <meta name="author" content="Dmitry Volkov">
        <title>GoGame – Digital marketplace HTML Template</title>
        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

        <!-- Fonts -->


        <!-- Scripts -->

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />


            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        @stack('modals')

        @livewireScripts
        @if ($scripts === 'true')
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    <script src="/js/jquery-3.5.1.min.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/wNumb.js"></script>
	<script src="/js/nouislider.min.js"></script>
	<script src="/js/jquery.mousewheel.min.js"></script>
	<script src="/js/jquery.mCustomScrollbar.min.js"></script>
	<script src="/js/main.js"></script>
    </body>
</html>
