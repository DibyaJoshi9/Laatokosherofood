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
                            <a href="menu.html#categoryProduct_4" class="stretched-link"></a>
                            <img src="{{asset('storage/'.$subCategory->image)}}" alt="{{$subCategory->name}}" class="img-fluid">
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