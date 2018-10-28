<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Bandh-Reshmanche</title>
  @include('includes.header')
</head><!--/head-->
<body>
<div class="wrapper">
<!--=== Profile ===-->
	<div class="container">
		<div class="row">
			  <!--=== Breadcrumbs ===-->
  <div class="breadcrumbs">
    <div class="container">
      <h1 class="pull-left">Profile</h1>
    </div>
  </div><!--/breadcrumbs-->
  <!--=== End Breadcrumbs ===-->
			@include('includes.sidebar')
			<div class="col-md-9">
      	  <div class="profile-body">
       		 <div class="col-md-9">
          		@yield('content')
  	    	  </div>
      	  </div>
        	</div>

		</div>
	</div><!--/container-->
	<!--=== End Profile ===-->
</div>

</body>

<footer class="row">
      @include('includes.footer')
  </footer>
