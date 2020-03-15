@extends('admin.layouts.basic')
@section('scripts')
    <script src="/admin/js/form.js"></script>
@stop
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Users</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            {{-- <a href="{{ route('dashboard') }}">
                                <i class="ti ti-home"></i>
                            </a> --}}
                        </li>
                        <li class="breadcrumb-item">
                            Users
                        </li>
                    </ul>
                </div>
            </div>
            <div class="action mt-3 d-flex justify-content-end">
                <a 
                    href="{{ route('users.create') }}"
                    class="btn btn-large btn-gradient-02">
                    Add New User
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Sorting</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Index</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email Address</th>
                                    <th style="width: 40%">Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td style="width: 40%">{{ $user->phone }}</td>
                                    <td class="td-actions">
                                        <a href="{{ route('users.edit', $user->id) }}">
                                            <i class="la la-edit edit"></i>
                                        </a>
                                        @can('delete_user', $user)
                                        <a
                                            href="{{ route('users.destroy', $user->id) }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('user-form-{{ $user->id }}').submit();"
                                        >
                                            <i class="la la-trash delete"></i>
                                        </a>
                                        <form 
                                            id="user-form-{{ $user->id }}" 
                                            action="{{ route('users.destroy', $user->id) }}" 
                                            method="POST" 
                                            style="display: none;"
                                        >
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Sorting -->
        </div>
    </div>
    <!-- End Row -->
</div>
@stop