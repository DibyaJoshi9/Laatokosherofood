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
                                    <h2 class="accordion-header" id="header_pc_{{$category->id}}">
                                        <a class="accordion-button  
                                            @if(count($category->subCategories) > 0)
                                                col-btn collapsed 
                                            @endif 
                                            p-category"
                                            href="#categoryProduct_{{$category->id}}" 
                                            @if(count($category->subCategories) > 0) 
                                                data-bs-toggle="collapse" 
                                            data-bs-target="#collapse_pc_{{$category->id}}" aria-expanded="false" aria-controls="collapse_pc_{{$category->id}}"@endif>
                                            {{strtoupper($category->name)}}
                                        </a>
                                    </h2>
                                    @if(count($category->subCategories) > 0)
                                    <div id="collapse_pc_{{$category->id}}" class="accordion-collapse collapse" aria-labelledby="header_pc_{{$category->id}}"
                                     data-bs-parent="#accordion_pc">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach($category->subCategories as $subCategory)
                                                    <li>
                                                        <a href="#categoryProduct_{{$subCategory->id}}" 
                                                            class="c-category">
                                                            {{strtoupper($subCategory->name)}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                @endforeach
                                <!-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="header_pc_47">
                                        <a class="accordion-button p-category" href="#categoryProduct_47">
                                            Delivery Charge
                                        </a>
                                    </h2>
                                </div> -->
                            </div>
                        </div><!-- ends menu-list -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="food-sec">
                        <!--  Mobile View -->
                       <div class="food-search-head mb-3 sticky-top-custom">
                            <!-- <div class="dropdown  d-lg-none mb-2 mobile-menu-sec">
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
                            </div> -->
                            <div class="input-group">
                                <input type="text" id="searchInput" class="form-control" placeholder="Food Search" aria-label="Food Search" aria-describedby="button-addon2">
                                <button class="btn btn-custom" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </div> 
                        <div class="foods-listing-sec">
                            <div class="item-food-list">
                                @foreach($categories as $category)
                                <div class="search-p-div">
                                    <div class="food-list-head" id="categoryProduct_{{$category->id}}">
                                        <h4>{{strtoupper($category->name)}}</h4>
                                    </div>
                                    @foreach($category->subCategories as $subCategory)
                                    <div class="food-list-body search-div" id="categoryProduct_{{$subCategory->id}}">
                                        <h5>{{strtoupper($subCategory->name)}}</h5>
                                        @foreach($subCategory->items as $item )
                                        <ul>
                                            <li class="search-li" style="cursor: pointer;" onclick="onCartAdd({{$item}})">
                                                <div class="food-name">
                                                    <p>{{$item->name}}</p>
                                                    <span>{!!$item->description!!}</span>
                                                </div>
                                                <div class="food-amount">
                                                    <p>Rs.{{$item->price}} 
                                                        <span class="spn-famount"><i class="fas fa-plus-circle"></i></span></p>
                                                </div>
                                               
                                            </li>
                                        </ul>
                                        @endforeach
                                    </div>
                                    @endforeach
                                    <!-- parent category self product list -->
                                </div>
                                @endforeach
                            </div><!-- ends item-food-list -->
                        </div><!-- ends food-listing-sec -->
                    </div><!-- ends food-sec -->
                </div>

       <div class="modal fade" id="foodNameModal" tabindex="-1" aria-labelledby="foodNameModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="row g-0">
                    <div class="col-sm-12">
                        <div class="lg-form px-3">
                            <div class="modal-header">
                                <input type="hidden" id="modelItemId">
                                <input type="hidden" id="modelCartItemId">
                                <h5 class="modal-title" id="modelItemName">Item Name</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-0 mb-2">
                                <div class="food-dtl border-bottom pb-3 mb-3">
                                    <div class="food-pic">
                                        <!-- if there is not food image, hide this div -->
                                        <img src="{{ URL::asset('/assets/images/home-banner-1.jpg')}}" alt="" class="img-fluid" id="modelItemImage">
                                    </div>
                                    <!-- ends food-pic -->
                                    <div class="food-rates">
                                        Rs.<h4 id="modelItemPrice"></h4>
                                       
                                    </div>
                                    <!--  ends food-rates -->
                                </div>
                                <!-- ends food-dtl -->
                                <div class="spl-inst">
                                    <h5>Description</h5>
                                    <h5 id="ModlDescription"></h5>     
                                </div>
                                <br/>
                                <hr/>
                                <div class="spl-inst">
                                    <h5>Special Instructions</h5>
                                    <textarea class="form-control" rows="3" placeholder="Add Notes" id="modelItemInstruction"></textarea>
                                </div>
                                <!-- ends spl-inst -->
                            </div>
                            <div class="food-footer pb-3">
                                <div class="fd-left">
                                    <div class="food-num">
                                        <button type="button" class="btn btn-plain btn-plm" id="qtyMinus"><i class="fas fa-minus"></i></button>
                                        <input type="number" value="1" id="qtyVal" min="1">
                                        <button type="button" class="btn btn-plain btn-plm" id="qtyPlus"><i class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="food-sep-total" id="modelTotalCost">RS. </div>
                                </div>
                                <div class="fd-right">
                                    <!-- <button type="submit" class="btn btn-danger me-2">Remove</button> -->
                                    <button type="submit" class="btn btn-custom" id="cartAddBtn" onclick="javascript:addCartItem()">Add To Cart</button>
                                </div>
                            </div>
                            <!-- ends food-footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="col-lg-3 d-none d-lg-block">
                    <div class="cart-sec sticky-top-custom">
                        <h4 class="block-title">My Cart</h4>
                        <div class="my-cart-block">
                            <div class="cart-inner cartPanelBox" style="display:none;">
                                <div class="selected-sec">
                                    <h4>Your Selected Items are:</h4>
                                    <ul class="cartListUL">
                                       <li><a href="#" class="btn btn-custom w-100">Add More Items<i class="fas fa-plus-circle ms-2" aria-hidden="true"></i></a></li>
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

<script>

$(document).ready(function(){
    $('#searchInput').keyup(function(){
        
        var text = $(this).val().toLowerCase();
        if(text.length == 0){
            $('.search-p-div').show();
            $('.search-div').show();
            $('.search-li').show();
            return false;
        }

        $('.search-p-div').hide();
        $('.search-div').hide();
        $('.search-li').hide();

        $('.search-li .food-name').each(function(){
            if($(this).text().toLowerCase().indexOf(""+text+"") != -1 ){
                $(this).closest('.search-p-div').show();
                $(this).closest('.search-div').show();
                $(this).closest('.search-li').show();
            }
        });
    });
});

$( document ).ready(function() {
    var url = window.location.href;
    var urlSplit = url.split('#');
    if(urlSplit.length > 1){
        $('#allCategoryBreadcrumb').hide();
        var defPx = 129;
        if ($(window).width() <= 991) {
            defPx = 190; 
        }
        if(urlSplit[1].length > 0){
            $('html, body').animate({
                scrollTop: $('#'+urlSplit[1]).offset().top - defPx
            }, 50);
        }
    }
});

$('.p-category').click(function(){
    // $('.p-category').addClass('collapsed');
    // $('.p-category').attr("aria-expanded","false");

    $('.collapse').removeClass('show');

    $('.p-category').removeClass('active');
    $('.c-category').removeClass('active');
    $('.sc-category').removeClass('active');

    // var collapseMenu = $(this).hasClass("collapse-menu");
    // if(!collapseMenu){
    //     $(this).addClass('active');
    // }

    var hrefVal = $(this).attr('href');
    var mView = $(this).hasClass("m-view");
    
    animateJump(hrefVal, mView);
    $('#pCategoryBreadcrumb').text($(this).text());
    $('#pCategoryBreadcrumb').show();
    $('#cCategoryBreadcrumb').hide();
    $('#scCategoryBreadcrumb').hide();
    
    $('#dropdownMenuButton').empty();
    $('#dropdownMenuButton').html($(this).text()+'<i class="fas fa-chevron-down"></i>');
});

$('.c-category').click(function(){
    $('.c-category').removeClass('active');
    $('.sc-category').removeClass('active');

    // var collapseMenu = $(this).hasClass("collapse-menu");
    // if(!collapseMenu){
    //     $(this).addClass('active');
    // }

    var hrefVal = $(this).attr('href');
    var mView = $(this).hasClass("m-view");
    animateJump(hrefVal, mView);
    $('#cCategoryBreadcrumb').text($(this).text());
    $('#cCategoryBreadcrumb').show();
    $('#scCategoryBreadcrumb').hide();

    $('#dropdownMenuButton').empty();
    $('#dropdownMenuButton').html($(this).text()+'<i class="fas fa-chevron-down"></i>');
});

$('.sc-category').click(function(){
    $('.sc-category').removeClass('active');
    $(this).addClass('active');

    var hrefVal = $(this).attr('href');
    var mView = $(this).hasClass("m-view");
    animateJump(hrefVal, mView);

    $('#scCategoryBreadcrumb').text($(this).text());
    $('#scCategoryBreadcrumb').show();
    $('#dropdownMenuButton').empty();
    $('#dropdownMenuButton').html($(this).text()+'<i class="fas fa-chevron-down"></i>');
});

function animateJump(hrefVal, mView)
{
    var height = 129;
    if(mView){
        height = 180;
    }
    var urlSplit = hrefVal.split('#');
    if(urlSplit[1].length > 0){
        $('[href="#'+urlSplit[1]+'"]').addClass('active');
        $('#allCategoryBreadcrumb').hide();
        $('html, body').animate({
            scrollTop: $('#'+urlSplit[1]).offset().top-height
        }, 50);
    }
}

</script>
<script>
     function onCartAdd(d){
            $('#foodNameModal').modal('show');
            console.log(d);
            $('#modelItemPrice').text(d.price);
            $('#modelItemName').text(d.name);
            $('#modelItemId').val(d.id);
            $("#modelItemImage").attr("src","{{ URL::asset('storage')}}"+"/"+d.image);
            $('#ModlDescription').html(d.description);
            $("textarea#modelItemInstruction").val('');
            $("input#qtyVal").val(1);
            $('#modelTotalCost').text('Rs.');
        };
        function addminus(dd){
            if(dd == '+'){
                
            }
        }
    </script>
<script>
    var itemcart = function(){
       var self= this;
       self.cartItem = ko.observableArray([]);
    }
    $( document ).ready(function() {
        ko.applyBindings(new itemcart);
        
});

</script>