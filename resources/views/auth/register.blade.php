@extends('layouts.default')

@section('content')
<!--container-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="row">
    <!-- Begin Content -->
        <div class="col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <!-- Reg-Form -->
            <form  action="{{ route('register') }}" method="post" id="sky-form4" class="sky-form">
                {{ csrf_field() }}
            <header>Registration form</header>

            <fieldset>

                <section>
                    <div class="row">
                        <label class="label col col-4">Profile Created By* (द्वारा निर्मित प्रोफाइल)</label>
                        <div class="col col-8 {{ $errors->has('profileby') ? ' has-error' : '' }}">
                            <label class="select">
                                <select name="profileby"  value="{{ old('profileby') }}" required>
                                   <option value="0" selected>Select</option>
                                    <option value="self">self</option>
                                    <option value="Parents">Parents</option>
                                    <option value="Sibling" >Sibling</option>
                                    <option value="Relative">Relative</option>
                                    <option value="Friends">Friends</option>
                                </select>  
                                 @if ($errors->has('profileby'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('profileby') }}</strong>
                                    </span>
                                @endif                                     
                            </label>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <label class="label col col-4">First Name * (नाव)</label>
                        <div class="col col-8 {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="input">
                                <i class="icon-append fa fa-user"></i>
                                <input type="text" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </label>
                        </div>
                    </div>
                </section>
                
                <section>
                    <div class="row">
                        <label class="label col col-4">Middle Name * (वडील)</label>
                        <div class="col col-8 {{ $errors->has('mname') ? ' has-error' : '' }}">
                            <label class="input">
                                <i class="icon-append fa fa-user"></i>
                                <input type="text" name="mname" value="{{ old('mname') }}" required autofocus>
                                @if ($errors->has('mname'))
                                    <span class="help-block">
                                       <strong>{{ $errors->first('mname') }}</strong>
                                    </span>
                                @endif
                            </label>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <label class="label col col-4">Last Name * (आडनाव)</label>
                        <div class="col col-8 {{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label class="input">
                                <i class="icon-append fa fa-user"></i>
                                <input type="text" name="lname" value="{{ old('lname') }}" required autofocus>
                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                       <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </label>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <label class="label col col-4">Mobile No. * (मोबाइल)</label>
                        <div class="col col-8 {{ $errors->has('mobileno') ? ' has-error' : '' }}">
                            <label class="input">
                                <i class="icon-append fa fa-phone"></i>
                                <input type="text" name="mobileno" value="{{ old('mobileno') }}" required autofocus>
                               @if ($errors->has('mobileno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobileno') }}</strong>
                                    </span>
                                @endif
                            </label>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <label class="label col col-4">Gender * (लिंग)</label>
                        <div class="col col-8 {{ $errors->has('gender') ? ' has-error' : '' }}">
                           <label class="select">
                            <select name="gender"  value="{{ old('gender') }}" required>
                                <option value="0" selected disabled>Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>  
                             @if ($errors->has('gender'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                            @endif                                     
                        </label>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <label class="label col col-4">Marital Status * (वैवाहिक स्थिती)</label>
                        <div class="col col-8 {{ $errors->has('marital_status') ? ' has-error' : '' }}">
                           <label class="select">
                            <select name="marital_status"  value="{{ old('marital_status') }}" required>
                                <option value="0" selected disabled>Select</option>
                                <option value="unmarried">Unmarried</option>
                                <option value="widow">Widow / Widower</option>
                                <option value="divorced">Divorced</option>
                                <option value="saparated">Saparated</option>
                            </select>  
                             @if ($errors->has('marital_status'))
                                <span class="help-block">
                                <strong>{{ $errors->first('marital_status') }}</strong>
                                </span>
                            @endif                                     
                    </label>
                    </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <label class="label col col-4">Subcaste * (जात)</label>
                        <div class="col col-8 {{ $errors->has('subcaste') ? ' has-error' : '' }}">
                           <label class="select">
                            <select name="subcaste"  value="{{ old('subcaste') }}" required>
                                <option value="0" selected disabled>Select</option>
                                <option value="kunbi">Kunbi</option>
                                <option value="kunbi-maratha">Kunbi-maratha</option>
                                <option value="maratha">maratha</option>
                                <option value="marath96">maratha 96</option>
                            </select>  
                             @if ($errors->has('subcaste'))
                                <span class="help-block">
                                <strong>{{ $errors->first('subcaste') }}</strong>
                                </span>
                            @endif                                     
                    </label>
                    </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <label class="label col col-4">Mother Tongue * (मातृभाषा)</label>
                        <div class="col col-8 {{ $errors->has('mother_tongue') ? ' has-error' : '' }}">
                           <label class="select">
                            <select name="mother_tongue"  value="{{ old('mother_tongue') }}" required>
                                <option value="0" selected disabled>Select</option>
                                <option value="marathi">Marathi</option>
                                <option value="hindi">Hindi</option>
                            </select>  
                             @if ($errors->has('mother_tongue'))
                                <span class="help-block">
                                <strong>{{ $errors->first('mother_tongue') }}</strong>
                                </span>
                            @endif                                     
                    </label>
                    </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <label class="label col col-4">Country living in * (देश)</label>
                        <div class="col col-8 {{ $errors->has('country_living') ? ' has-error' : '' }}">
                           <label class="select">
                            <select name="country_living"  value="{{ old('country_living') }}" required>
                                <option value="0" selected disabled>Select</option>
                                <option value="india">India</option>
                            </select>  
                             @if ($errors->has('country_living'))
                                <span class="help-block">
                                <strong>{{ $errors->first('country_living') }}</strong>
                                </span>
                            @endif                                     
                    </label>
                    </div>
                    </div>
                </section>
                
                <section>
                    <div class="row">
                        <label class="label col col-4">Date of  Birth * (जन्मदिवस)</label>
                        <div class="col col-8 {{ $errors->has('reg_date') ? ' has-error' : '' }}">
                            <label class="input">
                                <input type="Date" name="reg_date" value="{{ old('reg_date') }}" required autofocus>
                                   @if ($errors->has('reg_date'))
                                <span class="help-block">
                                <strong>{{ $errors->first('reg_date') }}</strong>
                                </span>
                            @endif
                            </label>
                        </div>
                    </div>
                </section>
                 <section>
                    <div class="row">
                        <label class="label col col-4">Adhar Card No. * (आधार)</label>
                        <div class="col col-8 {{ $errors->has('adharcardno') ? ' has-error' : '' }}"">
                            <label class="input">
                                <input type="number" name="adharcardno" value="{{ old('adharcardno') }}" required>
                            @if ($errors->has('adharcardno'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('adharcardno') }}</strong>
                                </span>
                            @endif
                            </label>
                        </div>
                    </div>
                </section>

                    <section>
                    <div class="row">
                        <label class="label col col-4">Email * (ईमेल)</label>
                        <div class="col col-8 {{ $errors->has('email') ? ' has-error' : '' }}"">
                            <label class="input">
                                <i class="icon-append fa fa-envelope"></i>
                                <input type="email" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </label>
                        </div>
                    </div>
                </section>
                
                <section>
                    <div class="row">
                        <label class="label col col-4">Password * (पैस्वर्ड)</label>
                        <div class="col col-8 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="input">
                                <input type="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </label>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <label class="label col col-4">Confirm Password * (पुन्हा पासवर्ड)</label>
                        <div class="col col-8">
                            <label class="input">
                                <input type="password" name="password_confirmation" required>
                            </label>
                        </div>
                    </div>
                </section>

                <section>
                    <label class="checkbox">
                        <input type="checkbox" name="terms" id="terms" value="Yes"><i></i>I agree with the Terms and Conditions
                    </label>
                </section>
            </fieldset>
                
            <footer>    
                <button type="submit" class="btn-u">Register</button>
            </footer>
            </form>
            <!-- End Reg-Form -->
             <p> Already Register <a href="{{ route('login') }}"> Click Here</a></p>
        </div>
    </div>
<!-- End Content -->
</div>
<!--/container-->
@endsection
