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
                <h1 class="h3 mb-1">9Mobile</h1>
                <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
              </div>
            </div>
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
          </div>

            <div class="row">
              <div class="col-md-4" >
                <div class="panel h-100" >
                  <div class="d-flex flex-wrap gap-2" style="display:flex; flex-direction:column; align-items:center;">
                    <img src="{{ asset('uploads/categories/560530a92dba14aa115b43eeae722645.png') }}" style="width:10rem;height:10rem"><br/>
                  </div>
                  <h5 class="fw-bold mb-2"> 9Mobile Airtime </h5>
                  <p class="text-muted small mb-3"> Buy 9Mobile airtime instantly and securely. </p>                  
                  <div>
                      <div class="mb-3"> 
                        <span class="text-muted small d-block">Airtime Amount</span> <span class="fs-4 fw-bold text-dark"> ₦100 </span> 
                      </div>
                  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#confirmModal">Buy Airtime</button>
                  </div>
                </div>
              </div>
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

