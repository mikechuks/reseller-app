@extends('layout.dashboard')

@section('title', 'Index Page')

@section('content')
      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Overview</p>
                <h1 class="h3 mb-1">MTN</h1>
                <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
              </div>
            </div>            
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
          </div>
          
            <?php if (session('success')): ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo htmlspecialchars(session('success')); ?>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close">
                        </button>
                    </div>

                <?php endif; ?>


                <?php if (session('error')): ?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo htmlspecialchars(session('error')); ?>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close">
                        </button>
                    </div>

                <?php endif; ?>


                <?php if ($errors->any()): ?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">

                        <strong>Please correct the following:</strong>

                        <ul class="mb-0 mt-2">
                            <?php foreach ($errors->all() as $error): ?>

                                <li>
                                    <?php echo htmlspecialchars($error); ?>
                                </li>

                            <?php endforeach; ?>
                        </ul>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close">
                        </button>

                    </div>

                <?php endif; ?>


            <div class="row">

                <?php if (!empty($products) && $products->count() > 0): ?>

                    <?php foreach ($products as $product): ?>

                        <div class="col-md-4 col-sm-4">
                            <div class="panel h-100">

                                <!-- MTN Image -->
                                <div class="d-flex flex-wrap gap-2"
                                    style="display:flex; flex-direction:column; align-items:center;">

                                    <img
                                        src="<?php echo asset('uploads/categories/mtn.png'); ?>"
                                        style="width:10rem;height:10rem"
                                        alt="MTN Airtime"
                                        class="img-fluid"
                                    >

                                    <br/>
                                </div>

                                <!-- Product Name -->
                                <h5 class="fw-bold mb-2">
                                    <?php echo htmlspecialchars($product->name); ?>
                                </h5>

                                <!-- Description -->
                                <p class="text-muted small mb-3">
                                    <?php
                                    echo htmlspecialchars(
                                        $product->description ?? 'Buy MTN airtime instantly and securely.'
                                    );
                                    ?>
                                </p>

                                <!-- Airtime Amount -->
                                <div>
                                    <div class="mb-3">

                                        <span class="text-muted small d-block">
                                            Airtime Amount
                                        </span>

                                        <span class="fs-4 fw-bold text-dark">
                                            ₦<?php echo number_format($product->price, 2); ?>
                                        </span>

                                    </div>

                                    <!-- Buy Button -->
                                    <button
                                        class="btn btn-primary"
                                        type="button"
                                        data-bs-toggle="modal"
                                        data-bs-target="#confirmModal<?php echo $product->id; ?>"
                                    >
                                        Buy Airtime
                                    </button>

                                </div>

                            </div>
                        </div>


                        <!-- Confirmation Modal -->
                        <div
                            class="modal fade"
                            id="confirmModal<?php echo $product->id; ?>"
                            tabindex="-1"
                            aria-labelledby="confirmModalLabel<?php echo $product->id; ?>"
                            aria-hidden="true"
                        >

                            <div class="modal-dialog modal-dialog-centered">

                                <div class="modal-content">

                                    <!-- Purchase Form -->
                                    <form
                                        action="<?php echo route('mtn-airtime.buy'); ?>"
                                        method="POST"
                                    >

                                        <?php echo csrf_field(); ?>

                                        <div class="modal-header">

                                            <h5
                                                class="modal-title"
                                                id="confirmModalLabel<?php echo $product->id; ?>"
                                            >
                                                Confirm Airtime Purchase
                                            </h5>

                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>

                                        </div>


                                        <div class="modal-body">

                                            <p class="mb-2">
                                                <strong>Network:</strong>
                                                MTN
                                            </p>

                                            <p class="mb-2">
                                                <strong>Product:</strong>
                                                <?php echo htmlspecialchars($product->name); ?>
                                            </p>

                                            <p class="mb-2">
                                                <strong>Amount:</strong>
                                                ₦<?php echo number_format($product->price, 2); ?>
                                            </p>


                                            <!-- Phone Number -->
                                            <div class="mb-3">

                                                <label
                                                    for="phone<?php echo $product->id; ?>"
                                                    class="form-label"
                                                >
                                                    Phone Number
                                                </label>

                                                <input
                                                    type="tel"
                                                    class="form-control"
                                                    id="phone<?php echo $product->id; ?>"
                                                    name="phone"
                                                    value="<?php echo old('phone'); ?>"
                                                    placeholder="Enter MTN phone number"
                                                    pattern="[0-9]{11}"
                                                    maxlength="11"
                                                    required
                                                >

                                            </div>


                                            <p class="text-muted small mb-0">
                                                Please confirm that you want to purchase this airtime.
                                            </p>

                                        </div>


                                        <div class="modal-footer">

                                            <button
                                                type="button"
                                                class="btn btn-secondary"
                                                data-bs-dismiss="modal"
                                            >
                                                Cancel
                                            </button>


                                            <input
                                                type="hidden"
                                                name="product_id"
                                                value="<?php echo $product->id; ?>"
                                            >


                                            <button
                                                type="submit"
                                                class="btn btn-primary"
                                            >
                                                Confirm Purchase
                                            </button>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                <?php else: ?>

                    <div class="col-12">

                        <div class="panel text-center">

                            <img
                                src="<?php echo asset('uploads/categories/mtn.png'); ?>"
                                style="width:8rem;height:8rem"
                                alt="MTN Airtime"
                            >

                            <h5 class="fw-bold mt-3">
                                No MTN Airtime Available
                            </h5>

                            <p class="text-muted">
                                MTN airtime products are currently unavailable.
                                Please check again later.
                            </p>

                        </div>

                    </div>

                <?php endif; ?>

            </div>

        </div>
      </main>
@endsection

