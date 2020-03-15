@extends('admin.layouts.basic')
@section('styles')
   
@stop
@section('scripts')
@stop
@section('content')
<div class="container-fluid">
    <user-normal 
        :user="{{ $user }}"
        type="edit"
        inline-template
    >
        <form @submit.prevent="onUpdate" action="#">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title">Users Edit</h2>
                    </div>
                    <div class="page-action mt-3">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('profile.index') }}">Users</a>
                            </li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ul>
                        <div class="action">
                            <button 
                                type="submit" 
                                class="btn btn-success btn-large m-2">
                                Update 
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h3>Update Profile</h3>
                </div>
                <div class="widget-body mt-4">
                    <div class="row">
                        <div class="col-xl-6 ">
                            <div class="form-group row d-flex align-items-center" >
                                <label class="col-lg-12 form-control-label">
                                    First Name 
                                </label>
                                <div class="col-lg-12">
                                    <input 
                                        type="text"
                                        v-model="formData.first_name"
                                        name="formData.first_name"
                                        class="form-control" 
                                        :class="{'is-invalid': errors.first_name }"
                                        placeholder="Enter your First Name"
                                    >
                                    <div v-if="errors.first_name" class="invalid-feedback">
                                        @{{ errors.first_name[0] }}
                                    </div>
                                </div>
                            </div>
                        
                            <div class="form-group row d-flex align-items-center" >
                                <label class="col-lg-12 form-control-label">
                                    Last Name 
                                </label>
                                <div class="col-lg-12">
                                    <input 
                                        type="text"
                                        v-model="formData.last_name"
                                        name="formData.last_name"
                                        class="form-control" 
                                        :class="{'is-invalid': errors.last_name }"
                                        placeholder="Enter your First Name"
                                    >
                                    <div v-if="errors.last_name" class="invalid-feedback">
                                        @{{ errors.last_name[0] }}
                                    </div>
                                </div>
                            </div>
                       
                            <div class="form-group row d-flex align-items-center" >
                                <label class="col-lg-12 form-control-label">
                                    Phone
                                </label>
                                <div class="col-lg-12">
                                    <input 
                                        type="text"
                                        v-model="formData.phone"
                                        name="formData.phone"
                                        class="form-control" 
                                        :class="{'is-invalid': errors.phone }"
                                        placeholder="Enter your First Name"
                                    >
                                    <div v-if="errors.phone" class="invalid-feedback">
                                        @{{ errors.phone[0] }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center" >
                                <label class="col-lg-12 form-control-label">
                                    Email
                                </label>
                                <div class="col-lg-12">
                                    <input 
                                        type="text"
                                        v-model="formData.email"
                                        name="formData.email"
                                        class="form-control" 
                                        :class="{'is-invalid': errors.email }"
                                        placeholder="Enter your First Name"
                                    >
                                    <div v-if="errors.email" class="invalid-feedback">
                                        @{{ errors.email[0] }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center" >
                                <label class="col-lg-12 form-control-label">
                                    Password
                                </label>
                                <div class="col-lg-12">
                                    <input 
                                        type="password"
                                        v-model="formData.password"
                                        name="formData.password"
                                        class="form-control" 
                                        :class="{'is-invalid': errors.password }"
                                        placeholder="Enter your First Name"
                                    >
                                    <div v-if="errors.password" class="invalid-feedback">
                                        @{{ errors.password[0] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex justify-content-center">
                                <vue-dropzone 
                                    ref="myVueDropzone" 
                                    id="dropzone" 
                                    :options="dropzoneOptions"
                                    :use-custom-slot="true"
                                    @vdropzone-file-added="getFile"
                                    @vdropzone-removed-file="removedFile"
                                >
                                    <div class="dropzone-custom-content">
                                        <img v-if="imagePreview" :src="imagePreview" width="160" height="160">
                                        <h4 class="dropzone-custom-title">
                                           For update Drag and drop to upload Your photo!
                                        </h4>
                                        <div class="subtitle">
                                            ...or click to select a image from your device
                                        </div>
                                    </div>
                                </vue-dropzone>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </user-normal>
</div>     
@stop
