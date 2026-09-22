@extends('layout.dashboard')

@section('title', 'Index Page')

@section('content')
<main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Account</p>
                <h1 class="h3 mb-1">Profile</h1>
                <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
              </div>
            </div>
            
          </div>
<section class="row g-3">

    {{-- =========================
        PROFILE CARD
    ========================== --}}
    <div class="col-12 col-xl-4">

        <div class="panel h-100 text-center profile-card">

            {{-- Cover Image --}}
            <div class="profile-cover">
                <img
                    src="<?php echo asset('user_dashboard/assets/images/png/dasher-ui-bootstrap-5.jpg'); ?>"
                    alt="Profile cover"
                >
            </div>

            {{-- Profile Photo --}}
            <div class="position-relative d-inline-block">

                <?php
                    $avatar = $user->avatar
                        ? asset('storage/' . $user->avatar)
                        : asset('user_dashboard/assets/images/avatar/avatar.jpg');
                ?>

                <img
                    class="avatar-img avatar-xl profile-photo"
                    src="<?php echo $avatar; ?>"
                    alt="<?php echo e($user->name); ?>"
                >

            </div>

            {{-- User Name --}}
            <h2 class="h5 mt-3 mb-1">
                <?php echo e($user->name); ?>
            </h2>

            {{-- Username --}}
            <p class="text-muted mb-3">
                @<?php echo e($user->username); ?>
            </p>

            {{-- Badges --}}
            <div class="d-flex justify-content-center gap-2">

                <span class="badge text-bg-primary">
                    User
                </span>

                <?php if (!empty($user->email_verified_at)): ?>
                    <span class="badge text-bg-success">
                        Verified
                    </span>
                <?php else: ?>
                    <span class="badge text-bg-warning">
                        Unverified
                    </span>
                <?php endif; ?>

            </div>

            {{-- User Information --}}
            <div class="info-list mt-4 text-start">

                <div>
                    <span>Email</span>
                    <strong>
                        <?php echo e($user->email); ?>
                    </strong>
                </div>

                <div>
                    <span>Username</span>
                    <strong>
                        <?php echo e($user->username); ?>
                    </strong>
                </div>

                <div>
                    <span>Phone</span>
                    <strong>
                        <?php echo e($user->phone ?? 'Not provided'); ?>
                    </strong>
                </div>

            </div>

            {{-- =========================
                CHANGE PHOTO
            ========================== --}}
            <form
                action="<?php echo route('profile.photo.update'); ?>"
                method="POST"
                enctype="multipart/form-data"
                class="mt-4 text-start"
            >

                <?php echo csrf_field(); ?>

                <label class="form-label" for="avatar">
                    Change Profile Photo
                </label>

                <input
                    type="file"
                    class="form-control"
                    id="avatar"
                    name="avatar"
                    accept=".jpg,.jpeg,.png,.webp"
                    required
                >

                <?php if ($errors->has('avatar')): ?>
                    <div class="text-danger small mt-1">
                        <?php echo e($errors->first('avatar')); ?>
                    </div>
                <?php endif; ?>

                <button
                    type="submit"
                    class="btn btn-outline-primary btn-sm mt-3"
                >
                    <i class="bi bi-camera" aria-hidden="true"></i>
                    Update Photo
                </button>

            </form>

        </div>

    </div>


    {{-- =========================
        PROFILE SETTINGS
    ========================== --}}
    <div class="col-12 col-xl-8">

        <form
            class="panel needs-validation"
            action="<?php echo route('profile.update'); ?>"
            method="POST"
            novalidate
        >

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            {{-- Header --}}
            <div class="panel-header">

                <div>

                    <h2 class="h5 mb-1 section-title">

                        <i
                            class="bi bi-person-gear"
                            aria-hidden="true"
                        ></i>

                        <span>Profile Settings</span>

                    </h2>

                    <p class="text-muted mb-0">
                        Update your account profile and contact details.
                    </p>

                </div>

            </div>


            {{-- Success Message --}}
            <?php if (session('success')): ?>

                <div
                    class="alert alert-success alert-dismissible fade show mt-3"
                    role="alert"
                >

                    <i class="bi bi-check-circle me-1"></i>

                    <?php echo e(session('success')); ?>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>

                </div>

            <?php endif; ?>


            {{-- Validation Errors --}}
            <?php if ($errors->any()): ?>

                <div
                    class="alert alert-danger alert-dismissible fade show mt-3"
                    role="alert"
                >

                    <strong>
                        Please correct the following:
                    </strong>

                    <ul class="mb-0 mt-2">

                        <?php foreach ($errors->all() as $error): ?>

                            <li>
                                <?php echo e($error); ?>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>

                </div>

            <?php endif; ?>


            {{-- Form Fields --}}
            <div class="row g-3 mt-1">

                {{-- Name --}}
                <div class="col-md-6">

                    <label
                        class="form-label"
                        for="profileName"
                    >
                        Name
                    </label>

                    <input
                        class="form-control <?php echo $errors->has('name') ? 'is-invalid' : ''; ?>"
                        id="profileName"
                        name="name"
                        type="text"
                        value="<?php echo e(old('name', $user->name)); ?>"
                        required
                    >

                    <div class="invalid-feedback">
                        Name is required.
                    </div>

                    <?php if ($errors->has('name')): ?>

                        <div class="text-danger small mt-1">
                            <?php echo e($errors->first('name')); ?>
                        </div>

                    <?php endif; ?>

                </div>


                {{-- Username --}}
                <div class="col-md-6">

                    <label
                        class="form-label"
                        for="profileUsername"
                    >
                        Username
                    </label>

                    <input
                        class="form-control <?php echo $errors->has('username') ? 'is-invalid' : ''; ?>"
                        id="profileUsername"
                        name="username"
                        type="text"
                        value="<?php echo e(old('username', $user->username)); ?>"
                        required
                    >

                    <div class="invalid-feedback">
                        Username is required.
                    </div>

                    <?php if ($errors->has('username')): ?>

                        <div class="text-danger small mt-1">
                            <?php echo e($errors->first('username')); ?>
                        </div>

                    <?php endif; ?>

                </div>


                {{-- Email --}}
                <div class="col-md-6">

                    <label
                        class="form-label"
                        for="profileEmail"
                    >
                        Email
                    </label>

                    <input
                        class="form-control <?php echo $errors->has('email') ? 'is-invalid' : ''; ?>"
                        id="profileEmail"
                        name="email"
                        type="email"
                        value="<?php echo e(old('email', $user->email)); ?>"
                        required
                    >

                    <div class="invalid-feedback">
                        Enter a valid email.
                    </div>

                    <?php if ($errors->has('email')): ?>

                        <div class="text-danger small mt-1">
                            <?php echo e($errors->first('email')); ?>
                        </div>

                    <?php endif; ?>

                </div>


                {{-- Phone --}}
                <div class="col-md-6">

                    <label
                        class="form-label"
                        for="profilePhone"
                    >
                        Phone
                    </label>

                    <input
                        class="form-control <?php echo $errors->has('phone') ? 'is-invalid' : ''; ?>"
                        id="profilePhone"
                        name="phone"
                        type="text"
                        value="<?php echo e(old('phone', $user->phone)); ?>"
                        placeholder="Enter your phone number"
                    >

                    <?php if ($errors->has('phone')): ?>

                        <div class="text-danger small mt-1">
                            <?php echo e($errors->first('phone')); ?>
                        </div>

                    <?php endif; ?>

                </div>

            </div>


            {{-- Save Button --}}
            <div class="d-flex justify-content-end mt-4">

                <button
                    class="btn btn-primary"
                    type="submit"
                >

                    <i
                        class="bi bi-check2-circle"
                        aria-hidden="true"
                    ></i>

                    Save Profile

                </button>

            </div>

        </form>


        {{-- =========================
            CHANGE PASSWORD
        ========================== --}}
        <form
            class="panel mt-3"
            action="<?php echo route('profile.password.update'); ?>"
            method="POST"
        >

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="panel-header">

                <div>

                    <h2 class="h5 mb-1 section-title">

                        <i
                            class="bi bi-shield-lock"
                            aria-hidden="true"
                        ></i>

                        <span>Change Password</span>

                    </h2>

                    <p class="text-muted mb-0">
                        Keep your account secure by using a strong password.
                    </p>

                </div>

            </div>


            <div class="row g-3 mt-1">

                {{-- Current Password --}}
                <div class="col-12">

                    <label
                        class="form-label"
                        for="currentPassword"
                    >
                        Current Password
                    </label>

                    <input
                        class="form-control"
                        id="currentPassword"
                        name="current_password"
                        type="password"
                        required
                    >

                </div>


                {{-- New Password --}}
                <div class="col-md-6">

                    <label
                        class="form-label"
                        for="newPassword"
                    >
                        New Password
                    </label>

                    <input
                        class="form-control"
                        id="newPassword"
                        name="password"
                        type="password"
                        minlength="8"
                        required
                    >

                    <small class="text-muted">
                        Minimum 8 characters.
                    </small>

                </div>


                {{-- Confirm Password --}}
                <div class="col-md-6">

                    <label
                        class="form-label"
                        for="confirmPassword"
                    >
                        Confirm New Password
                    </label>

                    <input
                        class="form-control"
                        id="confirmPassword"
                        name="password_confirmation"
                        type="password"
                        minlength="8"
                        required
                    >

                </div>

            </div>


            <div class="d-flex justify-content-end mt-4">

                <button
                    class="btn btn-primary"
                    type="submit"
                >

                    <i
                        class="bi bi-key"
                        aria-hidden="true"
                    ></i>

                    Update Password

                </button>

            </div>

        </form>

    </div>

</section>


{{-- =========================
    BOOTSTRAP VALIDATION
========================== --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    const forms = document.querySelectorAll('.needs-validation');

    Array.from(forms).forEach(function (form) {

        form.addEventListener('submit', function (event) {

            if (!form.checkValidity()) {

                event.preventDefault();
                event.stopPropagation();

            }

            form.classList.add('was-validated');

        }, false);

    });

});
</script>
        </div>
      </main>
@endsection