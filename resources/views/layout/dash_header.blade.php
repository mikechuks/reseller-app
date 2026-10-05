
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      <div class="sidebar-header">
        <a class="brand-mark" href="index.html" aria-label="adminHMD dashboard">
          <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
          <span class="brand-copy">
            <span class="brand-title">adminHMD</span>
            <span class="brand-subtitle">Admin Template</span>
          </span>
        </a>
      </div>

      <nav class="sidebar-nav">
        <a class="nav-link" href="<?php echo route('dashboard.show'); ?>" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Dashboard</span>
        </a>
        <a class="nav-link" href="<?php echo route('prompt-text.show'); ?>" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">AI Prompt</span>
        </a>
        <a class="nav-link" href="<?php echo route('mtn-airtime.show'); ?>" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">MTN</span>
        </a>
        <a class="nav-link" href="<?php echo route('glo-airtime.show'); ?>" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">GLO</span>
        </a>
        <a class="nav-link" href="<?php echo route('nine-mobile-airtime.show'); ?>" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">9Mobile</span>
        </a>
        <a class="nav-link" href="<?php echo route('airtel-airtime.show'); ?>" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">AirTel</span>
        </a>
        <!-- TV SUBSCRIPTION DROPDOWN -->
        <div class="sidebar-dropdown"> 
            <a href="#" class="nav-link sidebar-dropdown-toggle" id="tvSubscriptionToggle" aria-expanded="false"> <span class="nav-icon"> <i class="bi bi-speedometer2" aria-hidden="true"></i> </span> <span class="nav-text">TV Subscription</span> <span class="dropdown-arrow"> <i class="bi bi-chevron-down"></i> </span> 
            </a> 
          
          <!-- TV Subscription Items --> 
          <div class="sidebar-dropdown-menu" id="tvSubscriptionMenu"> 
            <a class="nav-link dropdown-item-link" href="<?php echo route('dstv.show'); ?>"> <span class="nav-icon"> <i class="bi bi-tv"></i> </span> <span class="nav-text">DSTV</span> 
            </a> 
            <a class="nav-link dropdown-item-link" href="<?php echo route('gotv.show'); ?>"> <span class="nav-icon"> <i class="bi bi-tv"></i> </span> <span class="nav-text">GOtv</span> 
            </a> 
            <a class="nav-link dropdown-item-link" href="<?php echo route('startimes.show'); ?>"> <span class="nav-icon"> <i class="bi bi-tv"></i> </span> <span class="nav-text">Startimes</span> </a> 
          </div> 
        </div>
        <a class="nav-link" href="<?php echo route('travel-flight.show'); ?>" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Travel and Flight</span>
        </a>
      </nav>

      <div class="sidebar-user">
        <img class="avatar-img avatar-md sidebar-user-avatar" src="{{ asset('user_dashboard/assets/images/avatar/avatar-1.jpg') }}" alt="Admin Hasan">
        <strong>Admin Hasan</strong>
        <small>Active Workspace</small>
      </div>

      <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
      </div>
    </aside>

    <div class="admin-main">
      <nav class="navbar admin-navbar navbar-expand bg-white">
        <div class="container-fluid px-3 px-lg-4">
          <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
            <input class="form-control search-input" type="search" placeholder="Search users, orders, reports" aria-label="Search">
          </form>

          <div class="navbar-actions ms-auto">
            <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
              <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
            </button>
            <div class="dropdown">

                <?php
                    $unreadNotifications = auth()->user()
                        ->unreadNotifications
                        ->take(10);

                    $notificationCount = auth()->user()
                        ->unreadNotifications
                        ->count();
                ?>

                <button class="icon-button"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        aria-label="Notifications">

                    <?php if ($notificationCount > 0): ?>
                        <span class="notification-dot"></span>
                    <?php endif; ?>

                    <i class="bi bi-bell" aria-hidden="true"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end notification-menu">

                    <div class="dropdown-header fw-bold text-body d-flex justify-content-between align-items-center">

                        <span>Notifications</span>

                        <?php if ($notificationCount > 0): ?>
                            <span class="badge bg-primary rounded-pill">
                                <?php echo $notificationCount; ?>
                            </span>
                        <?php endif; ?>

                    </div>

                    <?php if ($unreadNotifications->count() > 0): ?>

                        <?php foreach ($unreadNotifications as $notification): ?>

                            <?php
                                $data = $notification->data;

                                $title = $data['title'] ?? 'Notification';
                                $message = $data['message'] ?? '';
                                $url = $data['url'] ?? '#';
                            ?>

                            <a class="dropdown-item notification-item"
                              href="<?php echo $url !== '#' ? $url : '#'; ?>">

                                <span class="notification-title">
                                    <?php echo e($title); ?>
                                </span>

                                <?php if ($message): ?>
                                    <span class="notification-message">
                                        <?php echo e($message); ?>
                                    </span>
                                <?php endif; ?>

                                <span class="notification-time">
                                    <?php echo $notification->created_at->diffForHumans(); ?>
                                </span>

                            </a>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <div class="dropdown-item text-center py-4">

                            <i class="bi bi-bell-slash fs-4 text-muted"></i>

                            <div class="small text-muted mt-2">
                                No new notifications
                            </div>

                        </div>

                    <?php endif; ?>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item text-center fw-semibold"
                      href="<?php echo route('notifications.index'); ?>">

                        View all notifications

                    </a>

                </div>
            </div>

            <div class="dropdown">
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="avatar-img avatar-sm" src="{{ asset('user_dashboard/assets/images/avatar/avatar.jpg') }}" alt="Admin Hasan">
                <span class="profile-name d-none d-sm-inline">Admin Hasan</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?php echo route('profile'); ?>">Profile</a></li>
                <li><a class="dropdown-item" href="<?php echo route('profile'); ?>">Account settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="<?php echo route('logout'); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="dropdown-item">
                            Sign out
                        </button>
                    </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>