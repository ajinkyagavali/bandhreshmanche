@extends('layouts.sidebar_profile')
@section('content')
<!-- Basic information -Form -->

<form action="/insertexpectation" id="sky-form4" class="sky-form">
<header>Expectation Details</header>

<fieldset>
	<section>
		<label class="label" >Expectation Details (अपेक्षित तपशील)</label>
		<label class="textarea">
		<i class="icon-append fa fa-comment"></i>
		@foreach($users as $user)
		<textarea rows="4" name="expectation" >{{$user->expectation}}</textarea>
		@endforeach
		</label>
	</section> 

</fieldset>

<footer>
<button type="submit" class="btn-u">Save</button>
</footer>
</form>
 <!-- End Basic Information-Form -->
@stop