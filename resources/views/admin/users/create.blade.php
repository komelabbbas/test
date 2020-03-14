@extends('admin.layouts.basic')
@section('styles')
   
@stop
@section('scripts')
@stop
@section('content')
<div class="container-fluid">
    <users inline-template>
        <form @submit.prevent="onSubmit" action="#">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title">Users Create</h2>
                    </div>
                    <div class="page-action mt-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    <i class="ti ti-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.users.index') }}">Users</a>
                            </li>
                            <li class="breadcrumb-item active">Create</li>
                        </ul>
                        <div class="action">
                            <button 
                                type="submit" 
                                class="btn btn-success btn-large m-2">
                                Submit
                            </button>
                            <a 
                                href="{{ route('admin.users.index') }}" 
                                class="btn btn-large btn-gradient-03">
                                Go Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h3>For User Register</h3>
                </div>
                <div class="widget-body mt-4">
                    <div class="row">
                        <div class="form-group col-xl-6 row d-flex align-items-center" >
                            <label class="col-lg-12 form-control-label">
                                Name 
                            </label>
                            <div class="col-lg-12">
                                <input 
                                    type="text"
                                    v-model="name"
                                    name="name"
                                    class="form-control" 
                                    :class="{'is-invalid': $v.name.$error}"
                                    placeholder="Enter your name"
                                    @input="$v.name.$touch()"
                                >
                                <div v-show="$v.name.$error">
                                    <span v-show="!$v.name.required" class="text-danger">
                                        Name is required.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xl-6 row d-flex align-items-center" >
                            <label class="col-lg-12 form-control-label">
                                Username 
                            </label>
                            <div class="col-lg-12">
                                <input 
                                    type="text"
                                    v-model="username"
                                    name="username"
                                    class="form-control" 
                                    :class="{'is-invalid': $v.username.$error}"
                                    placeholder="Enter your username"
                                    @input="$v.username.$touch()"
                                >
                                <div v-show="$v.username.$error">
                                    <span v-show="!$v.username.required" class="text-danger">
                                        Username is required.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-xl-6 row d-flex align-items-center">
                            <label class="col-lg-12 form-control-label">
                                Email
                            </label>
                            <div class="col-lg-12">
                                <input 
                                    type="email"
                                    v-model.trim.lazy="email"
                                    name="email"
                                    class="form-control"
                                    :class="{'is-invalid': $v.email.$error}"
                                    placeholder="Enter your email"
                                    @input="$v.email.$touch()"
                                >
                                </textarea>
                                <div v-show="$v.email.$error">
                                    <span v-show="!$v.email.required" class="text-danger">
                                        Email is required.
                                    </span>
                                    <span v-show="!$v.email.email" class="text-danger">
                                        Please type valid email
                                    </span>
                                    <span v-show="!$v.email.isUnique" class="text-danger">
                                        This email is already registered
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xl-6 row d-flex align-items-center" >
                            <label class="col-lg-12 form-control-label">
                                Password 
                            </label>
                            <div class="col-lg-12">
                                <input 
                                    type="password"
                                    v-model="password"
                                    name="password"
                                    :class="{'is-invalid': $v.password.$error}"
                                    class="form-control" 
                                    placeholder="Enter your password"
                                    @input="$v.password.$touch()"
                                >
                                <div v-show="$v.password.$error">
                                    <span v-show="!$v.password.required" class="text-danger">
                                        Password is required.
                                    </span>
                                    <span 
                                        v-show="!$v.password.minLength" 
                                        class="text-danger">
                                        Password must have at least 
                                        @{{ $v.password.$params.minLength.min }} letters.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-xl-6 row d-flex align-items-center">
                            <label class="col-lg-12 form-control-label">
                                Retype Password
                            </label>
                            <div class="col-lg-12">
                                <input 
                                    type="password"
                                    v-model="password_confirmation"
                                    name="password_confirmation"
                                    class="form-control"
                                    :class="{'is-invalid': $v.password_confirmation.$error}"
                                    placeholder="Retype Your Password"
                                    @input="$v.password_confirmation.$touch()"
                                >
                                </textarea>
                                <div v-show="$v.password_confirmation.$error">
                                    <span 
                                        v-show="!$v.password_confirmation.sameAsPassword"
                                        class="text-danger">
                                        Password Must be identical.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </users>
</div>     
@stop
