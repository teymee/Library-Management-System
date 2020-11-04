@extends('admin.layout1')


@section('content')

    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>Vali</h1>
        </div>
        <div class="login-box" style= "padding: 150px; height: 900px;  border-radius: 20px" >

            <form class="login-form" method="POST" action="{{ route('register') }}">
@csrf
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i><i> USER SIGN UP</i></h3>

                <div class="form-group">
                    <label class="control-label">Firstname:</label>
                    <input class="form-control @error('firstname') is-invalid @enderror" id="firstname" type="text"  name="firstname"
                           value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="control-label">Lastname:</label>
                    <input class="form-control @error('lastname') is-invalid @enderror" id="lastname" type="text"  name="lastname"
                           value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="control-label">User ID <small>(Important)</small>:</label>
                    <input  class="form-control @error('user_id') is-invalid @enderror"  name="user_id"  value="{{uniqid()}}"  readonly id="user_id" type="text"
                           required autofocus>


                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label class="control-label">Email:</label>
                    <input  class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="control-label">Phone no:</label>
                    <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text"  name="phone"
                           value="{{ old('phone') }}"  autocomplete="phone" autofocus>

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>



                <div class="form-group">
                    <label class="control-label">Address:</label>
                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" type="text"  name="address"
                     required autocomplete="address" autofocus>{{ old('address') }}</textarea>

                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
{{--                    <input class="form-control" type="text" placeholder="Address" name="address" value=" " required autofocus>--}}
                </div>

                <div class="form-group">
                    <label class="control-label">Password:</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                           name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group p_star">
                    <label class="control-label">Confirm Password:</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password-confirm"
                           name="password_confirmation" required autocomplete="new-password">

                </div>
                <br>

                <div class="form-group">
{{--                    <div class="utility">--}}
{{--                        <div class="animated-checkbox">--}}
{{--                            <label>--}}
{{--                                <input type="checkbox"><span class="label-text">Stay Signed in</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block" name="user_sign_up"><i class="fa fa-sign-in fa-lg fa-fw"></i>{{ __('Register') }}</button>

                </div>

            </form>

            <form class="forget-form" action="index.html">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
                <div class="form-group">
                    <label class="control-label">EMAIL</label>
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
                </div>
            </form>

        </div>
    </section>

@endsection








{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
