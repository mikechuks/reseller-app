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
              <form class="panel needs-validation" action="<?php echo route('productImg.store'); ?>" method="POST" enctype="multipart/form-data" novalidate>
                <div class="panel-header"><div><h2 class="h5 mb-1 section-title"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i><span>Validation Form</span></h2><p class="text-muted mb-0">Bootstrap-ready fields with custom validation feedback.</p></div></div>
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
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="row g-3">
                <div class="col-md-6">
                          <label class="form-label">Product</label>
                          <select class="form-select" name="product_id" required>
                              <option value="">Select Product</option>
                              <?php foreach($products as $product): ?>
                                  <option value="<?php echo $product->id; ?>">
                                      <?php echo htmlspecialchars($product->name); ?>
                                  </option>
                              <?php endforeach; ?>
                          </select>
                          <div class="invalid-feedback">
                              Please select a product.
                          </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formBudget">Product Image</label>
                        <input class="form-control" type="file" name="image" accept=".jpg,.jpeg,.png,.webp"required>
                        <div class="invalid-feedback">Please choose an image.</div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-send" aria-hidden="true"></i> Submit Form</button>
                </div>
              </form>
            </div>
          </section>
        </div>
      </main>
@endsection