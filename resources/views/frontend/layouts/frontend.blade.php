<!DOCTYPE html>

<html lang="en">
  <head>
    @include('frontend.partials.head')
  </head>

  <body id="bg">
    <!-- LOADING AREA START ===== -->
    @include('frontend.layouts.loader')
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">
      <!-- HEADER START -->
     @include('frontend.layouts.header')
      <!-- HEADER END -->

      <!-- CONTENT START -->

    <!-- CONTENT START -->
    @yield('content')
    <!-- CONTENT END -->

      <!-- CONTENT END -->

      <!-- FOOTER START -->
      @include('frontend.layouts.footer')
      <!-- FOOTER END -->

      <!-- BUTTON TOP START -->
      <button class="scroltop">
        <span class="iconmoon-house relative" id="btn-vibrate"></span>Top
      </button>

      {{-- modal --}}
      @include('frontend.partials.modal')

    </div>

    {{-- @include('frontend.layouts.style_switcher') --}}
    @include('frontend.partials.script')
  </body>
</html>
