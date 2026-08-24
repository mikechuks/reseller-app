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
          
          <div class="row">

              @forelse($products as $product)

                  <div class="col-md-4 col-sm-4">
                      <div class="panel h-100">

                          {{-- MTN Image --}}
                          <div class="d-flex flex-wrap gap-2"
                              style="display:flex; flex-direction:column; align-items:center;">

                              <img
                                  src="{{ asset('uploads/categories/mtn.png') }}"
                                  style="width:10rem;height:10rem"
                                  alt="MTN Airtime"
                                  class="img-fluid"
                              >

                              <br/>
                          </div>

                          {{-- Product Name --}}
                          <h5 class="fw-bold mb-2">
                              {{ $product->name }}
                          </h5>

                          {{-- Description --}}
                          <p class="text-muted small mb-3">
                              {{ $product->description ?? 'Buy MTN airtime instantly and securely.' }}
                          </p>

                          {{-- Airtime Amount --}}
                          <div>
                              <div class="mb-3">

                                  <span class="text-muted small d-block">
                                      Airtime Amount
                                  </span>

                                  <span class="fs-4 fw-bold text-dark">
                                      ₦{{ number_format($product->price, 2) }}
                                  </span>

                              </div>

                              {{-- Buy Button --}}
                              <button
                                  class="btn btn-primary"
                                  type="button"
                                  data-bs-toggle="modal"
                                  data-bs-target="#confirmModal{{ $product->id }}"
                              >
                                  Buy Airtime
                              </button>

                          </div>

                      </div>
                  </div>


                  {{-- Confirmation Modal --}}
                  <div class="modal fade"
                      id="confirmModal{{ $product->id }}"
                      tabindex="-1"
                      aria-labelledby="confirmModalLabel{{ $product->id }}"
                      aria-hidden="true">

                      <div class="modal-dialog modal-dialog-centered">

                          <div class="modal-content">

                              <div class="modal-header">

                                  <h5 class="modal-title"
                                      id="confirmModalLabel{{ $product->id }}">
                                      Confirm Airtime Purchase
                                  </h5>

                                  <button
                                      type="button"
                                      class="btn-close"
                                      data-bs-dismiss="modal"
                                      aria-label="Close">
                                  </button>

                              </div>

                              <div class="modal-body">

                                  <p class="mb-2">
                                      <strong>Network:</strong>
                                      MTN
                                  </p>

                                  <p class="mb-2">
                                      <strong>Product:</strong>
                                      {{ $product->name }}
                                  </p>

                                  <p class="mb-2">
                                      <strong>Amount:</strong>
                                      ₦{{ number_format($product->price, 2) }}
                                  </p>

                                  <p class="text-muted small mb-0">
                                      Please confirm that you want to purchase this airtime.
                                  </p>

                              </div>

                              <div class="modal-footer">

                                  <button
                                      type="button"
                                      class="btn btn-secondary"
                                      data-bs-dismiss="modal">
                                      Cancel
                                  </button>

                                  {{-- Purchase button --}}
                                  <form action="#" method="POST">
                                      @csrf

                                      <input
                                          type="hidden"
                                          name="product_id"
                                          value="{{ $product->id }}"
                                      >

                                      <button
                                          type="submit"
                                          class="btn btn-primary">
                                          Confirm Purchase
                                      </button>

                                  </form>

                              </div>

                          </div>

                      </div>

                  </div>

              @empty

                  <div class="col-12">

                      <div class="panel text-center">

                          <img
                              src="{{ asset('uploads/categories/mtn.png') }}"
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

              @endforelse

          </div>

              <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="modal-title h5" id="confirmModalLabel">Confirm Action</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body">This action will update the selected record.</div><div class="modal-footer"><button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button><button type="button" class="btn btn-primary">Confirm</button>
                    </div>
                  </div>
                </div>
              </div>

        </div>
      </main>
@endsection

