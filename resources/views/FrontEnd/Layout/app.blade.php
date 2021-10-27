<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('FrontEnd.Layout.HeadScript')
    </head>
    <body>
        @include('FrontEnd.Layout.Logo')
        @include('FrontEnd.Layout.Menu')
        @yield('main_content')
        @include('FrontEnd.Layout.footer')
    </body>
    @include('FrontEnd.Layout.FootScript')
    @include('FrontEnd.bladeComponent.SocialLogin')
</html>
