@extends('main_layouts.header')

@section('title', 'Contact')

@section('content')

<section class="wrapper bg-light angled upper-end">
      <div class="container py-14 py-md-16">
        <div class="row gy-10 gx-lg-8 gx-xl-12 mb-16 align-items-center">
          <div class="col-lg-7 position-relative">
            <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6">
                <figure class="rounded mt-md-10 position-relative"><img src="{{ asset('blog_template/assets/img/photos/g5.jpg') }}" srcset="./assets/img/photos/g5@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-6">
                <div class="row gx-md-5 gy-5">
                  <div class="col-md-12 order-md-2">
                    <figure class="rounded"><img src="{{ asset('blog_template/assets/img/photos/g6.jpg') }}" srcset="./assets/img/photos/g6@2x.jpg 2x" alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-10">
                    <div class="card bg-pale-primary text-center counter-wrapper">
                      <div class="card-body py-11">
                        <h3 class="counter text-nowrap">5000+</h3>
                        <p class="mb-0">Satisfied Customers</p>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-5">
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
        <div class="row">
          <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <h2 class="display-4 mb-3 text-center">Drop Us a Line</h2>
            <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p>
            <form class="contact-form needs-validation" onsubmit="return false;" autocomplete="off" method="POST"  novalidate>
				      @csrf
              <div class="messages"></div>
              <div class="row gx-4">
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="first_name" type="text" class="form-control" value='{{ old("first_name") }}' placeholder='Your Firstname' name="first_name" required>
                    <label for="first_name" >First Name *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your first name. </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="last_name" type="text" class="form-control" value='{{ old("last_name") }}' placeholder='Your Lastname' name="last_name" required>
                    <label for="last_name">Last Name *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your last name. </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="email" class="form-control" value='{{ old("email") }}' placeholder='Your Email' type='email' name="email" required>
                    <label for="email">Email *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please provide a valid email address. </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="subject" class="form-control" value='{{ old("subject") }}' required='false' name="subject" placeholder='Your Subject'>
                    <label for="subject">subject *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please provide a valid subject . </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-12">
                  <div class="form-floating mb-4">
                    <textarea id="message" name="message" class="form-control" value='{{ old("message") }}' placeholder='What you want to tell us.' style="height: 150px" required></textarea>
                    <label for="message">Message *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your messsage. </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-12 text-center">
                  <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3 send-message-btn" value="Send message">
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </form>
            <!-- /form -->
			    <x-blog.message :status="'success'" />
          
          <!-- /column -->
        </div>
        <div class="col-md-6">
						<div id="map" class="colorlib-map"></div>
				</div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
		
@endsection


@section('custom_js')

<script src="{{ asset('blog_template/js/jquery.min.js') }}"></script>

<script>

	$(document).on("click", '.send-message-btn', (e) => {
		e.preventDefault();
		let $this = e.target;
		
		let csrf_token = $($this).parents("form").find("input[name='_token']").val()
		let first_name = $($this).parents("form").find("input[name='first_name']").val()
		let last_name = $($this).parents("form").find("input[name='last_name']").val()
		let email = $($this).parents("form").find("input[name='email']").val()
		let subject = $($this).parents("form").find("input[name='subject']").val()
		let message = $($this).parents("form").find("textarea[name='message']").val()

		let formData = new FormData();
		formData.append('_token', csrf_token);
		formData.append('first_name', first_name);
		formData.append('last_name', last_name);
		formData.append('email', email);
		formData.append('subject', subject);
		formData.append('message', message);

		$.ajax({
			url: "{{ route('contact.store') }}",
			data: formData,
			type: 'POST',
			dataType: 'JSON',
			processData:false,
			contentType: false,
			success: function(data){
				
				if(data.success)
				{
					$(".global-message").addClass('alert , alert-info')
					$(".global-message").fadeIn()
					$(".global-message").text(data.message)

					clearData($($this).parents("form"), ['first_name', 'last_name', 'email', 'subject', 'message']);

					setTimeout(() => {
						$(".global-message").fadeOut()
					}, 5000);
				}
				else 
				{
					for (const error in data.errors)
					{
						$("small."+error).text(data.errors[error]);
					}
				}
			}
		})

	})

</script>

@endsection