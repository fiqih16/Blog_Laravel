@extends('layouts.blog')
@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('login')
{{-- <form method="POST" action="{{ route('login') }}">
    @csrf --}}
    {{-- <div class="form-group">
       <label class="small mb-1" for="input_login_email">Email</label>
       <input name="email" value="{{ old('email') }}" class="form-control py-4 @error('email') is-invalid @enderror" id="input_login_email" type="email" placeholder="Enter email address" autocomplete="email"/>
       @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="input_login_password">Password</label>
       <input name="password" class="form-control py-4 @error('password') is-invalid @enderror" id="input_login_password" type="password" placeholder="Enter password" autocomplete="current-password" />
       @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
       <a class="small" href="#">Forgot Password?</a>
       <button class="btn btn-primary px-4" type="submit">Login</button>
    </div>
 </form> --}}

{{-- ======================= --}}
 <div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(vendor2/images/bg-01.jpg);">
                <span class="login100-form-title-1">
                    Login
                </span>
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="wrap-input100 m-b-18">
                    <span class="label-input100">Email</span>
                    <input class="form-control py-4 @error('email') is-invalid @enderror" id="input_login_email" value="{{ old('email') }}" type="email" name="email" placeholder="Enter email address" autocomplete="email"/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 m-b-18">
                    <span class="label-input100">Password</span>
                    <input class="form-control py-4 @error('password') is-invalid @enderror" id="input_login_password" type="password" name="password" placeholder="Enter password" autocomplete="current-password"/>
                    @error('password')
                        <span class=" invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="flex-sb-m w-full p-b-30">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
