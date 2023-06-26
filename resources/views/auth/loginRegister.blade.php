@extends('admin.layouts.base')

@section('content')
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="mainContainer">
            <div class="formPage">
                <nav class="formCtlBlock">
                    <a href="{{ route("login") }}" class="loginBtn  {{ Str::startsWith(Route::currentRouteName(), 'login') ? 'active' : '' }}" ><span>{{ __('Login') }}</span></a>
                    <a href="{{ route('register') }}" class="registerBtn  {{ Str::startsWith(Route::currentRouteName(), 'register') ? 'active' : '' }}" ><span>{{ __('Register') }}</span></a>
                </nav>
                <div class="login formBlock {{ Str::startsWith(Route::currentRouteName(), 'login') ? 'active' : '' }}" id="tab-1">
                    <form name="loginform" method="POST" action="{{ route('login') }}">
                        @csrf
                        <p>{{ __('Login to your account:') }}</p>
                        <div class="form-group">
                            <input type="email" name="email" id="eamil" placeholder="email" autocomplete="email"
                                autofocus class="@error('email') is-invalid @enderror" />

                            @error('email')
                                <p class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password"  placeholder="Password"
                                class=" @error('password') is-invalid @enderror" autocomplete="current-password" />
                            @error('password')
                                <p class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>

                        <div class="form-group remember-block">
                            <label class="" for="remember"> {{ __('Remember Me') }} </label>
                            <input class="" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }} />
                        </div>

                        <div class="form-group alignRight">
                            @if (Route::has('password.request'))
                                <a class="pwdForget" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}</a>
                            @endif
                            <button type="submit"> {{ __('Login') }}</button>
                        </div>
                    </form>
                </div>
                <div class="register formBlock {{ Str::startsWith(Route::currentRouteName(), 'register') ? 'active' : '' }}" id="tab-2">
                    <form name="registerform" method="POST" action="{{ route('register') }}">
                        @csrf
                        <p>{{ __('Register') }}</p>
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Name"
                                value="{{ old('name') }}" class=" @error('name') is-invalid @enderror"
                                autocomplete="name" autofocus required />
                            @error('name')
                                <p class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class=" @error('email') is-invalid @enderror"id="email"
                                placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" />
                            @error('email')
                                <p class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password"
                                class=" @error('password') is-invalid @enderror" required autocomplete="new-password" />
                            @error('password')
                                <p class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password-confirm"
                                placeholder="Confirm password" required autocomplete="new-password" />
                        </div>

                        <div class="form-group alignRight">

                            <button type="submit">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.formPage -->
        </div>
        <!-- /.mainContainer -->
    </div>
    <!-- /.container -->

@endsection
