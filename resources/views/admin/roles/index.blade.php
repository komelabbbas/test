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
                <h2 class="page-header-title">Roles</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            {{-- <a href="{{ route('dashboard') }}">
                                <i class="ti ti-home"></i>
                            </a> --}}
                        </li>
                        <li class="breadcrumb-item">
                            Roles
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <div class="action mt-3 d-flex justify-content-end">
                <a 
                    href="{{ route('roles.create') }}"
                    class="btn btn-large btn-gradient-02">
                    Add New Role
                </a>
            </div> --}}
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Index</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $key => $role)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $role->name }}</td>
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