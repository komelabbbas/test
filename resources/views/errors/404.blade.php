@extends('admin.layouts.login')

@section('content')
 <!-- Begin Container -->
 <div class="bg-error-01" style="height: 100%">
    <div class="container-fluid h-100 error-01">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12">
                <!-- Begin Container -->
                <div class="error-container mx-auto text-center">
                    <h1>404</h1>
                    <h2>This page cannot be found! </h2>
                    <p class="text-white">But we have lots of other pages for you to see. </p>
                    <a href="{{ route('profile.index') }}" class="btn btn-shadow">
                        Go Back
                    </a>
                </div> 
                <!-- End Container -->
            </div>
            <!-- End Col -->
        </div> 
        <!-- End Row -->
    </div>
    <!-- End Container -->
</div>
@stop