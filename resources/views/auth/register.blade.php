@extends('admin.layouts.login')

@section('content')

<!-- Begin Container -->
<div class="container-fluid no-padding h-100" id="app">
    <div class="row flex-row h-100 bg-white">
        <!-- Begin Left Content -->
        <div class="col-xl-7 col-lg-6 col-md-4 no-padding">
            <div class="elisyam-bg background-01">
                <div class="elisyam-overlay overlay-01"></div>
                <div class="authentication-col-content mx-auto">
                    <h1 class="gradient-text-01">
                        Welcome To Laravel Development Portal
                    </h1>
                </div>
            </div>
        </div>
        <!-- End Left Content -->
        <!-- Begin Right Content -->
        <div class="col-xl-5 col-lg-6 col-md-8 my-auto no-padding auth-content">
            <!-- Begin Form -->
            <user-register :count="{{ $user }}" inline-template>
                <div class="authentication-form mx-auto">
                    <h3 class="mb-5">Sign Up To Laravel Development Portal</h3>
                    <form @submit.prevent="onSubmit()" action="POST" class="needs-validation">
                        <div class="group material-input">
                        <vue-dropzone 
                            ref="myVueDropzone" 
                            id="dropzone" 
                            :options="dropzoneOptions"
                            :use-custom-slot="true"
                            @vdropzone-file-added="getFile"
                            @vdropzone-removed-file="removedFile"
                        >
                             <div class="dropzone-custom-content">
                                <h4 class="dropzone-custom-title">
                                    Drag and drop to upload user photo!
                                </h4>
                                <div class="subtitle">
                                    ...or click to select a image from your device
                                </div>
                            </div>
                        </vue-dropzone>
                        </div>
                        <div class="group material-input">
                            <input 
                                type="text" 
                                class="form-control" 
                                :class="{ 'is-invalid': errors.first_name }"
                                name="first_name" 
                                v-model="formData.first_name"
                                {{-- required --}}
                            >
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>First Name</label>
                            <div v-if="errors.first_name" class="invalid-feedback">
                                @{{ errors.first_name[0] }}
                            </div>
                        </div>
                        <div class="group material-input">
                            <input 
                                type="text" 
                                class="form-control"
                                name="last_name"
                                :class="{ 'is-invalid': errors.last_name }"
                                v-model="formData.last_name" 
                            >
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Last Name</label>
                            <div v-if="errors.last_name" class="invalid-feedback">
                                @{{ errors.last_name[0] }}
                            </div>
                        </div>
                        <div class="group material-input">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="phone" 
                                :class="{ 'is-invalid': errors.phone }"
                                v-model="formData.phone"
                            >
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Phone</label>
                            <div v-if="errors.phone" class="invalid-feedback">
                                @{{ errors.phone[0] }}
                            </div>
                        </div>
                        <div class="group material-input">
                            <input 
                                type="email" 
                                class="form-control" 
                                name="email" 
                                :class="{ 'is-invalid': errors.email }"
                                v-model="formData.email"
                            >
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Email Address</label>
                             <div v-if="errors.email" class="invalid-feedback">
                                @{{ errors.email[0] }}
                            </div>
                        </div>
                        <div class="group material-input">
                            <input 
                                type="password" 
                                v-model="formData.password"
                                :class="{ 'is-invalid': errors.password }"
                                class="form-control" 
                                name="password"
                            >
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Password</label>
                            <div v-if="errors.password" class="invalid-feedback">
                                @{{ errors.password[0] }}
                            </div>
                        </div>
                        <div class="group material-input">
                            <input 
                                type="password"
                                v-model="formData.password_confirmation"
                                class="form-control" 
                                name="password_confirmation" 
                                :class="{ 'is-invalid': errors.password }"
                            >
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Password Confirmation</label>
                            <div v-if="errors.password" class="invalid-feedback">
                                @{{ errors.password[1] }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <div class="styled-checkbox">
                                    <input type="checkbox" name="terms" id="terms" checked>
                                    <label for="terms">
                                        I agree to the
                                        <a href="#something">terms and conditions</a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="sign-btn text-center">
                            <button 
                                type="submit" 
                                class="btn btn-lg btn-gradient-01"
                                :disabled="init.loading"
                            >
                                <span v-if="!init.loading">
                                    Sign Up  
                                </span>
                                <span v-else>Please wait...</span>
                            </button>
                        </div>
                    </form>
                    <div class="register">
                        Already have an Account? 
                        <br>
                        <a href="{{ route('login') }}">Sign In</a>
                    </div>
                </div>
            </user-register>
            <!-- End Form -->                        
        </div>
        <!-- End Right Content -->
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->
@endsection
