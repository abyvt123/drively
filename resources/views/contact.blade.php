@extends('layouts.app')

@section('content')

             
				<section class="page_title padding-mobile cs s-pt-59 s-pb-94">
					<div class="container">
						<div class="row">


							<div class="col-md-12">
								<h1 class="bold">Contact 4 Page</h1>
								<ul class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="/dashboard">Home</a>
									</li>
									<li class="breadcrumb-item">
										<a href="#">Pages</a>
									</li>
									<li class="breadcrumb-item active">
										Contact 4 Page
									</li>
								</ul>
							</div>


						</div>
					</div>
				</section>

			</div>

			

			<section class="ls ms s-py-75">
				<div class="container">
					<div class="row">

						<div class="divider-60 d-none d-xl-block"></div>

						<div class="col-lg-8 animate" data-animation="scaleAppear">

							<div class="hero-bg p-40">

								<form class="contact-form c-mb-15 c-gutter-15" method="post" action="https://html.modernwebtemplates.com/">

									<div class="row">

										<div class="col-sm-12">
											<h2>Contact Form</h2>
										</div>
									</div>

									<div class="row">

										<div class="col-sm-6">
											<div class="form-group has-placeholder">
												<label for="name">Full Name <span class="required">*</span></label>
												<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group has-placeholder">
												<label for="phone">Phone<span class="required">*</span></label>
												<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-sm-6">
											<div class="form-group has-placeholder">
												<label for="email">Email address<span class="required">*</span></label>
												<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group has-placeholder">
												<label for="subject">Subject<span class="required">*</span></label>
												<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-sm-12">

											<div class="form-group has-placeholder">
												<label for="message">Message</label>
												<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-sm-12">

											<div class="form-group has-placeholder mt-25">
												<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-outline-darkgrey btn-block">Send Message
												</button>
											</div>
										</div>

									</div>

								</form>
							</div>
						</div>
						<!--.col-* -->

						<div class="col-lg-4 animate" data-animation="scaleAppear">
							<div class="hero-bg p-40">

								<h4>Contact Info</h4>

								<div class="media mb-20">
									<div class="icon-styled color-main fs-20">
										<i class="fa fa-map-marker"></i>
									</div>

									<div class="media-body">
										<h6 class="mt-0">
											Address:
										</h6>
										<p>
											567 Jacksotts street, San Diego, CA
										</p>
									</div>
								</div>

								<div class="media mb-20">
									<div class="icon-styled color-main fs-20">
										<i class="fa fa-phone"></i>
									</div>

									<div class="media-body">
										<h6 class="mt-0">
											Phone:
										</h6>
										<p>
											1(800)168-2159
										</p>
									</div>
								</div>

								<div class="media mb-20">
									<div class="icon-styled color-main fs-20">
										<i class="fa fa-pencil"></i>
									</div>

									<div class="media-body">
										<h6 class="mt-0">
											Email:
										</h6>
										<p>
											<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0469656d6844617c65697468612a676b69">[email&#160;protected]</a>
										</p>
									</div>
								</div>

								<h4>Social Links</h4>

								<div class="social-icons">

									<a href="https://www.facebook.com/kavitha.menon.9085/" class="fa fa-facebook" title="facebook"></a>
									<a href="https://www.instagram.com/ka.vita3857/" class="fab fa-instagram " title="instagram"></a>
									<a href="https://www.youtube.com/channel/UC8jrL25_E6wbyM45u4-X3RQ" class="fab fa-youtube " title="youtube"></a>
                                    <a href="https://www.linkedin.com/in/kavita-menon-506601130/" class="fab fa-linkedin-in " title="linkedin"></a>

								</div>

							</div>
						</div>
						<!--.col-* -->


						<div class="divider-40 d-none d-xl-block"></div>

					</div>
				</div>
			</section>

@endsection			