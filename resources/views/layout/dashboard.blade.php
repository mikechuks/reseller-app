<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <title>Dashboard | adminHMD</title>

  <link rel="stylesheet" href="{{ asset('user_dashboard/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user_dashboard/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('user_dashboard/assets/css/style.css') }}">
<style>
.success-message{
    display:flex;
    align-items:center;
    gap:15px;
    background:#f0fff4;
    border-left:5px solid #28a745;
    padding:15px;
    border-radius:8px;
    margin:15px 0;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}
.success-message .icon{
    font-size:32px;
}
.success-message h4{
    margin:0;
    color:#28a745;
}
.success-message p{
    margin:5px 0 0;
    color:#555;
}
.validation-alert{
    background:#fff5f5;
    border-left:6px solid #dc3545;
    border-radius:10px;
    padding:20px;
    margin-bottom:25px;
    box-shadow:0 8px 20px rgba(220,53,69,.12);
    animation:slideDown .4s ease;
}

.validation-header{
    display:flex;
    align-items:flex-start;
    gap:15px;
    margin-bottom:15px;
}

.validation-icon{
    width:45px;
    height:45px;
    background:#dc3545;
    color:#fff;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:22px;
    font-weight:bold;
    flex-shrink:0;
}

.validation-header h4{
    margin:0;
    color:#b02a37;
    font-size:20px;
}

.validation-header p{
    margin:5px 0 0;
    color:#666;
    font-size:14px;
}

.validation-list{
    list-style:none;
    padding:0;
    margin:0;
}

.validation-list li{
    position:relative;
    padding:12px 15px 12px 40px;
    margin-bottom:10px;
    background:#ffffff;
    border:1px solid #f1c2c7;
    border-radius:8px;
    color:#842029;
    transition:.3s;
}

.validation-list li:last-child{
    margin-bottom:0;
}

.validation-list li::before{
    content:"✖";
    position:absolute;
    left:15px;
    top:50%;
    transform:translateY(-50%);
    color:#dc3545;
    font-weight:bold;
}

.validation-list li:hover{
    background:#ffe9ec;
    transform:translateX(5px);
}

