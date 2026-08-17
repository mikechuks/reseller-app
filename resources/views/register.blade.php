@extends('layout.app')

@section('title', 'Home Page')

@section('content')


    <!-- ===== HERO: Split layout — left text, right image panel ===== -->
  <section class="ve-page-hero" style="background-image:url(img/bg-img/22.jpg);">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Get In Touch</span>
            <h1>We'd Love to <span>Hear From You</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="index.html">Home</a></li><li class="active">register</li></ol></nav>
        </div>
    </section>

    <section class="ve-section ve-contact-section">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-7 wow fadeInLeft" data-wow-delay="100ms">

                    <div class="ve-contact-form-wrap">

                        <span class="ve-section-tag">Create Your Account</span>

                        <h2>Join Our <span>Platform</span></h2>


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


                        <p>
                            Create your account today and enjoy fast, convenient, and reliable
                            access to our wide range of digital services.
                        </p>


                        <form
                            class="ve-contact-form"
                            action="<?php echo route('register.store'); ?>"
                            method="POST"
                        >

                            <input
                                type="hidden"
                                name="_token"
                                value="<?php echo csrf_token(); ?>"
                            >


                            <div class="ve-form-row">

                                <div class="ve-form-group">
                                    <label>First Name</label>

                                    <input
                                        type="text"
                                        placeholder="Your first name"
                                        name="first_name"
                                        value="<?php echo old('first_name'); ?>"
                                        required
                                    >
                                </div>


                                <div class="ve-form-group">
                                    <label>Last Name</label>

                                    <input
                                        type="text"
                                        placeholder="Your last name"
                                        name="last_name"
                                        value="<?php echo old('last_name'); ?>"
                                        required
                                    >
                                </div>

                            </div>


                            <div class="ve-form-row">

                                <div class="ve-form-group">
                                    <label>Username</label>

                                    <input
                                        type="text"
                                        placeholder="Choose a username"
                                        name="username"
                                        value="<?php echo old('username'); ?>"
                                        required
                                    >
                                </div>


                                <div class="ve-form-group">
                                    <label>Email Address</label>

                                    <input
                                        type="email"
                                        placeholder="Your email address"
                                        name="email"
                                        value="<?php echo old('email'); ?>"
                                        required
                                    >
                                </div>

                            </div>


                            <div class="ve-form-row">

                                <div class="ve-form-group">
                                    <label>Phone Number</label>

                                    <input
                                        type="tel"
                                        placeholder="Your phone number"
                                        name="phone"
                                        value="<?php echo old('phone'); ?>"
                                        required
                                    >
                                </div>


                                <div class="ve-form-group">
                                    <label>Password</label>

                                    <input
                                        type="password"
                                        placeholder="Create a password"
                                        name="password"
                                        required
                                    >
                                </div>

                            </div>


                            <button type="submit" class="ve-btn-primary">
                                Create Account
                                <i class="fa fa-user-plus"></i>
                            </button>

                        </form>

                    </div>

                </div>


                <div class="col-12 col-lg-5 wow fadeInRight" data-wow-delay="200ms">

                    <div class="ve-contact-aside">


                        <div class="ve-ca-box">

                            <h4>Why Join Our Platform?</h4>

                            <ul class="ve-ca-list">

                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Fast and reliable digital services
                                </li>

                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Easy airtime and data purchases
                                </li>

                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    GOtv and Startimes subscriptions
                                </li>

                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Convenient wallet and payment system
                                </li>

                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Secure and convenient transactions
                                </li>

                            </ul>

                        </div>


                        <div class="ve-ca-hours">

                            <h5>
                                <i class="fa fa-clock-o"></i>
                                Service Availability
                            </h5>

                            <ul>

                                <li>
                                    <span>Monday – Friday</span>
                                    <strong>24 Hours</strong>
                                </li>

                                <li>
                                    <span>Saturday</span>
                                    <strong>24 Hours</strong>
                                </li>

                                <li>
                                    <span>Sunday</span>
                                    <strong>24 Hours</strong>
                                </li>

                            </ul>

                        </div>


                        <div class="ve-ca-social">

                            <h5>Connect With Us</h5>

                            <div class="ve-social">

                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>

                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>

                            </div>

                        </div>


                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection