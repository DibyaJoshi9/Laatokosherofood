@extends('FrontEnd.Layout.app')
@section('main_content')
<section class="home-banner-sec" style="background: {{ URL::asset('assets/images/home-banner-1.jpg') }}">
    @include('FrontEnd.bladeComponent.fadeOut')
    @include('FrontEnd.bladeComponent.SearchItem')
</section>
    @include('FrontEnd.bladeComponent.BlockFood')
    @include('FrontEnd.bladeComponent.HowItWork')
    @include('FrontEnd.bladeComponent.DeliveryPromo')
@endsection