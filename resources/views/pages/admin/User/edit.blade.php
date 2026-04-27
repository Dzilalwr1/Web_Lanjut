@extends('layouts.backend')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8 col-md-10">
            <div class="card shadow-lg border-0 my-5">
                <div class="card-header py-3 bg-primary">
                    <h6 class="m-0 font-weight-bold text-white">Edit User</h6>
                </div>
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Edit User Data</h1>
                                </div>
                                <form class="user" action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="form-group">
                                        <label for="name" class="form-label font-weight-bold">Name</label>
                                        <input type="text" 
                                               class="form-control form-control-user @error('name') is-invalid @enderror" 
                                               id="name" 
                                               name="name" 
                                               value="{{ old('name', $user->name) }}"
                                               placeholder="Enter Name...">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="role" class="form-label font-weight-bold">Role</label>
                                        <select name="role" 
                                                id="role" 
                                                class="form-control @error('role') is-invalid @enderror"
                                                style="border-radius: 10rem; padding: 1.5rem 1rem; height: auto;">
                                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                        </select>
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-user btn-block">
                                                Cancel
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Update User
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
