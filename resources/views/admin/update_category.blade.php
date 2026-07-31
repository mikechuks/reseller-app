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
                <h1 class="h3 mb-1">Update Category</h1>
                <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
              </div>
            </div>
            
          </div>

            <section class="row">
                <div class="col-12 col-xl-12">
                    <form class="panel needs-validation"
                        action="<?php echo route('categories.update', $category->id); ?>"
                        method="POST"
                        enctype="multipart/form-data"
                        novalidate>

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
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row g-3">

                            <!-- Category Name -->
                            <div class="col-md-6">
                                <label class="form-label" for="formName">Category Name</label>
                                <input
                                    class="form-control"
                                    id="formName"
                                    type="text"
                                    name="name"
                                    placeholder="Category Name"
                                    value="<?php echo old('name', $category->name); ?>"
                                    required>
                                <div class="invalid-feedback">
                                    Category name is required.
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-md-6">
                                <label class="form-label" for="formImage">Image</label>

                                <?php if(!empty($category->image)): ?>
                                    <div class="mb-2">
                                        <img src="<?php echo asset('uploads/categories/'.$category->image); ?>"
                                            width="120"
                                            class="img-thumbnail">
                                    </div>
                                <?php endif; ?>

                                <input
                                    class="form-control"
                                    id="formImage"
                                    type="file"
                                    name="image">

                                <div class="invalid-feedback">
                                    Image is required.
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <label class="form-label" for="formStatus">Status</label>

                                <select class="form-select"
                                        id="formStatus"
                                        name="status">

                                    <option value="active"
                                        <?php echo ($category->status == 'active') ? 'selected' : ''; ?>>
                                        Active
                                    </option>

                                    <option value="inactive"
                                        <?php echo ($category->status == 'inactive') ? 'selected' : ''; ?>>
                                        Inactive
                                    </option>

                                </select>

                                <div class="invalid-feedback">
                                    Status is required.
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-md-6">
                                <label class="form-label" for="formMessage">Description</label>

                                <textarea
                                    class="form-control"
                                    id="formMessage"
                                    rows="5"
                                    name="description"
                                    placeholder="Description"><?php echo old('description', $category->description); ?></textarea>

                                <div class="invalid-feedback">
                                    Description is required.
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-send" aria-hidden="true"></i>
                                Update Category
                            </button>
                        </div>

                    </form>
                </div>
            </section>
        </div>
      </main>
@endsection