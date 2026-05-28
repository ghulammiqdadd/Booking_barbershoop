<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>BarberEase</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="phone">
        @yield('content')
    </div>
</body>
</html>