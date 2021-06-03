<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    @section('head')
        @include('site.layout.head')
    @show

    <body class="d-flex flex-column h-100">
        @include('site.layout.header')

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container py-5">
            @include('site.inc.messages')
            @yield('content')
        </div>
    </main>

        @include('site.layout.footer')

    @section('scripts')
         @include('site.layout.scripts')
         @yield('page-scripts')
    @show

    </body>

</html>