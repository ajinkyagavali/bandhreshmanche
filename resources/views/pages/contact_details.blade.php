@extends('layouts.sidebar_profile')
@section('content')

@foreach($users as $user)
<form action="#" id="sky-form4" class="sky-form">
<header>Contact Details</header>

<fieldset>

<section>
    <div class="row">
      <label class="label col col-4">Country Living In (देशातील राहण्याची)</label>
      <div class="col col-8">
      <label class="select ">
        <select>
          <option value="0" selected>Select</option>
          <option value="1">India</option>
        </select>                 
      </label>
      </div>
    </div>
  </section>

 <section>
    <div class="row">
      <label class="label col col-4">Residing State  (राज्य राहात असलेले)</label>
      <div class="col col-8">
      <label class="select ">
        <select>
          <option value="0" selected>Select</option>
          <option value="1">Maharashtra</option>
        </select>                 
      </label>
      </div>
    </div>
  </section>

   <section>
    <div class="row">
      <label class="label col col-4">Residing District / City (जिल्हा राहात असलेले) </label>
      <div class="col col-8">
      <label class="select ">
        <select>
          <option value="0" selected>Select</option>
          <option value="1">Ahmednagar</option>
          <option value="2">Akola</option>
 <option value="3">Amravati</option>
 <option value="4">Aurangabad</option>
 <option value="5">Beed</option>
 <option value="6">Bhandara</option>
 <option value="7">Buldhana</option>
 <option value="8">Chandrapur</option>
 <option value="9">Dhule</option>
 <option value="10">Gadchiroli</option>
 <option value="11">Gondia</option>
 <option value="12">Hingoli</option>
 <option value="13">Jalgaon</option>
 <option value="14">Jalna</option>
 <option value="15">Kolhapur</option>
 <option value="16">Latur</option>
 <option value="17">Mumbai City</option>
 <option value="18">Mumbai Suburban</option>
 <option value="19">Nagpur</option>
 <option value="21">Nanded</option>
 <option value="22">Nandurbar</option>
 <option value="23">Nashik</option>
 <option value="24">Osmanabad</option>
 <option value="24">Palghar</option>
 <option value="25">Parbhani</option>
 <option value="26">Pune</option>
 <option value="27">Raigad</option>
 <option value="28">Ratnagiri</option>
 <option value="29">Sangli</option>
 <option value="30">Satara</option>
 <option value="31">Sindhudurg</option>
 <option value="32">Solapur</option>
 <option value="33">Thane</option>
 <option value="34">Wardha</option>
 <option value="35">Washim</option>
 <option value="36">Yavatmal</option>
        </select>                 
      </label>
      </div>
    </div>
  </section>

   <section>
    <div class="row">
      <label class="label col col-4">Citizenship (नागरिकत्व)</label>
      <div class="col col-8">
      <label class="select ">
        <select>
          <option value="0" selected>Select</option>
          <option value="1">India</option>                          
        </select>                 
      </label>
      </div>
    </div>
  </section>
                   <section>
                        <div class="row">
                            <label class="label col col-4">Email Id (ई - मेल आयडी)</label>
                            <div class="col col-8">
                                <label class="input">
                                    <i class="icon-append fa fa-envelope"></i>
                                    <input type="email" name="email" value="{{$user->email}}">
                                </label>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="row">
                            <label class="label col col-4">Contact No (संपर्क क्रमांक)</label>
                            <div class="col col-8">
                                <label class="input">
                                    <i class="icon-append fa fa-phone"></i>
                                    <input type="text" name="mobileno" value="{{$user->mobileno}}">
                                </label>
                            </div>
                        </div>
                    </section>

</fieldset>

<footer>
  <button type="submit" class="btn-u">Save</button>
</footer>
</form>
@endforeach
@stop