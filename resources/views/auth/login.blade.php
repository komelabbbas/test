@extends('admin.layouts.login')

@section('content')
<!-- Begin Container -->
<div class="container-fluid no-padding h-100">
    <div class="row flex-row h-100 bg-white">
        <!-- Begin Left Content -->
        <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
            <div class="elisyam-bg background-01">
                <div class="elisyam-overlay overlay-01"></div>
                <div class="authentication-col-content mx-auto">
                    <h1 class="gradient-text-01">
                        Welcome To Laravel Development Portal
                    </h1>
                    <span class="description">
                        
                    </span>
                </div>
            </div>
        </div>
        <!-- End Left Content -->
        <!-- Begin Right Content -->
        <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
            <!-- Begin Form -->
            <div class="authentication-form mx-auto">
                <h3 class="mb-5 pb-3">Sign In To Laravel Development Portal</h3>
                <form method="POST" action="{{ route('login') }}" class="needs-validation">
                    {{ csrf_field() }}
                    <div class="group material-input">
                        <input 
                            type="email" 
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                            name="email" 
                            value="{{ old('email') }}"
                            required
                        >
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="group material-input">
                        <input 
                            type="password" 
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                            name="password" 
                            required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Password *</label>
                    </div>
                    <div class="row">
                        <div class="col text-left">
                            <div class="styled-checkbox">
                                <input 
                                    type="checkbox" 
                                    name="remember" 
                                    id="remeber" 
                                    {{ old('remember') ? 'checked' : '' }}
                                >
                                <label for="remeber">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="sign-btn text-center">
                        <button type="submit" class="btn btn-lg btn-gradient-01">
                            Sign in
                        </button>
                    </div>
                </form>
                <div class="register">
                    Don't have an account? 
                    <br>
                    <a href="{{ route('register') }}">
                        Create an account
                    </a>
                </div>
            </div>
            <!-- End Form -->                        
        </div>
        <!-- End Right Content -->
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->    
@endsection
