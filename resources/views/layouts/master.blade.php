<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="{{ $getTheme() }}" data-theme="{{ $getTheme() }}">

<head>
    {{-- Charset --}}
    <meta charset="UTF-8" />
    {{-- ViewPort --}}
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- Google Verification --}}
    <meta name="google-site-verification" content="wZO1kaaUlZm8cLkM3C_dSzZu_XEW4XNbS7D_Xmjwpw4" />
    {{-- Title --}}
    <title>{{ $title }}</title>
    {{-- Author --}}
    <meta name="author" content="Youssef Amjad (YOGi)" />
    {{-- Description --}}
    <meta name="description" content="{{ $description }}" />
    {{-- Keywords --}}
    <meta name="keywords" content="{{ $keywords }}" />
    {{-- Meta OG --}}
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:image" content="{{ $image }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    {{-- Meta Twitter --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@ZYYOGi" />
    <meta name="twitter:description" content="{{ $description }}" />
    <meta name="twitter:image" content="{{ $image }}" />
    <meta name="twitter:title" content="{{ $title }}" />
    {{-- Robots --}}
    <meta name="robots" content="index, follow" />
    {{-- Favicon Icon --}}
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" type="image/x-icon" />
    {{-- Fonts Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" />
    {{-- Manifest --}}
    <link rel="manifest" href="{{ asset('manifest.json') }}" />
    {{-- Icons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.jpg') }}" />
    <link rel="icon" type="image/jpeg" sizes="16x16" href="{{ asset('images/favicon/16x16.jpg') }}" />
    <link rel="icon" type="image/jpeg" sizes="32x32" href="{{ asset('images/favicon/32x32.jpg') }}" />
    <link rel="icon" type="image/jpeg" sizes="48x48" href="{{ asset('images/favicon/48x48.jpg') }}" />
    <link rel="icon" type="image/jpeg" sizes="96x96" href="{{ asset('images/favicon/96x96.jpg') }}" />
    {{-- <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/favicon/512x512.png') }}" /> --}}

    {{-- Application Name --}}
    <meta name="application-name" content="{{ config('app.name') }}" />
    {{-- Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- FontAwesome --}}
    @vite('resources/css/FontAwesome/FontAwesome.min.css')
    {{-- Styls --}}
    @vite('resources/css/app.css')

    {{-- Color Scheme --}}
    <meta name="color-scheme" content="{{ $getTheme() }}" />
    {{-- Theme --}}
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0E1422" />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#E4E9F7" />
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J2RVBDW');
    </script>
</head>

<body class="antialiased bg-body-light dark:bg-body-dark dark:text-white">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J2RVBDW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{ $slot }}

    @include('layouts.loader')

    {{-- Scripts --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/ts/app.ts')
</body>

</html>
