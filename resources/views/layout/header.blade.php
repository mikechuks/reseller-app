    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <!-- ===== NAVBAR (single dark bar, logo left, nav center, CTA right) ===== -->
    <header class="ve-header" id="ve-sticky">
        <div class="container-fluid ve-nav-wrap">
            <!-- Logo -->
            <div class="ve-logo">
                <a href="index.html">
                    <span class="ve-logo-icon">V</span>
                    <span class="ve-logo-text">Vault<strong>Edge</strong></span>
                </a>
            </div>

            <!-- Nav Links -->
            <nav class="ve-nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </nav>

            <!-- CTA -->
            <div class="ve-nav-cta">
                <a href="contact.html" class="ve-cta-btn">Get Started <i class="fa fa-arrow-right"></i></a>
            </div>

            <!-- Mobile Toggle -->
            <button class="ve-toggler" id="ve-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>

        <!-- Mobile Menu -->

                <div class="ve-mobile-menu" id="ve-mobile-menu">
                    <ul>
                        <li><a href="<?php echo route('home'); ?>">Home</a></li>

                        <li><a href="<?php echo route('about'); ?>">About</a></li>

                        <li><a href="<?php echo route('services'); ?>">Services</a></li>

                        <li><a href="<?php echo route('contact'); ?>">Contacts</a></li>

                        <li><a href="/register">Register</a></li>

                        <li><a href="/login">Login</a></li>
                    </ul>
                </div>

    </header>