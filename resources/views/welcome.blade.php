<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to REKANAWADWELLING</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* Variabel CSS untuk Warna */
        :root {
            --primary-color: #b40000; /* Merah gelap */
            --secondary-color: gold; /* Kuning aksen */
            --dark-bg: #111; /* Latar belakang gelap (dari kode Anda) */
            --light-bg: #fff; /* Latar belakang terang */
            --text-dark: #111; /* Teks gelap */
            --text-light: white; /* Teks terang */
            --border-color: #eee;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif; /* Menggunakan Inter */
            background: var(--light-bg);
            color: var(--text-dark);
            overflow-x: hidden; /* Mencegah scrollbar horizontal karena animasi */
            line-height: 1.6;
        }

        /* DEFINISI ANIMASI */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* --- HEADER & NAVIGASI BARU (Mengikuti Konsep Gambar) --- */
        .main-header {
            background-color: var(--light-bg); /* Latar belakang putih */
            padding: 15px 40px;
            display: flex;
            justify-content: space-between; /* Logo kiri, Navigasi kanan */
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus */
            animation: fadeInDown 1s ease-out forwards; /* Animasi untuk header */
            position: relative; /* Untuk z-index */
            z-index: 1000; /* Pastikan di atas hero */
        }

        .main-header .logo-area {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .main-header .logo-area img {
            height: 60px; /* Ukuran logo */
        }

        .main-header .company-info {
            display: flex;
            flex-direction: column;
        }

        .main-header .company-name {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
            margin-top: 5px;
            color: var(--primary-color);
            line-height: 1;
        }

        .main-header .tagline {
            font-size: 0.8rem;
            color: #555;
            margin-top: 2px;
            font-weight: 500;
        }

        .main-header .main-nav {
            display: flex;
            gap: 25px; /* Jarak antara item navigasi */
        }

        .main-header .main-nav a {
            color: #555; /* Warna teks link lebih gelap */
            text-decoration: none;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 5px;
            transition: color 0.3s ease; /* Hanya transisi warna teks */
        }

        .main-header .main-nav a:hover,
        .main-header .main-nav a.active {
            color: var(--primary-color); /* Warna merah saat hover/aktif */
            /* Tidak ada background color pada hover/active, hanya perubahan warna teks */
        }
        /* --- AKHIR HEADER & NAVIGASI BARU --- */

        /* Hero Section */
        .hero {
            background: url('{{ asset('assets/images/okok.jpg') }}') no-repeat center center/cover;
            height: 450px;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero p1,
        .hero h1,
        .hero p,
        .hero .btn {
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        .hero h1 {
            font-size: 48px;
            margin: 0;
            font-weight: bold;
            animation-delay: 0.6s;
        }
        .hero p1 {
            font-size: 20px;
            margin-top: 10px;
            animation-delay: 0.8s;
        }

        .hero p:nth-of-type(1) {
            font-size: 20px;
            margin-top: 10px;
            animation-delay: 0.8s;
        }

        .hero p:nth-of-type(2) {
            font-size: 20px;
            margin-top: 10px;
            animation-delay: 1.0s;
        }

        .hero .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background: var(--dark-bg); /* Menggunakan variabel */
            color: var(--text-light); /* Menggunakan variabel */
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
            animation-delay: 1.2s;
        }

        .hero .btn:hover {
            background: #333;
        }

        /* Contact Section */
        .contact {
            background: var(--primary-color); /* Menggunakan variabel */
            color: white;
            padding: 50px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 30px;
        }

        .contact div {
            flex: 1;
            min-width: 250px;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        .contact div:first-child {
            animation-delay: 1.4s;
        }

        .contact div:last-child {
            animation-delay: 1.6s;
        }

        .contact h3 {
            margin-bottom: 15px;
            text-transform: uppercase;
            font-size: 20px;
            letter-spacing: 1px;
        }

        .contact p {
            margin: 5px 0;
            font-size: 15px;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .main-header {
                flex-direction: column;
                text-align: center;
                padding: 15px 20px;
            }
            .main-header .logo-area {
                flex-direction: column;
                margin-bottom: 15px;
            }
            .main-header .main-nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }
            .hero p1 {
                font-size: 24px;
            }
            .hero h1 {
                font-size: 36px;
            }
            .hero p {
                font-size: 18px;
            }
            .contact {
                flex-direction: column;
                align-items: center;
            }
            .contact div {
                min-width: unset;
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .main-header .company-name {
                font-size: 1.2rem;
            }
            .main-header .tagline {
                font-size: 0.8rem;
            }
            .main-header .main-nav a {
                padding: 6px 10px;
                font-size: 0.9rem;
            }
            .hero h1 {
                font-size: 30px;
            }
            .hero p {
                font-size: 16px;
            }
            .hero .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            .contact h3 {
                font-size: 18px;
            }
            .contact p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <header class="main-header">
        <div class="logo-area">
            <img src="{{ asset('assets/images/logopt2trg.png') }}" alt="RND Logo">
            <div class="company-info">
                <div class="company-name">REKANAWADWELLING</div>
                <div class="tagline">Arsitek & Kontraktor</div>
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="hero-content">
            <p1>WELCOME TO</p1>
            <h1>REKANAWADWELLING</h1>
            <p>Kami hadir dengan solusi arsitektur, kontraktor, dan properti yang inovatif dan berkelanjutan.</p>
            <a href="/home" class="btn">Masuk ke Halaman Utama</a>
        </div>
    </section>

    <section class="contact" id="contact">
        <div>
            <h3>OUR CONTACT</h3>
            <p>📞 +62 851-4765-2009 / +62 822-2324-0324</p>
            <p>✉️ officialrnd09@gmail.com</p>
            <p>📸 officialrnd09</p>
        </div>
        <div>
            <h3>RESEARCH AND DEVELOPMENT</h3>
            <p>Menciptakan solusi inovatif, berkelanjutan, dan berdampak positif melalui layanan arsitektur, kontraktor dan pengembangan properti.</p>
        </div>
    </section>

</body>
</html>
