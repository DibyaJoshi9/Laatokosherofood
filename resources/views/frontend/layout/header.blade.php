<header class="header">

    @include('frontend.layout.logo')
    @include('frontend.layout.menu')
    <section class="home-banner-sec" style="background: {{ URL::asset('assets/images/home-banner-1.jpg') }}">
        @include('frontend.bladeComponent.fadeOut')
        @include('frontend.bladeComponent.SearchItem')
    </section>
        @include('frontend.bladeComponent.BlockFood')
        @include('frontend.bladeComponent.HowItWork')
        @include('frontend.bladeComponent.DeliveryPromo')
        @include('frontend.layout.footer')
        @include('frontend.layout.footScript')
        @include('frontend.bladeComponent.socialLogin')

</header>