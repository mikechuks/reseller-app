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
                <h1 class="h3 mb-1">Show Reviews</h1>
                <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
              </div>
            </div>
            
          </div>
            <section class="panel">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-table" aria-hidden="true"></i>
                            <span>Advanced Table</span>
                        </h2>
                        <p class="text-muted mb-0">
                            Searchable responsive table for orders and customer data.
                        </p>
                    </div>

                    <input
                        class="form-control form-control-sm table-search"
                        type="search"
                        placeholder="Search reviews"
                        data-table-search="ordersTable"
                        aria-label="Search reviews"
                    >
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
                                <p>Please correct the following errors before submitting the form.</p>
                            </div>
                        </div>

                        <ul class="validation-list">
                            <?php foreach($errors->all() as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="ordersTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Product</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php foreach($reviews as $review): ?>

                            <tr>
                                <td class="fw-semibold">
                                    <?php echo $review->id; ?>
                                </td>

                                <!-- Customer -->
                                <td>
                                    <?php if($review->user): ?>
                                        <?php echo htmlspecialchars($review->user->first_name); ?>
                                        <?php echo htmlspecialchars($review->user->last_name); ?>
                                    <?php else: ?>
                                        <span class="text-muted">No User</span>
                                    <?php endif; ?>
                                </td>

                                <!-- Product -->
                                <td>
                                    <div class="table-media">

                                        <?php if($review->product): ?>

                                            <?php
                                                $productImage = $review->product->images->first()->image ?? null;
                                            ?>

                                            <?php if($productImage): ?>
                                                <img
                                                    class="product-thumb"
                                                    src="<?php echo asset('storage/' . $productImage); ?>"
                                                    alt="<?php echo htmlspecialchars($review->product->name); ?>"
                                                >
                                            <?php else: ?>
                                                <img
                                                    class="product-thumb"
                                                    src="<?php echo asset('assets/images/ecommerce/product-4.jpg'); ?>"
                                                    alt="<?php echo htmlspecialchars($review->product->name); ?>"
                                                >
                                            <?php endif; ?>

                                            <span>
                                                <?php echo htmlspecialchars($review->product->name); ?>
                                            </span>

                                        <?php else: ?>

                                            <span class="text-muted">No Product</span>

                                        <?php endif; ?>

                                    </div>
                                </td>

                                <!-- Rating -->
                                <td>
                                    <?php echo htmlspecialchars($review->rating); ?>
                                </td>

                                <!-- Status -->
                                <td>
                                    <?php if($review->status === 'approved'): ?>

                                        <span class="badge text-bg-success">
                                            <?php echo htmlspecialchars($review->status); ?>
                                        </span>

                                    <?php elseif($review->status === 'pending'): ?>

                                        <span class="badge text-bg-warning">
                                            <?php echo htmlspecialchars($review->status); ?>
                                        </span>

                                    <?php elseif($review->status === 'rejected'): ?>

                                        <span class="badge text-bg-danger">
                                            <?php echo htmlspecialchars($review->status); ?>
                                        </span>

                                    <?php else: ?>

                                        <span class="badge text-bg-secondary">
                                            <?php echo htmlspecialchars($review->status); ?>
                                        </span>

                                    <?php endif; ?>
                                </td>

                                <!-- Created At -->
                                <td>
                                    <?php echo htmlspecialchars($review->created_at); ?>
                                </td>

                                <!-- Updated At -->
                                <td>
                                    <?php echo htmlspecialchars($review->updated_at); ?>
                                </td>

                                <!-- Actions -->
                                <td class="text-end">

                                    <a
                                        class="btn btn-light btn-sm"
                                        href="<?php echo route('review.edit', $review->id); ?>"
                                        type="button"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="<?php echo route('review.destroy', $review->id); ?>"
                                        method="POST"
                                        style="display:inline;"
                                    >

                                        <input
                                            type="hidden"
                                            name="_token"
                                            value="<?php echo csrf_token(); ?>"
                                        >

                                        <input
                                            type="hidden"
                                            name="_method"
                                            value="DELETE"
                                        >

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this review?')"
                                        >
                                            Delete
                                        </button>

                                    </form>

                                </td>
                            </tr>

                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </section>
        </div>
      </main>
@endsection