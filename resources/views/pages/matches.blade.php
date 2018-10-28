@extends('layouts.default')
@section('content')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
<div class="container">
<h1 class="pull-left">Matches</h1>
</div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
<div class="row">

@foreach($users as $user)

<!-- Begin Sidebar Menu -->
<div class="col-md-3"></div>
<!-- Begin Content -->

<div class="col-md-9">
<div class="margin-bottom-40"></div>
<!-- Tab v3 -->
	<div class="row tab-v3">
		<div class="col-sm-3">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#profile-{{$user->id}}" data-toggle="tab"><i class="fa fa-home"></i> Profile</a></li>
				<li><a href="#education-{{$user->id}}" data-toggle="tab"><i class="fa fa-cloud"></i> Education  </a></li>
				<li><a href="#family-{{$user->id}}" data-toggle="tab"><i class="fa fa-comments"></i> Family</a></li>
				<li><a href="#hobbies-{{$user->id}}" data-toggle="tab"><i class="fa fa-gear"></i> Hobbies</a></li>
				<li><a href="#contact-{{$user->id}}" data-toggle="tab"><i class="fa fa-comments"></i> Contact Details</a></li>
				<li><a href="#horoscope-{{$user->id}}" data-toggle="tab"><i class="fa fa-gear"></i> Horoscope</a></li>
			</ul>
		</div>

		<div class="col-sm-9">
			<div class="tab-content">
				
				<div class="tab-pane fade in active" id="profile-{{$user->id}}">
			
					<img alt="" class="pull-left src-image" src="{{$user->photo }}">
		        	<h4>{{$user->reg_id}} {{$user->name }} </h4>
				<p> Description</p>
				<p> {{$user->description}}</p>
				
			<!--Table Striped-->	
				<table class="table table-striped">
				
					<tbody>
						<tr>
							<td>Profile Created by(द्वारा निर्मित प्रोफाइल) :</td>
							<td>{{$user->profileby}}</td>
						</tr>
						<tr>
							<td>Gender (लिंग) : </td>
							<td>{{$user->gender}}</td>
					
						</tr>
						<tr>
							<td>Marital Status (वैवाहिक स्थिती): </td>
							<td>{{$user->marital_status}}</td>
						</tr>
						<tr>
							<td>Subcaste (जात): </td><td>{{$user->subcaste}}</td>
						</tr>
						<tr>
							<td>Mother Tongue (मातृभाषा): </td><td>{{$user->mother_tongue}}</td>
						</tr>
						<tr>
							<td>Country (देश):</td>
							<td>{{$user->country_living}}</td>
						</tr>
						<tr>
							<td>DOB (जन्मदिनांक): </td><td>{{$user->reg_date}}</td>
						</tr>
					</tbody>
				</table>
				<!--End Table Striped-->
					
				</div>
				<div class="tab-pane fade in " id="education-{{$user->id}}">
				<h4><center>{{$user->name }}</center></h4>
					<!--Table Striped-->
					<table class="table table-striped">
						<tbody>
							<tr>
							<td>Post Graduation : </td>
							<td>{{$user->postgraduation}}</td>
							</tr>
							<tr>
								<td>Graduation :  </td>
								<td>{{$user->graduation}}</td>
							</tr>		
							<tr>
								<td>Current Employers Graduation :  </td>
								<td>{{$user->current_employer}}</td>
							</tr>										
							<tr>
								<td>Occupation : </td>
								<td> {{$user->occupation}}</td>
							</tr>
							<tr>
								<td>Employer In : </td>
								<td>{{$user->employerin}}</td>
							</tr>
							<tr>
								<td>Income : </td>
								<td>{{$user->income}}</td>
							</tr>
						</tbody>
					</table>
					<!--End Table Striped-->
				</div>
				
				<div class="tab-pane fade in" id="family-{{$user->id}}">
				<h4><center>{{$user->name }} </center></h4>
					<!--Table Striped-->
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>Father Occupation : </td><td>{{$user->fatheroccupation}}</td>
							</tr>
							<tr>
								<td>Mother  Occupation: </td><td> {{$user->fatheroccupation}}</td>
							</tr>
							<tr>
								<td>Parent Contact : </td><td>{{$user->parentcontact}}</td>
							</tr>
							<tr>
								<td>Family Type :</td><td> {{$user->familytype}}</td>
							</tr>
							<tr>
								<td>Family Value :</td><td> {{$user->familyvalue}}</td>
							</tr>
							<tr>
								<td>Family Status : </td><td>{{$user->familystatus}}</td>
							</tr>	
							<tr>
								<td>About My Family : </td><td>{{$user->aboutmyfamily}}</td>
							</tr>
							<tr>
								<td>Father : </td><td>{{$user->father}}</td>
							</tr>
							<tr>
								<td>Mother : </td><td>{{$user->mother}}</td>
							</tr>
							<tr>
								<td>Sister :</td><td> {{$user->sister}}</td>
							</tr>
							<tr>
								<td>Brother : </td><td>{{$user->brother}}</td>
							</tr>
						</tbody>
					</table>
					<!--End Table Striped-->
				</div>
				<div class="tab-pane fade in" id="hobbies-{{$user->id}}">
				<h4><center>{{$user->name }} </center></h4>
					<!--Table Striped-->
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>Hobbies :</td><td>{{$user->hobbies}}</td>
							</tr>
						</tbody>
					</table>
					<!--End Table Striped-->
				</div>
				<div class="tab-pane fade in" id="contact-{{$user->id}}">
				<h4><center>{{$user->name }} </center></h4>
					<!--Table Striped-->
					<table class="table table-striped">
						<tbody>
								@php
								$flag1 = '1';
								@endphp
							@foreach($userlogs as $userlog)

								 @if($userlog->accepted_id == $user->id && $userlog->flag == '0')
							        <tr>
										<td>Email :</td><td> {{$user->email}}</td>
									</tr>
									<tr>
										<td>Mobile No : </td><td>{{$user->mobileno}}</td>
									</tr>
								    @php
									$flag1 = '0';
									@endphp
									@else
									
							    @endif

							@endforeach
							@if($flag1=='1')
							 <tr><td><a href="/insertmatches/{{$user->id}}"><button type="submit" class="btn-u">View Contact</button></a></td></tr>
							@endif							 
						</tbody>
					</table>

				</div>
				<div class="tab-pane fade in" id="horoscope-{{$user->id}}">
				<h4><center>{{$user->name }}</center></h4>
					<!--Table Striped-->
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>Rashi :</td><td> {{$user->rashi}}</td>
							</tr>
							<tr>
								<td>Birth Place : </td><td>{{$user->birth_place}}</td>
							</tr>
							<tr>
								<td>Date of birth</td>
								<td>{{$user->birth_date}}</td>
							</tr>
							<tr>
								<td>Bith time : </td><td>{{$user->birth_time}}</td>
							</tr>
						</tbody>
					</table>
					<!--End Table Striped-->
				</div>
			</div>
		</div>
	</div>
	<!-- Tab v3 -->
	</div>
<!-- End Content -->
@endforeach
</div>
</div><!--/container-->
<!--=== End Content Part ===-->
@stop