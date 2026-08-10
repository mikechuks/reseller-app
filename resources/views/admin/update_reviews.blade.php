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
                <h1 class="h3 mb-1">Update Review</h1>
                <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
              </div>
            </div>
            
          </div>
            <section class="row">
                <div class="col-12 col-xl-12">

                    <form
                        class="panel needs-validation"
                        action="<?php echo route('review.update', $review->id); ?>"
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

                            <!-- Status -->
                            <div class="col-md-6">
                                <label class="form-label" for="formStatus">
                                    Status
                                </label>

                                <select
                                    class="form-select"
                                    id="formStatus"
                                    name="status"
                                    required
                                >
                                    <option value="">Select Status</option>

                                    <option
                                        value="pending"
                                        <?php echo old('status', $review->status) == 'pending' ? 'selected' : ''; ?>
                                    >
                                        Pending
                                    </option>

                                    <option
                                        value="approved"
                                        <?php echo old('status', $review->status) == 'approved' ? 'selected' : ''; ?>
                                    >
                                        Approve
                                    </option>

                                    <option
                                        value="rejected"
                                        <?php echo old('status', $review->status) == 'rejected' ? 'selected' : ''; ?>
                                    >
                                        Rejected
                                    </option>
                                </select>

                                <div class="invalid-feedback">
                                    Choose a Status.
                                </div>
                            </div>

                            <!-- User -->
                            <div class="col-md-6">
                                <label class="form-label" for="formUser">
                                    User
                                </label>

                                <select
                                    class="form-select"
                                    id="formUser"
                                    name="user_id"
                                    required
                                >
                                    <option value="">Select User</option>

                                    <?php foreach ($users as $user): ?>

                                        <option
                                            value="<?php echo htmlspecialchars($user->id); ?>"
                                            <?php echo old('user_id', $review->user_id) == $user->id ? 'selected' : ''; ?>
                                        >
                                            <?php echo htmlspecialchars($user->first_name); ?>
                                            <?php echo htmlspecialchars($user->last_name); ?>
                                        </option>

                                    <?php endforeach; ?>

                                </select>

                                <div class="invalid-feedback">
                                    Choose a User.
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="col-md-6">
                                <label class="form-label" for="formProduct">
                                    Product
                                </label>

                                <select
                                    class="form-select"
                                    id="formProduct"
                                    name="product_id"
                                    required
                                >
                                    <option value="">Select Product</option>

                                    <?php foreach ($products as $product): ?>

                                        <option
                                            value="<?php echo htmlspecialchars($product->id); ?>"
                                            <?php echo old('product_id', $review->product_id) == $product->id ? 'selected' : ''; ?>
                                        >
                                            <?php echo htmlspecialchars($product->name); ?>
                                        </option>

                                    <?php endforeach; ?>

                                </select>

                                <div class="invalid-feedback">
                                    Choose a Product.
                                </div>
                            </div>

                            <!-- Rating -->
                            <div class="col-md-6">
                                <label class="form-label" for="formRating">
                                    Stars
                                </label>

                                <select
                                    class="form-select"
                                    id="formRating"
                                    name="rating"
                                    required
                                >
                                    <option value="">Select Star</option>

                                    <option
                                        value="1"
                                        <?php echo old('rating', $review->rating) == '1' ? 'selected' : ''; ?>
                                    >
                                        1 Star
                                    </option>

                                    <option
                                        value="2"
                                        <?php echo old('rating', $review->rating) == '2' ? 'selected' : ''; ?>
                                    >
                                        2 Star
                                    </option>

                                    <option
                                        value="3"
                                        <?php echo old('rating', $review->rating) == '3' ? 'selected' : ''; ?>
                                    >
                                        3 Star
                                    </option>

                                    <option
                                        value="4"
                                        <?php echo old('rating', $review->rating) == '4' ? 'selected' : ''; ?>
                                    >
                                        4 Star
                                    </option>

                                    <option
                                        value="5"
                                        <?php echo old('rating', $review->rating) == '5' ? 'selected' : ''; ?>
                                    >
                                        5 Star
                                    </option>
                                </select>

                                <div class="invalid-feedback">
                                    Choose a Star.
                                </div>
                            </div>

                            <!-- Comment -->
                            <div class="col-12">

                                <label class="form-label" for="formMessage">
                                    Comment
                                </label>

                                <textarea
                                    class="form-control"
                                    id="formMessage"
                                    rows="5"
                                    name="comment"
                                    required
                                ><?php echo old('comment', $review->comment); ?></textarea>

                                <div class="invalid-feedback">
                                    Comment is required.
                                </div>

                            </div>

                        </div>

                        <div class="d-flex justify-content-end mt-4">

                            <button
                                class="btn btn-primary"
                                type="submit"
                            >
                                <i class="bi bi-send" aria-hidden="true"></i>
                                Update Reviews
                            </button>

                        </div>

                    </form>

                </div>
            </section>
        </div>
      </main>
@endsection