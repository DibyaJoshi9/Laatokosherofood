<header class="header">
    @include('FrontEnd.Layout.Logo')
    @include('FrontEnd.Layout.Menu')
    <section class="home-banner-sec" style="background: {{ URL::asset('assets/images/home-banner-1.jpg') }}">
        @include('FrontEnd.bladeComponent.fadeOut')
        @include('FrontEnd.bladeComponent.SearchItem')
    </section>
        @include('FrontEnd.bladeComponent.BlockFood')
        @include('FrontEnd.bladeComponent.HowItWork')
        @include('FrontEnd.bladeComponent.DeliveryPromo')
        @include('FrontEnd.Layout.Footer')
        @include('FrontEnd.Layout.FootScript')
        @include('FrontEnd.bladeComponent.SocialLogin')

</header>