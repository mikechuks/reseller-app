<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="VaultEdge - Premium financial planning and investment management HTML template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>VaultEdge - Financial Planning &amp; Investment HTML Template</title>

    <link rel="icon" href="user_frontend/img/favicon.ico">
    <link rel="stylesheet" href="user_frontend/style.css">
    <link rel="stylesheet" href="user_frontend/css/custom-override.css">
</head>
<body>

    @include('layout.header')

    <main>
        @yield('content')
    </main>

    @include('layout.footer')

    <!-- Scripts -->
    <script src="user_frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="user_frontend/js/bootstrap/popper.min.js"></script>
    <script src="user_frontend/js/bootstrap/bootstrap.min.js"></script>
    <script src="user_frontend/js/plugins/plugins.js"></script>
    <script src="user_frontend/js/active.js"></script>
    <script src="user_frontend/js/vaultedge.js"></script>
</body>
</html>