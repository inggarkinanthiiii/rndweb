<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title> <!-- Judul disesuaikan jika tidak ingin "REKA NAWA DWELLING" -->

    <!-- Link ke CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <!-- Gaya CSS inline -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }
        main {
            min-height: calc(100vh - 80px); /* disesuaikan dengan tinggi footer */
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
        }
        footer {
            background-color: rgb(250, 9, 9);
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <!-- Header dan Navigasi telah dihapus -->

    <main>
        @yield('content') <!-- Tempat konten halaman -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Reka Nawa Dwelling</p>
    </footer>

</body>
</html>
