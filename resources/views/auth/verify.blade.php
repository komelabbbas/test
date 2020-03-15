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
                        Welcome To Laravel Development
                    </h1>
                </div>
            </div>
        </div>
        <!-- End Left Content -->
        <!-- Begin Right Content -->
        <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
            <!-- Begin Form -->
            <div class="authentication-form mx-auto text-center">
                <h3 class="mb-5 pb-3 text-center">Verify Your Email Address</h3>
                <p> 
                    Before proceeding, please check your email {{ $email }}
                    for a verification link.
                </p>
                <p>If you did not receive the email</p>
                <form 
                    method="POST" 
                    action="{{ route('verification.resend')  }}" 
                    class="needs-validation"
                >
                    {{ csrf_field() }}
                    <input type="hidden" name="email" value="{{ $email}}">
                    <div class="sign-btn text-center">
                        <button type="submit" class="btn btn-lg btn-gradient-01">
                            click here to request another
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
