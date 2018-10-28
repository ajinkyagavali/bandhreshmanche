@extends('layouts.default')
@section('content')
<!-- start page  -->

  <!-- Basic information -Form -->
  <form action="/index_photo_upload" method="post"  enctype="multipart/form-data" id="sky-form4" class="sky-form" >
  {!! csrf_field() !!}
    <header>Profile Information</header>
  <fieldset>

<section>
  <div class="row">
  <label class="label col col-3">Profile Photo * (प्रोफाइल फोटो)</label>
  <div class="col col-6">
    <label class="input">
      <i class="icon-append fa fa-file"></i>
      <input type="file" name="file" >
    </label>
  </div>
  </div>
  </section>
  <section>
 <button type="submit" class="btn-u">Save</button>
</section>
  
<section>
    <div class="row">

<!-- Begin Content -->
<div class="col-md-8">
  <div class="panel panel-green margin-bottom-40">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-tasks"></i> photo List</h3>
      </div>  
    <table class="table">

      <thead>
        
      </thead>
      <tbody>
          @foreach($slider_urls as $slider_url)
          <tr>
           
            <td  style="height:150px; width: 1%; "><img src="{{$slider_url->path }}"  style="height:150px; width: 19%; "></td>
            
            <td><a href="/admin_page/{{$slider_url->id}}">Edit</a> </td>
             <td><a href="/admin_page/{{$slider_url->id}}">Delet</a> </td>
          </tr>
          @endforeach
      </tbody>
</table>
</div>

</div>
</div>
</section>
 </fieldset>
    <footer>
      
    </footer>
  </form>


<!-- End Basic Information-Form -->

<!--  end page  -->
  @stop