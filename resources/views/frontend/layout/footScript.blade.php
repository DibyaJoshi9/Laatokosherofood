    <script src="{{ URL::asset('assets/carousel/vendors/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/carousel/owlcarousel/owl.carousel.js') }}"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{ URL::asset('assets/dist/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/validation/validate.js') }}"></script>
    <script src="{{ URL::asset('assets/js/validation/customerValidation.js') }}"></script>
    <script src="{{ URL::asset('assets/js/cartprocess.js') }}"></script>

    <script src="{{ URL::asset('assets/recaptcha/api85f1.js?onload=onloadCallback&amp;render=explicit') }}" async defer></script>
    <script src="{{ URL::asset('assets/js/toast/jquery.toast.min.js') }}"></script>
    <script>
        $(function() {
          var check = ``;
          if (check !== "") {
            $.toast({
              heading: 'success',
              text: ``,
              showHideTransition: 'plain',
              icon: 'success',
              position: 'top-right',
            });
          }

          var check = ``;
          if (check !== "") {
            $.toast({
              heading: 'Warning',
              text: ``,
              showHideTransition: 'plain',
              icon: 'info',
              position: 'top-right',
            });
          }
        })
    </script>

    <!-- For sticky header -->   
    <script>
      window.onscroll = function() {myFunction()};
      var header = document.getElementById("myHeader");
      var sticky = header.offsetTop;
      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }
    </script>

    <script>
      jQuery(document).ready(function($) {
        $('.fadeOut-home').owlCarousel({
          items: 1,
          animateOut: 'fadeOut',
          loop: true,
          margin: 10,
          autoplay:true,
          autoplayTimeout:2000,
          autoplayHoverPause:false
        });
        $('.owl-carousel').owlCarousel({
          loop: false,
          margin: 20,
          autoplay:false,
          autoplayTimeout:2000,
          autoplayHoverPause:false,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: true
            },
            768: {
              items: 2,
              nav: true
            },
            992: {
              items: 3,
              nav: true
            },
            1200: {
              items: 4,
              nav: true,
            }
          }
        })
      });
    </script>

    <script>
      $('.li-cart .dropdown-menu').on({
        "click":function(e) {
          e.stopPropagation();
        }
      });

      $('.collapse-menu').on("click", function(e){
        // $('.navbar-toggler').addClass('collapsed');
        $('.navbar-collapse').removeClass('show');
        var childCategory = $(this).hasClass("c-category");
        if(childCategory){
          var parentCategory = $(this).parents().eq(2).find(".p-category").text();
          $('#pCategoryBreadcrumb').text(parentCategory);
          $('#pCategoryBreadcrumb').show();
        }
      });
    </script>

    <script>
      $(document).ready(function(){
        $('.dropdown-submenu a.a-drop').on("click", function(e){
          $(this).next('ul').toggle();
          e.stopPropagation();
          e.preventDefault();
        });
      });
    </script>
    
    
    <style type="text/css">
    .g-map {
        height: 300px;
        background-color: grey;
    }
