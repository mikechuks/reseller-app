@extends('layout.app')

@section('title', 'Home Page')

@section('content')


    <!-- ===== HERO: Split layout — left text, right image panel ===== -->
    <section class="ve-hero">
        <!-- Left Panel -->
        <div class="ve-hero-left">
            <span class="ve-hero-badge">Trusted Digital Services &nbsp;·&nbsp; Fast & Reliable</span>

            <h1>All Your <span class="ve-highlight">Digital Services</span><br>In One Place</h1>

            <p>
                Get airtime and data for all major networks, renew your GOtv, DStv and Startimes subscriptions, and get professional assistance with your visa applications.
            </p>

            <div class="ve-hero-btns">
                <a href="services.html" class="ve-btn-primary">Explore Services</a>
                <a href="about.html" class="ve-btn-ghost">Learn More</a>
            </div>

            <!-- Quick Stats Row -->
            <div class="ve-hero-stats">
                <div class="ve-stat">
                    <strong>4+</strong>
                    <span>Major Networks</span>
                </div>

                <div class="ve-stat-divider"></div>

                <div class="ve-stat">
                    <strong>24/7</strong>
                    <span>Service Availability</span>
                </div>

                <div class="ve-stat-divider"></div>

                <div class="ve-stat">
                    <strong>100%</strong>
                    <span>Reliable Service</span>
                </div>
            </div>
        </div>

        <!-- Right Panel: overlapping image cards -->
        <div class="ve-hero-right">
            <div class="ve-hero-img-main bg-img"
                style="background-image:url(user_frontend/img/1.jpg);">
            </div>

            <div class="ve-hero-img-accent bg-img"
                style="background-image:url(user_frontend/img/3.jpg);">
            </div>

            <!-- Floating card -->
            <div class="ve-float-card">
                <i class="fa fa-bolt"></i>
                <div>
                    <strong>Fast & Easy</strong>
                    <span>Digital Services</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MARQUEE TRUST BAR ===== -->
    <div class="ve-trust-bar">
        <div class="ve-trust-inner">
            <span><i class="fa fa-shield"></i> Bank-Grade Security</span>
            <span><i class="fa fa-check-circle"></i> SEC Registered</span>
            <span><i class="fa fa-users"></i> 50,000+ Clients Worldwide</span>
            <span><i class="fa fa-lock"></i> 256-bit Encryption</span>
            <span><i class="fa fa-trophy"></i> Award Winning Advisory</span>
            <span><i class="fa fa-globe"></i> 30+ Countries Served</span>
            <span><i class="fa fa-shield"></i> Bank-Grade Security</span>
            <span><i class="fa fa-check-circle"></i> SEC Registered</span>
            <span><i class="fa fa-users"></i> 50,000+ Clients Worldwide</span>
            <span><i class="fa fa-lock"></i> 256-bit Encryption</span>
        </div>
    </div>

    <!-- ===== SERVICES GRID (new card layout) ===== -->
    <section class="ve-section ve-services-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">What We Offer</span>
                <h2>Reliable Digital <span>Services</span></h2>
                <p>Enjoy fast and convenient access to airtime, data, TV subscriptions, and visa assistance all in one place.</p>
            </div>

            <div class="ve-services-grid">

                <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-service-icon"><i class="icon-smartphone-1"></i></div>
                    <h4>Airtime Recharge</h4>
                    <p>Recharge MTN, Glo, Airtel, and 9mobile lines quickly and conveniently whenever you need airtime.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-service-icon"><i class="icon-money-1"></i></div>
                    <h4>Data Bundles</h4>
                    <p>Purchase affordable data plans for MTN, Glo, Airtel, and 9mobile with fast and reliable delivery.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-service-icon"><i class="icon-smartphone-1"></i></div>
                    <h4>GOtv Subscription</h4>
                    <p>Renew your GOtv subscription with ease and keep enjoying your favourite entertainment channels.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-service-icon"><i class="icon-diamond"></i></div>
                    <h4>Startimes Subscription</h4>
                    <p>Renew your Startimes package quickly and conveniently without the stress of visiting a service centre.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms">
                    <div class="ve-service-icon"><i class="icon-coin"></i></div>
                    <h4>DStv Subscription</h4>
                    <p>Pay and renew your DStv subscription easily so you can continue enjoying your favourite programmes.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="ve-service-card wow fadeInUp" data-wow-delay="600ms">
                    <div class="ve-service-icon"><i class="icon-profits"></i></div>
                    <h4>Visa Assistance</h4>
                    <p>Get professional assistance with visa applications, document preparation, and travel application processes.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== WHY US (two-column: image left, content right) ===== -->
    <section class="ve-section ve-whyus-section">
    <div class="container">
    <div class="row align-items-center">

        <!-- Image Side -->
        <div class="col-12 col-lg-5">
            <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                <div class="ve-whyus-img-main bg-img" style="background-image:url(user_frontend/img/bg-img/5.jpg);"></div>

                <div class="ve-whyus-badge">
                    <strong>24/7</strong>
                    <span>Fast & Reliable Digital Services</span>
                </div>
            </div>
        </div>

        <!-- Content Side -->
        <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="200ms">
            <div class="ve-whyus-content">

                <span class="ve-section-tag">Why Choose Us</span>

                <h2>Your Trusted Partner for <span>Digital Services</span></h2>

                <p>
                    We make everyday digital services simple, fast, and convenient. 
                    From airtime and data to TV subscriptions and visa application assistance, 
                    we provide reliable services designed to save you time and stress.
                </p>

                <div class="ve-checklist">

                    <div class="ve-check-item">
                        <i class="fa fa-check-circle"></i>
                        <div>
                            <strong>Fast & Convenient</strong>
                            <p>
                                Get airtime, data, and TV subscriptions quickly without unnecessary delays.
                            </p>
                        </div>
                    </div>

                    <div class="ve-check-item">
                        <i class="fa fa-check-circle"></i>
                        <div>
                            <strong>Secure & Reliable</strong>
                            <p>
                                Your transactions and personal information are handled with security and care.
                            </p>
                        </div>
                    </div>

                    <div class="ve-check-item">
                        <i class="fa fa-check-circle"></i>
                        <div>
                            <strong>Professional Visa Assistance</strong>
                            <p>
                                Get helpful guidance with visa applications, documentation, and travel processes.
                            </p>
                        </div>
                    </div>

                </div>

                <a href="about.html" class="ve-btn-primary mt-30">
                    Learn More About Us
                </a>

            </div>
        </div>

    </div>
    </div>
    </section>

    <!-- ===== COUNTERS ===== -->
    <section class="ve-counter-section">
        <div class="container">
            <div class="ve-counter-grid">

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                    <i class="fa fa-users"></i>
                    <strong class="counter" data-count="5000">0</strong><span>+</span>
                    <p>Happy Customers</p>
                </div>

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                    <i class="fa fa-mobile"></i>
                    <strong class="counter" data-count="10000">0</strong><span>+</span>
                    <p>Digital Transactions</p>
                </div>

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                    <i class="fa fa-globe"></i>
                    <strong class="counter" data-count="4">0</strong><span>+</span>
                    <p>Major Networks</p>
                </div>

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                    <i class="fa fa-plane"></i>
                    <strong class="counter" data-count="20">0</strong><span>+</span>
                    <p>Visa Destinations</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="ve-section ve-testimonials-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Customer Reviews</span>
                <h2>What Our Customers <span>Say</span></h2>
            </div>

            <div class="ve-testi-grid">

                <div class="ve-testi-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>

                    <p>
                        "Getting airtime and data has never been this easy. My recharge is delivered almost instantly, and the service is very reliable."
                    </p>

                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(user_frontend/img/bg-img/32.jpg);"></div>

                        <div>
                            <strong>Daniel Okafor</strong>
                            <span>Customer</span>
                        </div>
                    </div>
                </div>

                <div class="ve-testi-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>

                    <p>
                        "I can renew my GOtv and Startimes subscriptions without leaving home. The process is simple, fast, and convenient."
                    </p>

                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(user_frontend/img/bg-img/33.jpg);"></div>

                        <div>
                            <strong>Grace Williams</strong>
                            <span>Customer</span>
                        </div>
                    </div>
                </div>

                <div class="ve-testi-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>

                    <p>
                        "The visa assistance service was very helpful. They guided me through the application process and helped me understand the required documents."
                    </p>

                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(user_frontend/img/bg-img/14.jpg);"></div>

                        <div>
                            <strong>Michael Johnson</strong>
                            <span>Travel Customer</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="ve-cta-banner bg-img" style="background-image:url(user_frontend/img/6.jpg);">
        <div class="ve-cta-overlay"></div>

        <div class="container ve-cta-content">
            <div class="row align-items-center">

                <div class="col-12 col-lg-8">
                    <h2>
                        Get Your Digital Services <span>Fast & Easily</span>
                    </h2>

                    <p>
                        Recharge your airtime, buy data, renew your TV subscription, or get assistance with your visa application today.
                    </p>
                </div>

                <div class="col-12 col-lg-4 text-lg-right">
                    <a href="services.html" class="ve-btn-white">
                        Get Started
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== LATEST INSIGHTS ===== -->
    <section class="ve-section ve-insights-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Blog &amp; News</span>
                <h2>Latest Financial <span>Insights</span></h2>
                <p>Stay ahead with expert commentary, market analysis, and actionable financial tips.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url(user_frontend/img/bg-img/10.jpg);"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Investment</span>
                            <h5><a href="single-post.html">5 Smart Investment Strategies for 2025</a></h5>
                            <p>Discover the top strategies seasoned investors are using to grow wealth in volatile markets.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 26</span>
                                <a href="single-post.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url(user_frontend/img/bg-img/11.jpg);"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Credit</span>
                            <h5><a href="single-post.html">Understanding Your Credit Score in 2025</a></h5>
                            <p>Learn the key factors that influence your credit score and how to improve it fast.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 20</span>
                                <a href="single-post.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url(user_frontend/img/bg-user_frontend/img/12.jpg);"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Savings</span>
                            <h5><a href="single-post.html">Building Wealth in Your 30s — A Full Guide</a></h5>
                            <p>The financial habits and investment moves that set you up for lifelong prosperity.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 14</span>
                                <a href="single-post.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== NEWSLETTER ===== -->
    <section class="ve-newsletter-section">
        <div class="container">
            <div class="ve-newsletter-wrap">

                <div class="ve-nl-left">
                    <i class="fa fa-envelope-o"></i>

                    <div>
                        <h3>Stay Updated With Our Services</h3>
                        <p>
                            Get the latest updates, special offers, service announcements, and useful travel tips straight to your inbox.
                        </p>
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
