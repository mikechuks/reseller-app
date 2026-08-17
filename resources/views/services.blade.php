@extends('layout.app')

@section('title', 'Home Page')

@section('content')
<section class="ve-page-hero" style="background-image:url(img/bg-img/20.jpg);">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">What We Offer</span>
            <h1>Comprehensive <span>Financial Services</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="index.html">Home</a></li><li class="active">Services</li></ol></nav>
        </div>
    </section>

    <section class="ve-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Our Services</span>
                <h2>Everything You Need in <span>One Platform</span></h2>
                <p>Fast, convenient, and reliable digital services designed to make your everyday payments and purchases easier.</p>
            </div>

            <div class="ve-services-grid">

                <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-service-icon">
                        <i class="icon-smartphone-1"></i>
                    </div>
                    <h4>Airtime &amp; Data</h4>
                    <p>Purchase airtime and data bundles for MTN, Airtel, Glo, and other supported networks quickly and conveniently.</p>
                    <a href="#" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-service-icon">
                        <i class="icon-money-1"></i>
                    </div>
                    <h4>Recharge Cards</h4>
                    <p>Get recharge PINs for supported networks instantly and conveniently whenever you need to top up your line.</p>
                    <a href="#" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-service-icon">
                        <i class="icon-coin"></i>
                    </div>
                    <h4>GOtv Subscription</h4>
                    <p>Renew your GOtv subscription quickly and keep enjoying your favourite channels and entertainment without interruption.</p>
                    <a href="#" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-service-icon">
                        <i class="icon-smartphone-1"></i>
                    </div>
                    <h4>Startimes Subscription</h4>
                    <p>Make your Startimes subscription payments easily and conveniently from the comfort of your home or office.</p>
                    <a href="#" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms">
                    <div class="ve-service-icon">
                        <i class="icon-diamond"></i>
                    </div>
                    <h4>Visa Services</h4>
                    <p>Access convenient visa-related services and assistance through our platform with a simple and straightforward process.</p>
                    <a href="#" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="ve-service-card wow fadeInUp" data-wow-delay="600ms">
                    <div class="ve-service-icon">
                        <i class="icon-piggy-bank"></i>
                    </div>
                    <h4>Digital Payments</h4>
                    <p>Manage your digital service purchases with secure payments, easy transactions, and a convenient user experience.</p>
                    <a href="#" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>

    <section class="ve-process-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">How It Works</span>
                <h2>Using Our Platform is <span>Simple</span></h2>
            </div>

            <div class="ve-process-grid">

                <div class="ve-process-step wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-process-num">01</div>
                    <h5>Create an Account</h5>
                    <p>Register on our platform with your basic details and create your secure account in just a few steps.</p>
                </div>

                <div class="ve-process-arrow">
                    <i class="fa fa-long-arrow-right"></i>
                </div>

                <div class="ve-process-step wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-process-num">02</div>
                    <h5>Fund Your Wallet</h5>
                    <p>Add funds to your wallet using our secure payment options and get ready to purchase digital services.</p>
                </div>

                <div class="ve-process-arrow">
                    <i class="fa fa-long-arrow-right"></i>
                </div>

                <div class="ve-process-step wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-process-num">03</div>
                    <h5>Choose a Service</h5>
                    <p>Select the service you need, such as airtime, data, recharge cards, GOtv, Startimes, or other available services.</p>
                </div>

                <div class="ve-process-arrow">
                    <i class="fa fa-long-arrow-right"></i>
                </div>

                <div class="ve-process-step wow fadeInUp" data-wow-delay="550ms">
                    <div class="ve-process-num">04</div>
                    <h5>Complete Your Purchase</h5>
                    <p>Confirm your details and complete your transaction. Your service is processed quickly and securely.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="ve-section ve-faq-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-lg-5 wow fadeInLeft" data-wow-delay="100ms">
                    <span class="ve-section-tag">Common Questions</span>
                    <h2>Frequently Asked <span>Questions</span></h2>
                    <p>
                        Can't find what you're looking for?
                        <a href="contact.html" style="color:var(--ve-gold);">Reach out to us</a>
                        and our support team will be happy to assist you.
                    </p>
                    <a href="contact.html" class="ve-btn-primary mt-30">Contact Our Team</a>
                </div>

                <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-faq-list">

                        <div class="ve-faq-item open">
                            <div class="ve-faq-q">
                                <span>How do I get started on the platform?</span>
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="ve-faq-a">
                                Simply create an account on our platform, log in to your dashboard,
                                fund your wallet, and choose the digital service you want to purchase.
                            </div>
                        </div>

                        <div class="ve-faq-item">
                            <div class="ve-faq-q">
                                <span>What services can I purchase?</span>
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="ve-faq-a">
                                You can purchase airtime, data, recharge cards, GOtv subscriptions,
                                Startimes subscriptions, visa-related services, and other digital
                                services available on the platform.
                            </div>
                        </div>

                        <div class="ve-faq-item">
                            <div class="ve-faq-q">
                                <span>How do I fund my wallet?</span>
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="ve-faq-a">
                                You can fund your wallet using the available secure payment options
                                provided on the platform. Once your payment is confirmed, your wallet
                                balance will be updated and you can use it to purchase services.
                            </div>
                        </div>

                        <div class="ve-faq-item">
                            <div class="ve-faq-q">
                                <span>Are my transactions secure?</span>
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="ve-faq-a">
                                Yes. We take the security of your account and transactions seriously.
                                Our platform is designed to provide secure payments and protect your
                                account information while you use our digital services.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ve-cta-banner bg-img" style="background-image:url(img/bg-img/6.jpg);">
        <div class="ve-cta-overlay"></div>

        <div class="container ve-cta-content">
            <div class="row align-items-center">

                <div class="col-12 col-lg-8">
                    <h2>Ready to Enjoy Fast &amp; Reliable <span>Digital Services?</span></h2>
                    <p>
                        Join thousands of users who trust our platform for airtime, data,
                        recharge cards, TV subscriptions, visa-related services, and other
                        everyday digital payments.
                    </p>
                </div>

                <div class="col-12 col-lg-4 text-lg-right">
                    <a href="register.html" class="ve-btn-white">Create an Account</a>
                </div>

            </div>
        </div>
    </section>
@endsection