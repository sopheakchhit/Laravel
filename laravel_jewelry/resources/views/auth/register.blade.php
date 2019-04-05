@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <center> <img src="/assets/img/HLG2.png" width="250" height="130"></center><br>
            <div class="panel panel-primary">
                <div class="panel-heading">Create Accout <i class="fa fa-fw fa fa-user-plus"></i></div>

                <div class="panel-body">
                    
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" 
                    enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
                            <label for="name" class="col-md-4 control-label">
                            Name : <i class="fa fa-fw fa-user"></i> </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">
                            Address :  <i class="fa fa-fw fa fa-institution"></i></label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" 
                                value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">
                            Phone Number :  <i class="fa fa-fw fa fa-phone-square"></i></label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" 
                                value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">
                            E-Mail Address :  <i class="fa fa-fw fa fa-envelope"></i></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">
                            Password :  <i class="fa fa-fw fa fa-question-circle"></i></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">
                             Confirm Password : <i class="fa fa-fw fa fa-retweet"></i></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">
                            </label>
                            <div class="col-md-6 col-md-offset-4">
                            <input type="submit" class="form-control btn btn-primary" 
                             value="CREATE NOW">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
