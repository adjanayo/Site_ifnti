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
