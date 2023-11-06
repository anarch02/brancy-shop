@extends('layouts.app')

@section('content')

    <!--== Start Account Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row justify-content-center mb-n8">
                <div class="col-lg-6 mb-8">
                    <!--== Start Login Area Wrapper ==-->
                    <div class="my-account-item-wrap">
                        <h3 class="title">Login</h3>
                        <div class="my-account-form">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group mb-6">
                                    <label for="login_username">Username or Email Address <sup>*</sup></label>
                                    <input type="email" name="email" class="@error('email') is-invalid @enderror" id="login_username">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-6">
                                    <label for="login_pwsd">Password <sup>*</sup></label>
                                    <input type="password" class="@error('password') is-invalid @enderror" name="password" 
                                    id="login_pwsd">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group d-flex align-items-center mb-14">
                                    <button type="submit" class="btn">Login</button>

                                    <div class="form-check ms-3">
                                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember_pwsd">Remember Me</label>
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="lost-password" href="{{ route('password.request') }}">Lost your Password?</a>
                                @endif
                            </form>
                        </div>
                    </div>
                    <!--== End Login Area Wrapper ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Account Area Wrapper ==-->
@endsection
