<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<div class="innner-content-sec pb-5">
    <section class="inner-banner" style="background: url(/assets/images/home-banner-1.jpg);">
        <div class="container">
            <div class="inner-banner-content">
                <h2>Laatokoshero Food Menu</h2>
                <!-- <p>Your food here</p> -->
            </div>
        </div>
    </section>

    <section class="breadcum-sec border-bottom pb-1 pt-4 mb-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Categories</a></li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="menu-sec">
        <div class="container">
            <!-- <div class="inner-block-head">
                <h3>Menu</h3>
            </div> -->
            <div class="row g-4">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="categ-sec sticky-top-custom">
                        <h4 class="block-title">Categories</h4>
                        <div class="menu-list">
                            <div class="accordion accordion-custom" id="accordion_pc">
                         
                                @foreach($categories as $category)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="header_pc_1">
                                        <a class="accordion-button col-btn collapsed p-category" href="#categoryProduct_1" data-bs-toggle="collapse" data-bs-target="#collapse_pc_1" aria-expanded="false" aria-controls="collapse_pc_1">
                                            {{strtoupper($category->name)}}
                                        </a>
                                    </h2>
                                    @if($category->childrenrecursive != null)
                                    <div id="collapse_pc_1" class="accordion-collapse collapse" aria-labelledby="header_pc_1" data-bs-parent="#accordion_pc">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="#categoryProduct_4" class="c-category">BREAKFAST</a></li>
                                                <li><a href="#categoryProduct_5" class="c-category">VEG STARTER</a></li>
                                                <li><a href="#categoryProduct_6" class="c-category">NON-VEG STARTER</a></li>
                                                <li><a href="#categoryProduct_7" class="c-category">MOMO</a></li>
                                                <li><a href="#categoryProduct_8" class="c-category">CHOWMEIN</a></li>
                                                <li><a href="#categoryProduct_9" class="c-category">FRIED RICE</a></li>
                                                <li><a href="#categoryProduct_10" class="c-category">PIZZA</a></li>
                                                <li><a href="#categoryProduct_11" class="c-category">SANDWICH</a></li>
                                                <li><a href="#categoryProduct_12" class="c-category">KHAJA SET </a></li>
                                                <li><a href="#categoryProduct_13" class="c-category">KHANA SET</a></li>
                                                <li><a href="#categoryProduct_14" class="c-category">CONTINENTAL MAIN COURSE</a></li>
                                                <li><a href="#categoryProduct_46" class="c-category">soup</a></li>
                                                <li><a href="#categoryProduct_48" class="c-category">Burger</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                @endforeach
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="header_pc_47">
                                        <a class="accordion-button p-category" href="#categoryProduct_47">
                                            Delivery Charge
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div><!-- ends menu-list -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="food-sec">
                        <div class="food-search-head mb-3 sticky-top-custom">
                            <div class="dropdown  d-lg-none mb-2 mobile-menu-sec">
                                <button class="btn btn-mm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Category<i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="accordion accordion-custom" id="accordion_pc_m">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="header_pc_m_1">
                                                <a class="accordion-button col-btn collapsed p-category m-view dc-cate" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_pc_m_1" aria-expanded="false" aria-controls="collapse_pc_m_1">
                                                    FOOD
                                                </a>
                                            </h2>
                                            <div id="collapse_pc_m_1" class="accordion-collapse collapse" aria-labelledby="header_pc_m_1" data-bs-parent="#accordion_pc_m">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li><a href="#categoryProduct_4" class="c-category m-view">BREAKFAST</a></li>
                                                        <li><a href="#categoryProduct_5" class="c-category m-view">VEG STARTER</a></li>
                                                        <li><a href="#categoryProduct_6" class="c-category m-view">NON-VEG STARTER</a></li>
                                                        <li><a href="#categoryProduct_7" class="c-category m-view">MOMO</a></li>
                                                        <li><a href="#categoryProduct_8" class="c-category m-view">CHOWMEIN</a></li>
                                                        <li><a href="#categoryProduct_9" class="c-category m-view">FRIED RICE</a></li>
                                                        <li><a href="#categoryProduct_10" class="c-category m-view">PIZZA</a></li>
                                                        <li><a href="#categoryProduct_11" class="c-category m-view">SANDWICH</a></li>
                                                        <li><a href="#categoryProduct_12" class="c-category m-view">KHAJA SET </a></li>
                                                        <li><a href="#categoryProduct_13" class="c-category m-view">KHANA SET</a></li>
                                                        <li><a href="#categoryProduct_14" class="c-category m-view">CONTINENTAL MAIN COURSE</a></li>
                                                        <li><a href="#categoryProduct_46" class="c-category m-view">soup</a></li>
                                                        <li><a href="#categoryProduct_48" class="c-category m-view">Burger</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="header_pc_m_2">
                                                <a class="accordion-button col-btn collapsed p-category m-view dc-cate" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_pc_m_2" aria-expanded="false" aria-controls="collapse_pc_m_2">
                                                    BEVERAGE
                                                </a>
                                            </h2>
                                            <div id="collapse_pc_m_2" class="accordion-collapse collapse" aria-labelledby="header_pc_m_2" data-bs-parent="#accordion_pc_m">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li><a href="#categoryProduct_15" class="c-category m-view">Drinks</a></li>
                                                        <li><a href="#categoryProduct_16" class="c-category m-view">WINE RED</a></li>
                                                        <li><a href="#categoryProduct_17" class="c-category m-view">WHITE WINE</a></li>
                                                        <li><a href="#categoryProduct_18" class="c-category m-view">BEER</a></li>
                                                        <li><a href="#categoryProduct_19" class="c-category m-view">NON ALCOHOLIC DRINKS</a></li>
                                                        <li><a href="#categoryProduct_20" class="c-category m-view">REAL JUICE </a></li>
                                                        <li><a href="#categoryProduct_28" class="c-category m-view">CIGRATE </a></li>
                                                        <li><a href="#categoryProduct_31" class="c-category m-view">Imported Whiskey</a></li>
                                                        <li><a href="#categoryProduct_32" class="c-category m-view">Hukka</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="header_pc_m_3">
                                                <a class="accordion-button col-btn collapsed p-category m-view dc-cate" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_pc_m_3" aria-expanded="false" aria-controls="collapse_pc_m_3">
                                                    BAKERY
                                                </a>
                                            </h2>
                                            <div id="collapse_pc_m_3" class="accordion-collapse collapse" aria-labelledby="header_pc_m_3" data-bs-parent="#accordion_pc_m">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li><a href="#categoryProduct_21" class="c-category m-view">BIRTHDAY CAKE</a></li>
                                                        <li><a href="#categoryProduct_22" class="c-category m-view">PASTRIES ITEM </a></li>
                                                        <li><a href="#categoryProduct_23" class="c-category m-view">TART</a></li>
                                                        <li><a href="#categoryProduct_24" class="c-category m-view">COOKIES </a></li>
                                                        <li><a href="#categoryProduct_50" class="c-category m-view">candel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="header_pc_m_29">
                                                <a class="accordion-button p-category m-view" href="#categoryProduct_29">SPECIAL ITEMS</a>
                                            </h2>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="header_pc_m_30">
                                            </h2>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="header_pc_m_33">
                                                <a class="accordion-button p-category m-view" href="#categoryProduct_33">LAATOKOSHERO COMBO </a>
                                            </h2>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="header_pc_m_47">
                                                <a class="accordion-button p-category m-view" href="#categoryProduct_47">Delivery Charge</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="text" id="searchInput" class="form-control" placeholder="Food Search" aria-label="Food Search" aria-describedby="button-addon2">
                                <button class="btn btn-custom" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </div><!--  ends food-search-head -->
                        <div class="foods-listing-sec">
                            <div class="item-food-list">
                                <div class="search-p-div">
                                    <div class="food-list-head" id="categoryProduct_1">
                                        <h4>FOOD</h4>
                                        <!-- <span>Some Text if neeeded</span> -->
                                    </div><!-- ends food-list-head -->


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_4">
                                        <h5>BREAKFAST</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202106201514160358chana.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Nepali Breakfast </p>
                                                    <span>(Kaalochana, boiled egg, juice)</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 199.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181257049958american bf.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>American Breakfast </p>
                                                    <span>(French toast,fried egg, grilled sausage,sauttedpotato,juice) </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181303488509american bf.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Continental Breakfast </p>
                                                    <span>(Plain omelet, pork becon grilled sausage,sauttedmushroom,Toastedbread,juice)</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181319366381puriii.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Indian Breakfast </p>
                                                    <span>(puri,tarkari,boiled egg, juice)</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 249.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Indian Breakfast </p>
                                                    <span>Masala omelet with toasted bread butter/jam </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 199.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Indian Breakfast </p>
                                                    <span>Cheese omelet with toasted bread butter/jam</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 219.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Continental Breakfast</p>
                                                    <span>Grilled fish with lemon butter sauce and sauteed veg</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 449.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_5">
                                        <h5>VEG STARTER</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181353119095sweet corn boiled.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Sweet Corn Boiled</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 249.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181355031159sweet corn fried.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Sweet Corn Fried </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 279.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181324376874chips-chilli-vegan-marinated.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chips Chilli </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 219.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181327386128French-Fries.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Fingers Chip </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 199.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181347194474paneer chilli.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Paneer Chilli </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181344457666mushroom chilli.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mushroom Chilli </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 249.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181350203237Piroo Aloo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Piro Aloo</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 199.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011013457416veg_starter1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Cheese Ball </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011013457416veg_starter1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mixed Vegetable</p>
                                                    <span>Mixed Vegetable</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 199.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_6">
                                        <h5>NON-VEG STARTER</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181419371703chixchillibl.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Chilly W/B</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181418412001chixchillibl.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Chilly B/L</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Fried W</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 319.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181423543101chixfry.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Fried W/B</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 319.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181452041038Spicy-Chicken_0008-150x150@2x.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Crispy Chicken </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181819249993wings choila.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Wings Choyela </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181421407634Chicken-choila.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Choyela </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181427214869sadheko.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Sadheko </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181514088007pakku.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mutton Pakku </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 799.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181519597548mutton vuna.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mutton Vuna </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 599.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181518179630mutton tass.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mutton Taas Set </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 799.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181508591690mutton bhutan.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mutton Bhuttan </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 219.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181522561799pangra.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Pangra Fry </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181413219598buff sukuti.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Buff Sukuti Sandheko </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 499.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181526132572porkdameko.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Pork Dameko </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181528385725porksadheko.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Pork Sandheko </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181757285099sausage chilli.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Sausage Chilly </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181454150583fish finger.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Fish Finger </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181457536549garlic grilled prawn.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Garlic Grilled Prawn </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 899.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181531129973grilled prawn.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Prawn Chilly </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 899.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181504564271grilled trout.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Grilled Trout</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 799.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181536328537roasted trout.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Roasted Trout </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 799.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103181807118623sausage fry.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Sausage Fry</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011020248475non_veg staarter.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Paneer Biryani </p>
                                                    <span>Paneer Biryani </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 379.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011020248475non_veg staarter.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mozzarella Cheese stick</p>
                                                    <span>Mozzarella Cheese stick</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 449.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011020248475non_veg staarter.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Sasuage</p>
                                                    <span>Chicken Sasuage</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 80.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011020248475non_veg staarter.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Butter Chicken Masla With Plain Rice</p>
                                                    <span>Butter Chicken Masla With Plain Rice</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_7">
                                        <h5>MOMO</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103190956183048chix momo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Momo (Steam)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 249.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103190952453517chicken fry momo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Momo (Fried)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 259.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103190954502378chix jol momo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Momo (Jhol)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 269.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103190945117127chicken cilli momo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Momo (Chilly)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 279.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103190949450933choila momo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Momo (Choyala)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 279.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103190958034439chix momo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Momo (Steam)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 199.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103190957167532chicken fry momo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Momo (Fried)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 209.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103190957435687chix jol momo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Momo (Jhol)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 219.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103190956409501chicken cilli momo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Momo (Chilly)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 229.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103190956574251choila momo.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Momo (Choyala)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 229.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011043592965momo1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Buff Jhol MoMo</p>
                                                    <span>Buff Jhol MoMo</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 249.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011043592965momo1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Buff momo</p>
                                                    <span>Buff momo</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 229.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_8">
                                        <h5>CHOWMEIN</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103191014279872veg chow.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Chowmean </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 199.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103191010099895chix chow.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Chowmean </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 249.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103191012198429mix chow.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mixed Chowmean </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011033433072chowmein1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Buff Chowmein </p>
                                                    <span>Buff Chowmein </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 249.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_9">
                                        <h5>FRIED RICE</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103211741164821veg fried rice.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Fried Rice </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 249.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103191017028871Chicken-Fried-Rice.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Fried Rice </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103211739247217mutton fried rice.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mutton Fried Rice </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 499.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011039221276fryrice1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Buff Fried Rice </p>
                                                    <span>Buff Fried Rice
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 279.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011039221276fryrice1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Egg Fried Rice</p>
                                                    <span>Egg Fried Rice</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 279.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_10">
                                        <h5>PIZZA</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103220810243139Mini-Margharita-Pizzas.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Margherita Pizza </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103220812546555mushroom pizza.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mushroom Pizza </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103211751192016chix pizza.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Pizza </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103211743335310bbq chix pizza.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>B.B.Q Chicken Pizza </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011044393348pizza1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Cheese Pizza </p>
                                                    <span>Cheese Pizza
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011044393348pizza1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Pizza</p>
                                                    <span>Veg Pizza
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011044393348pizza1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Extra cheese</p>
                                                    <span>Extra cheese</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 50.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_11">
                                        <h5>SANDWICH</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103231903534165Veg-Sandwichh.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Sandwich </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 199.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103220816527571cheese-sandwich.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Cheese Sandwich </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 279.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103231855343869chix sand.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Sandwich </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 289.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103231859041369club sandwich.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Club Sandwich </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202103231902438215tuna sand.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Tuna Sandwich </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 319.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_12">
                                        <h5>KHAJA SET </h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Khaja </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Local Chicken Khaja </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mutton Khaja </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 499.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Fish Khaja </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011048387055nepali-khaja-set.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Curry with rice</p>
                                                    <span>Chicken Curry with rice</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011048387055nepali-khaja-set.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Egg Curry With Rice</p>
                                                    <span>Egg Curry With Rice
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011048387055nepali-khaja-set.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mutton Curry With Rice</p>
                                                    <span>Mutton Curry With Rice
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 499.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011048387055nepali-khaja-set.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mushroom Curry With Rice</p>
                                                    <span>Mushroom Curry With Rice

                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011048387055nepali-khaja-set.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Egg Curry Without Rice</p>
                                                    <span>Egg Curry Without Rice
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011048387055nepali-khaja-set.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mutton Curry Without Rice</p>
                                                    <span>Mutton Curry Without Rice
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011048387055nepali-khaja-set.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Curry Without Rice</p>
                                                    <span>Chicken Curry Without Rice
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011048387055nepali-khaja-set.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mushroom Curry Without Rice</p>
                                                    <span>Mushroom Curry Without Rice
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 249.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011048387055nepali-khaja-set.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Tawa Roti </p>
                                                    <span>Tawa Roti</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 25.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_13">
                                        <h5>KHANA SET</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Khana </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Local Chicken Khana </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mutton khana </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 499.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Fish Khana </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011057369483khana set1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Fish Curry </p>
                                                    <span>Fish Curry </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_14">
                                        <h5>CONTINENTAL MAIN COURSE</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Ala king with pasta</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 499.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Grilled chicken with chips and pappar sauce</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 449.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Vegetables Au gratin with pasta</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011106305118main continental course.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Ala King With Pasta</p>
                                                    <span>Chicken Ala King With Pasta</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 499.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011106305118main continental course.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Grilled Chicken With Chips And Pepper Sause</p>
                                                    <span>Grilled Chicken With Chips And Pepper Sause</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 449.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011106305118main continental course.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Grilled Fish With Lemon Butter Sauce And Sautted Veg</p>
                                                    <span>Grilled Fish With Lemon Butter Sauce And Sautted Veg
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 449.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011106305118main continental course.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Vegetable Au Gratin With Pasta</p>
                                                    <span>Vegetable Au Gratin With Pasta
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_46">
                                        <h5>soup</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Leg Soup</p>
                                                    <span>soup</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 199.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mutton Jhol </p>
                                                    <span>Mutton Jhol </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 649.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_48">
                                        <h5>Burger</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mixed Burger</p>
                                                    <span>Mixed Burger</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Burger</p>
                                                    <span>Chicken Burger
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 299.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Buff Burger</p>
                                                    <span>Buff Burger
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 279.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Burger</p>
                                                    <span>Veg Burger
                                                    </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 199.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- parent category self product list -->
                                </div>

                                <div class="search-p-div">
                                    <div class="food-list-head" id="categoryProduct_2">
                                        <h4>BEVERAGE</h4>
                                        <!-- <span>Some Text if neeeded</span> -->
                                    </div><!-- ends food-list-head -->


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_15">
                                        <h5>Drinks</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041142397667ODRegular.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>O D Regular (Qtr)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 635.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041142005375ODRegular.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>O D Regular (Half)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 1265.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041141210422ODRegular.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>O D Regular (Full)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 2525.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041130224115BlackChimmney.PNG">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Black Chimney (Qtr)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 840.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041129236501BlackChimmney.PNG">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Black Chimney (Half)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 1675.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041128452999BlackChimmney.PNG">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Black Chimney (Full)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 3350.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041135285120Khukurirum.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Khukuri Rum (Qtr)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 465.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041134558292Khukurirum.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Khukuri Rum (Half)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 925.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041134185990Khukurirum.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Khukuri Rum (Full)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 1850.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041150305857Signature.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Signature Red (Qtr)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 535.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041147015977Signature.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Signature Red (Half)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 1070.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041146170102Signature.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Signature Red (Full)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 2140.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/2021070411251799218848full2.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>8848 Vodka (Qtr)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 485.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/2021070411244302118848full2.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>8848 Vodka (Half)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 965.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/2021070411220989638848full2.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>8848 Vodka (Full)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 1925.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202110101452487287bandipurscotchwhiskey.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Bandipur Scotch Whiskey (Full)</p>
                                                    <span>Bandipur Scotch Whiskey</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 4400.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202110101455327771gurkhasandguns.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Gurkhas &amp; Guns Blended Whiskey (Full)</p>
                                                    <span>Gurkhas &amp; Guns Blended Whiskey</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 2850.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_16">
                                        <h5>WINE RED</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041206328248Bigmasterred.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Bigmaster Red Wine </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 800.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Vin Sera</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 2100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041212172975jacob&#039;sred.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Jacob Creek </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 1850.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Vin De Brodeaux</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 2200.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Sol De Chile </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 1900.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011118494802big master.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Lindemans Bin Red</p>
                                                    <span>Lindemans Bin Red</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 1950.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_17">
                                        <h5>WHITE WINE</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041213200682jacob&#039;swhite.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Jacob Creek</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 1850.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041215136556jacob&#039;swhite.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Jacob Greek Chardonnay </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 2400.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Lindemans Bin99</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 2900.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_18">
                                        <h5>BEER</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041305187637gorkha.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Gorkha Strong (Case)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 3420.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041229046862carlsbergcase.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Carlsberg (Case) </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 5100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041317590482tuborgcase.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Tuborg (Case) </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 4680.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/20210704121732921612singhe.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Barasinghe (Case) </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 4140.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041304092827gorkha.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Gorkha Strong (Bottle)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 310.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041228233408caelsberg.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Carlsberg (Bottle)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 465.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041317163828Tuborg_650ml.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Tuborg (Bottle)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 425.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/20210704121652277212singhe.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Barasighe (Bottle)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 375.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041408398934warsteiner.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Warsteiner(Bottle)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 425.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041409275601warsteinercase.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Warsteiner(Case)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 4680.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041310508177namaste.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Namaste(Bottle)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 360.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041311349632namaste.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Namaste(Case)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 3960.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011131494158beer.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Foster&#039;s (Bottle)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 305.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011131494158beer.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Foster&#039;s (Case)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 3600.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041232112609corona.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Corona(Bottle)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 395.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041233419891corona.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Corona(Case)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 8640.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011131494158beer.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Arna Premium 330ml </p>
                                                    <span>Arna Premium 330ml </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 190.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011131494158beer.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Arna Premium 650ml</p>
                                                    <span>Arna Premium 650ml</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 385.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011131494158beer.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Arna Premium 330ml</p>
                                                    <span>Arna Premium 330ml for 1 Case</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 3840.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011131494158beer.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Arna Premium 650ml </p>
                                                    <span>Arna Premium 650ml for 1 Case</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 4200.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011131494158beer.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Arna Strong 650ml</p>
                                                    <span>Arna Strong 650ml </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 325.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011131494158beer.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Arna Strong 650ml</p>
                                                    <span>Arna Strong 650ml for 1 Case</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 3600.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011131494158beer.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Nepal Ice</p>
                                                    <span>Nepal Ice Beer per bottle</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 300.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011131494158beer.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Nepal Ice</p>
                                                    <span>Nepal Ice per Case</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 3480.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_19">
                                        <h5>NON ALCOHOLIC DRINKS</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041421112204coke.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Coke Pet Bottle</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041422241836sprite-500ml.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Sprite Pet Bottle</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041423047800Royal-Club-Tonic-Water-330ML.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Tonic Water Can</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 150.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041421472535soda.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Soda Pet Bottle</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 80.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mineral Water</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 45.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041423458693zerocoke.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Zero Coke Pet Bottle</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 180.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011140358440non-alcoholic-beverages-1509600389-3428608.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Fanta 500ml</p>
                                                    <span>Fanta 500ml</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011140358440non-alcoholic-beverages-1509600389-3428608.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Jumbo Sprite </p>
                                                    <span>Jumbo Sprite </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 350.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_20">
                                        <h5>REAL JUICE </h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041436102479Real-Fruit-Power-Cranberry-Juice-1606389562-10009765-1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Cranberry Real Juice </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 450.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/20210704143806535671Pp34rW31S._SL1500_.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Orange Real Juice</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 450.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041436435928download.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mango Real Juice</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 450.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/2021070414400772753-1583407488.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Pineapple Real Juice </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 450.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041437325826real-mixed-fruit-juice-500x500.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mix Real Juice</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 450.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041433165299real-apple-fruit-juice-500x500.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Apple Real Juice</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 450.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_28">
                                        <h5>CIGRATE </h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041442474206Surya-Red-cigarette-1-pack-1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Cigrate (Red /white)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 350.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011148538876cigrate.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Surya (Red /White)</p>
                                                    <span>Surya (Red /White)</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 25.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_31">
                                        <h5>Imported Whiskey</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041512147658247118992439145559209037489112306894296484123.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Jack Daniels(1 ltrs)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 7500.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041452442618glvob.12yov1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Glenlevit(1 ltrs)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 9500.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041449560192Chivas-Regal-12-YO-Blended-Scotch-Whisky-70cl.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chivas Regal 12 Yrs(1 ltrs)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 8250.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041447214313JW-BLACK-LABEL-1-LTR-5f9d6b866ff06.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Black Label(1 ltrs)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 8150.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041514120605download.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Red Label(1 ltrs)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 6450.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041528466756download(1).jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>VAT 69(1 ltrs)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 5700.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202102191130274459Absolute Vodka.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Absolute Vodka(1 ltrs)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 6500.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_32">
                                        <h5>Hukka</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041553368670flavour.jpeg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Hukka Flavour(Any)</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 250.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041549553543Forty-Four-instant-hookah-coal-rings-e1532191625528.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Hukka Coil</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 170.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- parent category self product list -->
                                </div>

                                <div class="search-p-div">
                                    <div class="food-list-head" id="categoryProduct_3">
                                        <h4>BAKERY</h4>
                                        <!-- <span>Some Text if neeeded</span> -->
                                    </div><!-- ends food-list-head -->


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_21">
                                        <h5>BIRTHDAY CAKE</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202106301148026293bf cake resize.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Black Forest Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 680.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041817281543white-forest.jpeg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>White Forest Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 680.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041848369063ChocolateCake.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chocolate Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 680.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041843220062RedVelvetCake.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Red Valvet Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 735.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041634396430trufflecake.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chocolate Truffel Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 850.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041735477861Pineapple-Cake-Five-Star-A.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Pineapple Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 750.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041813195500fresh-vanilla-cake_1.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Vanila Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 750.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041611434022blueberry-cheese-cake-cake1746blue-A.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Blueberry Cheese Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 960.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041754411680red-velvet-cheese-cake.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Red Valvet Cheese Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 960.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041716533912eggless-black-forest-500x500.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Egg Less Black Forest Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 750.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041732141689white-forest-small.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Egg Less White Forest Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 750.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041721365814eggless-chocolate-cake-9911160ca_0.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Egg Less Chocolate Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 750.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202108191118255842food.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>sdf</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 680.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_22">
                                        <h5>PASTRIES ITEM </h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051256354616MiniChocolatePastry@45.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mini Chocolate Pastries</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 45.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051253573936MiniPineapplePastry@45.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mini Pineapple Pasries </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 45.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051255024302MiniMangoPastry@45.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mini Mango Pastries </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 45.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Coconut Pastreis </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 45.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051257485577MangoPastryBig@100.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mango Pastries Big </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051335161905tiramusi.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Tiramisu Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 190.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051303540267RedVelvetPastry@85.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Red Valvet Pastries </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 85.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/20210704182834457467.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Butter Scotch Pastries </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 75.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051324346727StrawberryPastry@75.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Strawberry Pastries </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 75.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051301044670LemonYogurtCake@90.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Lemon Yougart Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 90.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chocolate Nemesis</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 105.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051326012007WhiteForestPastry@120.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>White Forest Pastries </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 120.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/2021070418232425273505-black-forest-pastry.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Black Forest Pastries </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 120.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041831291725ferrero-rocher-chocolate-truffle-past0160choc-A.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chocolate Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 120.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051302213754RedVelvetCheeseCake@145.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Red Valvet Cheese Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 145.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041825569324267-2679575_panna-cotta-transparent-blueberry-cheesecake-png-png-download.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Blueberry Cheese Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 160.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107041850264956ChocolateTruffelCake@160.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chocolate Truffel Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 160.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051330244057BakedCheeseCake@230.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Baked Cheese Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 230.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202110101500238498HempBrowne@160.png">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Hemp Browne </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 160.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Banana and Choco Pastry </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 80.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051328221677WalnutBrowne@150.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Walnut Browne </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 150.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_23">
                                        <h5>TART</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011207522717chocolate_tart.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Pineapple Tart </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 40.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011207522717chocolate_tart.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Blueberry Tart </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 40.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011207522717chocolate_tart.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chocolate Tart </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 40.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011207522717chocolate_tart.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Coconut Tart </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 40.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Apple Pie </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 45.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Apple Crumble </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 105.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_24">
                                        <h5>COOKIES </h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Peanuts Macrron Cookies </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Peanuts Butter Cookies </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 135.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Vanilla Cookies </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 115.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051348296269ButterflyCookies@90.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Butterfly Cookies </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 90.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Caramel Cookies </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 125.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051355415296ChocolateCookies@115.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chocolate Cookies </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 115.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chocolate Chips Cookies </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 135.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Coconut Macron Cookies</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 120.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mini Puff</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 85.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Coconut Roll</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 55.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Cinnamon Roll</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 50.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chocolate Rulade </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 55.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051343123887BurgerBon@35.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Burger Bon</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 35.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Egg Less Cookies </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 135.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051337528864BananaCake@100.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Banana Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051350208663CarrotCake@100.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Carrot Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mini Fruit Cake </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051353509683MiniCrossiant@55.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mini Crossiant </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 55.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051402174993cheese-croissants.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Cheese Crossiant </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 55.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Small French Bread </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 70.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Plain Musli </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 205.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Musli with Nuts </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 235.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mini Sandwich Bread </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 70.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Multigrain Bread</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 115.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051342056449BrownBread@100.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Brown Bread </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>White Bread </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 135.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Sandwich </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 160.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Plain Muffin </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 80.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051357595155ChocolateMuffin@90.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chocolate Muffin </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 90.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051405194337chicken-puff-isolated-on-white-260nw-778675282.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Chicken Puff </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Sausage Puff Roll</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 105.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Veg Puff</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 90.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Cheese Stick </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 90.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/Product/202107051340555389BreadStick@60.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Bread Stick </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 60.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011215469099cookies.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Toast Garlic White</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 50.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mini Veg Pizza </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 70.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mini Sausage Pizza </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 70.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Mini Sausage Pizza </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 85.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="https://weblaatokoshero.msrestro.com/Images/ProductCategory/202102011215469099cookies.jpg">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Almond Tuli </p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 100.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- sub category self product list -->
                                    <div class="food-list-body search-div" id="categoryProduct_50">
                                        <h5>candel</h5>
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Sparking Candel</p>
                                                    <span>Sparking Candel</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 60.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <!-- <div class="food-img">
                                                    <img src="">
                                                </div> -->
                                                <div class="food-name">
                                                    <p>Magic Sparking Candle</p>
                                                    <span>Magic Sparking Candle</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 45.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <!-- parent category self product list -->
                                </div>

                                <div class="search-p-div">
                                    <div class="food-list-head" id="categoryProduct_29">
                                        <h4>SPECIAL ITEMS</h4>
                                        <!-- <span>Some Text if neeeded</span> -->
                                    </div><!-- ends food-list-head -->


                                    <!-- parent category self product list -->
                                    <div class="food-list-body search-div" id="categoryPProduct_29">
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Chicken Wings Choyela</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>B.B.Q Chicken Pizza</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 399.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Lindemans Bin99</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 2900.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Red Velvet Cheese Cake</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 960.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Matka Mutton Biryani</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 999.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Matka Veg Biryani</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 499.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Matka Chicken Biryani</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 589.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Mutton Katiya</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 2499.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Local Chicken Katiya</p>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 1749.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Chicken Biryani </p>
                                                    <span>Chicken Biryani </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 349.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="search-p-div">
                                    <div class="food-list-head" id="categoryProduct_33">
                                        <h4>LAATOKOSHERO COMBO </h4>
                                        <!-- <span>Some Text if neeeded</span> -->
                                    </div><!-- ends food-list-head -->


                                    <!-- parent category self product list -->
                                    <div class="food-list-body search-div" id="categoryPProduct_33">
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Eurocup Combo-1</p>
                                                    <span>(Ruslan 1 full+Canberry Juice/Sprite+Chicken Chilly(W/B)+Sweetest Corn+ Piro Alu)</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 2999.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Eurocup Combo-2</p>
                                                    <span>(Budweiser 1 Case,Wings Choyila, Chicen Momo(2plate),
                                                        Muttion Bhutton, Alu Sadheko/Piroo Alu)</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 5499.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="search-p-div">
                                    <div class="food-list-head" id="categoryProduct_47">
                                        <h4>Delivery Charge</h4>
                                        <!-- <span>Some Text if neeeded</span> -->
                                    </div><!-- ends food-list-head -->


                                    <!-- parent category self product list -->
                                    <div class="food-list-body search-div" id="categoryPProduct_47">
                                        <ul>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Lalitpur Inside Ringroad</p>
                                                    <span>Lalitpur Inside Ringroad</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 75.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Lalitpur Outside Ring Road</p>
                                                    <span>Lalitpur Outside Ring Road</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 125.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Kathmandu Inside Ring Road</p>
                                                    <span>Kathmandu Inside Ring Road</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 125.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Kathmandu Outside Ring Road</p>
                                                    <span>Kathmandu Outside Ring Road</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 175.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                            <li class="search-li">
                                                <a href="#" class="link-cover" data-bs-toggle="modal" data-bs-target="#modalLogin"></a>
                                                <div class="food-name">
                                                    <p>Lalitpur </p>
                                                    <span>Lalitpur </span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs. 175.00<span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div><!-- ends item-food-list -->
                        </div><!-- ends food-listing-sec -->
                    </div><!-- ends food-sec -->
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="cart-sec sticky-top-custom">
                        <h4 class="block-title">My Cart</h4>
                        <div class="my-cart-block">
                            <div class="cart-inner cartPanelBox" style="display:none;">
                                <div class="selected-sec">
                                    <h4>Your Selected Items are:</h4>
                                    <ul class="cartListUL">
                                        <!-- <li><a href="#" class="btn btn-custom w-100">Add More Items<i class="fas fa-plus-circle ms-2" aria-hidden="true"></i></a></li> -->
                                    </ul>
                                </div><!-- ends selected-sec -->
                                <div class="sub-total">
                                    <div class="show-loading" style="min-height: 100px; display:none;">
                                        <div class="spinner-border" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="show-amount">
                                        <p>
                                            <span class="sub-tit">Sub Total</span>
                                            <span class="sub-price subTotalId">0</span>
                                        </p>
                                        <p>
                                            <span class="sub-tit">DELIVERY CHARGE
                                                <!-- <small class="small-delv"><a href="#" data-bs-toggle="modal" data-bs-target="#tbdModal" data-bs-whatever="@mdo">(Show Estimate)</a></small> -->
                                            </span>
                                            <span class="sub-price">0</span>
                                        </p>
                                        <p>
                                            <span class="sub-tit"><strong>Grand Total</strong></span>
                                            <span class="sub-price grandTotalId"><strong>Rs. 0</strong></span>
                                        </p>
                                    </div>
                                    <hr>
                                    <a href="index.html" class="btn btn-custom w-100 my-2 checkout-status">Proceed to Checkout</a>
                                    <!-- <button type="button" class="btn btn-custom w-100 my-2">Proceed to Checkout</button> -->
                                    <!-- <small>Note: In the event that the restaurant price and the price listed below are different, the restaurant/store price will prevail in every case.</small> -->
                                </div><!--  ends sub-total -->
                            </div><!-- ends cart-inner -->
                            <div class="empty-cart cartEmptyBox">
                                <i class="fas fa-shopping-cart"></i>
                                <h5>Your Cart is Empty</h5>
                                <p>Add items to get started.</p>
                            </div><!-- ends empty-cart -->
                        </div><!-- ends my-cart-block -->
                    </div><!-- ends cart-sec -->
                </div>
            </div>
        </div>
    </section>
</div>