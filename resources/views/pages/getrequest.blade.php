@extends('layouts.default')
@section('content')

<style type="text/css">
	.circle
	{
	  display: inline-block; 
	  min-width: 10px;   
	  padding: 3px 7px;    
	  font-size: 12px; 
	  font-weight: 700;
	  line-height: 1;    
      color: #fff;  
      text-align: center;
      white-space: nowrap; 
      vertical-align: middle;  
      background-color:#2ecc71; 
      border-radius: 30px; 
       }
</style>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
<div class="container">
<h1 class="pull-left">Request   
 @foreach($countreqs as $countreq)
 @if($countreq)
 <span   class="circle"> {{$countreq->countreqt}}</span>
 @endif
   @endforeach</h1>
</div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
<div class="row">

<!-- Begin Content -->
<div class="col-md-12">
	<!--Basic Table-->
	<div class="panel panel-green margin-bottom-40">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-tasks"></i> Request List</h3>
			</div>			
		<table class="table">

			<thead>
				<tr>
					<!-- <th>User Log Id </th> -->
					<th >Request Id</th>
					<!-- <th>Accepted Id</th> -->
					<!-- <th>Flag</th> -->
					<th>view</th>
				</tr>
			</thead>
			<tbody>
					@foreach($userlogs as $userlog)
					<tr>
						<!-- <td>{{$userlog->user_log_id}}</td> -->
						<td><a href="/profile/{{$userlog->accepted_id}}">{{$userlog->name}} {{$userlog->lname}} </a></td>
						<!-- <td>{{$userlog->accepted_id}}</td> -->
						<!-- <td>{{$userlog->flag}}</td> -->
						<td><a href="/update_matches/{{$userlog->user_log_id}}">Accept</a> </td>
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