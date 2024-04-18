@extends('layouts.default')
@section('content')


<!--Page Title-->
    <section class="page-title"
    style="background-image:url(/images/banners/digital-marketing.jpg); background-position: top;">
    <div class="auto-container">
        <div class="content">
            <h2>Order <span>Now</span></h2>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Order Now</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


        <!-- Contact Page Section -->
		<section class="contact-page-section">
			<div class="auto-container">
				<div class="inner-container">
					<h2>Contact our support guys or make appointment <br> with <span>our consultant</span></h2>
					<div class="row clearfix">



						<!-- Form Column -->
						<div class="form-column mx-auto col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">

								<!--Contact Form-->
								<div class="contact-form">
									<form   id="contact-form">
@csrf
                                        @if (($templates))
                                        <div class="row px-3">
                                            <div class="form-group col-12 p-0 cursor-not">
                                                <input type="text" class="cursor-not" name="full_name"  placeholder="Category: {{ $templates->category_title}}"
                                                    disabled>
                                            </div>

                                            <div class="form-group col-12 p-0">
                                                <input type="text" class="cursor-not" name="full_name"  placeholder="Template: {{ $templates->title}}"
                                                    disabled>
                                            </div>
                                        </div>


                                        @endif
										<div class="form-group">
											<input type="text" name="full_name" value="" placeholder="Full name"
												>
                                         <input type="hidden" name="category_title" value="{{ $templates->category_title}}"/>
                                         <input type="hidden" name="product" value="{{ $templates->title}}"/>

										</div>

										<div class="form-group">
											<input type="text" name="email" value="" placeholder="Email" >
										</div>
                                        <div class="form-group">
											<input type="text" name="mobile" value="" placeholder="mobile" >
										</div>


										<div class="form-group">
											<textarea name="message" placeholder="write.."></textarea>
										</div>

										<div class="form-group">
											<button type="submit" class="theme-btn btn-style-one">Getting start
												now</button>
										</div>

									</form>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Page Section -->




        @stop
@push('script')

<script>

 function successModel(message) {
            Swal.fire({
                title: '<strong>Success</strong>',
                icon: 'success',
                html: '<b>' + message + '</b>',
                showCloseButton: true,
                confirmButtonText: 'Ok'
            }).then(function() {
                location.reload();
            })
        }
    function contact_form(){


        var formdata = $("#contact-form").serializeArray();
            $.ajax({
                // url:'enquire-now',
                url: "{{url('contact-us')}}",
                type:'POST',
                data:formdata,
                success:function(result){
                    successModel(result.message);
                    $('#contact-us')[0].reset();
                },
                error: function (xhr) {
                    errorModel(xhr);
                },
           });
    }



      $("#contact-form").validate({
        rules: {
            full_name: "required",
            mobile: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            email: {
                required: true,
                email: true,
            }


        },
        messages: {
            full_name: "Please enter your full name",
            mobile: {
                required:  "Please enter your mobile number",
                number: "Please enter valid mobile number",
                minlength: "Please enter valid mobile number",
                maxlength:"Please enter valid mobile number",
            },
            email: {
                required:  "Please enter your email address",
                email: "Please enter valid email address",
            },

        },
        submitHandler: function(form,event) {
          contact_form();
          return false;
        }
      });

    </script>
@endpush
