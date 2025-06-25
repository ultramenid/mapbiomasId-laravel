<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/thumbnail.png') }}" type="image/x-icon">
    <title>{{ $title ?? 'Page Title'}}</title>
    @yield('meta')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    @livewireScripts
</head>

<body class="font-sans">

    @yield('content')
    @stack('scripts')


</body>
</html>
