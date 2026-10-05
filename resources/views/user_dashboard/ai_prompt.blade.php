@extends('layout.dashboard')

@section('title', 'Index Page')

@section('content')
<main class="dashboard-content">
  <div class="container-fluid px-3 px-lg-4 py-4">

    <!-- FIX: page-heading-copy and heading-actions are now siblings with proper flex -->
    <div class="page-heading" style="flex-direction:column;">
        <!-- AI Prompt Category Navigation -->
        <div class="ai-nav-wrapper">

            <!-- Left Arrow -->
            <button
                type="button"
                class="ai-nav-arrow ai-nav-left"
                id="aiNavLeft"
                aria-label="Scroll categories left"
            >
                <i class="bi bi-chevron-left"></i>
            </button>


            <!-- Navigation -->
            <div class="ai-nav-container" id="aiNavContainer">

            <div class="ai-nav-list">

                <!-- AI Prompts -->
                <a href="javascript:void(0);"
                  class="ai-nav-item active"
                  data-url="<?php echo route('ai-prompts.index'); ?>">

                    <i class="bi bi-stars"></i>
                    <span>AI Prompts</span>

                </a>


                <!-- Cinematic -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.cinematic'); ?>">

                    <i class="bi bi-camera-reels"></i>
                    <span>Cinematic</span>

                </a>


                <!-- Social Media -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.social-media'); ?>">

                    <i class="bi bi-phone"></i>
                    <span>Social Media</span>

                </a>


                <!-- Education -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.education'); ?>">

                    <i class="bi bi-mortarboard"></i>
                    <span>Education</span>

                </a>


                <!-- Business -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.business'); ?>">

                    <i class="bi bi-briefcase"></i>
                    <span>Business</span>

                </a>


                <!-- Product Ads -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.product-ads'); ?>">

                    <i class="bi bi-bag"></i>
                    <span>Product Ads</span>

                </a>


                <!-- Personal Branding -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.personal-branding'); ?>">

                    <i class="bi bi-person-badge"></i>
                    <span>Personal Branding</span>

                </a>


                <!-- Storytelling -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.storytelling'); ?>">

                    <i class="bi bi-book"></i>
                    <span>Storytelling</span>

                </a>


                <!-- Comedy -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.comedy'); ?>">

                    <i class="bi bi-emoji-laughing"></i>
                    <span>Comedy</span>

                </a>


                <!-- Motivational -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.motivational'); ?>">

                    <i class="bi bi-lightning"></i>
                    <span>Motivational</span>

                </a>


                <!-- AI & Technology -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.ai-technology'); ?>">

                    <i class="bi bi-robot"></i>
                    <span>AI &amp; Technology</span>

                </a>


                <!-- Coding & Programming -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.coding-programming'); ?>">

                    <i class="bi bi-code-slash"></i>
                    <span>Coding &amp; Programming</span>

                </a>


                <!-- Money & Finance -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.money-finance'); ?>">

                    <i class="bi bi-cash-stack"></i>
                    <span>Money &amp; Finance</span>

                </a>


                <!-- Lifestyle -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.lifestyle'); ?>">

                    <i class="bi bi-house"></i>
                    <span>Lifestyle</span>

                </a>


                <!-- Food -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.food'); ?>">

                    <i class="bi bi-cup-hot"></i>
                    <span>Food</span>

                </a>


                <!-- Gaming -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.gaming'); ?>">

                    <i class="bi bi-controller"></i>
                    <span>Gaming</span>

                </a>


                <!-- Fashion -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.fashion'); ?>">

                    <i class="bi bi-handbag"></i>
                    <span>Fashion</span>

                </a>


                <!-- Fitness -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.fitness'); ?>">

                    <i class="bi bi-heart-pulse"></i>
                    <span>Fitness</span>

                </a>


                <!-- Music -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.music'); ?>">

                    <i class="bi bi-music-note-beamed"></i>
                    <span>Music</span>

                </a>


                <!-- Faceless Video -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.faceless-video'); ?>">

                    <i class="bi bi-person-video3"></i>
                    <span>Faceless Video</span>

                </a>


                <!-- News -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.news'); ?>">

                    <i class="bi bi-newspaper"></i>
                    <span>News</span>

                </a>


                <!-- Documentary -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.documentary'); ?>">

                    <i class="bi bi-camera-video"></i>
                    <span>Documentary</span>

                </a>


                <!-- Fantasy -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.fantasy'); ?>">

                    <i class="bi bi-magic"></i>
                    <span>Fantasy</span>

                </a>


                <!-- Sci-Fi -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.sci-fi'); ?>">

                    <i class="bi bi-stars"></i>
                    <span>Sci-Fi</span>

                </a>


                <!-- Horror -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.horror'); ?>">

                    <i class="bi bi-eye"></i>
                    <span>Horror</span>

                </a>


                <!-- Romance -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.romance'); ?>">

                    <i class="bi bi-heart"></i>
                    <span>Romance</span>

                </a>


                <!-- Kids & Animation -->
                <a href="javascript:void(0);"
                  class="ai-nav-item"
                  data-url="<?php echo route('ai-prompts.kids-animation'); ?>">

                    <i class="bi bi-balloon"></i>
                    <span>Kids &amp; Animation</span>

                </a>

            </div>

            </div>


            <!-- Right Arrow -->
            <button
                type="button"
                class="ai-nav-arrow ai-nav-right"
                id="aiNavRight"
                aria-label="Scroll categories right"
            >
                <i class="bi bi-chevron-right"></i>
            </button>

        </div>
    <div class="row" style="display:flex; justify-content:space-between; align-items:center; ">
        <div class="page-heading-copy col-md-6">
            <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <div class="page-heading-body">

                <p class="eyebrow mb-1">Overview</p>
                <h1 class="h3 mb-1">AI Prompt</h1>
                <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
            </div>
        </div>

        <div class="heading-actions col-md-6">
            <button class="btn btn-outline-secondary btn-sm" type="button" style="width: 100px; height: 40px;">
            <i class="bi bi-download" aria-hidden="true"></i> Export
            </button>
            <button class="btn btn-primary btn-sm" type="button" style="width: 150px; height: 40px;">
            <i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report
            </button>
        </div>
    </div>
    </div>

    <?php if (session('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo htmlspecialchars(session('success')); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if (session('error')): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo htmlspecialchars(session('error')); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if ($errors->any()): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please correct the following:</strong>
        <ul class="mb-0 mt-2">
          <?php foreach ($errors->all() as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

<div id="aiPromptContent">
    <div class="row">
        <?php if (!empty($products) && $products->count() > 0): ?>
            
            <?php foreach ($products as $product): ?>

                <div class="col-md-4 col-sm-4">
                    <div class="panel h-100">
                        
                        <div class="d-flex flex-wrap gap-2"
                             style="display:flex; flex-direction:column; align-items:center;">

                            <img
                                src="<?php echo asset('uploads/categories/mtn.png'); ?>"
                                style="width:10rem;height:10rem"
                                alt="MTN Airtime"
                                class="img-fluid"
                            >

                        </div>

                        <h5 class="fw-bold mb-2">
                            <?php echo htmlspecialchars($product->name); ?>
                        </h5>

                        <p class="text-muted small mb-3">
                            <?php echo htmlspecialchars($product->description ?? 'Buy MTN airtime instantly and securely.'); ?>
                        </p>

                        <div>
                            <div class="mb-3">
                                <span class="text-muted small d-block">
                                    Airtime Amount
                                </span>

                                <span class="fs-4 fw-bold text-dark">
                                    ₦<?php echo number_format($product->price, 2); ?>
                                </span>
                            </div>

                            <button class="btn btn-primary">
                                Buy Airtime
                            </button>
                        </div>

                    </div>
                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <div class="col-12">
                <div class="panel text-center">

                    <h5 class="fw-bold mt-3">
                        No Products Available
                    </h5>

                    <p class="text-muted">
                        Products are currently unavailable.
                    </p>

                </div>
            </div>

        <?php endif; ?>
    </div>
</div>

  </div>
</main>
@endsection