</style>
<script>
        var map;
        var customerLatitude = ""
        var customerLongitude = ""

        function initMap(latitude = null, longitude = null, zoom=12) {
            serverLatitude = parseFloat("");
            serverLongitude = parseFloat("");

            var locationObj = serverLongitude && serverLatitude ? {lat: serverLatitude, lng: serverLongitude} : {
                lat: 27.7283249639189,
                lng: 85.3472128430091
            };
            // console.log(locationObj)

            // map = new google.maps.Map(document.getElementById('map'), {
            map = new google.maps.Map(document.getElementsByClassName('g-map')[0], {
                center: locationObj,
                zoom: 12
            });

            var marker = new google.maps.Marker({
                position: locationObj, 
                map: map,
                draggable: true,
                title: "Drag me!"
            });

            if(customerLatitude === "" && customerLongitude === ""){
                marker.setMap(null);
                geoCoder(locationObj, marker);
            }else{
                geoCoder(locationObj, marker, true);
            }

            google.maps.event.addListener(map, "click", function (event) {
                $('.g-latitude').val(event.latLng.lat());
                $('.g-longitude').val(event.latLng.lng());
                data = event.latLng;
                geoCoder(data, marker, true);
            });

            google.maps.event.addListener(marker, 'dragend', function(event) {
                $('.g-latitude').val(event.latLng.lat());
                $('.g-longitude').val(event.latLng.lng());
                data = event.latLng;
                geoCoder(data, marker, true);
            });

            // var input = document.getElementById('g-searchTextField');
            var input = document.getElementsByClassName('g-searchTextField')[0];
            const options = {
                // bounds: defaultBounds,
                // componentRestrictions: { country: "np" },
                // fields: ["address_components", "geometry", "formatted_address', "icon", "name"],
                origin: map.getCenter(),
                strictBounds: false,
                // types: ["geocode"],
            };

            var autocomplete = new google.maps.places.Autocomplete(input, options);
            autocomplete.bindTo('bounds', map);
            google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
                search(autocomplete, marker);
            });
        };

        var geoCoder = function (latLng, marker, setAddress=false) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                "latLng": latLng
            }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    // lat = results[0].geometry.location.lat(),
                    // lng = results[0].geometry.location.lng(),
                    // latlng = new google.maps.LatLng(lat, lng);
                    marker.setPosition(latLng);

                    if(setAddress){
                        marker.setMap(map);
                        $(".g-searchTextField").val(results[0].formatted_address);
                        $(".g-addressDetails").val(results[0].formatted_address);
                    }
                }
            });
        }

        var search = function (autocomplete, marker) {
            var place = autocomplete.getPlace();
            if (!place) {
                alert('No such place found!');
                return 0;
            }
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
            marker.setMap(map);
            marker.setPosition(place.geometry.location);
            $('.g-latitude').val(place.geometry.location.lat());
            $('.g-longitude').val(place.geometry.location.lng());
            $(".g-addressDetails").val(place.formatted_address);
        }

        var resetGLocation = function () {
            $('.g-latitude').val('');
            $('.g-longitude').val('');
            $(".g-addressDetails").val('');
        }

        $('#search-button').click(function (e) {
            e.preventDefault();
            if ($('.g-searchTextField').val() == '') {
                alert('Search Address box is empty!');
                return 0;
            }
            search(autocomplete, marker);
        });

        $(".g-searchTextField").keypress(function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
                if ($('.g-searchTextField').val() == '') {
                    alert('Search Address box is empty!');
                }
            }
        });
        $(".g-searchTextField2").keypress(function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
                if ($('.g-searchTextField2').val() == '') {
                    alert('Search Address box is empty!');
                }
            }
        });

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhQOMa8uJifdl8u0RAE_VdcWkWSLM576c&amp;libraries=places&amp;callback=initMap" ></script>

    <!-- <script>
    $("#local_name").change(function (){
        locationId = $("#locals option[value='" + $('#local_name').val() + "']").attr('data-id');
        if(locationId){
            $.ajax({
                url: "https://laatokoshero.com/local-name-location" + '/' + locationId,
                type: 'POST',
                data: {
                    '_token': "vQLPJJxpHt7ksS7vfSIhELb0zv6mkpUufY4dJCux"
                },
                dataType: 'json',
                success: function (response) {
                    // console.log(response);
                    if (response.latitude && response.longitude) {
                        $('#latitude').val(response.latitude);
                        $('#longitude').val(response.longitude);
                        initMap(parseFloat(response.latitude), parseFloat(response.longitude), 14);
                    }
                }
            });
        }
    });
    </script> -->
    <script>
      $(document).ready(function(){
        $("#addressFormRegister").validate({
          rules: {
              searchText: {
                  required: true
              }
          },
          messages: {
              searchText: {
                  required: "Search Address Empty."
              }
          }
        });
      });

      $("#saveAddressBtn").click(function(){
        if(!$("#addressFormRegister").valid()){
            return false;
        }
        $('#googleAddressPopup').modal('hide');
        $('#registerModal').modal('show');
      });
    </script>

    <script>
      var myModalConfirm = document.getElementById('registerModal')
      myModalConfirm.addEventListener('show.bs.modal', function (event) {
          var element = document.body;
          element.classList.add("modal-open2");
      });

      document.getElementById("signupPopCloseId").addEventListener("click", function (event) {
          var element = document.body;
          element.classList.remove("modal-open2");
      });

    </script>
    