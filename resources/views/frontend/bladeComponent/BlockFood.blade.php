<section class="py-4 bg-light">
    @foreach($categories as $c)
        <div class="container">
            <div class="block-head">
                <h3>{{$c->name}}</h3>
            </div>
        <div class="carousel-sec">
            <div class="owl-carousel owl-theme no-dots custom-arrow">
                @foreach($c->subCategories as $subCategory)
                <div class="item">
                    <div class="item-product">
                        <div class="product-img">
<<<<<<< HEAD
                            <a href="/menu/categoryProduct#categoryProduct_{{$subCategory->id}}" class="stretched-link"></a>
=======
                            <a href="menu.html#categoryProduct_4" class="stretched-link"></a>
                            @if(!empty($subCategory->image))
>>>>>>> 56ccdfe7a840b5f2a5f68ee4774effed45356b06
                            <img src="{{asset('storage/'.$subCategory->image)}}" alt="{{$subCategory->name}}" class="img-fluid">
                           
                                
                            @else
                            <img src="{{asset('storage/'.setting('site.default_image'))}}" alt="{{$subCategory->name}}" class="img-fluid">

                            @endif
                            <div class="listing-meta">
                                <div class="listing-inner">
                                    <div class="list-option">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-txt border border-top-0">
                            <div class="product-txt-upper">
                                <h4 class="text-truncate">
                                    <a href="/menu/categoryProduct">{{strtoupper($subCategory->name)}}</a>
                                </h4>
                            </div>
                         
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    @endforeach
</section>