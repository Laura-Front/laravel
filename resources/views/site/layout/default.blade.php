<!doctype html>
<html lang="en" class="h-100">
    @section('head')
        @include('site.layout.head')
    @show

    <body class="d-flex flex-column h-100">
    {{--@section('header')--}}
        @include('site.layout.header')
    {{--@show--}}

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container py-5">
            @include('site.inc.messages')
            @yield('content')
        </div>
    </main>

    {{--@section('footer')--}}
        @include('site.layout.footer')
    {{--@show--}}

    @section('scripts')
         @include('site.layout.scripts')
         @yield('page-scripts')
    @show

    </body>

</html>