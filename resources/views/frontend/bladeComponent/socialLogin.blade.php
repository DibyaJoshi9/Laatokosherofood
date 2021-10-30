 <!-- Modal login -->
 <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true" autocomplete="on" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="row g-0">
            <div class="col-sm-4">
              <div class="lg-img">
                <img src="assets/images/home-banner-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-sm-8">
              <div class="lg-form px-3">
                <div class="modal-header">
                  <h5 class="modal-title">Login to Laatokoshero Foods</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="border-bottom pb-4 mb-3">
                    
                    <form action="https://laatokoshero.com/customer/login" method="post" id="popupLoginForm" returnurl="returnUrl" role="form">
                      <input type="hidden" name="_token" value="vQLPJJxpHt7ksS7vfSIhELb0zv6mkpUufY4dJCux">                      <input type="text" name="returnUrl" value="returlUrl" hidden="">
                      
                      <div class="mb-3">
                        <label for="popupemail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control " id="popupemail" placeholder="yours@email.com" required>
                      </div>
                      <div class="mb-3">
                        <label for="popuppassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control " id="popuppassword" placeholder="*****" required>
                      </div>
                      <!-- <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="remember_me" value="1" id="popupremember">
                        <label class="form-check-label" for="popupremember">
                          Remember Me
                        </label>
                      </div> -->
                      <button type="submit" class="btn btn-custom w-100">Login</button>
                    </form>
                  </div>
                  <div class="login-social">
                    <h5 class="text-center">Or Login Using</h5>
                    <div class="lg-fb-g flex-wrap">
                      <a href="https://www.facebook.com/v3.3/dialog/oauth?client_id=493625788536870&amp;redirect_uri=https%3A%2F%2Flaatokoshero.com%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code&amp;state=LRX17APR7CaEZSBruWd4UQZLvYrgAizh4y3Yl2EO" class="btn btn-facebook mb-2 mb-md-0"><i class="fab fa-facebook-f"></i>Facebook</a>
                      <a href="https://accounts.google.com/o/oauth2/auth?client_id=402869115988-oq54pb9gbgvf3ub642fcv5euce5860gi.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Flaatokoshero.com%2Fauth%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code&amp;state=3I2lZCvJNzPYgJQ2dqHdj3uPXAmoeH9kG5BXxc8i" class="btn btn-google mb-2 mb-md-0"><i class="fab fa-google"></i>Google</a>
                    </div>
                  </div>
                  <div class="lg-footer">
                    <h5>Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#registerModal">Sign Up</a></h5>
                    <h6><a href="forgot-password.html">Forgot Password?</a></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ends Modal -->

    <!-- Modal Register -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="row g-0">
            <div class="col-sm-12">
              <div class="lg-form px-3">
                <div class="modal-header">
                  <h5 class="modal-title">Signup to Laatokoshero Foods</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="signupPopCloseId"></button>
                </div>
                <div class="modal-body">
                  <div class="border-bottom pb-4 mb-3">
                  <form action="https://laatokoshero.com/customer/register" method="post" id="popupRegisterForm" returnurl="returnUrl" role="form" autocomplete="on">
                      <input type="hidden" name="_token" value="vQLPJJxpHt7ksS7vfSIhELb0zv6mkpUufY4dJCux">                      <input type="text" name="returnUrl" value="returlUrl" hidden="">

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label for="popFirstName" class="form-label require">First Name:</label>
                            <input type="text" class="form-control " name="firstname" id="popFirstName" value="" placeholder="First Name">
                                                      </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label for="popLastName" class="form-label require">Last Name:</label>
                            <input type="text" class="form-control " name="lastname" id="popLastName" value="" placeholder="Last Name">
                                                      </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label for="popemail" class="form-label require">Email Address:</label>
                            <input type="email" class="form-control " name="email" id="popemail" value="" placeholder="your@email.com">
                                                      </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label for="popmobileno" class="form-label require">Mobile No:</label>
                            <input type="text" class="form-control " name="mobileno" id="popmobileno" value="" placeholder="98xxxxxxxx">
                                                      </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label for="poppassword" class="form-label require">Choose Password:</label>
                            <input type="password" class="form-control " name="password" id="poppassword" placeholder="Choose Password">
                                                      </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label for="popconfirmpass" class="form-label require">Confirm Password:</label>
                            <input type="password" class="form-control " name="password_confirmation" id="popconfirmpass" placeholder="Confirm Password">
                                                      </div>
                        </div>

                        <div class="col-md-8">
                            <div class="">
                              <label class="form-label">Address Details:<span class="text-danger">*</span></label>
                              <textarea rows="3" class="form-control g-addressDetails " name="addressDetails" placeholder="Enter Detail Address Direction"></textarea>
                                                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                              <label class="form-label">&nbsp;</label>
                              <button type="button" class="btn btn-custom w-100" data-bs-toggle="modal" data-bs-target="#googleAddressPopup" data-bs-dismiss="modal"><i class="far fa-location"></i>Choose Location</button>
                              <input type="hidden" class="form-control g-latitude" value="" name="latitude" placeholder="Latitude">
                              <input type="hidden" class="form-control g-longitude" value="" name="longitude" placeholder="Longitude">
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="mb-3">
                              <div id="pop_html_element"></div>
                                                            </div>
                        </div>
                      </div>
                      <div class="mb-2">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="checksignup"> -->
                        <label class="form-check-label" for="checksignup">
                          By Signing Up, I agree to Laatokoshero’s Terms of Use and Privacy Policy.
                        </label>
                      </div>
                      <button type="submit" class="btn btn-custom w-100">Sign UP</button>
                    </form>
                  </div>
                  <div class="login-social">
                    <h5 class="text-center">Or Signup Using</h5>
                    <div class="lg-fb-g flex-wrap">
                      <a href="https://www.facebook.com/v3.3/dialog/oauth?client_id=493625788536870&amp;redirect_uri=https%3A%2F%2Flaatokoshero.com%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code&amp;state=A8LO6c5cgW7KLmilnqOUlTUvSbJTuNVjQKZn6Dv3" class="btn btn-facebook mb-2 mb-md-0"><i class="fab fa-facebook-f"></i>Facebook</a>
                      <a href="https://accounts.google.com/o/oauth2/auth?client_id=402869115988-oq54pb9gbgvf3ub642fcv5euce5860gi.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Flaatokoshero.com%2Fauth%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code&amp;state=S54MshUtaHnj9L8N79BDCtmM98MifQ1C7n5dyieI" class="btn btn-google mb-2 mb-md-0"><i class="fab fa-google"></i>Google</a>
                    </div>
                  </div>
                  <div class="lg-footer">
                    <h5>Already have an account? <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#modalLogin">Sign In</a></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ends Modal -->

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