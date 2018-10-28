@extends('layouts.default')

@section('content')

<!--=== Content Part ===-->
<div class="container content">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <form class="reg-page"  action="{{ route('login') }}" method="post">
             {{ csrf_field() }}
                <div class="reg-header"><h2>Login to your account</h2></div>

                <div class="input-group margin-bottom-20 {{ $errors->has('email') ? ' has-error' : '' }}" >
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" name="email"  placeholder="Username" class="form-control" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="input-group margin-bottom-20 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" placeholder="Password" name="password" class="form-control">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                </div>

                <div class="row">
                    <div class="col-md-6 checkbox">
                        <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Stay signed in</label>
                    </div>
                    <div class="col-md-6">
                        <button class="btn-u pull-right" type="submit">Login</button>
                    </div>
                </div>

                <hr>

                <h4>Forget your Password ?</h4>
                <p>no worries, <a class="color-green" href="{{ route('password.request') }}">click here</a> to reset your password.</p>

                <p> New User Register <a href="{{ route('register') }}"> Click Here</a></p>
            </form>
        </div>
    </div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->
@endsection
