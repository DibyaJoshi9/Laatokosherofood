@extends('frontend.layout.headScript')


<div class="headnav-outer" id="myHeader">
  <div class="headerNav">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid px-0">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="nav-login2 order-lg-2">
            <ul>
              {{-- {{dd(auth()->guard('customer'))}} --}}

							@auth('customer')
              <li style="color: white;font-size: 18px;font-weight: bold;">{{ auth()->guard('customer')->user()->first_name }} {{auth()->guard('customer')->user()->last_name}}
                <a  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" href="#">
              <i class="fas fa-sign-out-alt"></i> Log out
            </a>
              </li>
             
              <form id="logout-form" action="{{route('logout')}}" method="POST"
							style="display: none;">
							{{ csrf_field() }} 
							</form>
              @else
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</a></li>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li> 
              @endauth
            </ul>
          </div><!-- ends nav-login -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto my-2 my-lg-0">
              <li class="nav-item">
                <a class="nav-link  active " aria-current="page" href="{{route('index')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="menu.html">Menu<i class="fas fa-chevron-down"></i></a>
                <a href="#" class="drop-icon-bar dropdown-toggle" id="navbarDropdownMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
                  @foreach($categories as $category)
                  <li class="dropdown-submenu">
                  <a class="a-drop-out dropdown-item p-category collapse-menu" tabindex="-1" href="menu.html#categoryProduct_1">
                    {{$category->name}} @if(count($category->subCategories) >0)<i class="fas fa-chevron-right"></i>@endif
                  </a>
                  @if(count($category->subCategories) > 0)
                  <ul class="dropdown-menu">
                    @foreach($category->subCategories as $children)
                      <li>
                        <a class="dropdown-item c-category collapse-menu" tabindex="-1" href="{{route('menu.categoryProduct')}}#categoryProduct_{{$children->id}}">
                          {{$children->name}}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                  @endif
                  </li>
                  @endforeach
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="about-us.html" tabindex="-1" aria-disabled="true">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contact-us.html" tabindex="-1" aria-disabled="true">Contact Us</a>
              </li>
              
              {{-- @foreach($items as $menu_item)
              {{$menu_item->title}}
              @php
              $submenu = $menu_item->children;
  
          @endphp
           <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{makeUrl($menu_item->url)}}">{{$menu_item->title}}
              </li>
              @endforeach --}}

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>

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
              <form  method="post" id="registerModalForm" returnurl="returnUrl" role="form" autocomplete="on">
                @csrf
                <p class="text-success mb-0" id="quotemsg15"></p>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <label for="popFirstName" class="form-label require">First Name:</label>
                        <input type="text" class="form-control " name="first_name" id="popFirstName" value="" placeholder="First Name">
                                                  </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <label for="popLastName" class="form-label require">Last Name:</label>
                        <input type="text" class="form-control " name="last_name" id="popLastName" value="" placeholder="Last Name">
                                                  </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="mb-3">
                        <label for="gender" class="form-label require">Gender:</label>
                        <input type="radio"  name="gender" id="genderMale" value="M" placeholder="gender">
                        <label for="genderMale">Male</label>
                        <input type="radio" name="gender" id="genderFemale" value="F" placeholder="gender">
                        <label for="genderFemale">Female</label>
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
                        <input type="text" class="form-control " name="phone_number" id="popmobileno" value="" placeholder="98xxxxxxxx">
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

                    {{-- <div class="col-md-8">
                        <div class="">
                          <label class="form-label">Address Details:<span class="text-danger">*</span></label>
                          <textarea rows="3" class="form-control g-addressDetails " name="address" placeholder="Enter Detail Address Direction"></textarea>
                                                      </div>
                    </div> --}}
                    {{-- <div class="col-md-4">
                        <div class="">
                          <label class="form-label">&nbsp;</label>
                          <button type="button" class="btn btn-custom w-100" data-bs-toggle="modal" data-bs-target="#googleAddressPopup" data-bs-dismiss="modal"><i class="far fa-location"></i>Choose Location</button>
                          <input type="hidden" class="form-control g-latitude" value="" name="latitude" placeholder="Latitude">
                          <input type="hidden" class="form-control g-longitude" value="" name="longitude" placeholder="Longitude">
                        </div>
                    </div> --}}
                    
                    {{-- <div class="col-sm-12">
                        <div class="mb-3">
                          <div id="pop_html_element"></div>
                                                        </div>
                    </div> --}}
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
                  <a href="{{url('auth/google')}}" class="btn btn-google mb-2 mb-md-0"><i class="fab fa-google"></i>Google</a>
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

 <!-- Modal login -->
 <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true" autocomplete="on" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="row g-0">
        <div class="col-sm-4">
          <div class="lg-img">
            <img src="{{ asset('assets/images/home-banner-1.jpg') }}" alt="" class="img-fluid">
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
                
                <form  method="post" id="popupLoginForm" returnurl="returnUrl" role="form">
                  @csrf
                  <p class="text-success mb-0" id="email"></p>
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
                  <a href="{{ url('auth/facebook') }}" class="btn btn-facebook mb-2 mb-md-0"><i class="fab fa-facebook-f"></i>Facebook</a>
                  <a href="{{url('auth/google')}}" class="btn btn-google mb-2 mb-md-0"><i class="fab fa-google"></i>Google</a>
                </div>
              </div>
              <div class="lg-footer">
                <h5>Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#registerModal">Sign Up</a></h5>
                <h6><a href="{{ route('password.request') }}">Forgot Password?</a></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ends Modal -->

@section('footer')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

<script>

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  </script>

  <script>

 
  $('#registerModalForm').submit(function (e) {

      e.preventDefault();
        var that = this;
        $.ajax({
          type: "POST",
          url: "{{route('customer.register')}}",
          data: $(this).serialize(),

          success: function (response) {
              $('#quotemsg15').html("<span style='color:blue;'>Register Successfull </span>");
              location.reload();
          },
          error: function (response) {

              $('#quotemsg15').html("<span style='color:red;'>Something Went Wrong!!</span>");
              var jsonRes = response.responseJSON;
              $('.auth-error').remove();
              $.each(jsonRes, function (k, v) {
                  // console.log(v[0]);

                  if ($.isArray(v)) {
                      $(that).find('#' + k).append('<p class="auth-error">' + v[0] + '</p>');
                  } else {
                      $(that).find('#' + k).append('<p class="auth-error">' + v + '</p>');
                  }
              })
          }
      });
      
  });


 
  $('#popupLoginForm').submit(function (e) {

      e.preventDefault();
        var that = this;
        $('#popupLoginForm').find('button[type=submit]').attr('disabled','disabled')
        $.ajax({
          type: "POST",
          url: "{{route('login')}}",
          data: $(this).serialize(),

          success: function (response) {
              $('#quotemsg1').html("<span style='color:blue;'>Login Successfull </span>");
              location.reload();
          },
          error: function (response) {

              $('#quotemsg1').html("<span style='color:red;'>Something Went Wrong!!</span>");
              var jsonRes = response.responseJSON;
              $('.auth-error').remove();
              $.each(jsonRes, function (k, v) {
                  // console.log(v[0]);

                  if ($.isArray(v)) {
                      $(that).find('#' + k).append('<p class="auth-error">' + v[0] + '</p>');
                  }else if($.isArray(v.email)){
                    $(that).find('#email').append('<p class="auth-error">' + v.email[0] + '</p>');
                  } else {
                      $(that).find('#' + k).append('<p class="auth-error">' + v + '</p>');
                  }
              })
              $('#popupLoginForm').find('button[type=submit]').removeAttr('disabled')
          }
      });
      
  });
</script>
@endsection