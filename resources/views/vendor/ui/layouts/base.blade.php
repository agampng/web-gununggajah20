<!DOCTYPE html>
<html>
<head>
    <title>@yield('site.title')</title>

    <meta charset="UTF-8"/>
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    @stack('meta')
    <link rel="shortcut icon" href="{{ asset('img/klaten-logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('semantic/semantic.min.css', 'laravolt') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/all.css', 'laravolt') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}"/>
    @guest
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @endguest
    @stack('style')
    @stack('head')
    {!! Assets::group('laravolt')->css() !!}
    {!! Assets::css() !!}
</head>

<body data-theme="{{ config('laravolt.ui.sidebar_theme') }}" class="{{ $bodyClass ?? '' }}">

@yield('body')

<script type="text/javascript" src="{{ mix('js/all.js', 'laravolt') }}"></script>
{!! Assets::group('laravolt')->js() !!}
{!! Assets::js() !!}
@stack('script')
@stack('body')
</body>
</html>
