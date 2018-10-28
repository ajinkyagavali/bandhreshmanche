@extends('layouts.sidebar_profile')
@section('content')
@foreach($users as $user)
<!-- Basic information -Form -->
<form action="/update_horoscope" id="sky-form4" class="sky-form">
<header>Horoscope Details</header>

<fieldset>
   <section>
     <div class="row">
     <label class="label col col-4">Rashi (रशी)</label>
       <div class="col col-8">
     <label class="input">
        <input type="text" name="rashi" value="{{$user->rashi}}">
   </label>
     </div>
   </div>
   </section>
             
   <section>
     <div class="row">
     <label class="label col col-4">Birth Place (जन्मस्थान)</label>
       <div class="col col-8">
     <label class="input">
        <input type="text" name="birth_place" value="{{$user->birth_place}}">
   </label>
     </div>
   </div>
 </section>

   <section>
     <div class="row">
     <label class="label col col-4">Date of Birth (जन्म तारीख)</label>
       <div class="col col-8">
     <label class="input">
        <input type="text" name="birth_date" value="{{$user->birth_date}}">
   </label>
     </div>
   </div>
   </section>

   <section>
     <div class="row">
     <label class="label col col-4">Birth Time  (जन्म वेळ)</label>
       <div class="col col-8">
     <label class="input">
        <input type="text" name="birth_time" value="{{$user->birth_time}}">
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