<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->siteDescription }}" />

    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    
    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

    @stack('meta')

    @if ($page->production)
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80050463-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-80050463-3');
    </script>
    @endif

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body class="flex flex-col justify-between bg-top bg-cover min-h-screen bg-orange-700 text-gray-800 leading-normal font-sans" style="background-image: url('/assets/img/low-poly41.svg')">
    <header class="w-full overflow-hidden" role="banner" >
        <div class="relative">
            <div class="fixed top-0 left-0 w-full z-40 bg-orange-700 md:static  md:px-4 max-w-6xl mx-auto md:py-4 lg:px-8">
                <div class="flex items-center w-full">
                    <div class="flex felx-1 items-center">
                        <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                            <img class="h-8 md:h-10 mr-3 text-gray-100" src="/assets/img/logo-2.svg"
                                alt="{{ $page->siteName }} logo" />
                        </a>
                    </div>
    
                    <div id="vue-search" class="flex flex-auto justify-end items-center">
                        <search></search>
                    </div>
                    <div class="flex flex-1">
                        @include('_nav.menu')
    
                        @include('_nav.menu-toggle')
                    </div>
                </div>
            </div>
            <div>
                @yield('extra-header')
            </div>
        </div>
    </header>

    @include('_nav.menu-responsive')

    <main role="main" class="w-full overflow-hidden flex-auto">
        @yield('body')
    </main>

    <footer class="w-full overflow-hidden bg-white text-center text-sm mt-12 py-4" role="contentinfo">
        <ul class="flex flex-col md:flex-row justify-center list-reset">
            <li class="md:mr-2">
                &copy; Georgi</a> {{ date('Y') }}.
            </li>
            <li>
                Free Vector Design by: <a href="https://www.vecteezy.com">www.Vecteezy.com</a>
            </li>
        </ul>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>