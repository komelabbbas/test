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
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="ti ti-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Users
                        </li>
                    </ul>
                </div>
            </div>
            <div class="action mt-3 d-flex justify-content-end">
                <a 
                    href="{{ route('admin.users.create') }}"
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
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Usernme</th>
                                    <th>Role</th>
                                    <th class="text-align-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td class="td-actions">
                                        <a href="{{ route('admin.users.edit', $user->id) }}">
                                            <i class="la la-edit edit"></i>
                                        </a>
                                        {{-- <a href="#">
                                            <i class="la la-eye eye"></i>
                                        </a> --}}
                                        {{-- <a 
                                            href="{{ route('admin.users.destroy', $user->id) }}" 
                                            data-confirmation="alert"
                                            data-token="{{csrf_token()}}" 
                                            data-message="new {{ $user->name }}" >
                                            <i class="la la-close delete"></i>
                                        </a> --}}
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