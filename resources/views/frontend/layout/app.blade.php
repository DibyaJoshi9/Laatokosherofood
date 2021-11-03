<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
       

        @include('frontend.layout.headScript')
    </head>
    <body>
        @include('frontend.layout.logo')
        {{-- {{menu('menu','frontend.layout.menu')}} --}}

        @include('frontend.layout.menu')
        @yield('main_content')
        @include('frontend.layout.footer')
        @yield('footer')
        

    </body>
    @include('frontend.layout.footScript')
    
    @include('frontend.bladeComponent.socialLogin')
</html>
