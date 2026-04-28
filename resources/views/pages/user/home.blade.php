@extends('layouts.user')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Welcome Card -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Welcome Back!</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Hello, {{ Auth::user()->name }}!</div>
                            <p class="mt-2 text-gray-600">You are logged in as a <strong>{{ ucfirst(Auth::user()->role) }}</strong>.</p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Profile Info Card -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Your Profile Information</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <tr>
                                <th width="30%">Name</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th>Role</th>
                                <td><span class="badge badge-primary">{{ ucfirst(Auth::user()->role) }}</span></td>
                            </tr>
                            <tr>
                                <th>Member Since</th>
                                <td>{{ Auth::user()->created_at->format('d F Y') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Info Card -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quick Info</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                            src="{{ asset('img/undraw_posting_photo.svg') }}" alt="...">
                    </div>
                    <p>This is your user dashboard. As a regular user, you can view your profile information and account details here.</p>
                    <p class="mb-0">If you need admin access, please contact the administrator.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

