@extends('layouts.sidebar_profile')
@section('content')

@foreach($users as $user)
  <!-- Basic information -Form -->
  <form action="/profile_image_upload" method="post"  enctype="multipart/form-data" id="sky-form4" class="sky-form" >
  {!! csrf_field() !!}
    <header>Profile Information</header>
  <fieldset>
  <section>
    <div class="row">
      <label class="label col col-4">Profile created by * (द्वारा निर्मित प्रोफाइल)</label>
      <div class="col col-8">
         <label class="input">
          <i class="icon-append fa fa-user"></i>
          <input type="text" name="profileby" value="{{$user->profileby}}" disabled >
        </label>
  
      </div>
    </div>
  </section>

  <section>
    <div class="row">
      <label class="label col col-4">First Name * (पहिले नाव)</label>
      <div class="col col-8">
        <label class="input">
          <i class="icon-append fa fa-user"></i>
          <input type="text" name="name" value="{{$user->name}}" disabled  >
        </label>
      </div>
    </div>
  </section>

  <section>
    <div class="row">
      <label class="label col col-4">Middle Name *(मधले नाव)</label>
      <div class="col col-8">
        <label class="input">
          <i class="icon-append fa fa-user"></i>
          <input type="text" name="mname" value="{{$user->mname}}" disabled >
        </label>
      </div>
    </div>
  </section>

  <section>
    <div class="row">
      <label class="label col col-4">Last Name * (आडनाव)</label>
      <div class="col col-8">
        <label class="input">
          <i class="icon-append fa fa-user"></i>
          <input type="text" name="lname" value="{{$user->lname}}" disabled >
        </label>
      </div>
    </div>
  </section>

  <section>
    <div class="row">
      <label class="label col col-4">Mobile No. * (मोबाइल)</label>
      <div class="col col-8">
        <label class="input">
          <i class="icon-append fa fa-phone"></i>
          <input type="text" name="mobileno" value="{{$user->mobileno}}" disabled >
        </label>
      </div>
    </div>
  </section>

  <section>
    <div class="row">
      <label class="label col col-4">Gender * (लिंग)</label>
      <div class="col col-8">
         <label class="input">
          <input type="text" name="gender" value="{{$user->gender}}" disabled >
        </label>
      </div>
    </div>
  </section>
          
  <section>
    <div class="row">
      <label class="label col col-4">Marital Status * (वैवाहिक स्थिती)</label>
      <div class="col col-8">
         <label class="input">
          <input type="text" name="marital_status" value="{{$user->marital_status}}" disabled >
        </label>
      </div>
    </div>
  </section>    

  <section>
    <div class="row">
      <label class="label col col-4">Subcaste * (जात)</label>
      <div class="col col-8">
        <label class="input">
          <input type="text" name="subcaste" value="{{$user->subcaste}}" disabled >
        </label>
      </div>
    </div>
  </section>

    <section>
    <div class="row">
      <label class="label col col-4">Mother Tongue * (मातृभाषा)</label>
      <div class="col col-8">
        <label class="input">
          <input type="text" name="mother_tongue" value="{{$user->mother_tongue}}" disabled >
        </label>
      </div>
    </div>
  </section>

  <section>
    <div class="row">
      <label class="label col col-4">Country living in * (देश)</label>
      <div class="col col-8">
         <label class="input">
          <input type="text" name="country_living" value="{{$user->country_living}}" disabled >
        </label>
      </div>
    </div>
  </section>

  <section>
    <div class="row">
      <label class="label col col-4">DOB * (जन्मदिनांक)</label>
      <div class="col col-8">
      <label class="input">
        <i class="icon-append fa fa-calendar"></i>
        <input type="text" name="date" value="{{$user->reg_date}}" disabled>
      </label>
      </div>
    </div>
  </section>

  <section>
  <div class="row">
  <label class="label col col-4">Email * (ईमेल)</label>
  <div class="col col-8">
    <label class="input">
      <i class="icon-append fa fa-envelope"></i>
      <input type="email" name="email" value="{{$user->email}}" disabled>
    </label>
  </div>
  </div>
  </section>

    <section>
  <div class="row">
  <label class="label col col-4">Description (वर्णन)</label>
  <div class="col col-8">
    <label class="input">
  
     <textarea rows="4" name="description" style={width:100%} >{{$user->description}}</textarea>
    </label>
  </div>
  </div>
  </section>
  
  <section>
  <div class="row">
  <label class="label col col-4">Profile Photo * (प्रोफाइल फोटो)</label>
  <div class="col col-8">
    <label class="input">
      <i class="icon-append fa fa-file"></i>
      <input type="file" name="file" >
    </label>
  </div>
  </div>
  </section>
<section>
  <div class="row">
  <label class="label col col-4">View Photo * (प्रोफाइल फोटो)</label>
  <div class="col col-8">
    <label class="input">     
  <img alt="" class="pull-left src-image" src="{{ asset($user->photo ) }}">
    </label>
  </div>
  </div>
  </section>

   </fieldset>

    <footer>
      <button type="submit" class="btn-u">Save</button>
    </footer>
  </form>

<!-- End Basic Information-Form -->
@endforeach
@stop