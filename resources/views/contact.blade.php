@extends('layout.app')

@section('title', 'Home Page')

@section('content')


    <!-- ===== HERO: Split layout — left text, right image panel ===== -->
  <section class="ve-page-hero" style="background-image:url(img/bg-img/22.jpg);">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Get In Touch</span>
            <h1>We'd Love to <span>Hear From You</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="index.html">Home</a></li><li class="active">Contact</li></ol></nav>
        </div>
    </section>

    <section class="ve-contact-cards-section">
        <div class="container">
            <div class="ve-contact-cards-grid">
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="100ms"><div class="ve-ci-icon"><i class="fa fa-map-marker"></i></div><h5>Visit Our Office</h5><p>42 Harbor View, San Francisco, CA 94105</p></div>
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="250ms"><div class="ve-ci-icon"><i class="fa fa-phone"></i></div><h5>Call Us</h5><p>+1 800 555 0199<br><small>Mon–Fri, 9am – 6pm PST</small></p></div>
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="400ms"><div class="ve-ci-icon"><i class="fa fa-envelope"></i></div><h5>Email Us</h5><p>hello@vaultedge.com<br><small>We reply within 24 hours</small></p></div>
            </div>
        </div>
    </section>

    <section class="ve-section ve-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-contact-form-wrap">
                        <span class="ve-section-tag">Get In Touch</span>
                        <h2>Contact <span>Our Support Team</span></h2>
                        <p>Have a question or need assistance? Fill in the form and our support team will get back to you as soon as possible.</p>

                        <form class="ve-contact-form" action="#" method="post">
                            <div class="ve-form-row">
                                <div class="ve-form-group">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Your full name" required>
                                </div>

                                <div class="ve-form-group">
                                    <label>Email Address</label>
                                    <input type="email" placeholder="Your email" required>
                                </div>
                            </div>

                            <div class="ve-form-row">
                                <div class="ve-form-group">
                                    <label>Phone Number</label>
                                    <input type="tel" placeholder="Your phone">
                                </div>

                                <div class="ve-form-group">
                                    <label>Service</label>
                                    <select>
                                        <option>Select a service</option>
                                        <option>Airtime &amp; Data</option>
                                        <option>Recharge Cards</option>
                                        <option>GOtv Subscription</option>
                                        <option>Startimes Subscription</option>
                                        <option>Visa Services</option>
                                        <option>Wallet &amp; Payment</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ve-form-group">
                                <label>Your Message</label>
                                <textarea rows="5" placeholder="Tell us how we can help you..."></textarea>
                            </div>

                            <button type="submit" class="ve-btn-primary">
                                Send Message <i class="fa fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-5 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-contact-aside">

                        <div class="ve-ca-box">
                            <h4>Why Choose Our Platform</h4>

                            <ul class="ve-ca-list">
                                <li><i class="fa fa-check-circle"></i> Fast and reliable digital services</li>
                                <li><i class="fa fa-check-circle"></i> Convenient 24/7 service access</li>
                                <li><i class="fa fa-check-circle"></i> Secure and reliable transactions</li>
                                <li><i class="fa fa-check-circle"></i> Multiple services in one platform</li>
                                <li><i class="fa fa-check-circle"></i> Dedicated customer support</li>
                            </ul>
                        </div>

                        <div class="ve-ca-hours">
                            <h5><i class="fa fa-clock-o"></i> Service Hours</h5>

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