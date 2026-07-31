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
</style>
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