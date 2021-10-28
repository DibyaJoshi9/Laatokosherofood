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
              <!-- <li class="li-cart"><a href="#"><i class="fas fa-cart-plus"></i><span>(0)</span></a></li> -->
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</a></li>
              <!-- <li><a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li> -->
            </ul>
          </div><!-- ends nav-login -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto my-2 my-lg-0">
              <li class="nav-item">
                <a class="nav-link  active " aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="menu.html">Menu<i class="fas fa-chevron-down"></i></a>
                <a href="#" class="drop-icon-bar dropdown-toggle" id="navbarDropdownMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
                  @foreach($categories as $category)
                  <li class="dropdown-submenu">
                  <a class="a-drop-out dropdown-item p-category collapse-menu" tabindex="-1" href="menu.html#categoryProduct_1">
                    {{$category->name}} @if(count($category->childrenRecursive) >0)<i class="fas fa-chevron-right"></i>@endif
                  </a>
                  @if(count($category->childrenRecursive) > 0)
                  <ul class="dropdown-menu">
                    @foreach($category->childrenRecursive as $children)
                      <li><a class="dropdown-item c-category collapse-menu" tabindex="-1" href="menu.html#categoryProduct_4">{{$children->name}}</a></li>
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
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>