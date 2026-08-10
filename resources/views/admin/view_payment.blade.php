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
                <h1 class="h3 mb-1">Show Payments</h1>
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
                      placeholder="Search orders"
                      data-table-search="ordersTable"
                      aria-label="Search orders"
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
                              <th>Order No.</th>
                              <th>Transaction</th>
                              <th>Method</th>
                              <th>Amount</th>
                              <th>Status</th>
                              <th>Created At</th>
                              <th>Updated At</th>
                              <th class="text-end">Action</th>
                          </tr>
                      </thead>

                      <tbody>
                          <?php foreach($payments as $payment): ?>
                              <tr>
                                  <td class="fw-semibold">
                                      <?php echo $payment->id; ?>
                                  </td>

                                  <td>
                                      <?php echo htmlspecialchars($payment->order->order_number ?? 'N/A'); ?>
                                  </td>

                                  <td>
                                      <?php echo htmlspecialchars($payment->transaction_id ?? 'N/A'); ?>
                                  </td>

                                  <td>
                                      <?php
                                          echo htmlspecialchars(
                                              ucfirst(str_replace('_', ' ', $payment->payment_method))
                                          );
                                      ?>
                                  </td>

                                  <td>
                                      <?php echo htmlspecialchars(number_format($payment->amount, 2)); ?>
                                  </td>

                                  <td>
                                      <span class="badge text-bg-danger">
                                          <?php echo htmlspecialchars(ucfirst($payment->status)); ?>
                                      </span>
                                  </td>

                                  <td>
                                      <?php echo htmlspecialchars($payment->created_at); ?>
                                  </td>

                                  <td>
                                      <?php echo htmlspecialchars($payment->updated_at); ?>
                                  </td>

                                  <td class="text-end">
                                      <a
                                          class="btn btn-light btn-sm"
                                          href="<?php echo route('payment.edit', $payment->id); ?>"
                                          type="button"
                                      >
                                          Edit
                                      </a>

                                      <form
                                          action="<?php echo route('payment.destroy', $payment->id); ?>"
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
                                              onclick="return confirm('Are you sure you want to delete this payment?')"
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

              <!-- Pagination -->
              <div class="mt-3">
                  <?php echo $payments->links(); ?>
              </div>
          </section>
        </div>
      </main>
@endsection