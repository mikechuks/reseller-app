<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <title>Dashboard | adminHMD</title>

  <link rel="stylesheet" href="user_dashboard/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="user_dashboard/assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="user_dashboard/assets/css/style.css">
</head>

<body>

    @include('layout.dash_header')

    <main>
        @yield('content')
    </main>

    @include('layout.dash_footer')

  <script src="user_dashboard/assets/js/bootstrap.bundle.min.js"></script>
  <script src="user_dashboard/assets/js/main.js"></script>
</body>
</html>