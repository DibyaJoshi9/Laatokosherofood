<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('FrontEnd.Layout.HeadScript')
    </head>
    <body>
    <header class="header">
    @include('FrontEnd.Layout.Logo')
    @include('FrontEnd.Layout.Menu')

        @include('FrontEnd.Layout.Footer')
        @include('FrontEnd.Layout.FootScript')
</header>
    </body>
</html>
