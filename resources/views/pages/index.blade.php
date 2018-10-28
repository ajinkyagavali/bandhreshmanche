@extends('layouts.default')
@section('content')
<div class=" row fullscreenbanner-container">
<div class="fullscreenbanner">
<img class="img-responsive col-md-12 col-sm-12 col-xs-12" src="assets/img/bg.jpg" style="height: 50%; max-width: 100%; margin-left: inherit; margin-right: inherit;" alt="Responsive image">
</div>
</div>

<!-- Info Blokcs -->
<div class="row margin-bottom-30 margin-left-10  " >
<!-- Welcome Block -->
<div class="col-md-11 md-margin-bottom-40 " style="margin-left: inherit; margin-right: inherit;">
	<div class="headline"><h2>Welcome To Bandh-Reshmanche </h2></div>


	<div class="row">
		<div class="col-sm-6">
			
             <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <!-- Carousel Indicators -->
                        <ol class="carousel-indicators">
                             @foreach ($slider_urls as $key => $slider_url)

                        <li data-target="#carousel-example" data-slide-to="{{ $slider_url->id }}" class="{{ $key == 0 ? ' active' : '' }}"></li>
                           
                            @endforeach
                        </ol>
                        <div class="clearfix"></div>
                        <!-- End Carousel Indicators -->
                        <!-- Carousel Images -->
                        <div class="carousel-inner">
                        @foreach ($slider_urls as $key => $slider_url)
                        <div class="item{{ $key == 0 ? ' active' : '' }}">
                       <img src="{{ $slider_url->path }}"  style="height:300px; width: 100%; ">
                       </div>
                        @endforeach
                             <!-- Carouse Images -->
                        <!-- Carousel Controls -->
                        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                        <!-- End Carousel Controls -->
                    </div>
		</div>
    </div>
		<div class="col-sm-6">
			<p style="text-align: justify;">Bandh-Reshmanche.com is one of India’s leading matrimonial websites that has helped lakhs of members find their perfect life partner. We believe choosing a life partner is a big and important decision, and hence work towards giving a simple and secure matchmaking experience for you and your family. Each profile registered with us goes through a manual screening process before going live on site; we provide superior privacy controls for Free; and also verify contact information of members. You can register for Free and search according to your specific criteria on age, height, community, profession, income, location and much more- on your computer, tablet or mobile. Regular custom mails and notifications make the process easier and take you closer to your Jeevansathi!</p>
			
		</div>
	</div>

	<!--<blockquote class="hero-unify">
		<p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why. Unify is an incredibly beautiful responsive Bootstrap Template for corporate professionals.</p>
		<small>CEO, Jack Bour</small>
	</blockquote>-->
    @foreach($counters as $counter)
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="counters">
                        <span class="counter">{{$counter->counter}}</span>
                        <h4>Visitors Count</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach
</div><!--/col-md-8-->

<!-- Latest Shots -->
<!-- <div class="col-md-4">
    <div class="row margin-button-50">
     <div class="col-md-12 ">
        <form class="reg-page"  action="{{ route('login') }}" method="post">
         {{ csrf_field() }}
            <div class="reg-header">
                <h2>Login to your account</h2>
            </div>

            <div class="input-group margin-bottom-20 {{ $errors->has('email') ? ' has-error' : '' }}" >
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="email"  placeholder="Username" class="form-control" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="input-group margin-bottom-20 {{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" placeholder="Password" name="password" class="form-control">
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

            </div>

            <div class="row">
                <div class="col-md-6 checkbox">
                    <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Stay signed in</label>
                </div>
                <div class="col-md-6">
                    <button class="btn-u pull-right" type="submit">Login</button>
                </div>
            </div>

            <hr>

            <h4>Forget your Password ?</h4>
            <p>no worries, <a class="color-green" href="{{ route('password.request') }}">click here</a> to reset your password.</p>
        </form>      
     </div>
    </div>
</div> --><!--/col-md-4-->
</div>
<!-- End Info Blokcs -->

<!-- End Content Part -->
	@stop