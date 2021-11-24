<!-- <div class="d-none d-md-block" 
style="padding: 0px 20px; margin-bottom: 0px; border-bottom: 1px solid #FFC108; background-color: #FFC108; color: rgb(0, 0, 0);">
        <div class="row">
            <div class="container px-3 my-2">
                <div class="pull-left" style="text-align: center;">
                  @foreach ($branch_name as $key => $b)

                    <span style="color: #d60103!important">
                      <i class="fa fa-lg fa-phone fa-rotate-90" aria-hidden="true"></i>&nbsp;{{$b->name}}:
                    </span>
                    <a class="text-black" href="tel:015907944">&nbsp;{{$b->contact_number}}</a>
                    @if(!empty($b->phone_number))
                        
                    

                    ,
                    <a class="text-black mr-3" href="tel:9801877977">{{$b->phone_number}}</a>
                   @endif
                     @endforeach
                </div>
                <div class="pull-right">
                    <a style="background-color: #FF300A; border-radius: 99px" class="text-white mr-2 py-1 px-3" href="https://tatomitho-app.app.link">Get App</a>
                </div> 
            </div> 
        </div>
    </div> 
    
    <div class="d-none d-md-block" style="padding: 0px 20px; margin-bottom: 0px; border-bottom: 1px solid #000; background-color: #000; color: rgb(0, 0, 0);">
        <div class="row">
            <div class="container px-3 my-2">
            
                <div class="pull-left" style="text-align: center;">
                <span style="color: #FFC108!important;font-weight: bold;font-size: 20px;">&nbsp;SERVICE AREA : </span>
                  @foreach ($branch_name as $key => $b)
                  <span style="color: #FFFFFF!important;font-weight: bold;padding-left: 1em;font-size: 20px;">
                    @if($key > 0 && $key < count($branch_name))|@endif<a href="#" style="color: white;">&nbsp;{{$b->name}}</a>
                  </span>

                  @endforeach
                     </div>
               <div class="pull-right">
                    <a style="background-color: #FF300A; border-radius: 99px" class="text-white mr-2 py-1 px-3" href="https://tatomitho-app.app.link">Get App</a>
                </div> 
            </div> 
        </div>
    </div>-->
<div class="header-upper">
          <div class="container">
            <div class="header-upp-block">
              <div class="header-logo">
                <a href="/"><img src="{{ URL::asset('assets/images/logo.png') }}" alt="" class="img-fluid"></a>
              </div>
              <div class="header-right">
                {{-- <div class="header-address">
                  <div class="item-header-address">
                    <i class="fas fa-map-marker-alt"></i>
                    <address class="head-addrs">
                      <a href="#">Dhobighat<br/>
                      Lalitpur, Nepal</a>
                    </address>
                  </div>
                  <div class="item-header-address">
                    <i class="fas fa-phone-alt"></i>
                    <address class="head-addrs">
                      <a href="#">9847379890, 9801079890</a>
                      <br/>
                      <span>24 hrs Service</span>
                    </address>
                  </div>
                </div> --}}
                <div class="header-social">
                  <a href="https://www.facebook.com/Laatokoshero" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.youtube.com/channel/UCeZm-VKD2WJlO7085v0fbdA" target="_blank"><i class="fab fa-youtube"></i></a>
                  <a href="http://instagram.com/laatokoshero" target="_blank"><i class="fab fa-instagram-square"></i></a>
                </div>
              </div><!-- ends header-right -->
            </div><!-- ends header-upp-blocck -->
          </div>
      </div><!-- ends header-upper -->