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
                <h1 class="h3 mb-1">Add Product</h1>
                <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
              </div>
            </div>           
          </div>
            <section class="row">
                <div class="col-12 col-xl-12">

                    <form
                        class="panel needs-validation"
                        action="<?php echo route('product.store'); ?>"
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

                        <div class="row g-3">

                            <!-- Product Name -->
                            <div class="col-md-6">
                                <label class="form-label" for="formName">
                                    Product name
                                </label>

                                <input
                                    class="form-control"
                                    id="formName"
                                    name="name"
                                    required
                                >

                                <div class="invalid-feedback">
                                    Product name is required.
                                </div>
                            </div>


                            <!-- Price -->
                            <div class="col-md-6">
                                <label class="form-label" for="formPrice">
                                    Price
                                </label>

                                <input
                                    class="form-control"
                                    id="formPrice"
                                    type="number"
                                    step="0.01"
                                    name="price"
                                    placeholder="Price"
                                    required
                                >

                                <div class="invalid-feedback">
                                    Valid price is required.
                                </div>
                            </div>


                            <!-- Category -->
                            <div class="col-md-6">
                                <label class="form-label" for="formPlan">
                                    Category
                                </label>

                                <select
                                    class="form-select"
                                    id="formPlan"
                                    name="category_id"
                                    required
                                >
                                    <option value="">Select Category</option>

                                    <?php foreach ($categories as $category): ?>

                                        <option
                                            value="<?php echo htmlspecialchars($category->id); ?>"
                                        >
                                            <?php echo htmlspecialchars($category->name); ?>
                                        </option>

                                    <?php endforeach; ?>

                                </select>

                                <div class="invalid-feedback">
                                    Choose a Category.
                                </div>
                            </div>


                            <!-- Service Type -->
                            <div class="col-md-6">
                                <label class="form-label" for="formServiceType">
                                    Service Type
                                </label>

                                <select
                                    class="form-select"
                                    id="formServiceType"
                                    name="service_type"
                                    required
                                >
                                    <option value="">Select Service Type</option>
                                    <option value="airtime">Airtime</option>
                                    <option value="data">Data</option>
                                    <option value="tv">TV Subscription</option>
                                    <option value="electricity">Electricity</option>
                                    <option value="travel_flight">Travel and Flight</option>
                                </select>

                                <div class="invalid-feedback">
                                    Choose a Service Type.
                                </div>
                            </div>


                            <!-- SKU -->
                            <div class="col-md-6">
                                <label class="form-label" for="formSku">
                                    SKU
                                </label>

                                <input
                                    class="form-control"
                                    id="formSku"
                                    type="text"
                                    name="sku"
                                    placeholder="SKU"
                                    required
                                >

                                <div class="invalid-feedback">
                                    Enter a valid SKU.
                                </div>
                            </div>


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
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>

                                <div class="invalid-feedback">
                                    Choose a Status.
                                </div>
                            </div>


                            <!-- Description -->
                            <div class="col-12">
                                <label class="form-label" for="formMessage">
                                    Description
                                </label>

                                <textarea
                                    class="form-control"
                                    id="formMessage"
                                    rows="5"
                                    name="description"
                                    required
                                ></textarea>

                                <div class="invalid-feedback">
                                    Description is required.
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn btn-primary" type="submit">
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