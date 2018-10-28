@extends('layouts.default')
@section('content')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
<div class="container">
<h1 class="pull-left">Contact Us</h1>
</div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">

<div class="row margin-bottom-30">
<div class="col-md-2"></div>
<div class="col-md-6 mb-margin-bottom-30">
	<div class="headline"><h2>Contact Form</h2></div>
	<p></p><br>

	<form action="/contactus" method="post" id="sky-form3" class="sky-form sky-changes-3">
	 {{csrf_field()}}
		<fieldset>
			<div class="row">
				<section class="col col-6">
					<label class="label">Name</label>
					<label class="input">
						<i class="icon-append fa fa-user"></i>
						<input type="text" name="name">
					</label>
				</section>
				<section class="col col-6">
					<label class="label">E-mail</label>
					<label class="input">
						<i class="icon-append fa fa-envelope-o"></i>
						<input type="email" name="email" >
					</label>
				</section>
			</div>

			<section>
				<label class="label">Subject</label>
				<label class="input">
					<i class="icon-append fa fa-tag"></i>
					<input type="text" name="subject" >
				</label>
			</section>

			<section>
				<label class="label">Message</label>
				<label class="textarea">
					<i class="icon-append fa fa-comment"></i>
					<textarea rows="4" name="message" ></textarea>
				</label>
			</section>

	
			<section>
				<label class="checkbox"><input type="checkbox" name="copy"><i></i>Send a copy to my e-mail address</label>
			</section>
		</fieldset>

		<footer>
			<button type="submit" class="btn-u">Send message</button>
		</footer>

		<div class="message">
			<i class="rounded-x fa fa-check"></i>
			<p>Your message was successfully sent!</p>
		</div>
	</form>
</div><!--/col-md-9-->

<div class="col-md-4">
	<!-- Contacts -->
	<div class="headline"><h2>Contacts</h2></div>
	<ul class="list-unstyled who margin-bottom-30">
		<li><a href="#"><i class="fa fa-home"></i> Woxicon Technologies,
                Yashraj Green Castle, 
                Tukai Nagar, Kalepada,
                Hadapsar, Pune-411028.</a></li>
		<li><a href="#"><i class="fa fa-envelope"></i>into@woxicontechnologies.com</a></li>
		<li><a href="#"><i class="fa fa-phone"></i>+91 942 143 4411</a></li>
		<li><a href="#"><i class="fa fa-globe"></i>http://www.woxicontechnologies.com</a></li>
	</ul>

	<!-- Business Hours -->
	<div class="headline"><h2>Business Hours</h2></div>
	<ul class="list-unstyled margin-bottom-30">
		<li><strong>Monday-Friday:</strong> 10am to 8pm</li>
		<li><strong>Saturday:</strong> 11am to 3pm</li>
		<li><strong>Sunday:</strong> Closed</li>
	</ul>

	<!-- Why we are? -->
	<div class="headline"><h2>Why we are?</h2></div>
	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
	<ul class="list-unstyled">
		<li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
		<li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
		<li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
	</ul>
</div><!--/col-md-3-->
</div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->


@stop