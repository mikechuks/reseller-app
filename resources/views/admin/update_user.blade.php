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
                <h1 class="h3 mb-1">Update Product</h1>
                <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
              </div>
            </div>
          </div>
            <section class="row">
                <div class="col-12 col-xl-12">

                <form
                    class="panel needs-validation"
                    action="<?php echo route('user.update', $user->id); ?>"
                    method="POST"
                    novalidate
                >

                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title">
                                <i class="bi bi-ui-checks-grid" aria-hidden="true"></i>
                                <span>Validation Form</span>
                            </h2>

                            <p class="text-muted mb-0">
                                Bootstrap-ready fields with custom validation feedback.
                            </p>
                        </div>
                    </div>


                    <?php if(session('success')): ?>
                        <div class="success-message">
                            <div>
                                <h4>Congratulations!</h4>
                                <p><?php echo session('success'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>


                    <?php if($errors->any()): ?>
                        <div class="validation-alert">

                            <div class="validation-header">
                                <span class="validation-icon">⚠</span>

                                <div>
                                    <h4>Validation Error</h4>
                                    <p>
                                        Please correct the following errors before submitting the form.
                                    </p>
                                </div>
                            </div>

                            <ul class="validation-list">
                                <?php foreach($errors->all() as $error): ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>

                        </div>
                    <?php endif; ?>


                    <input
                        type="hidden"
                        name="_token"
                        value="<?php echo csrf_token(); ?>"
                    >

                    <input
                        type="hidden"
                        name="_method"
                        value="PUT"
                    >


                    <div class="row g-3">

                        <!-- First Name -->
                        <div class="col-md-6">
                            <label class="form-label" for="formFirstName">
                                First Name
                            </label>

                            <input
                                class="form-control"
                                id="formFirstName"
                                type="text"
                                name="first_name"
                                value="<?php echo old('first_name', $user->first_name); ?>"
                                placeholder="First Name"
                                required
                            >

                            <div class="invalid-feedback">
                                First name is required.
                            </div>
                        </div>


                        <!-- Last Name -->
                        <div class="col-md-6">
                            <label class="form-label" for="formLastName">
                                Last Name
                            </label>

                            <input
                                class="form-control"
                                id="formLastName"
                                type="text"
                                name="last_name"
                                value="<?php echo old('last_name', $user->last_name); ?>"
                                placeholder="Last Name"
                                required
                            >

                            <div class="invalid-feedback">
                                Last name is required.
                            </div>
                        </div>


                        <!-- Username -->
                        <div class="col-md-6">
                            <label class="form-label" for="formUsername">
                                Username
                            </label>

                            <input
                                class="form-control"
                                id="formUsername"
                                type="text"
                                name="username"
                                value="<?php echo old('username', $user->username); ?>"
                                placeholder="Username"
                                required
                            >

                            <div class="invalid-feedback">
                                Username is required.
                            </div>
                        </div>


                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="form-label" for="formEmail">
                                Email
                            </label>

                            <input
                                class="form-control"
                                id="formEmail"
                                type="email"
                                name="email"
                                value="<?php echo old('email', $user->email); ?>"
                                placeholder="Email Address"
                                required
                            >

                            <div class="invalid-feedback">
                                Valid email is required.
                            </div>
                        </div>


                        <!-- Phone -->
                        <div class="col-md-6">
                            <label class="form-label" for="formPhone">
                                Phone
                            </label>

                            <input
                                class="form-control"
                                id="formPhone"
                                type="tel"
                                name="phone"
                                value="<?php echo old('phone', $user->phone); ?>"
                                placeholder="Phone Number"
                                required
                            >

                            <div class="invalid-feedback">
                                Phone number is required.
                            </div>
                        </div>


                        <!-- Password -->
                        <div class="col-md-6">
                            <label class="form-label" for="formPassword">
                                Password
                            </label>

                            <input
                                class="form-control"
                                id="formPassword"
                                type="password"
                                name="password"
                                placeholder="Leave blank to keep current password"
                            >

                            <div class="invalid-feedback">
                                Password is required.
                            </div>
                        </div>

                    </div>


                    <div class="d-flex justify-content-end mt-4">
                        <button
                            class="btn btn-primary"
                            type="submit"
                        >
                            <i class="bi bi-send" aria-hidden="true"></i>
                            Submit Form
                        </button>
                    </div>

                </form>

                </div>
            </section>
        </div>
      </main>
@endsection