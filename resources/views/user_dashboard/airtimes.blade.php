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
                <h1 class="h3 mb-1">Purchase Airtime</h1>
                <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
              </div>
            </div>            
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
          </div>

            <div class="col-12 col-xl-6">
              <div class="panel h-100">
                <h2 class="h5 mb-3 section-title"><i class="bi bi-window-stack" aria-hidden="true"></i>
                <span>Modal Examples</span></h2><div class="d-flex flex-wrap gap-2"><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#confirmModal">Open Confirm Modal</button>
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

