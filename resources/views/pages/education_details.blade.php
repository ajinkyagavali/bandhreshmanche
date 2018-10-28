@extends('layouts.sidebar_profile')
@section('content')

@foreach($users as $user)

  <!-- Basic information -Form -->
  <form action="/insert_education"  id="sky-form4" class="sky-form">
   
    <header>Education & Occupation</header>

    <fieldset>
      <section>
        <div class="row">
          <label class="label col col-4">Last College Name (अंतिम कॉलेज नाव)</label>
          <div class="col col-8">
            <label class="input">
              <input type="text" name="lastcollegename" value="{{$user->lastcollegename}}">
            </label>
          </div>
        </div>
      </section>

      <section>
        <div class="row">
          <label class="label col col-4">Post Graduation (पदव्युत्तर शिक्षण</label>
          <div class="col col-8">
            <label class="input">
              <input type="text" name="postgraduation" value="{{$user->postgraduation}}">
            </label>
          </div>
        </div>
      </section>
      
       <section>
        <div class="row">
          <label class="label col col-4">Graduation (पदवी)</label>
          <div class="col col-8">
            <label class="input">
              <input type="text" name="graduation" value="{{$user->graduation}}">
            </label>
          </div>
        </div>
      </section>

      <section>
        <div class="row">
          <label class="label col col-4">Employe In (मध्ये कर्मचारी)</label>
          <div class="col col-8">
          <label class="select ">
            <select name="employerin">
              <option value="0" selected>Select</option>
              <option value="Government ">Government </option>
              <option value="Defence">Defence</option>
              <option value="Private" >Private     </option>
              <option value="Business">Business</option>
              <option value="SelfEmployed">Self Employed</option>
              <option value="NotWorking">Not Working</option>
            </select>                 
          </label>
          </div>
        </div>
      </section>

      <section>
        <div class="row">
          <label class="label col col-4">Current Employer (वर्तमान नियोक्ता)</label>
          <div class="col col-8">
            <label class="input">
              <input type="text" name="current_employer" value="{{$user->current_employer}}">
            </label>
          </div>
        </div>
      </section>
      
     <section>
        <div class="row">
          <label class="label col col-4">Occupation (व्यवसाय)</label>
          <div class="col col-8">
            <label class="input">
              <input type="text" name="occupation" value="{{$user->occupation}}">
            </label>
          </div>
        </div>
      </section> 
    
      .<section>
        <div class="row">
          <label class="label col col-4">Income (मिळकत)</label>
          <div class="col col-8">
            <label class="input">
              <input type="text" name="income" value="{{$user->income}}" placeholder="Annual">
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