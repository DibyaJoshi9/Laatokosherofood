

   

    <!-- Modal Google Address Popup -->
    <div class="modal fade" id="googleAddressPopup" tabindex="-1" aria-labelledby="googleAddressPopupLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="row g-0">
            <div class="col-sm-12">
              <div class="lg-form px-3">
                <div class="modal-header">
                  <h5 class="modal-title">Choose Location</h5>
                  <button type="button" class="btn-close registerModelClose" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="#" method="" id="addressFormRegister" returnurl="returnUrl" role="form">
                    <input type="hidden" name="_token" value="vQLPJJxpHt7ksS7vfSIhELb0zv6mkpUufY4dJCux">                    <div class="col-md-12">
                      <div class="mb-3">
                          <label class="form-label">Search Address:</label>
                          <input type="text" name="searchText" class="form-control g-searchTextField" placeholder="Search Your Location Here" autocomplete="off">
                          <label class="error-msg g-address" style="display:none;">Enter valid address or pin point location in map.</label>
                      </div>
                      <label style="color:red">Note: Double click or drag pin on map to pin point location.</label>
                      <div class="lct-map border img-thumbnail g-map" style="height: 200px;"></div>
                    </div>
                  </form>
                </div>

                <div class="modal-footer">
                  <button type="button" id="saveAddressBtn" class="btn btn-custom"><i class="far fa-location"></i>Save</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ends Modal -->

    <!-- Modal Select Food -->
    <div class="modal fade" id="foodNameModal" tabindex="-1" aria-labelledby="foodNameModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="row g-0">
            <div class="col-sm-12">
                <div class="lg-form px-3">
                <div class="modal-header">
                    <input type="hidden" value="" id="modelItemId">
                    <input type="hidden" value="" id="modelCartItemId">
                    <h5 class="modal-title" id="modelItemName">Item Name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0 mb-2">
                    <div class="food-dtl border-bottom pb-3 mb-3">
                    <div class="food-pic"><!-- if there is not food image, hide this div -->
                        <img src="assets/images/home-banner-1.jpg" alt="" class="img-fluid" id="modelItemImage">
                    </div><!-- ends food-pic -->
                    <div class="food-rates">
                        <h4 id="modelItemPrice">Rs.</h4>
                        <button type="button" class="btn btn-fav active" id="modelItemFavourite"><!-- for default remove active class and rename class name on i tag -->
                        <!-- <i class="far fa-heart" aria-hidden="true"></i> -->
                        <i class="fas fa-heart" aria-hidden="true"></i>
                        </button>
                    </div><!--  ends food-rates -->
                    </div><!-- ends food-dtl -->
                    <div class="spl-inst">
                    <h5>Special Instructions</h5>
                    <textarea class="form-control" rows="3" placeholder="Add Notes" id="modelItemInstruction"></textarea>
                    </div><!-- ends spl-inst -->
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
                </div><!-- ends food-footer -->
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- ends Modal -->