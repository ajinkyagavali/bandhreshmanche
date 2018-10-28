+
@extends('layouts.default')

@section('content')

<script>

    $(function(){
      // bind change event to select isdeleted
      $('#isdeleted_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
     $(function(){
      // bind change event to select isAccepted
      $('#isAccepted_selected').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
     $(function(){
      // bind change event to select isAccepted
      $('#isPayment_selected').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
</script>



<!--=== Content Part ===-->
<div class="container content">
<div class="row">

<!-- Begin Content -->
<div class="col-md-12">
	<!--Basic Table-->
	<div class="panel panel-green margin-bottom-40">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-tasks"></i> Customer List</h3>
		</div>	
			<table class="table">

			<thead>
				<tr>
					<th>#</th>
					<th>Full Name </th>
					<th class="hidden-sm">Gender</th>
					<th>Marital Status</th>
					<th>Occupation</th>
					<th>Payment</th>
					<th>Full profile</th>
					<th>View</th>
					<th> Deleted </th>
				</tr>
			</thead>
 			<tbody>
					@foreach($users as $user)
				<tr>
					<td>{{$user->reg_id}}</td>
					<td>{{$user->name}} {{$user->mname}} {{$user->lname}}</td>
					<td>{{$user->gender}}</td>
					<td>{{$user->marital_status}}</td>
					<td>{{$user->occupation}}</td>
					 <td>
					 	<select id="isPayment_selected">
					 		<option value="/payment/{{$user->id}}" {{($user->ispayment == 1) ? 'selected':''}}>paid</option>
					 		<option value="/payment/{{$user->id}}" {{($user->ispayment == 0) ? 'selected':''}}> 
					 		Not Pay	</option>
					 	</select>
					</td>
					<td><a href="/profile/{{$user->id}}">View</a> </td>
					<td>
						<select id= "isAccepted_selected">
					 		<option value="/isaccepted/{{$user->id}}" {{($user->isAccepted == 1) ? 'selected':''}}>Viewed</option>
					 		<option value="/isaccepted/{{$user->id}}" {{($user->isAccepted == 0) ? 'selected':''}}> Not View </option>
					 	</select>
				    </td>
				    <td>
						<select id="isdeleted_select">
					 		<option value="/isdeleted/{{$user->id}}/{{$user->isdeleted}}" {{($user->isdeleted == 1) ? 'selected':''}}>Deleted</option>
					 		<option value="/isdeleted/{{$user->id}}/{{$user->isdeleted}}" {{($user->isdeleted == 0) ? 'selected':''}}> Active </option>
					 	</select>
				    </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!--End Basic Table-->
</div>
<!-- End Content -->

</div>
</div>

@stop