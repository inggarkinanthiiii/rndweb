<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Welcome - RND Properti</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f5f5f5;
            color: #333;
        }

        /* Navigation (now at top) */
        nav {
            background: #111;
            padding: 10px 40px;
            display: flex;
            gap: 20px;
            justify-content: center;
            position: relative;
            z-index: 1000;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            transition: 0.3s;
        }

        nav a:hover {
            background: #444;
        }

        /* Header */
        header {
            background: #fff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #eee;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: bold;
            font-size: 18px;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
            animation-delay: 0.2s;
        }

        .logo img {
            height: 40px;
        }

        .year {
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
            animation-delay: 0.4s;
        }

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
            background: #111;
            color: #fff;
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
            background: #b40000;
            color: white;
            padding: 40px 20px;
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

        /* Animasi */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <!-- MENU PALING ATAS -->
    <nav>
        <a href="/home">Home</a>
        <a href="/portfolio">Portfolio</a>
        <a href="/property">Property</a>
        <a href="/homestay">Homestay</a>
        <a href="/contact">Contact</a>
    </nav>

    <!-- HEADER DENGAN LOGO -->
    <header>
        <div class="logo">
            <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo RND">
            <span>REKA NAWA DWELLING</span>
        </div>
        <div class="year">2025</div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <h1>COMPANY PROFILE</h1>
            <p>Selamat Datang di RND Properti</p>
            <p>Kami hadir dengan solusi arsitektur, kontraktor, dan properti yang inovatif dan berkelanjutan.</p>
            <a href="/home" class="btn">Masuk ke Halaman Utama</a>
        </div>
    </section>

    <!-- CONTACT -->
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
