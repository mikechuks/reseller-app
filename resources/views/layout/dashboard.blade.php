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

</script>
</body>
</html>