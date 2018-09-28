<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }} - @yield('title')</title>
        <link rel="icon" href="{{asset('images/favicon.png.html')}}" sizes="32x32" />

        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,700%7CCrete+Round' type='text/css' media='all' />

        <link rel="stylesheet" type="text/css" href="{{asset('css/libs/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/libs/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    </head>
    <body class="home">
        @include('inc.navbar')
           
            @yield('content')
        @include('inc.footer')

    </body>
    <html