@keyframes slideDown{
    from{
        opacity:0;
        transform:translateY(-20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* =========================================
   TV SUBSCRIPTION DROPDOWN
   ========================================= */

.sidebar-dropdown {
    width: 100%;
}


/* Main TV Subscription Link */
.sidebar-dropdown-toggle {
    display: flex;
    align-items: center;
    width: 100%;
    cursor: pointer;
}


/* Arrow */
.dropdown-arrow {
    margin-left: auto;
    display: flex;
    align-items: center;
    font-size: 12px;
    transition: transform 0.25s ease;
}


/* Rotate arrow when dropdown is open */
.sidebar-dropdown.open .dropdown-arrow {
    transform: rotate(180deg);
}


/* =========================================
   DROPDOWN MENU
   ========================================= */

.sidebar-dropdown-menu {
    display: none;
    width: 100%;
    padding-left: 20px;
}


/* Show dropdown */
.sidebar-dropdown.open .sidebar-dropdown-menu {
    display: block;
}


/* =========================================
   DROPDOWN ITEMS
   ========================================= */

.dropdown-item-link {
    display: flex;
    align-items: center;

    padding-left: 25px;

    font-size: 14px;
}


/* Smaller icons for dropdown */
.dropdown-item-link .nav-icon {
    font-size: 14px;
}


/* Hover effect */
.dropdown-item-link:hover {
    padding-left: 30px;
    transition: padding-left 0.2s ease;
}


/* =========================================
   MOBILE
   ========================================= */

@media (max-width: 768px) {

    .sidebar-dropdown-menu {
        padding-left: 15px;
    }

    .dropdown-item-link {
        padding-left: 20px;
    }

}

/* //Horzontal scrollable category section */

/* =========================================================
   AI PROMPT CATEGORY NAVIGATION
   ========================================================= */

/* Main navigation wrapper */
.ai-nav-wrapper {
    position: relative;

    width: 100%;
    max-width: 100%;
    min-width: 0;

    margin: 0 0 24px 0;
    padding: 0;

    display: flex;
    align-items: center;

    box-sizing: border-box;
}


/* =========================================================
   NAVIGATION CONTAINER
   ========================================================= */

.ai-nav-container {
    position: relative;

    width: 100%;
    max-width: 100%;
    min-width: 0;

    height: auto;

    overflow-x: auto;
    overflow-y: hidden;

    padding: 4px 46px 10px 46px;

    box-sizing: border-box;

    scroll-behavior: smooth;

    scrollbar-width: none;
    -ms-overflow-style: none;
}


/* Hide scrollbar - Chrome / Edge / Safari */
.ai-nav-container::-webkit-scrollbar {
    display: none;
}


/* =========================================================
   NAVIGATION LIST
   ========================================================= */

.ai-nav-list {
    display: flex;

    align-items: center;

    flex-direction: row;

    flex-wrap: nowrap;

    gap: 8px;

    width: max-content;

    min-width: 100%;

    margin: 0;
    padding: 0;

    list-style: none;

    white-space: nowrap;

    box-sizing: border-box;
}


/* =========================================================
   NAVIGATION ITEMS
   ========================================================= */

.ai-nav-item {
    flex: 0 0 auto;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    min-height: 38px;

    padding: 8px 14px;

    border: 1px solid #e1e7ef;

    border-radius: 8px;

    background: #ffffff;

    color: #4b5563;

    font-size: 13px;

    font-weight: 600;

    line-height: 1.2;

    text-decoration: none;

    white-space: nowrap;

    cursor: pointer;

    box-sizing: border-box;

    transition:
        background-color 0.2s ease,
        border-color 0.2s ease,
        color 0.2s ease,
        box-shadow 0.2s ease,
        transform 0.2s ease;
}


/* =========================================================
   NAVIGATION ICONS
   ========================================================= */

.ai-nav-item i {
    flex: 0 0 auto;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    font-size: 14px;

    line-height: 1;
}


/* =========================================================
   HOVER STATE
   ========================================================= */

.ai-nav-item:hover {
    color: #2563eb;

    background: #f5f8ff;

    border-color: #b9cdfc;

    text-decoration: none;

    transform: translateY(-1px);
}


/* =========================================================
   ACTIVE STATE
   ========================================================= */

.ai-nav-item.active {
    color: #ffffff;

    background: #2563eb;

    border-color: #2563eb;

    box-shadow: 0 3px 8px rgba(37, 99, 235, 0.15);
}


.ai-nav-item.active:hover {
    color: #ffffff;

    background: #1d4ed8;

    border-color: #1d4ed8;

    transform: translateY(-1px);
}


/* =========================================================
   LEFT / RIGHT NAVIGATION ARROWS
   ========================================================= */

.ai-nav-arrow {
    position: absolute;

    top: 50%;

    z-index: 10;

    width: 34px;

    height: 34px;

    padding: 0;

    margin: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    transform: translateY(-50%);

    border: 1px solid #dbe3ee;

    border-radius: 50%;

    background: #ffffff;

    color: #334155;

    font-size: 14px;

    line-height: 1;

    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);

    cursor: pointer;

    box-sizing: border-box;

    transition:
        background-color 0.2s ease,
        border-color 0.2s ease,
        color 0.2s ease,
        box-shadow 0.2s ease,
        opacity 0.2s ease;
}


/* Arrow icon */
.ai-nav-arrow i {
    font-size: 13px;

    line-height: 1;
}


/* =========================================================
   LEFT ARROW
   ========================================================= */

.ai-nav-left {
    left: 5px;
}


/* =========================================================
   RIGHT ARROW
   ========================================================= */

.ai-nav-right {
    right: 5px;
}


/* =========================================================
   ARROW HOVER
   ========================================================= */

.ai-nav-arrow:hover {
    color: #ffffff;

    background: #2563eb;

    border-color: #2563eb;

    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.20);
}


/* =========================================================
   ARROW ACTIVE
   ========================================================= */

.ai-nav-arrow:active {
    transform: translateY(-50%) scale(0.96);
}


/* =========================================================
   IMPORTANT DASHBOARD OVERFLOW FIX
   ========================================================= */

/*
   Prevent the category navigation from increasing
   the width of the entire dashboard.
*/

.dashboard-content {
    width: 100%;

    max-width: 100%;

    min-width: 0;

    overflow-x: hidden;

    box-sizing: border-box;
}


/* Container must also be allowed to shrink */

.dashboard-content .container-fluid {
    width: 100%;

    max-width: 100%;

    min-width: 0;

    box-sizing: border-box;
}


/* =========================================================
   PAGE HEADING OVERFLOW FIX
   ========================================================= */

.page-heading {
    width: 100%;

    max-width: 100%;

    min-width: 0;

    box-sizing: border-box;
}


.page-heading-copy {
    min-width: 0;

    max-width: 100%;

    box-sizing: border-box;
}


/*
   The inner div containing the navigation,
   Overview and heading must be allowed to shrink.
*/

.page-heading-copy > div {
    min-width: 0;

    max-width: 100%;

    box-sizing: border-box;
}


/* =========================================================
   BREADTH / FLEX FIX
   ========================================================= */

.page-heading-copy,
.page-heading-copy > div,
.ai-nav-wrapper,
.ai-nav-container {
    flex-shrink: 1;
}


/* =========================================================
   MOBILE DEVICES
   ========================================================= */

@media (max-width: 768px) {

    .ai-nav-wrapper {
        margin-bottom: 20px;
    }


    .ai-nav-container {
        padding-left: 40px;

        padding-right: 40px;

        padding-bottom: 8px;
    }


    .ai-nav-item {
        min-height: 36px;

        padding: 8px 11px;

        font-size: 12px;

        gap: 6px;
    }


    .ai-nav-item i {
        font-size: 13px;
    }


    .ai-nav-arrow {
        width: 30px;

        height: 30px;
    }


    .ai-nav-left {
        left: 4px;
    }


    .ai-nav-right {
        right: 4px;
    }

}


/* =========================================================
   SMALL MOBILE DEVICES
   ========================================================= */

@media (max-width: 480px) {

    .ai-nav-container {
        padding-left: 37px;

        padding-right: 37px;
    }


    .ai-nav-item {
        min-height: 34px;

        padding: 7px 10px;

        font-size: 11px;
    }


    .ai-nav-arrow {
        width: 28px;

        height: 28px;
    }


    .ai-nav-arrow i {
        font-size: 11px;
    }

}


/* =========================================================
   TOUCH DEVICES
   ========================================================= */

.ai-nav-container {
    -webkit-overflow-scrolling: touch;

    overscroll-behavior-x: contain;

    touch-action: pan-x;
}


/* =========================================================
   FOCUS ACCESSIBILITY
   ========================================================= */

.ai-nav-item:focus-visible {
    outline: 2px solid #2563eb;

    outline-offset: 2px;
}


.ai-nav-arrow:focus-visible {
    outline: 2px solid #2563eb;

    outline-offset: 2px;
}


/* =========================================================
   REMOVE DEFAULT LINK OUTLINE
   ========================================================= */

.ai-nav-item:focus {
    text-decoration: none;
}


/* =========================================================
   PREVENT TEXT SELECTION WHILE DRAGGING
   ========================================================= */

.ai-nav-container.dragging {
    cursor: grabbing;

    user-select: none;

    -webkit-user-select: none;
}


/* =========================================================
   OPTIONAL: SOFT EDGE EFFECT
   ========================================================= */

.ai-nav-wrapper::before,
.ai-nav-wrapper::after {
    content: "";

    position: absolute;

    top: 0;

    bottom: 0;

    z-index: 6;

    width: 42px;

    pointer-events: none;
}


/* Left fade */

.ai-nav-wrapper::before {
    left: 0;

    background: linear-gradient(
        to right,
        rgba(255, 255, 255, 0.95),
        rgba(255, 255, 255, 0)
    );
}


/* Right fade */

.ai-nav-wrapper::after {
    right: 0;

    background: linear-gradient(
        to left,
        rgba(255, 255, 255, 0.95),
        rgba(255, 255, 255, 0)
    );
}


/* Keep arrows above the fade */

.ai-nav-arrow {
    z-index: 10;
}
</style>
</head>
<body>

    @include('layout.dash_header')

    <main>
        @yield('content')
    </main>

    @include('layout.dash_footer')

  <script src="{{ asset('user_dashboard/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('user_dashboard/assets/js/main.js') }}"></script>
  <script>

document.addEventListener('DOMContentLoaded', function () {

    const toggle = document.getElementById('tvSubscriptionToggle');
    const dropdown = toggle.closest('.sidebar-dropdown');

    toggle.addEventListener('click', function (event) {

        event.preventDefault();

        const isOpen = dropdown.classList.contains('open');

        if (isOpen) {

            dropdown.classList.remove('open');

            toggle.setAttribute(
                'aria-expanded',
                'false'
            );

        } else {

            dropdown.classList.add('open');

            toggle.setAttribute(
                'aria-expanded',
                'true'
            );

        }

    });

});

// Horizontal scrollable category section

document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       GET NAVIGATION ELEMENTS
       ===================================================== */

    const nav = document.getElementById('aiNavContainer');
    const leftButton = document.getElementById('aiNavLeft');
    const rightButton = document.getElementById('aiNavRight');


    /* =====================================================
       STOP IF NAVIGATION DOES NOT EXIST
       ===================================================== */

    if (!nav || !leftButton || !rightButton) {
        return;
    }


    /* =====================================================
       SETTINGS
       ===================================================== */

    const scrollAmount = 350;


    /* =====================================================
       UPDATE ARROW VISIBILITY
       ===================================================== */

    function updateArrows() {

        const currentScroll = nav.scrollLeft;

        const maxScroll =
            nav.scrollWidth - nav.clientWidth;


        /*
        |--------------------------------------------------------------------------
        | LEFT ARROW
        |--------------------------------------------------------------------------
        */

        if (currentScroll <= 5) {

            leftButton.style.opacity = '0.35';

            leftButton.style.pointerEvents = 'none';

        } else {

            leftButton.style.opacity = '1';

            leftButton.style.pointerEvents = 'auto';

        }


        /*
        |--------------------------------------------------------------------------
        | RIGHT ARROW
        |--------------------------------------------------------------------------
        */

        if (currentScroll >= maxScroll - 5) {

            rightButton.style.opacity = '0.35';

            rightButton.style.pointerEvents = 'none';

        } else {

            rightButton.style.opacity = '1';

            rightButton.style.pointerEvents = 'auto';

        }

    }


    /* =====================================================
       SCROLL RIGHT
       ===================================================== */

    rightButton.addEventListener('click', function () {

        nav.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });

    });


    /* =====================================================
       SCROLL LEFT
       ===================================================== */

    leftButton.addEventListener('click', function () {

        nav.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });

    });


    /* =====================================================
       MOUSE WHEEL HORIZONTAL SCROLL
       ===================================================== */

    nav.addEventListener(
        'wheel',
        function (event) {

            /*
            |--------------------------------------------------------------------------
            | Convert vertical mouse wheel movement into
            | horizontal navigation movement.
            |--------------------------------------------------------------------------
            */

            if (Math.abs(event.deltaY) > Math.abs(event.deltaX)) {

                event.preventDefault();

                nav.scrollLeft += event.deltaY;

            }

        },
        {
            passive: false
        }
    );


    /* =====================================================
       MOUSE DRAG SCROLL
       ===================================================== */

    let isDragging = false;

    let startX = 0;

    let startScrollLeft = 0;


    /*
    |--------------------------------------------------------------------------
    | Mouse down
    |--------------------------------------------------------------------------
    */

    nav.addEventListener('mousedown', function (event) {

        /*
        |--------------------------------------------------------------------------
        | Only use drag scrolling with the main mouse button.
        |--------------------------------------------------------------------------
        */

        if (event.button !== 0) {
            return;
        }


        isDragging = true;

        nav.classList.add('dragging');


        startX = event.pageX;

        startScrollLeft = nav.scrollLeft;


        /*
        |--------------------------------------------------------------------------
        | Prevent accidental text selection.
        |--------------------------------------------------------------------------
        */

        event.preventDefault();

    });


    /*
    |--------------------------------------------------------------------------
    | Mouse movement
    |--------------------------------------------------------------------------
    */

    nav.addEventListener('mousemove', function (event) {

        if (!isDragging) {
            return;
        }


        const distance =
            event.pageX - startX;


        nav.scrollLeft =
            startScrollLeft - distance;

    });


    /*
    |--------------------------------------------------------------------------
    | Stop dragging
    |--------------------------------------------------------------------------
    */

    document.addEventListener('mouseup', function () {

        if (!isDragging) {
            return;
        }


        isDragging = false;

        nav.classList.remove('dragging');

    });


    /*
    |--------------------------------------------------------------------------
    | If mouse leaves the browser window
    |--------------------------------------------------------------------------
    */

    window.addEventListener('blur', function () {

        if (!isDragging) {
            return;
        }


        isDragging = false;

        nav.classList.remove('dragging');

    });


    /* =====================================================
       TOUCH SUPPORT
       ===================================================== */

    let touchStartX = 0;

    let touchStartScrollLeft = 0;


    /*
    |--------------------------------------------------------------------------
    | Touch start
    |--------------------------------------------------------------------------
    */

    nav.addEventListener(
        'touchstart',
        function (event) {

            if (!event.touches.length) {
                return;
            }


            touchStartX =
                event.touches[0].pageX;


            touchStartScrollLeft =
                nav.scrollLeft;

        },
        {
            passive: true
        }
    );


    /*
    |--------------------------------------------------------------------------
    | Touch movement
    |--------------------------------------------------------------------------
    */

    nav.addEventListener(
        'touchmove',
        function (event) {

            if (!event.touches.length) {
                return;
            }


            const currentX =
                event.touches[0].pageX;


            const distance =
                currentX - touchStartX;


            nav.scrollLeft =
                touchStartScrollLeft - distance;

        },
        {
            passive: true
        }
    );


    /* =====================================================
       UPDATE ARROWS WHEN NAVIGATION SCROLLS
       ===================================================== */

    nav.addEventListener('scroll', function () {

        updateArrows();

    });


    /* =====================================================
       UPDATE ARROWS WHEN WINDOW SIZE CHANGES
       ===================================================== */

    window.addEventListener('resize', function () {

        updateArrows();

    });


    /* =====================================================
       ACTIVE CATEGORY
       ===================================================== */

    const categoryItems =
        nav.querySelectorAll('.ai-nav-item');


    categoryItems.forEach(function (item) {

        item.addEventListener('click', function () {

            /*
            |--------------------------------------------------------------------------
            | Remove active class from all categories
            |--------------------------------------------------------------------------
            */

            categoryItems.forEach(function (category) {

                category.classList.remove('active');

            });


            /*
            |--------------------------------------------------------------------------
            | Add active class to selected category
            |--------------------------------------------------------------------------
            */

            this.classList.add('active');


            /*
            |--------------------------------------------------------------------------
            | Automatically bring selected category
            | into view.
            |--------------------------------------------------------------------------
            */

            this.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest',
                inline: 'center'
            });

        });

    });


    /* =====================================================
       PREVENT DRAGGING FROM FOLLOWING LINKS
       ===================================================== */

    let dragDistance = 0;


    nav.addEventListener('mousedown', function (event) {

        startX = event.pageX;

        dragDistance = 0;

    });


    nav.addEventListener('mousemove', function (event) {

        if (!isDragging) {
            return;
        }


        dragDistance =
            Math.abs(event.pageX - startX);

    });


    nav.addEventListener('click', function (event) {

        /*
        |--------------------------------------------------------------------------
        | If the user dragged the navigation,
        | don't accidentally activate a link.
        |--------------------------------------------------------------------------
        */

        if (dragDistance > 10) {

            event.preventDefault();

            event.stopPropagation();

        }

    }, true);


    /* =====================================================
       INITIAL ARROW STATE
       ===================================================== */

    updateArrows();


    /* =====================================================
       CHECK AFTER PAGE HAS FULLY LOADED
       ===================================================== */

    window.addEventListener('load', function () {

        updateArrows();

    });

});
</script>

<!-- Asynchronous navigation -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const navItems = document.querySelectorAll('.ai-nav-item');
    const content = document.getElementById('aiPromptContent');

    navItems.forEach(function (item) {

        item.addEventListener('click', function (e) {

            e.preventDefault();

            const url = this.dataset.url;

            if (!url) {
                return;
            }

            // Remove active class
            navItems.forEach(function (nav) {
                nav.classList.remove('active');
            });

            // Add active class to clicked item
            this.classList.add('active');

            // Show loading
            content.innerHTML = `
                <div class="text-center py-5">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">
                            Loading...
                        </span>
                    </div>

                    <p class="text-muted mt-3">
                        Loading prompts...
                    </p>
                </div>
            `;

            fetch(url, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'text/html'
                }
            })
            .then(function (response) {

                if (!response.ok) {
                    throw new Error('Something went wrong.');
                }

                return response.text();

            })
            .then(function (html) {

                content.innerHTML = html;

            })
            .catch(function (error) {

                console.error(error);

                content.innerHTML = `
                    <div class="alert alert-danger">
                        Unable to load this category.
                        Please try again.
                    </div>
                `;

            });

        });

    });

});
</script>
</body>
</html>