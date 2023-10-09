<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="SMPN 2 PAGUYANGAN">
    <title>{{ $title }}</title>



    <link rel="shortcut icon" href="{{ asset(getWebConfiguration()->logo) }}" type="image/x-icon">

    <style>
        :root{
            --primary: {{ getWebConfiguration()->theme_color }};
        }
    </style>
    <link rel="stylesheet" href="{{ asset('frontend/css/app.css') }}?v={{ uniqid() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}?v={{ uniqid() }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    @stack('plugin-styles')

    @stack('styles')

</head>

<body>

    <x-frontend.navbar />

    {{ $slot }}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('frontend/js/app.js') }}?v={{ uniqid() }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}?v={{ uniqid() }}"></script>

    @stack('plugin-scripts')

    @stack('custom-scripts')

</body>

</html>
