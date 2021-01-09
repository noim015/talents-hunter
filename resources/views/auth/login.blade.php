@extends('layouts.app')

@section('content')



<div class="logbody" style="background-image: url('images/hero_2.jpg');background-size:cover;background-repeat:no-repeat;background-position:center center;" data-aos="fade" data-stellar-background-ratio="0.5">

<div class="container">
    <div class="row">
      <div class="col-md-2"></div>
     
        <div class="col-md-8 loginbody">
           
                

               
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-search btn-primary btn-block">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
               
            
        </div>

        <div class="col-md-2"></div>
    </div>
</div>
<div style="height: 113px;"></div>

</div>
<footer style="background:#000;color:#fff;text-align:center;padding:20px 0">
      <p>
         Copyright &copy;  by <a href="#" target="_blank" >Imtiaz</a>
      </p>
    </footer>
@endsection
