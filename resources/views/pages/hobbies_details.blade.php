@extends('layouts.sidebar_profile')
@section('content')

@foreach($users as $user)
              <!-- Basic information -Form -->
              <form action="/update_hobbies" id="sky-form4" class="sky-form">
                <header>Hobbies & Interest</header>

                <fieldset>
<section>
<div class="row">
  <label class="label col col-4">Hobbies (छंद)</label>
  <div class="col col-8">
    <label class="input">
      <input type="text" name="hobbies" value="{{$user->hobbies}}">
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