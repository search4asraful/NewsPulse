<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }} | Dashboard</title>
  <!--favicon-->
  @include('backend.includes.style')
</head>
<body>

    <!--start header-->
    @include('backend.includes.header')
    <!--end top header-->


    <!--start sidebar-->
    @include('backend.includes.sidebar')
    <!--end sidebar-->


    <!--start main wrapper-->
    @yield('content')
    <!--end main wrapper-->


    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->



    <!--start footer-->
    @include('backend.includes.footer')
    <!--top footer-->


    <!--start cart-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
        <div class="offcanvas-header border-bottom h-70">
        <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
        <a href="javascript:void(0)" class="primaery-menu-close" data-bs-dismiss="offcanvas">
            <i class="material-icons-outlined">close</i>
        </a>
        </div>
        <div class="offcanvas-body p-0">
        <div class="order-list">
            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
            <div class="order-img">
                <img src="{{ asset('/backend/') }}/assets/images/orders/01.png" class="img-fluid rounded-3" width="75" alt="">
            </div>
            <div class="order-info flex-grow-1">
                <h5 class="mb-1 order-title">White Men Shoes</h5>
                <p class="mb-0 order-price">$289</p>
            </div>
            <div class="d-flex">
                <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
            </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
            <div class="order-img">
                <img src="{{ asset('/backend/') }}/assets/images/orders/02.png" class="img-fluid rounded-3" width="75" alt="">
            </div>
            <div class="order-info flex-grow-1">
                <h5 class="mb-1 order-title">Red Airpods</h5>
                <p class="mb-0 order-price">$149</p>
            </div>
            <div class="d-flex">
                <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
            </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
            <div class="order-img">
                <img src="{{ asset('/backend/') }}/assets/images/orders/03.png" class="img-fluid rounded-3" width="75" alt="">
            </div>
            <div class="order-info flex-grow-1">
                <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
                <p class="mb-0 order-price">$139</p>
            </div>
            <div class="d-flex">
                <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
            </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
            <div class="order-img">
                <img src="{{ asset('/backend/') }}/assets/images/orders/04.png" class="img-fluid rounded-3" width="75" alt="">
            </div>
            <div class="order-info flex-grow-1">
                <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
                <p class="mb-0 order-price">$485</p>
            </div>
            <div class="d-flex">
                <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
            </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
            <div class="order-img">
                <img src="{{ asset('/backend/') }}/assets/images/orders/05.png" class="img-fluid rounded-3" width="75" alt="">
            </div>
            <div class="order-info flex-grow-1">
                <h5 class="mb-1 order-title">Fancy Shirts</h5>
                <p class="mb-0 order-price">$758</p>
            </div>
            <div class="d-flex">
                <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
            </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
            <div class="order-img">
                <img src="{{ asset('/backend/') }}/assets/images/orders/06.png" class="img-fluid rounded-3" width="75" alt="">
            </div>
            <div class="order-info flex-grow-1">
                <h5 class="mb-1 order-title">Home Sofa Set </h5>
                <p class="mb-0 order-price">$546</p>
            </div>
            <div class="d-flex">
                <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
            </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
            <div class="order-img">
                <img src="{{ asset('/backend/') }}/assets/images/orders/07.png" class="img-fluid rounded-3" width="75" alt="">
            </div>
            <div class="order-info flex-grow-1">
                <h5 class="mb-1 order-title">Black iPhone</h5>
                <p class="mb-0 order-price">$1049</p>
            </div>
            <div class="d-flex">
                <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
            </div>
            </div>

            <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
            <div class="order-img">
                <img src="{{ asset('/backend/') }}/assets/images/orders/08.png" class="img-fluid rounded-3" width="75" alt="">
            </div>
            <div class="order-info flex-grow-1">
                <h5 class="mb-1 order-title">Goldan Watch</h5>
                <p class="mb-0 order-price">$689</p>
            </div>
            <div class="d-flex">
                <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
            </div>
            </div>
        </div>
        </div>
        <div class="offcanvas-footer h-70 p-3 border-top">
        <div class="d-grid">
            <button type="button" class="btn btn-dark" data-bs-dismiss="offcanvas">View Products</button>
        </div>
        </div>
    </div>
    <!--end cart-->


  <!--start switcher-->
  <button class="btn btn-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
    <i class="material-icons-outlined">tune</i>Customize
  </button>
  
  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
    <div class="offcanvas-header border-bottom h-70">
      <div class="">
        <h5 class="mb-0">Theme Customizer</h5>
        <p class="mb-0">Customize your theme</p>
      </div>
      <a href="javascript:void(0)" class="primaery-menu-close" data-bs-dismiss="offcanvas">
        <i class="material-icons-outlined">close</i>
      </a>
    </div>
    <div class="offcanvas-body">
      <div>
        <p>Theme variation</p>

        <div class="row g-3">
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="LightTheme" checked>
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="LightTheme">
              <span class="material-icons-outlined">light_mode</span>
              <span>Light</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="DarkTheme">
              <span class="material-icons-outlined">dark_mode</span>
              <span>Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="SemiDarkTheme">
              <span class="material-icons-outlined">contrast</span>
              <span>Semi Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BoderedTheme">
              <span class="material-icons-outlined">border_style</span>
              <span>Bordered</span>
            </label>
          </div>
        </div><!--end row-->

      </div>
    </div>
  </div>
  <!--start switcher-->
  @include('backend.includes.script')
</body>
</html>