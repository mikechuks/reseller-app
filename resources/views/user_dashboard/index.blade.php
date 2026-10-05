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
                <h1 class="h3 mb-1">Dashboard</h1>
                <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
              </div>
            </div>
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
          </div>


        <section class="row g-3 mt-1" aria-label="Dashboard metrics">

        <!-- Wallet Balance -->
        <div class="col-12 col-sm-6 col-xl-3">

            <article class="metric-card metric-primary">

                <div class="metric-top">

                    <span class="metric-label">
                        Wallet Balance
                    </span>

                    <span class="metric-icon">
                        <i class="bi bi-wallet2" aria-hidden="true"></i>
                    </span>

                </div>

                <div class="metric-value">
                    ₦{{ number_format((float) $walletBalance, 2) }}
                </div>

                <div class="metric-meta">

                    <a href="{{ route('wallet.fund') }}" class="text-success">
                        Fund Wallet
                    </a>

                    <span>
                        available balance
                    </span>

                </div>

            </article>

        </div>


        <!-- Total Spent -->
        <div class="col-12 col-sm-6 col-xl-3">

            <article class="metric-card metric-success">

                <div class="metric-top">

                    <span class="metric-label">
                        Total Spent
                    </span>

                    <span class="metric-icon">
                        <i class="bi bi-cash-stack" aria-hidden="true"></i>
                    </span>

                </div>

                <div class="metric-value">
                    ₦{{ number_format((float) $totalSpent, 2) }}
                </div>

                <div class="metric-meta">

                    <span class="text-success">
                        {{ $monthlyTransactions ?? 0 }}
                    </span>

                    <span>
                        transactions this month
                    </span>

                </div>

            </article>

        </div>


        <!-- Total Transactions -->
        <div class="col-12 col-sm-6 col-xl-3">

            <article class="metric-card metric-warning">

                <div class="metric-top">

                    <span class="metric-label">
                        Transactions
                    </span>

                    <span class="metric-icon">
                        <i class="bi bi-arrow-left-right" aria-hidden="true"></i>
                    </span>

                </div>

                <div class="metric-value">
                    {{ $totalTransactions }}
                </div>

                <div class="metric-meta">

                    <span class="text-success">
                        {{ $monthlyTransactions ?? 0 }}
                    </span>

                    <span>
                        this month
                    </span>

                </div>

            </article>

        </div>


        <!-- Successful Transactions -->
        <div class="col-12 col-sm-6 col-xl-3">

            <article class="metric-card metric-danger">

                <div class="metric-top">

                    <span class="metric-label">
                        Successful
                    </span>

                    <span class="metric-icon">
                        <i class="bi bi-check-circle" aria-hidden="true"></i>
                    </span>

                </div>

                <div class="metric-value">
                    {{ $successfulTransactions }}
                </div>

                <div class="metric-meta">

                    <span class="text-success">
                        {{ $successRate }}%
                    </span>

                    <span>
                        success rate
                    </span>

                </div>

            </article>

        </div>

        </section>


        <section class="row g-3 mt-1">

        <!-- Transaction Activity -->
        <div class="col-12 col-xl-8">

            <div class="panel">

                <div class="panel-header">

                    <div>

                        <h2 class="h5 mb-1 section-title">

                            <i class="bi bi-graph-up-arrow" aria-hidden="true"></i>

                            <span>
                                Transaction Activity
                            </span>

                        </h2>

                        <p class="text-muted mb-0">
                            Your transaction activity over the past months.
                        </p>

                    </div>


                    <a
                        class="btn btn-light btn-sm"
                        href="{{ route('wallet.transactions') }}"
                    >
                        View Transactions
                    </a>

                </div>


                <div
                    class="chart-bars"
                    aria-label="Transaction activity chart"
                >

                    <div class="chart-column bar-42">

                        <span></span>

                        <small>
                            Jan
                        </small>

                    </div>


                    <div class="chart-column bar-58">

                        <span></span>

                        <small>
                            Feb
                        </small>

                    </div>


                    <div class="chart-column bar-51">

                        <span></span>

                        <small>
                            Mar
                        </small>

                    </div>


                    <div class="chart-column bar-72">

                        <span></span>

                        <small>
                            Apr
                        </small>

                    </div>


                    <div class="chart-column bar-66">

                        <span></span>

                        <small>
                            May
                        </small>

                    </div>


                    <div class="chart-column bar-83">

                        <span></span>

                        <small>
                            Jun
                        </small>

                    </div>

                </div>

            </div>

        </div>


        <!-- Quick Services -->
        <div class="col-12 col-xl-4">

            <div class="panel h-100">

                <div class="panel-header">

                    <div>

                        <h2 class="h5 mb-1 section-title">

                            <i
                                class="bi bi-lightning-charge"
                                aria-hidden="true"
                            ></i>

                            <span>
                                Quick Services
                            </span>

                        </h2>

                        <p class="text-muted mb-0">
                            Access your most used services.
                        </p>

                    </div>

                </div>


                <div class="activity-list">

                    <!-- Airtime -->
                    <a
                        href=""
                        class="text-decoration-none text-dark"
                    >

                        <div class="activity-item">

                            <span class="activity-dot bg-primary"></span>

                            <div>

                                <p class="mb-1 fw-semibold">
                                    Buy Airtime
                                </p>

                                <p class="text-muted small mb-0">
                                    MTN, Airtel, Glo &amp; 9mobile
                                </p>

                            </div>

                        </div>

                    </a>


                    <!-- Data -->
                    <a
                        href="#"
                        class="text-decoration-none text-dark"
                    >

                        <div class="activity-item">

                            <span class="activity-dot bg-success"></span>

                            <div>

                                <p class="mb-1 fw-semibold">
                                    Buy Data
                                </p>

                                <p class="text-muted small mb-0">
                                    Get affordable data bundles
                                </p>

                            </div>

                        </div>

                    </a>


                    <!-- TV Subscription -->
                    <a
                        href=""
                        class="text-decoration-none text-dark"
                    >

                        <div class="activity-item">

                            <span class="activity-dot bg-warning"></span>

                            <div>

                                <p class="mb-1 fw-semibold">
                                    TV Subscription
                                </p>

                                <p class="text-muted small mb-0">
                                    GOtv &amp; Startimes subscriptions
                                </p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>

        </div>

        </section>



        <section class="panel mt-3">

            <div class="panel-header">

                <div>

                    <h2 class="h5 mb-1 section-title">
                        <i class="bi bi-clock-history" aria-hidden="true"></i>
                        <span>Recent Transactions</span>
                    </h2>

                    <p class="text-muted mb-0">
                        Your latest digital service transactions.
                    </p>

                </div>

                <a class="btn btn-outline-secondary btn-sm" href="transactions.html">
                    View All Transactions
                </a>

            </div>


            <div class="table-responsive">

                <table class="table align-middle mb-0">

                    <thead>

                        <tr>
                            <th scope="col">Service</th>
                            <th scope="col">Description</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>

                    </thead>

                    <tbody>
                      @forelse($recentOrders as $order)

                          <tr>

                              <td>

                                  <div class="d-flex align-items-center gap-2">

                                      <span class="metric-icon">
                                          <i class="bi bi-bag" aria-hidden="true"></i>
                                      </span>

                                      <div>

                                          <p class="fw-semibold mb-0">
                                              Order
                                          </p>

                                          <p class="text-muted small mb-0">
                                              {{ $order->order_number }}
                                          </p>

                                      </div>

                                  </div>

                              </td>

                              <td>
                                  Order #{{ $order->order_number }}
                              </td>

                              <td>
                                  ₦{{ number_format($order->total_amount, 2) }}
                              </td>

                              <td>

                                  @if($order->status === 'completed' || $order->status === 'delivered')

                                      <span class="badge text-bg-success">
                                          Successful
                                      </span>

                                  @elseif($order->status === 'pending' || $order->status === 'processing')

                                      <span class="badge text-bg-warning">
                                          Pending
                                      </span>

                                  @elseif($order->status === 'cancelled')

                                      <span class="badge text-bg-danger">
                                          Cancelled
                                      </span>

                                  @else

                                      <span class="badge text-bg-secondary">
                                          {{ ucfirst($order->status) }}
                                      </span>

                                  @endif

                              </td>

                              <td>
                                  {{ $order->created_at->format('M d, Y') }}
                              </td>

                              <td class="text-end">

                                  <a
                                      class="btn btn-light btn-sm"
                                      href="{{ route('dashboard.show', $order) }}"
                                  >
                                      View
                                  </a>

                              </td>

                          </tr>

                      @empty

                          <tr>

                              <td colspan="6" class="text-center py-4">

                                  No transactions found.

                              </td>

                          </tr>

                      @endforelse
                    </tbody>

                </table>

            </div>

        </section>
        </div>
      </main>
@endsection

