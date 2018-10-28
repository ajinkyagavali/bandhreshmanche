@extends('layouts.sidebar_profile')
@section('content')
@foreach($users as $user)


<!-- Basic information -Form -->
<form action="/update_family" id="sky-form4" class="sky-form">
<header>Family Details</header>

<fieldset>

<section>
<div class="row">
<label class="label col col-4">Father Occupation (पिता व्यवसाय)</label>
<div class="col col-8">
<label class="input">
  <input type="text" name="fatheroccupation" value="{{$user->fatheroccupation}}">
</label>
</div>
</div>
</section> 

<section>
<div class="row">
<label class="label col col-4">Mother Occupation (आईचा व्यवसाय)</label>
<div class="col col-8">
<label class="input">
  <input type="text" name="motheroccupation" value="{{$user->motheroccupation}}">
</label>
</div>
</div>
</section> 

<section>
<div class="row">
<label class="label col col-4">Parent's Contact (पालकांचे संपर्क)</label>
<div class="col col-8">
<label class="input">
  <i class="icon-append fa fa-phone"></i>
  <input type="text" name="parentcontact" value="{{$user->parentcontact}}">
</label>
</div>
</div>
</section>


<section>
<div class="row">
<label class="label col col-4">Family Value (कौटुंबिक मूल्य)</label>
<div class="col col-8">
<label class="select">
<select name="familyvalue">
  <option value="0" selected >Moderate</option>
  <option value="Orthodox">Orthodox</option>
  <option value="Traditional">Traditional</option>
  <option value="Moderate"> Moderate</option>
  <option value="Liberal">Liberal  </option>
</select>                   
</label>
</div>
</div>
</section>

<section>
<div class="row">
<label class="label col col-4">Family Type (कौटुंबिक प्रकार)</label>
<div class="col col-8">
<label class="select">
<select name="familytype">
  <option value="JointFamily" selected >Joint Family </option>
  <option value="NuclearFamily">Nuclear Family</option>
</select>                   
</label>
</div>
</div>
</section>

<section>
<div class="row">
<label class="label col col-4">Family Status (कौटुंबिक स्थिती)</label>
<div class="col col-8">
<label class="select">
<select name="familystatus">
  <option value="Middle" selected >Middle Class </option>
  <option value="UpperMiddleClass">Upper Middle Class</option>
  <option value="Rich">Rich / Affluent</option>
</select>                   
</label>
</div>
</div>
</section>



<section>
<div class="row">
<label class="label col col-4">Father Name* (वडीलांचे नावं)</label>
<div class="col col-8">
<label class="input">
  <i class="icon-append fa fa-user"></i>
  <input type="text" name="father" value="{{$user->father}}">
</label>
</div>
</div>
</section>

<section>
<div class="row">
<label class="label col col-4">Mother Name* (आईचे नाव)</label>
<div class="col col-8">
<label class="input">
  <i class="icon-append fa fa-user"></i>
  <input type="text" name="mother" value="{{$user->mother}}">
</label>
</div>
</div>
</section>


<section>
<div class="row">
<label class="label col col-4">No. of Brothers* (ब्रदर्सची संख्या)</label>
<div class="col col-8">
<label class="input">
  <input type="text" name="brother" value="{{$user->brother}}">
</label>
</div>
</div>
</section>

<section>
<div class="row">
<label class="label col col-4">No. of sister* (बहीणांची संख्या)</label>
<div class="col col-8">
<label class="input">
  <input type="text" name="sister" value="{{$user->sister}}">
</label>
</div>
</div>
</section>

<section>
<label class="label">About My Family (माझ्या कुटुंबाबद्दल)</label>
<label class="textarea">
<i class="icon-append fa fa-comment"></i>
<textarea rows="4" name="aboutmyfamily" value="{{$user->aboutmyfamily}}"></textarea>
</label>
</section> 

</fieldset>

<footer>
<button type="submit" class="btn-u">Save</button>
</footer>
</form>
              <!-- End Basic Information-Form -->
@endforeach
@stop