
@extends('layouts.default')

@section('content')
        <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
      <div class="container">
        <h1 class="pull-left">Enroll Us</h1>
      </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

  <!--=== Content Part ===-->
    <div class="container content">
      <div class="row">
<!-- Begin Content -->
<div class="col-md-3"></div>
        <div class="col-md-9">
  <!-- Comments -->
          <form action="/insert_personal" method="post" id="sky-form5" class="sky-form">
            {{csrf_field()}}
            <header>Profile</header>
<!--personal profile start-->
            <fieldset>
              <div class="row">
                <section class="col col-4">
                  <label class="label">First Name</label>
                  <label class="input">
                    <i class="icon-append fa fa-user"></i>
                    <input type="text" name="fname">
                  </label>
                </section>
		        		<section class="col col-4">
                  <label class="label">Middle Name</label>
                  <label class="input">
                    <i class="icon-append fa fa-user"></i>
                    <input type="text" name="mname">
                  </label>
                </section>

                <section class="col col-4">
                  <label class="label">SurName</label>
                  <label class="input">
                    <i class="icon-append fa fa-user"></i>
                    <input type="text" name="lname">
                  </label>
                </section>
              </div>

              <div class="row">
                <section class="col col-4">
                  <label class="label">DOB</label>
                  <label class="input">
                    <input type="date" name="dob">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Sub Cast</label>
                  <label class="input">
                    <input type="text" name="subcast">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Height</label>
                  <label class="input">
                    <input type="text" name="height">
                  </label>
                </section>
              </div>

                <div class="row">
                <section class="col col-4">
                  <label class="label">Complexion</label>
                  <label class="input">
                    <input type="text" name="complexion">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Weight</label>
                  <label class="input">
                    <input type="text" name="weight">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Physical Disabilities</label>
                  <label class="input">
                    <input type="text" name="physicaldisability">
                  </label>
                </section>
              </div>

              <div class="row">
                <section class="col col-4">
                  <label class="label">Marital Status</label>
                  <label class="input">
                    <input type="text" name="maritalstatus">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Blood group</label>
                  <label class="input">
                    <input type="text" name="bloodgroup">
                  </label>
                </section>

                <section class="col col-4">
                  <label class="label">Diet</label>
                  <label class="input">
                    <input type="text" name="diet">
                  </label>
                </section>
              </div>
    
   
                <label class="label">Gender </label>
                <div class="row">
                 <section name="gender">
                  <div class="col col-2">
                    <label class="radio"><input type="radio" name="radio" checked><i class="rounded-x"></i>Male</label>
                  </div>
                  <div class="col col-2">
                    <label class="radio"><input type="radio" name="radio"><i class="rounded-x"></i>Female</label>
                  </div>
                   </section>
                 </div>

            </fieldset>
          <!--personal profile end-->

          <!--horoscope start -->
           <header>Horoscope Details</header>

            <fieldset>
              <div class="row">
                <section class="col col-4">
                  <label class="label">Rashi</label>
                  <label class="input">
                    <input type="text" name="rashi">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Mangal</label>
                  <label class="input">
                    <input type="text" name="mangal">
                  </label>
                </section>

                <section class="col col-4">
                  <label class="label">Birth Place</label>
                  <label class="input">
                    <input type="text" name="birth_place">
                  </label>
                </section>
              </div>
                <div class="row">
                <section class="col col-4">
                  <label class="label">Birth Time</label>
                  <label class="input">
                    <input type="text" name="birth_time">
                  </label>
                </section>\
                </div>
              </fieldset>
              <!-- horoscope end-->

            <!--Education details start -->
           <header>Education Details</header>

            <fieldset>
              <div class="row">
                <section class="col col-4">
                  <label class="label">Eduation Area</label>
                  <label class="input">
                    <input type="text" name="education_area">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Income</label>
                  <label class="input">
                    <input type="text" name="income">
                  </label>
                </section>

                <section class="col col-4">
                  <label class="label"> Education</label>
                  <label class="input">
                    <input type="text" name="education">
                  </label>
                </section>
              </div>
                <div class="row">
                <section class="col col-4">
                  <label class="label">Occupation</label>
                  <label class="input">
                    <input type="text" name="occupation">
                  </label>
                </section>\
                </div>
              </fieldset>
              <!-- Education detail end-->

            <!--Address details start -->
           <header>Address Details</header>

            <fieldset>
              <div class="row">
                <section class="col col-4">
                  <label class="label">Address</label>
                  <label class="input">
                    <input type="text" name="address">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Country</label>
                  <label class="input">
                    <input type="text" name="country">
                  </label>
                </section>

                <section class="col col-4">
                  <label class="label"> City</label>
                  <label class="input">
                    <input type="text" name="city">
                  </label>
                </section>
              </div>
                <div class="row">
                <section class="col col-4">
                  <label class="label">Email</label>
                  <label class="input">
                    <input type="text" name="email">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">State</label>
                  <label class="input">
                    <input type="text" name="state">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Addhar</label>
                  <label class="input">
                    <input type="text" name="adhar">
                  </label>
                </section>
                </div>
              </fieldset>
              <!-- Address detail end-->

                <!--Family details start -->
           <header>Family Details</header>
            <fieldset>
              <div class="row">
                 <section name="father" class="col col-4">
                 <label class="label">Father </label>
                  <div class="col col-4">
                    <label class="radio"><input type="radio" name="radio" checked><i class="rounded-x"></i>Yes</label>
                  </div>
                  <div class="col col-4">
                    <label class="radio"><input type="radio" name="radio"><i class="rounded-x"></i>No</label>
                  </div>
                   </section>
                 <section name="mother" class="col col-4">
                 <label class="label">Mother </label>
                  <div class="col col-4">
                    <label class="radio"><input type="radio" name="radio1" checked><i class="rounded-x"></i>Yes</label>
                  </div>
                  <div class="col col-4">
                    <label class="radio"><input type="radio" name="radio1"><i class="rounded-x"></i>No</label>
                  </div>
                   </section>
                  </div>

                <div class="row">
                <section class="col col-4">
                  <label class="label">Brother</label>
                  <label class="input">
                    <input type="text" name="brother">
                  </label>
                </section>
                  <section class="col col-4">
                  <label class="label">Sister</label>
                  <label class="input">
                    <input type="text" name="sister">
                  </label>
                </section>
                </div>              
              </fieldset>
              <!-- Family detail end-->

    <!--Expecation details start -->
           <header>Expecation Details</header>

            <fieldset>
              <div class="row">
                <section class="col col-4">
                  <label class="label">Mangal</label>
                  <label class="input">
                    <input type="text" name="mangal">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Preferred Cities</label>
                  <label class="input">
                    <input type="text" name="preferred_cities">
                  </label>
                </section>

                <section class="col col-4">
                  <label class="label"> Education</label>
                  <label class="input">
                    <input type="text" name="education">
                  </label>
                </section>
              </div>
                <div class="row">
                <section class="col col-4">
                  <label class="label">Expected Caste</label>
                  <label class="input">
                    <input type="text" name="expected_caste">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Expected Height</label>
                  <label class="input">
                    <input type="text" name="expected_height">
                  </label>
                </section>
                <section class="col col-4">
                  <label class="label">Age Difference</label>
                  <label class="input">
                    <input type="text" name="age_difference">
                  </label>
                </section>
                </div>
              </fieldset>
              <!-- Expecation detail end-->
            <footer>
              <button type="submit" name="submit" class="button">Submit</button>
            </footer>

            <div class="message">
              <i class="rounded-x fa fa-check"></i>
              <p>Your comment was successfully added!</p>
            </div>
          </form>
          <!-- End Comments-->
</div>
        <!-- End Content -->
 </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->
@stop