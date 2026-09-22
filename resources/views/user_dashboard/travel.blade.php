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
                <h1 class="h3 mb-1">Travel and Flight</h1>
                <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
              </div>
            </div>
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
          </div>
            <?php
                /*
                |--------------------------------------------------------------------------
                | Support both index() and show()
                |--------------------------------------------------------------------------
                | index() sends $products
                | show() sends $product
                */
                $travelProducts = isset($products)
                    ? $products
                    : (isset($product) ? collect([$product]) : collect());
            ?>

            <div class="row">

                <?php if ($travelProducts->count() > 0): ?>

                    <?php foreach ($travelProducts as $travelProduct): ?>

                        <div class="col-md-4 col-sm-4">
                            <div class="panel h-100">

                                <div class="d-flex flex-wrap gap-2"
                                    style="display:flex; flex-direction:column; align-items:center;">

                                    <img
                                        src="<?php echo asset('uploads/categories/9e4afb5860ca0cf1e12486fc5d0e8827.jpg'); ?>"
                                        style="width:10rem;height:10rem"
                                        class="img-fluid"
                                        alt="<?php echo htmlspecialchars($travelProduct->name); ?>"
                                    >

                                    <br/>
                                </div>

                                <h5 class="fw-bold mb-2">
                                    <?php echo htmlspecialchars($travelProduct->name); ?>
                                </h5>

                                <p class="text-muted small mb-3">
                                    <?php echo htmlspecialchars($travelProduct->description ?? 'Travel and flight booking service.'); ?>
                                </p>

                                <div>

                                    <div class="mb-3">

                                        <span class="text-muted small d-block">
                                            Book Flight
                                        </span>

                                        <span class="fs-4 fw-bold text-dark">
                                            ₦<?php echo number_format((float) $travelProduct->price, 2); ?>
                                        </span>

                                    </div>

                                    <button
                                        class="btn btn-primary"
                                        type="button"
                                        data-bs-toggle="modal"
                                        data-bs-target="#confirmModal-<?php echo $travelProduct->id; ?>"
                                    >
                                        Book Flight
                                    </button>

                                </div>

                            </div>
                        </div>


                        <!-- Confirmation Modal -->
                        <div
                            class="modal fade"
                            id="confirmModal-<?php echo $travelProduct->id; ?>"
                            tabindex="-1"
                            aria-labelledby="confirmModalLabel-<?php echo $travelProduct->id; ?>"
                            aria-hidden="true"
                        >

                            <div class="modal-dialog modal-dialog-centered">

                                <div class="modal-content">

                                    <div class="modal-header">

                                        <h2
                                            class="modal-title h5"
                                            id="confirmModalLabel-<?php echo $travelProduct->id; ?>"
                                        >
                                            Confirm Action
                                        </h2>

                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>

                                    </div>


                                    <div class="modal-body">

                                        <p class="mb-2">
                                            You are about to book:
                                        </p>

                                        <p class="fw-bold mb-2">
                                            <?php echo htmlspecialchars($travelProduct->name); ?>
                                        </p>

                                        <p class="text-muted mb-0">
                                            Amount:
                                            <strong>
                                                ₦<?php echo number_format((float) $travelProduct->price, 2); ?>
                                            </strong>
                                        </p>

                                    </div>


                                    <div class="modal-footer">

                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal"
                                        >
                                            Cancel
                                        </button>


                                        <form
                                            action="<?php echo route('travel-flight.purchase'); ?>"
                                            method="POST"
                                            style="display:inline;"
                                        >

                                            <?php echo csrf_field(); ?>

                                            <input
                                                type="hidden"
                                                name="product_id"
                                                value="<?php echo $travelProduct->id; ?>"
                                            >

                                            <button
                                                type="submit"
                                                class="btn btn-primary"
                                            >
                                                Confirm
                                            </button>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                <?php else: ?>

                    <div class="col-12">

                        <div class="alert alert-info">
                            No travel and flight services are currently available.
                        </div>

                    </div>

                <?php endif; ?>

            </div>
        </div>
      </main>
@endsection

