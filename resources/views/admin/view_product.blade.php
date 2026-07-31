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
                <h1 class="h3 mb-1">Show Product</h1>
                <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
              </div>
            </div>
            
          </div>

          <section class="panel">
            <div class="panel-header">
              <div><h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Advanced Table</span></h2><p class="text-muted mb-0">Searchable responsive table for orders and customer data.</p>
              </div>
              <input class="form-control form-control-sm table-search" type="search" placeholder="Search orders" data-table-search="ordersTable" aria-label="Search orders">
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
                    <th>Order</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th>Craeted At</th>
                    <th>Updated At</th>
                    <th class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
            <?php foreach($products as $product):?>
                <td class="fw-semibold"><?php echo $product->id; ?></td>
                <td><div class="table-media"><img class="product-thumb" src="../assets/images/ecommerce/product-4.jpg" alt="Travel Backpack"><span>Travel Backpack</span></div></td>
                <td><?php echo htmlspecialchars($product->name); ?></td>
                <td><span class="badge text-bg-danger"><?php echo htmlspecialchars($product->status); ?></span></td>
                <td><?php echo htmlspecialchars($product->price); ?></td>
                <td><?php echo htmlspecialchars($product->description); ?></td>
                <td><?php echo htmlspecialchars($product->created_at); ?></td>
                <td><?php echo htmlspecialchars($product->updated_at); ?></td>
                <td class="text-end"><a class="btn btn-light btn-sm" href="<?php echo route('products.edit',$product->id); ?>" type="button">Edit</a>
                <form action="<?php echo route('products.destroy', $product->id); ?>" method="POST" style="display:inline;">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="_method" value="DELETE">
                <button
                      type="submit"
                      class="btn btn-danger btn-sm"
                      onclick="return confirm('Are you sure you want to delete this product?')">
                      Delete
                </button>
                </form>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
          </section>
        </div>
      </main>
@endsection