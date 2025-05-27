<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> {{-- Penting untuk responsivitas --}}
    <title>REKA NAWA DWELLING - Desain Cerdas, Hunian Berkualitas</title> {{-- Judul lebih deskriptif --}}

    {{-- Link ke CSS eksternal --}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    {{-- Gaya CSS inline (sesuai kebutuhan, namun disarankan pisahkan ke file CSS) --}}
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Font lebih modern */
            margin: 0;
            padding: 0;
            line-height: 1.6; /* Keterbacaan teks */
            color: #333; /* Warna teks default */
        }
        header, footer {
            background-color:rgb(250, 9, 9); /* Warna latar belakang lebih gelap */
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin-bottom: 5px; /* Sesuaikan margin */
            font-size: 2.5em; /* Ukuran font lebih besar untuk judul utama */
        }
        header p {
            font-size: 1.1em; /* Ukuran font tagline */
            opacity: 0.9; /* Sedikit transparan */
        }
        main {
            min-height: calc(100vh - 120px); /* Memastikan konten utama punya tinggi minimum (sesuaikan dengan tinggi header/footer) */
            /* Bisa ditambahkan padding di sini jika tidak ingin di-yield content yang mengatur padding */
        }
        section {
            padding: 40px 20px; /* Tambah padding samping */
            max-width: 1200px; /* Batasi lebar konten */
            margin: 0 auto; /* Tengahkankan konten */
        }
        h2 {
            margin-bottom: 20px; /* Margin bawah untuk sub-judul */
            color: #2c3e50; /* Warna judul section */
            text-align: center;
        }
        footer p {
            margin: 0; /* Hapus margin default pada paragraf footer */
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <header>
        <h1>REKA NAWA DWELLING</h1>
        <p>Desain Cerdas, Hunian Berkualitas</p>
    </header>

    <main>
        {{-- Di sinilah konten spesifik halaman akan ditempatkan --}}
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Reka Nawa Dwelling</p> {{-- Tahun otomatis --}}
    </footer>

</body>
</html>