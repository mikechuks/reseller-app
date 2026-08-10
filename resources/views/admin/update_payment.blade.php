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
                <h1 class="h3 mb-1">Update Payments</h1>
                <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
              </div>
            </div>
          </div>
            <section class="row">
                <div class="col-12 col-xl-12">

                    <form
                        class="panel needs-validation"
                        action="<?php echo route('payment.update', $payment->id); ?>"
                        method="POST"
                        novalidate
                    >

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
                                        <p>
                                            Please correct the following errors before submitting the form.
                                        </p>
                                    </div>
                                </div>

                                <ul class="validation-list">
                                    <?php foreach($errors->all() as $error): ?>
                                        <li><?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <input
                            type="hidden"
                            name="_token"
                            value="<?php echo csrf_token(); ?>"
                        >

                        <input
                            type="hidden"
                            name="_method"
                            value="PUT"
                        >

                        <div class="row g-3">

                            <!-- Order -->
                            <div class="col-md-6">
                                <label class="form-label" for="formOrder">
                                    Order
                                </label>

                                <select
                                    class="form-select"
                                    id="formOrder"
                                    name="order_id"
                                    required
                                >
                                    <option value=""> Select Order</option>

                                    <?php foreach ($orders as $order): ?>
                                        <option
                                            value="<?php echo htmlspecialchars($order->id); ?>"
                                            <?php echo old('order_id', $payment->order_id) == $order->id ? 'selected' : ''; ?>
                                        >
                                            <?php echo htmlspecialchars($order->order_number); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>

                                <div class="invalid-feedback">
                                    Choose an Order.
                                </div>
                            </div>

                            <!-- Transaction ID -->
                            <div class="col-md-6">
                                <label class="form-label" for="formName">
                                    Transaction ID
                                </label>

                                <input
                                    class="form-control"
                                    id="formName"
                                    type="text"
                                    name="transaction_id"
                                    value="<?php echo htmlspecialchars(old('transaction_id', $payment->transaction_id)); ?>"
                                    required
                                >

                                <div class="invalid-feedback">
                                    Transaction id is required.
                                </div>
                            </div>

                            <!-- Payment Method -->
                            <div class="col-md-6">
                                <label class="form-label" for="formPaymentMethod">
                                    Payment Method
                                </label>

                                <select
                                    class="form-select"
                                    id="formPaymentMethod"
                                    name="payment_method"
                                    required
                                >
                                    <option value=""> Select Payment Method</option>

                                    <option
                                        value="paystack"
                                        <?php echo old('payment_method', $payment->payment_method) == 'paystack' ? 'selected' : ''; ?>
                                    >
                                        Paystack
                                    </option>

                                    <option
                                        value="flutterwave"
                                        <?php echo old('payment_method', $payment->payment_method) == 'flutterwave' ? 'selected' : ''; ?>
                                    >
                                        Flutterwave
                                    </option>

                                    <option
                                        value="stripe"
                                        <?php echo old('payment_method', $payment->payment_method) == 'stripe' ? 'selected' : ''; ?>
                                    >
                                        Stripe
                                    </option>

                                    <option
                                        value="bank_transfer"
                                        <?php echo old('payment_method', $payment->payment_method) == 'bank_transfer' ? 'selected' : ''; ?>
                                    >
                                        Bank Transfer
                                    </option>

                                    <option
                                        value="cash_on_delivery"
                                        <?php echo old('payment_method', $payment->payment_method) == 'cash_on_delivery' ? 'selected' : ''; ?>
                                    >
                                        Cash On Delivery
                                    </option>
                                </select>

                                <div class="invalid-feedback">
                                    Choose a Payment Method.
                                </div>
                            </div>

                            <!-- Amount -->
                            <div class="col-md-6">
                                <label class="form-label" for="formBudget">
                                    Amount
                                </label>

                                <input
                                    class="form-control"
                                    id="formBudget"
                                    type="number"
                                    name="amount"
                                    step="0.01"
                                    min="0"
                                    placeholder="Amount"
                                    value="<?php echo htmlspecialchars(old('amount', $payment->amount)); ?>"
                                    required
                                >

                                <div class="invalid-feedback">
                                    Enter a valid Amount.
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <label class="form-label" for="formStatus">
                                    Status
                                </label>

                                <select
                                    class="form-select"
                                    id="formStatus"
                                    name="status"
                                    required
                                >
                                    <option value=""> Select Status</option>

                                    <option
                                        value="pending"
                                        <?php echo old('status', $payment->status) == 'pending' ? 'selected' : ''; ?>
                                    >
                                        Pending
                                    </option>

                                    <option
                                        value="paid"
                                        <?php echo old('status', $payment->status) == 'paid' ? 'selected' : ''; ?>
                                    >
                                        Paid
                                    </option>

                                    <option
                                        value="failed"
                                        <?php echo old('status', $payment->status) == 'failed' ? 'selected' : ''; ?>
                                    >
                                        Failed
                                    </option>

                                    <option
                                        value="refunded"
                                        <?php echo old('status', $payment->status) == 'refunded' ? 'selected' : ''; ?>
                                    >
                                        Refunded
                                    </option>
                                </select>

                                <div class="invalid-feedback">
                                    Choose a Status.
                                </div>
                            </div>

                            <!-- Paid At -->
                            <div class="col-md-6">
                                <label class="form-label" for="formPaidAt">
                                    Paid At
                                </label>

                                <input
                                    class="form-control"
                                    id="formPaidAt"
                                    type="datetime-local"
                                    name="paid_at"
                                    value="<?php
                                        echo old(
                                            'paid_at',
                                            $payment->paid_at
                                                ? \Carbon\Carbon::parse($payment->paid_at)->format('Y-m-d\TH:i')
                                                : ''
                                        );
                                    ?>"
                                >
                            </div>

                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button
                                class="btn btn-primary"
                                type="submit"
                            >
                                <i class="bi bi-send" aria-hidden="true"></i>
                                Update Payment
                            </button>
                        </div>

                    </form>
                </div>
            </section>
        </div>
      </main>
@endsection