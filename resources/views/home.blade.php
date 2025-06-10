<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Reka Nawa Dwelling (RND)</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        :root {
            --primary-color: #b40000; /* Merah Marun */
            --secondary-color: gold; /* Emas */
            --dark-bg: #1a1a1a; /* Lebih gelap dari #111 untuk kontras */
            --light-bg: #f8f8f8; /* Lebih terang dari #fff untuk kelembutan */
            --text-dark: #333;
            --text-light: white;
            --border-color: #e0e0e0;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: var(--light-bg);
            color: var(--text-dark);
            overflow-x: hidden;
            line-height: 1.7; /* Sedikit lebih lega */
            font-size: 16px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            line-height: 1.2;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .main-header {
            background-color: var(--light-bg); /* Latar belakang putih */
            padding: 15px 40px;
            display: flex;
            justify-content: space-between; /* Logo kiri, Navigasi kanan */
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus */
            animation: fadeInDown 1s ease-out forwards; /* Animasi untuk header */
        }


        .main-header .logo-area {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .main-header .logo-area img {
            height: 60px; /* Sedikit lebih besar */
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
            gap: 25px;
        }

        .main-header .main-nav a {
            color: #555;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 0; /* Ubah padding untuk efek underline */
            position: relative;
            transition: color 0.3s ease;
        }

        .main-header .main-nav a::after { /* Efek underline */
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }

        .main-header .main-nav a:hover,
        .main-header .main-nav a.active {
            color: var(--primary-color);
        }

        .main-header .main-nav a:hover::after,
        .main-header .main-nav a.active::after {
            width: 100%;
        }

        /* --- Carousel Styles --- */
        .carousel-container {
            width: 100%;
            height: 600px; /* Tinggi carousel lebih proporsional */
            position: relative;
            overflow: hidden;
            background-color: #333;
        }

        .carousel-slide {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 1;

            transform: scale(1.1);
            transition: opacity 1s ease-in-out, transform 5s ease-out;
        }

        .carousel-slide::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6); /* Overlay lebih gelap */
            z-index: -1;
        }

        .carousel-slide.active {
            opacity: 1;
            z-index: 2;
            transform: scale(1);
        }

        .carousel-content {
            max-width: 900px; /* Lebih lebar */
            margin: auto;
            animation: fadeInUp 1s ease-out forwards;
            padding: 0 20px;
        }

        .carousel-content h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 4em; /* Lebih besar */
            margin-bottom: 15px;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.8); /* Lebih jelas */
            color: white; /* Pastikan teks carousel berwarna putih */
        }

        .carousel-content p {
            font-size: 1.3em; /* Lebih besar */
            line-height: 1.8;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.8); /* Lebih jelas */
            color: white; /* Pastikan teks carousel berwarna putih */
        }

        .carousel-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            padding: 0 30px; /* Padding lebih besar */
            box-sizing: border-box;
            z-index: 3;
        }

        .carousel-nav button {
            background: rgba(0, 0, 0, 0.6); /* Sedikit lebih gelap */
            color: white;
            border: none;
            padding: 12px 18px; /* Lebih besar */
            cursor: pointer;
            font-size: 1.8em; /* Lebih besar */
            border-radius: 50%; /* Tombol bulat */
            transition: background 0.3s ease, transform 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel-nav button:hover {
            background: var(--primary-color); /* Warna hover sesuai tema */
            transform: scale(1.05);
        }

        .carousel-dots {
            position: absolute;
            bottom: 30px; /* Sedikit lebih tinggi */
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px; /* Jarak antar dot */
            z-index: 3;
        }

        .carousel-dot {
            width: 14px; /* Lebih besar */
            height: 14px; /* Lebih besar */
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            border: 2px solid transparent; /* Border untuk indikator aktif */
        }

        .carousel-dot.active {
            background: var(--primary-color);
            border-color: var(--secondary-color); /* Border warna emas saat aktif */
            transform: scale(1.2);
        }
        /* --- End Carousel Styles --- */


        .container {
            max-width: 1200px;
            margin: auto;
            padding: 60px 20px; /* Padding section lebih besar */
        }

        .section-title {.
            font-size: 38px; /* Lebih besar */
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: var(--text-dark);
            text-align: center; /* Judul di tengah */
            animation: fadeInUp 1s ease-out forwards;
        }

        .section-subtitle {
            font-size: 1.2em;
            color: #666;
            text-align: center;
            margin-bottom: 40px;
            animation: fadeInUp 1.1s ease-out forwards;
        }

        .underline {
            height: 5px; /* Lebih tebal */
            width: 70px; /* Lebih lebar */
            background-color: var(--primary-color);
            margin: 0 auto 20px auto; /* Di tengah */
            animation: fadeInUp 1.1s ease-out forwards;
        }

        .underline.yellow {
            background-color: var(--secondary-color);
            width: 130px; /* Lebih lebar */
            margin-top: 5px;
            animation: fadeInUp 1.2s ease-out forwards;
        }

        /* About Us Section */
        .about-us-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 40px;
            margin-top: 40px;
        }

        .about-image {
            flex: 1;
            min-width: 300px;
            animation: fadeInUp 1.3s ease-out forwards;
        }

        .about-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .about-content {
            flex: 2;
            min-width: 400px;
            animation: fadeInUp 1.4s ease-out forwards;
        }

        .about-content p {
            margin-bottom: 20px;
            color: #555;
            font-size: 1.1em;
        }

        .about-content .btn-primary {
            display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 12px 25px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .about-content .btn-primary:hover {
            background: #7e0000;
            transform: translateY(-2px);
        }

        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .service-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 1.5s ease-out forwards;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .service-card .icon {
            font-size: 3.5em; /* Ukuran ikon */
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .service-card p {
            color: #666;
            font-size: 0.95em;
        }

        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .project-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 1.6s ease-out forwards;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .project-card img {
            width: 100%;
            height: 250px; /* Tinggi gambar proyek konsisten */
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }
        .project-card:hover img {
            transform: scale(1.05);
        }

        .project-content {
            padding: 25px;
        }

        .project-content h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .project-content p {
            color: #666;
            font-size: 0.95em;
            margin-bottom: 20px;
        }

        .project-content .btn-secondary {
            display: inline-block;
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 8px 18px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .project-content .btn-secondary:hover {
            background: var(--primary-color);
            color: white;
        }

        .view-all-projects-btn {
            text-align: center;
            margin-top: 50px;
            animation: fadeInUp 1.7s ease-out forwards;
        }
        .view-all-projects-btn .btn-primary {
             display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 14px 30px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s ease, transform 0.2s ease;
            font-size: 1.1em;
        }
        .view-all-projects-btn .btn-primary:hover {
            background: #7e0000;
            transform: translateY(-2px);
        }

        /* Call to Action Section */
        .cta-section {
            background-color: var(--primary-color); /* Warna utama */
            color: var(--text-light);
            padding: 80px 20px;
            text-align: center;
            margin-top: 60px;
            animation: fadeInUp 1.8s ease-out forwards;
        }

        .cta-section h2 {
            font-size: 3.2em; /* Lebih besar */
            margin-bottom: 20px;
            color: var(--text-light);
        }

        .cta-section p {
            font-size: 1.3em;
            margin-bottom: 40px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .cta-buttons a {
            display: inline-block;
            background: var(--text-light);
            color: var(--primary-color);
            padding: 15px 30px;
            font-weight: 700;
            text-decoration: none;
            border-radius: 8px;
            margin: 0 10px;
            transition: background 0.3s ease, color 0.3s ease, transform 0.2s ease;
            font-size: 1.1em;
        }

        .cta-buttons a:hover {
            background: var(--secondary-color); /* Emas saat hover */
            color: var(--dark-bg);
            transform: translateY(-3px);
        }

        .contact-info {
            margin-top: 40px;
            font-size: 1.1em;
        }
        .contact-info p {
            margin-bottom: 10px;
        }
        .contact-info a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .contact-info a:hover {
            color: white;
            text-decoration: underline;
        }
        .contact-info .icon {
            margin-right: 8px;
        }

        /* New section for contact and R&D */
        .contact-rnd-section {
            background-color: var(--primary-color); /* Red background */
            color: var(--text-light);
            padding: 5px 0;
            justify-content: center;
            align-items: flex-start;
            gap: 10px;
            flex-wrap: wrap;
            font-family: 'Inter', sans-serif;
        }

        .contact-rnd-section .container {
            display: flex;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            padding: 0; /* Remove container padding as section already has it */
        }

        .contact-rnd-column {
            flex: 1;
            min-width: 300px; /* Minimum width for columns */
        }

        .contact-rnd-column h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--text-light);
            margin-bottom: 20px;
            position: relative;
        }

        .contact-rnd-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 80px; /* Length of the line */
            height: 2px;
            background-color: var(--secondary-color); /* Gold line */
        }

        .contact-rnd-column .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 1.1em;
        }

        .contact-rnd-column .contact-item i {
            color: var(--secondary-color);
            margin-right: 15px;
            font-size: 1.4em;
        }

        .contact-rnd-column .contact-item a {
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-rnd-column .contact-item a:hover {
            color: var(--secondary-color);
        }

        .contact-rnd-column .rnd-description {
            font-size: 1.1em;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
        }

        .confidential-footer {
            background-color: var(--primary-color); /* Same as section background */
            color: var(--text-light);
            text-align: center;
            padding: 20px 0;
            font-size: 0.9em;
            border-top: 1px solid rgba(255, 255, 255, 0.2); /* Subtle line above */
            margin-top: 20px; /* Space from the main contact/R&D content */
        }


        footer {
            background: var(--dark-bg);
            color: var(--text-light);
            text-align: center;
            padding: 30px; /* Sedikit lebih tinggi */
            margin-top: 0; /* Adjust margin as new section will be before it */
            animation: fadeInUp 2.1s ease-out forwards;
            font-size: 0.95em;
        }
        footer p {
            margin-bottom: 10px;
        }
        footer .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s ease;
        }
        footer .footer-links a:hover {
            color: white;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        .whatsapp-float img {
            width: 50px;
            height: auto;
            border-radius: 50%;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
        }


        /* Responsive adjustments */
        @media (max-width: 992px) {
            .main-header {
                flex-direction: column;
                align-items: center; /* Tengahkan item */
                padding: 15px 20px;
            }

            .main-header .main-nav {
                margin-top: 15px;
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
                gap: 15px; /* Jarak antar nav item */
            }

            .main-header .main-nav a {
                padding: 5px 10px;
            }

            .carousel-container {
                height: 450px;
            }

            .carousel-content h2 {
                font-size: 2.8em;
            }

            .carousel-content p {
                font-size: 1.1em;
            }

            .carousel-nav {
                padding: 0 10px;
            }
            .carousel-nav button {
                font-size: 1.5em;
                padding: 8px 12px;
            }

            .section-title {
                font-size: 32px;
            }

            .about-us-section,
            .services-grid,
            .projects-grid {
                grid-template-columns: 1fr; /* Satu kolom */
            }

            .about-content,
            .about-image {
                min-width: unset;
                width: 100%;
            }

            .cta-section h2 {
                font-size: 2.5em;
            }
            .cta-section p {
                font-size: 1.1em;
            }
            .cta-buttons a {
                padding: 12px 25px;
                margin: 10px 0; /* Jeda vertikal */
                display: block; /* Tombol jadi block */
            }

            .contact-rnd-section .container {
                flex-direction: column;
            }
            .contact-rnd-column {
                min-width: unset;
                width: 100%;
                text-align: center; /* Center align content for smaller screens */
            }
            .contact-rnd-column h3::after {
                left: 50%; /* Center the underline */
                transform: translateX(-50%);
            }
            .contact-rnd-column .contact-item {
                justify-content: center; /* Center contact items */
            }
        }

        @media (max-width: 576px) {
            .main-header {
                padding: 10px 15px;
            }
            .main-header .logo-area img {
                height: 35px;
            }
            .main-header .company-name {
                font-size: 1.2rem;
            }
            .main-header .tagline {
                font-size: 0.75rem;
            }
            .main-header .main-nav {
                gap: 8px;
            }
            .main-header .main-nav a {
                font-size: 0.9em;
            }

            .carousel-container {
                height: 350px;
            }
            .carousel-content h2 {
                font-size: 2em;
            }
            .carousel-content p {
                font-size: 0.9em;
            }
            .carousel-nav button {
                font-size: 1.2em;
                padding: 6px 10px;
            }
            .carousel-dots {
                bottom: 20px;
                gap: 8px;
            }
            .carousel-dot {
                width: 10px;
                height: 10px;
            }

            .container {
                padding: 40px 15px;
            }
            .section-title {
                font-size: 26px;
            }
            .section-subtitle {
                font-size: 1em;
            }

            .service-card, .project-card {
                padding: 20px;
            }

            .cta-section h2 {
                font-size: 2em;
            }
            .cta-section p {
                font-size: 1em;
            }
            .cta-buttons a {
                font-size: 1em;
                padding: 10px 20px;
            }

            .contact-rnd-section {
                padding: 40px 20px;
            }
            .contact-rnd-column h3 {
                font-size: 22px;
            }
            .contact-rnd-column .contact-item {
                font-size: 1em;
            }
            .contact-rnd-column .contact-item i {
                font-size: 1.2em;
            }
            .contact-rnd-column .rnd-description {
                font-size: 1em;
            }

            footer {
                padding: 20px 15px;
            }
            footer .footer-links a {
                margin: 0 8px;
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
        <nav class="main-nav">
            <a href="/home"  class="active">Home</a>
            <a href="/about">About</a>
            <a href="/layanan">Layanan</a>
            <a href="/portfolio">Portfolio</a>
            <a href="/property">Property</a>
            <a href="/homestay">Homestay</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>  

    <div class="carousel-container">
        <div class="carousel-slide active" style="background-image: url('{{ asset('assets/images/gedung.jpg') }}');">
            <div class="carousel-content">
                <h2>Selamat Datang di Reka Nawa Dwelling</h2>
                <p>Mitra terpercaya Anda dalam menciptakan ruang hidup dan usaha yang inovatif, berkelanjutan, dan berdampak positif.</p>
            </div>
        </div>

        <div class="carousel-slide" style="background-image: url('{{ asset('assets/images/port18.png') }}');">
            <div class="carousel-content">
                <h2>VISI KAMI</h2>
                <p>Menjadi perusahaan terdepan dalam menciptakan ruang hidup dan usaha yang inovatif, berkelanjutan, dan berdampak positif bagi masyarakat.</p>
            </div>
        </div>

        <div class="carousel-slide" style="background-image: url('{{ asset('assets/images/port39.png') }}');">
            <div class="carousel-content">
                <h2>MISI KAMI</h2>
                <p>Menyediakan layanan arsitektur, konstruksi, dan pengembangan properti yang profesional, efisien, dan berorientasi pada kualitas. Menghadirkan solusi desain dan bangunan yang fungsional, estetis, dan ramah lingkungan.</p>
            </div>
        </div>

        <div class="carousel-nav">
            <button class="prev-slide"><i class="fas fa-chevron-left"></i></button>
            <button class="next-slide"><i class="fas fa-chevron-right"></i></button>
        </div>

        <div class="carousel-dots">
            {{-- Dots akan dibuat otomatis oleh JavaScript --}}
        </div>
    </div>

    {{-- About Us Section --}}
    <section id="about-us" class="container">
        <h2 class="section-title">Tentang Reka Nawa Dwelling</h2>
        <div class="underline"></div>
        <p class="section-subtitle">A brief story about our company, vision, and mission.</p>

        <div class="about-us-section">
            <div class="about-image">
                {{-- Ganti dengan gambar yang merepresentasikan RND, misalnya tim kerja, atau proyek yang sedang berjalan --}}
                <img src="{{ asset('assets/images/port39.png') }}" alt="About RND">
            </div>
            <div class="about-content">
                <p>
                    Reka Nawa Dwelling (RND) adalah perusahaan yang berdedikasi di bidang Arsitektur, Kontraktor, dan Pengembangan Properti. Kami hadir untuk menyediakan solusi terpadu dalam perencanaan, pelaksanaan, dan optimalisasi aset properti.
                </p>
                <p>
                    Fokus utama kami adalah pada **kualitas, ketepatan waktu, dan nilai berkelanjutan**. Didukung oleh tim profesional yang kompeten, RND berkomitmen menjadi mitra strategis Anda dalam mewujudkan ruang yang fungsional, estetis, dan bernilai ekonomi tinggi.
                </p>
                <a href="/about" class="btn-primary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>

    {{-- Our Services Section --}}
    <section id="services" class="container" style="background-color: white; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="underline"></div>
        <p class="section-subtitle">Kami menyediakan layanan komprehensif untuk kebutuhan properti Anda.</p>

        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-building icon"></i> {{-- Icon Building for Architecture --}}
                <h3>Arsitektur</h3>
                <p>Desain inovatif dan fungsional untuk hunian dan ruang usaha yang estetis, efisien, dan sesuai dengan visi Anda.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-hard-hat icon"></i> {{-- Icon Hard Hat for Contractor --}}
                <h3>Kontraktor</h3>
                <p>Pelaksanaan konstruksi dengan standar kualitas tertinggi, tepat waktu, dan sesuai anggaran yang telah disepakati.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-chart-line icon"></i> {{-- Icon Chart Line for Property Development --}}
                <h3>Pengembangan Properti</h3>
                <p>Menciptakan aset properti bernilai tinggi, mulai dari studi kelayakan, perencanaan, hingga pemasaran dan penjualan.</p>
            </div>
        </div>
    </section>

{{-- Featured Projects Section --}}
    <section id="projects" class="container">
        <h2 class="section-title">Proyek Unggulan Kami</h2>
        <div class="underline"></div>
        <p class="section-subtitle">Beberapa karya terbaik Reka Nawa Dwelling yang telah kami wujudkan.</p>

        <div class="projects-grid">
            <div class="project-card">
                <img src="{{ asset('assets/images/port6.png') }}" alt="The Modern House Homestay">
                <div class="project-content">
                    <h3>The Colonial Homestay</h3>
                    <p>Jl. Pacar No.7,Baciro Baru,Gondokusuman, Yohyakarta</p>
                    {{-- Tombol "Lihat Detail" tetap dihapus --}}
                </div>
            </div>
            <div class="project-card">
                <img src="{{ asset('assets/images/port20.png') }}" alt="Modern Minimalist Villa">
                <div class="project-content">
                    <h3>Rumah Minimalis</h3>
                    <p>Tawangsari, Kocoran, Catuetunggal, Depok, Sleman</p>
                    {{-- Tombol "Lihat Detail" tetap dihapus --}}
                </div>
            </div>
            <div class="project-card">
                <img src="{{ asset('assets/images/port25.png') }}" alt="Renovasi Kantor Modern">
                <div class="project-content">
                    <h3>Masjid Peradaban Al-Kausar</h3>
                    <p>Gedongan, Sinduadi, Mlati, Sleman,DIY.</p>
                    {{-- Tombol "Lihat Detail" tetap dihapus --}}
                </div>
            </div>
        </div>
        <div class="view-all-projects-btn">
            <a href="/portfolio" class="btn-primary">Lihat Semua Proyek</a>
        </div>
    </section>

    {{-- Call to Action Section (Existing) --}}
    <section class="cta-section">
        <h2>Siap Memulai Proyek Anda?</h2>
        <p>Hubungi kami hari ini untuk konsultasi gratis dan wujudkan visi properti impian Anda bersama Reka Nawa Dwelling.</p>
        <div class="cta-buttons">
            <a href="/contact">Hubungi Kami</a>
            <a href="https://wa.me/6281234567890" target="_blank">Chat via WhatsApp</a>
        </div>
    </section>

    {{-- NEW: Contact & Research and Development Section (based on your image) --}}
    <section class="contact-rnd-section">
        <div class="container">
            <div class="contact-rnd-column">
                <h3>OUR CONTACT</h3>
                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <p>+62 851-4765-2009 / +62 822-2324-0324</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <p><a href="mailto:officialrnd.09@gmail.com">officialrnd.09@gmail.com</a></p>
                </div>
                <div class="contact-item">
                    <i class="fab fa-instagram"></i>
                    <p><a href="https://www.instagram.com/officialrnd09" target="_blank">officialrnd09</a></p>
                </div>
            </div>

            <div class="contact-rnd-column">
                <h3>RESEARCH AND DEVELOPMENT</h3>
                <p class="rnd-description">
                    Menciptakan solusi inovatif, berkelanjutan, dan berdampak positif melalui layanan arsitektur, kontraktor dan pengembangan properti.
                </p>
            </div>
        </div>
        <div class="confidential-footer">
            Strictly Confidential, For Recipient Only
        </div>
    </section>
    {{-- END NEW SECTION --}}

    <footer>
        <p>&copy; {{ date('Y') }} REKANAWADWELLING. All rights reserved.</p>
    </footer>

    <a href="https://wa.me/6281234567890" class="whatsapp-float" target="_blank">
        <img src="{{ asset('assets/images/wwa.png') }}" alt="WhatsApp">
    </a>

    <script>
        const slides = document.querySelectorAll('.carousel-slide');
        const dotsContainer = document.querySelector('.carousel-dots');
        const prevButton = document.querySelector('.prev-slide');
        const nextButton = document.querySelector('.next-slide');
        let currentSlide = 0;
        let slideInterval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
            });
            // Delay adding 'active' class slightly for a better zoom effect with the fade
            setTimeout(() => {
                slides[index].classList.add('active');
            }, 50); // Small delay
            updateDots(index);
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        function startSlideShow() {
            slideInterval = setInterval(nextSlide, 6000); // Ganti slide setiap 6 detik
        }

        function pauseSlideShow() {
            clearInterval(slideInterval);
        }

        function createDots() {
            slides.forEach((_, i) => {
                const dot = document.createElement('span');
                dot.classList.add('carousel-dot');
                dot.setAttribute('data-index', i);
                dot.addEventListener('click', () => {
                    showSlide(i);
                    pauseSlideShow();
                    startSlideShow(); // Restart timer after manual click
                });
                dotsContainer.appendChild(dot);
            });
            updateDots(0);
        }

        function updateDots(activeIndex) {
            const dots = document.querySelectorAll('.carousel-dot');
            dots.forEach((dot, i) => {
                dot.classList.remove('active');
                if (i === activeIndex) {
                    dot.classList.add('active');
                }
            });
        }

        // Event Listeners for navigation buttons
        prevButton.addEventListener('click', () => {
            prevSlide();
            pauseSlideShow();
            startSlideShow(); // Restart timer after manual click
        });

        nextButton.addEventListener('click', () => {
            nextSlide();
            pauseSlideShow();
            startSlideShow(); // Restart timer after manual click
        });

        // Initialize carousel
        document.addEventListener('DOMContentLoaded', () => {
            createDots();
            showSlide(currentSlide);
            startSlideShow();
        });
    </script>

</body>
</html>
