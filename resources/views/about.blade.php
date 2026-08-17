@extends('layout.app')

@section('title', 'Home Page')

@section('content')
<section class="ve-page-hero" style="background-image:url(img/bg-img/13.jpg);">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Our Story</span>
            <h1>Building Trust Since <span>2012</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ABOUT SPLIT -->
    <section class="ve-section">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="ve-about-img-stack">
                    <div class="ve-about-img-1 bg-img" style="background-image:url(img/bg-img/14.jpg);"></div>
                    <div class="ve-about-img-2 bg-img" style="background-image:url(img/bg-img/5.jpg);"></div>
                    <div class="ve-about-ribbon"><strong>24/7</strong><span>Reliable Service</span></div>
                </div>
            </div>

            <div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                <div class="ve-about-text">
                    <span class="ve-section-tag">Who We Are</span>

                    <h2>Your Trusted Platform for <span>Digital Services</span></h2>

                    <p class="ve-lead">
                        We provide fast, convenient, and reliable digital services, making it easy
                        to purchase airtime, data, recharge cards, TV subscriptions, and other
                        essential services from one platform.
                    </p>

                    <p>
                        Our platform is designed to make everyday digital payments simple and
                        accessible. From MTN, Airtel, Glo and other network services to GOtv and
                        Startimes subscriptions, we help you complete your transactions quickly,
                        securely, and conveniently.
                    </p>

                    <div class="ve-about-features">
                        <div class="ve-af-item">
                            <i class="fa fa-check"></i>
                            <span>Fast &amp; Reliable Airtime and Data Services</span>
                        </div>

                        <div class="ve-af-item">
                            <i class="fa fa-check"></i>
                            <span>MTN, Airtel, Glo &amp; Other Network Services</span>
                        </div>

                        <div class="ve-af-item">
                            <i class="fa fa-check"></i>
                            <span>GOtv &amp; Startimes Subscription Payments</span>
                        </div>

                        <div class="ve-af-item">
                            <i class="fa fa-check"></i>
                            <span>Secure &amp; Convenient Digital Transactions</span>
                        </div>
                    </div>

                    <a href="services.html" class="ve-btn-primary mt-30">
                        View Our Services
                    </a>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- MISSION / VISION / VALUES -->
    <section class="ve-mvv-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Our Foundation</span>
                <h2>Mission, Vision &amp; <span>Values</span></h2>
            </div>
            <div class="ve-mvv-grid">
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-mvv-icon"><i class="fa fa-bullseye"></i></div>
                    <h4>Our Mission</h4>
                    <p>To democratise access to world-class financial planning, empowering every client to make smarter money decisions with confidence.</p>
                </div>
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-mvv-icon"><i class="fa fa-eye"></i></div>
                    <h4>Our Vision</h4>
                    <p>To be the most trusted financial partner for the next generation of wealth builders — globally recognised for integrity and innovation.</p>
                </div>
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-mvv-icon"><i class="fa fa-heart"></i></div>
                    <h4>Our Values</h4>
                    <p>Transparency, client-first thinking, continuous innovation, and an unwavering commitment to ethical financial practice.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section class="ve-section ve-team-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Meet Our Team</span>
                <h2>The People Behind <span>Our Platform</span></h2>
                <p>Dedicated professionals working together to provide fast, reliable, and convenient digital services for everyone.</p>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/15.jpg);"></div>
                        <div class="ve-team-info">
                            <h5>Michael Nwoye</h5>
                            <span>Chief Executive Officer</span>
                            <div class="ve-team-social">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/16.jpg);"></div>
                        <div class="ve-team-info">
                            <h5>David Johnson</h5>
                            <span>Head of Operations</span>
                            <div class="ve-team-social">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/17.jpg);"></div>
                        <div class="ve-team-info">
                            <h5>Sarah Williams</h5>
                            <span>Customer Support Manager</span>
                            <div class="ve-team-social">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/18.jpg);"></div>
                        <div class="ve-team-info">
                            <h5>Daniel Anderson</h5>
                            <span>Technology &amp; Security Lead</span>
                            <div class="ve-team-social">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ve-counter-section">
        <div class="container">
            <div class="ve-counter-grid">
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                    <i class="fa fa-users"></i>
                    <strong class="counter" data-count="50000">0</strong><span>+</span>
                    <p>Registered Users</p>
                </div>

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                    <i class="fa fa-exchange"></i>
                    <strong class="counter" data-count="1000000">0</strong><span>+</span>
                    <p>Successful Transactions</p>
                </div>

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                    <i class="fa fa-globe"></i>
                    <strong class="counter" data-count="10">0</strong><span>+</span>
                    <p>Digital Services</p>
                </div>

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                    <i class="fa fa-clock-o"></i>
                    <strong class="counter" data-count="24">0</strong><span>/7</span>
                    <p>Service Availability</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ve-newsletter-section">
        <div class="container">
            <div class="ve-newsletter-wrap">
                <div class="ve-nl-left">
                    <i class="fa fa-envelope-o"></i>
                    <div>
                        <h3>Stay Updated With Our Services</h3>
                        <p>Get the latest updates, promotions, discounts, and exciting offers delivered straight to your inbox.</p>
                    </div>
                </div>

                <div class="ve-nl-right">
                    <form class="ve-nl-form" action="#" method="post">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection