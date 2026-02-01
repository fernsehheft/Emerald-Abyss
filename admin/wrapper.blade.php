<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name', 'Pterodactyl') }} - @yield('title')</title>

    @section('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    @show

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">

    <style>
        /* Critical Global Admin Overrides */
        :root {
            --accent-teal: #00d2ff;
            --accent-emerald: #10b981;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        body,
        .wrapper,
        .main-sidebar,
        .content-wrapper,
        .main-footer,
        .login-page {
            background: linear-gradient(-45deg, #020f0f, #041f1f, #010a0a, #031818) !important;
            background-size: 400% 400% !important;
            animation: gradientBG 15s ease infinite !important;
            background-attachment: fixed !important;
            font-family: 'Inter', sans-serif !important;
            color: #cad1d8 !important;
        }

        /* Force transparency on heavy elements */
        .box,
        .info-box,
        .small-box,
        .content-header,
        .main-header .navbar,
        .main-header .logo {
            background-color: transparent !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
        }

        .box-header,
        .box-footer {
            background-color: transparent !important;
        }
    </style>
</head>

</html>