@extends('main_layouts.header')

@section('title', 'About')

@section('content')

	<section class="wrapper bg-gray">
      <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
          <div class="col-xl-6 mx-auto">
            <h1 class="display-1 mb-4">Hello! This is About</h1>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{ asset('blog_template/assets/img/photos/bg12.jpg') }}" alt="" /></figure>
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
          <div class="col-lg-6 position-relative order-lg-2">
            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
            <div class="overlap-grid overlap-grid-2">
              <div class="item">
                <figure class="rounded shadow"><img src="{{ asset('storage/' . $setting->about_first_image) }}" alt=""></figure>
              </div>
              <div class="item">
                <figure class="rounded shadow"><img src="{{ asset('storage/' . $setting->about_second_image) }}" alt=""></figure>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <img src="{{ asset('blog_template/assets/img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-3">Who Are We?</h2>
            <p class="lead fs-lg">{{ $setting->about_first_text }}</p>
			<h3>Knowledge online learning center</h3>
            <p class="mb-6">{{ $setting->about_second_text }}</p>
            <div class="row gy-3 gx-xl-8">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Courses</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Students</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Teachers online</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Countries</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <div class="row mb-10">
          <div class="col-xl-10 mx-auto">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
              <div class="col-md-4">
                <img src="{{ asset('blog_template/assets/img/icons/lineal/check.svg') }}" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                <h3 class="counter">Our Mission</h3>
                <p>{!! $setting->about_our_mission !!}</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <img src="{{ asset('blog_template/assets/img/icons/lineal/user.svg') }}" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                <h3 class="counter">Our Vision</h3>
                <p>{!! $setting->about_our_vision !!}</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <img src="{{ asset('blog_template/assets/img/icons/lineal/briefcase-2.svg') }}" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                <h3 class="counter">Services</h3>
                <p>{!! $setting->about_services !!}</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
      <div class="container pt-18 pb-14 pt-md-19 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
            <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
            <figure class="rounded"><img src="{{ asset('blog_template/assets/img/photos/about4.jpg') }}" srcset="./assets/img/photos/about4@2x.jpg 2x" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <img src="{{ asset('blog_template/assets/img/icons/lineal/telemarketer.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Address</h5>
                <address>Moonshine St. 14/05 Light City, <br class="d-none d-md-block" />London, United Kingdom</address>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Phone</h5>
                <p>00 (123) 456 78 90</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">E-mail</h5>
                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">sandbox@email.com</a></p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

@endsection
