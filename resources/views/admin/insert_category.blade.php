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
                <h1 class="h3 mb-1">Add Category</h1>
                <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
              </div>
            </div>
            
          </div>

          <section class="row">
            <div class="col-12 col-xl-12">
              <form class="panel needs-validation" action="<?php echo route('category.store'); ?>" method="POST" enctype="multipart/form-data" novalidate>
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
                        <label class="form-label" for="formName">Category name</label>
                        <input class="form-control" id="formName" type="text" name="name" placeholder="Category Name" required>
                        <div class="invalid-feedback">Category name is required.</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formName">Image</label>
                        <input class="form-control" id="formName" type="file" name="image" placeholder="Image Name" required>
                        <div class="invalid-feedback">Image name is required.</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="formName">Status</label>
                        <select  class="form-select" id="formPlan" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <div class="invalid-feedback">Status is required.</div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="formMessage">Description</label>
                    <textarea class="form-control" id="formMessage" rows="5"         name="description" placeholder="Description" required></textarea>
                    <div class="invalid-feedback">Description is required.</div>
                </div>
            </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-send" aria-hidden="true"></i> Submit Category</button>
                </div>
              </form>
            </div>
          </section>
        </div>
      </main>
@endsection