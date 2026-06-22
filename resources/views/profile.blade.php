@extends('layout')

@section('main-content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Breadcrumb -->

<div class="container-fluid">

    <div class="row px-xl-5">

        <div class="col-12">

            <nav class="breadcrumb bg-light mb-30">

                <a class="breadcrumb-item text-dark"
                   href="{{ url('/index') }}">

                    Home

                </a>

                <span class="breadcrumb-item active">

                    My Profile

                </span>

            </nav>

        </div>

    </div>

</div>

<!-- Profile Start -->
<div class="container-fluid py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="bg-light rounded p-5 shadow-sm">

                    <!-- Title -->
                    <div class="text-center mb-4">

                        <h2>

                            My Profile

                        </h2>

                        <p class="text-muted">

                            Manage your account details

                        </p>

                    </div>

                    <!-- Success Message -->
                    @if(session('success'))

                    <div class="alert alert-success">

                        {{ session('success') }}

                    </div>

                    @endif

                    <!-- Profile Details -->
                    <div class="row mb-3">

                        <div class="col-md-4">

                            <strong>Name :</strong>

                        </div>

                        <div class="col-md-8">

                            {{ $user->name }}

                        </div>

                    </div>

                    <hr>

                    <div class="row mb-3">

                        <div class="col-md-4">

                            <strong>Email :</strong>

                        </div>

                        <div class="col-md-8">

                            {{ $user->email }}

                        </div>

                    </div>

                    <hr>

                    <div class="row mb-3">

                        <div class="col-md-4">

                            <strong>Phone :</strong>

                        </div>

                        <div class="col-md-8">

                            {{ $user->mobile ?? 'Not Added' }}

                        </div>

                    </div>

                    <!-- Buttons -->
                    <div class="text-center mt-4">

                        <!-- Edit Button -->
                        <button class="btn btn-primary px-4 me-2"
                                data-bs-toggle="modal"
                                data-bs-target="#editProfileModal">

                            <i class="fa fa-edit me-1"></i>

                            Edit Profile

                        </button>

                        <!-- Logout Button -->
                        <a href="{{ url('logout') }}"
                           class="btn btn-danger px-4"
                           onclick="return confirm('Are you sure you want to logout?')">

                            <i class="fa fa-sign-out-alt me-1"></i>

                            Logout

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- Edit Profile Modal -->
<div class="modal fade"
     id="editProfileModal">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title">

                    Edit Profile

                </h4>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <!-- Form -->
            <form action="{{ url('update_profile') }}"
                  method="POST">

                @csrf

                <div class="modal-body">

                    <!-- Name -->
                    <div class="mb-3">

                        <label class="form-label">

                            Name

                        </label>

                        <input type="text"
                               name="name"
                               value="{{ $user->name }}"
                               class="form-control">

                    </div>

                    <!-- Email -->
                    <div class="mb-3">

                        <label class="form-label">

                            Email

                        </label>

                        <input type="email"
                               name="email"
                               value="{{ $user->email }}"
                               class="form-control">

                    </div>

                    <!-- Phone -->
                    <div class="mb-3">

                        <label class="form-label">

                            Phone

                        </label>

                        <input type="text"
                               name="phone"
                               value="{{ $user->mobile }}"
                               class="form-control">

                    </div>

                </div>

                <!-- Footer -->
                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">

                        Close

                    </button>

                    <button type="submit"
                            class="btn btn-primary">

                        Update Profile

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection