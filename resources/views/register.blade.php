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
                        <h2>Register</h2>
                        <?php if(session('success')): ?>
                            <div class="success-message">
                                <div>
                                    <h4>Congratulations!</h4>
                                    <p><?php echo session('success'); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <p>Fill in the form and one of our advisors will contact you within one business day.</p>
                        <form class="ve-contact-form" action="<?php echo route('product.store'); ?>" method="POST">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="ve-form-row">
                                <div class="ve-form-group"><label>First Name</label><input type="text" placeholder="Your full name" name="first_name" required></div>
                                <div class="ve-form-group"><label>Last Name</label><input type="text" placeholder="Your Last name" name="last_name" required></div>
                            </div>
                            <div class="ve-form-row">
                                <div class="ve-form-group"><label>Username</label><input type="tel" placeholder="Your phone" name="username"></div>
                                <div class="ve-form-group"><label>Email Address</label><input type="email" placeholder="Your email" name="email" required></div>
                            </div>
                            <div class="ve-form-row">
                                <div class="ve-form-group"><label>Phone Number</label><input type="tel" placeholder="Your phone" name="phone"></div>
                                <div class="ve-form-group"><label>Password</label><input type="password" placeholder="passsword" name="password"></div>
                            </div>
                            <button type="submit" class="ve-btn-primary">Register</i></button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-5 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-contact-aside">
                        <div class="ve-ca-box">
                            <h4>Why Clients Choose Us</h4>
                            <ul class="ve-ca-list">
                                <li><i class="fa fa-check-circle"></i> Free initial consultation</li>
                                <li><i class="fa fa-check-circle"></i> Response within 24 hours</li>
                                <li><i class="fa fa-check-circle"></i> No sales pressure — ever</li>
                                <li><i class="fa fa-check-circle"></i> Certified financial planners</li>
                                <li><i class="fa fa-check-circle"></i> Fiduciary standard of care</li>
                            </ul>
                        </div>
                        <div class="ve-ca-hours">
                            <h5><i class="fa fa-clock-o"></i> Office Hours</h5>
                            <ul>
                                <li><span>Monday – Friday</span><strong>9:00 AM – 6:00 PM</strong></li>
                                <li><span>Saturday</span><strong>10:00 AM – 2:00 PM</strong></li>
                                <li><span>Sunday</span><strong>Closed</strong></li>
                            </ul>
                        </div>
                        <div class="ve-ca-social">
                            <h5>Connect With Us</h5>
                            <div class="ve-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection