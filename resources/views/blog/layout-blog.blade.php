<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session()->get('theme') }}" data-theme="{{ session()->get('theme') }}">

<head>
    {{-- Charset --}}
    <meta charset="UTF-8" />
    {{-- ViewPort --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- Author --}}
    <meta name="author" content="{{ env('AUTHOR_NAME') }}" />
    <link rel="author" href="https://www.facebook.com/ZY1YOGi" />
    {{-- Description --}}
    <meta name="description" content="{{ $description }}" />
    {{-- Keywords --}}
    <meta name="keywords" content="{{ $keywords }}" />
    {{-- Title --}}
    <title>{{ $title }}</title>
    {{-- Icon --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    {{-- Fonts Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" /> --}}
    {{-- Robots --}}
    <meta name="robots" content="index, follow" />
    {{-- Manifest --}}
    <link rel="manifest" href="{{ asset('manifest.json') }}" />
    {{-- Icons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.jpg') }}" />
    <link rel="icon" type="image/jpeg" sizes="16x16" href="{{ asset('favicon/16x16.jpg') }}" />
    <link rel="icon" type="image/jpeg" sizes="32x32" href="{{ asset('favicon/32x32.jpg') }}" />
    <link rel="icon" type="image/jpeg" sizes="48x48" href="{{ asset('favicon/48x48.jpg') }}" />
    <link rel="icon" type="image/jpeg" sizes="96x96" href="{{ asset('favicon/96x96.jpg') }}" />
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/512x512.png') }}" />

    {{-- Application Name --}}
    <meta name="application-name" content="{{ config('app.name') }}" />
    {{-- Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}" />
    {{-- Scripts And Styls --}}
    @livewireStyles
    @vite('resources/css/app.css')

    {{-- Color Scheme --}}
    <meta name="color-scheme" content="{{ session()->get('theme') }}" />
    {{-- Theme --}}
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0E1422" />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#E4E9F7" />
</head>

<body class="antialiased bg-body-light dark:bg-body-dark dark:text-white">
    {{ $slot }}
    {{-- @include('layouts.loader') --}}
    @livewireScripts
    @vite('resources/ts/app.ts')
</body>

</html>
