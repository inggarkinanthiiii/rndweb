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
            overflow-x: hidden; /* Penting untuk mencegah scrollbar horizontal saat menu terbuka */
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
            position: relative; /* Penting untuk z-index hamburger */
            z-index: 900; /* Pastikan header di atas konten biasa tapi di bawah overlay/menu */
        }


        .main-header .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .main-header .logo-area img {
            height: 50px; /* Sedikit lebih besar */
        }

        .main-header .company-info {
            display: flex;
            flex-direction: column;
        }

        .main-header .company-name {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem; /* Sedikit lebih besar */
            font-weight: 700;
            color: var(--primary-color);
            line-height: 1;
        }

        .main-header .tagline {
            font-size: 0.95rem; /* Sedikit lebih besar */
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

        .section-title {
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
            padding: 10px 5px;
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
            padding: 10px 0 0;
            margin-top: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0px;
            flex-wrap: wrap;
            font-family: 'Inter', sans-serif;
            animation: fadeInUp 1.2s ease-out forwards;
            opacity: 0;
            animation-delay: 0.3s
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
            font-size: 0.85em;
            border-top: 1px solid rgba(255, 255, 255, 0.2); /* Subtle line above */
            animation: fadeInUp 1s ease-out forwards;
            opacity: 0;
            animation-delay: 0.6s;
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

        /* --- NEW CSS FOR MOBILE MENU (SIDEBAR) --- */
        /* Hamburger menu styling */
        .hamburger-menu {
            display: none; /* Sembunyikan secara default di desktop */
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
            z-index: 1001; /* Pastikan di atas konten lain saat menu terbuka */
        }

        /* Menggunakan 3 span untuk ikon hamburger */
        .hamburger-menu .bar {
            display: block;
            width: 28px;
            height: 3px;
            background-color: var(--text-dark); /* Warna garis hamburger */
            margin: 6px 0; /* Jarak antar garis */
            transition: 0.4s; /* Transisi halus */
        }

        /* Mobile Navigation (Sidebar) Styling */
        .mobile-nav {
            position: fixed; /* Tetap di tempat saat digulir */
            top: 0;
            right: -280px; /* Sembunyikan di luar layar (sesuaikan lebar menu + sedikit) */
            width: 250px; /* Lebar menu sidebar (sesuaikan) */
            height: 100%;
            background-color: #333; /* Warna latar belakang gelap untuk sidebar */
            box-shadow: -3px 0 10px rgba(0,0,0,0.4);
            transition: right 0.3s ease; /* Transisi saat muncul/sembunyi */
            z-index: 1000; /* Pastikan di atas overlay */
            display: flex; /* Untuk flexbox di dalam header sidebar */
            flex-direction: column; /* Konten di sidebar tersusun vertikal */
        }

        .mobile-nav.active {
            right: 0; /* Geser masuk ke layar saat aktif */
        }

        /* Header di dalam Sidebar Menu */
        .mobile-nav-header {
            background-color: var(--light-bg); /* Latar belakang seperti header utama */
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
            flex-shrink: 0; /* Jangan biarkan menyusut */
        }

        .brand-logo-sidebar {
            display: flex;
            align-items: center;
            text-decoration: none;
            gap: 10px;
        }

        .logo-image-sidebar {
            height: 40px; /* Sesuaikan ukuran logo di sidebar */
            width: auto;
        }

        .logo-text-sidebar {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem; /* Sesuaikan ukuran teks di sidebar */
            font-weight: 700;
            color: var(--primary-color); /* Warna merah gelap */
        }

        /* Close Menu Button */
        .close-menu {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            font-size: 30px; /* Ukuran ikon 'X' */
            color: var(--text-dark); /* Warna ikon 'X' */
            line-height: 1; /* Untuk memastikan 'X' di tengah */
            font-weight: bold;
        }

        /* Menu List Styling */
        .mobile-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1; /* Biarkan daftar menu mengisi sisa ruang */
            overflow-y: auto; /* Jika menu terlalu panjang, bisa digulir */
        }

        .mobile-nav ul li {
            border-bottom: 1px solid #555; /* Garis pemisah item menu */
        }

        .mobile-nav ul li:last-child {
            border-bottom: none;
        }

        .mobile-nav ul li a {
            display: block;
            padding: 15px 20px;
            text-decoration: none;
            color: var(--text-light); /* Warna teks menu */
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .mobile-nav ul li a:hover {
            background-color: #555; /* Warna hover */
        }

        /* Styling for active link in sidebar */
        .mobile-nav ul li a.active { /* Sesuaikan dengan class 'active' yang sudah ada */
            background-color: var(--primary-color); /* Warna merah seperti di gambar */
            color: #fff; /* Warna teks putih */
        }

        /* Overlay Styling */
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna gelap transparan */
            z-index: 999; /* Di bawah menu sidebar tapi di atas konten */
            display: none; /* Sembunyikan secara default */
            opacity: 0; /* Dimulai dengan transparan penuh */
            transition: opacity 0.3s ease; /* Transisi untuk fade in/out */
        }

        .menu-overlay.active {
            display: block; /* Tampilkan saat aktif */
            opacity: 1; /* Fade in */
        }

        /* Content shift when menu is open (optional) */
        body.menu-open .main-content,
        body.menu-open .carousel-container,
        body.menu-open .whatsapp-float {
            transform: translateX(-250px); /* Geser konten ke kiri sesuai lebar menu */
            transition: transform 0.3s ease;
        }
        body.menu-open {
            overflow: hidden; /* Mencegah scroll body saat menu terbuka */
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .main-header {
                /* flex-direction: column; <--- Hapus ini agar logo dan hamburger tetap sejajar */
                /* align-items: center; <--- Hapus ini */
                padding: 15px 20px;
            }

            .main-header .main-nav {
                display: none; /* Sembunyikan navigasi utama di mobile */
            }

            /* Tampilkan hamburger menu di mobile */
            .hamburger-menu {
                display: block;
            }

            .main-header .logo-area {
                gap: 5px; /* Kurangi gap */
            }

            .main-header .logo-area img {
                height: 40px; /* Lebih kecil di tablet */
            }

            .main-header .company-name {
                font-size: 1.3rem;
            }

            .main-header .tagline {
                font-size: 0.85rem;
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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cta-section {
            animation: fadeInUp 1s ease-out forwards;
            opacity: 0;
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
            /* .main-header .main-nav is already hidden by 992px media query */

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
            <img src="{{ asset('assets/images/Logo.png') }}" alt="RND Logo">
            <div class="company-info">
                <div class="company-name">Reka Nawa Dwelling</div>
                <div class="tagline">Contractor & Consultant</div>
            </div>
        </div>
        <button class="hamburger-menu" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <nav class="main-nav">
            <a href="/home" class="active">Home</a>
            <a href="/about">About</a>
            <a href="/layanan">Layanan</a>
            <a href="/portfolio">Portfolio</a>
            <a href="/property">Property</a>
            <a href="/homestay">Homestay</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <div class="menu-overlay"></div>

    <nav class="mobile-nav">
        <div class="mobile-nav-header">
            <a href="#" class="brand-logo-sidebar">
                <img src="{{ asset('assets/images/Logo.png') }}" alt="Reka Nawa Dwelling Logo" class="logo-image-sidebar">
                <span class="logo-text-sidebar">Reka Nawa Dwelling</span>
            </a>
            <button class="close-menu" aria-label="Close navigation">
                <i class="fas fa-times close-icon"></i> </button>
        </div>
        <ul>
            <li><a href="/home" class="active">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/layanan">Layanan</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/property">Property</a></li>
            <li><a href="/homestay">Homestay</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <main class="main-content">
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
                        <p>Jl. Pacar No.7,Baciro Baru,Gondokusuman, Yogyakarta</p>
                    </div>
                </div>
                <div class="project-card">
                    <img src="{{ asset('assets/images/port20.png') }}" alt="Modern Minimalist Villa">
                    <div class="project-content">
                        <h3>Rumah Minimalis</h3>
                        <p>Tawangsari, Kocoran, Caturtunggal, Depok, Sleman</p>
                    </div>
                </div>
                <div class="project-card">
                    <img src="{{ asset('assets/images/port25.png') }}" alt="Renovasi Kantor Modern">
                    <div class="project-content">
                        <h3>Masjid Peradaban Al-Kausar</h3>
                        <p>Gedongan, Sinduadi, Mlati, Sleman, DIY.</p>
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
        <p>&copy; {{ date('Y') }} Reka Nawa Dwelling. All rights reserved.</p>
        <div class="footer-links">
            <a href="/privacy-policy">Kebijakan Privasi</a>
            <a href="/terms-of-service">Syarat & Ketentuan</a>
        </div>
        
    </footer>
    <a href="https://wa.me/6281234567890" class="whatsapp-float" target="_blank">
        <img src="{{ asset('assets/images/wwa.png') }}" alt="WhatsApp">
    </a>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Carousel Logic
            const slides = document.querySelectorAll('.carousel-slide');
            const dotsContainer = document.querySelector('.carousel-dots');
            const prevBtn = document.querySelector('.prev-slide');
            const nextBtn = document.querySelector('.next-slide');
            let currentSlide = 0;
            let slideInterval; // Variable to hold the interval timer

            function createDots() {
                slides.forEach((_, index) => {
                    const dot = document.createElement('span');
                    dot.classList.add('carousel-dot');
                    if (index === 0) {
                        dot.classList.add('active');
                    }
                    dot.dataset.index = index;
                    dotsContainer.appendChild(dot);
                });
            }

            function showSlide(index) {
                // Deactivate all slides and dots
                slides.forEach(slide => slide.classList.remove('active'));
                document.querySelectorAll('.carousel-dot').forEach(dot => dot.classList.remove('active'));

                // Activate the current slide and dot
                slides[index].classList.add('active');
                document.querySelectorAll('.carousel-dot')[index].classList.add('active');
                currentSlide = index;
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            }

            function startAutoSlide() {
                stopAutoSlide(); // Clear any existing interval
                slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
            }

            function stopAutoSlide() {
                clearInterval(slideInterval);
            }

            // Event listeners for carousel
            prevBtn.addEventListener('click', () => {
                prevSlide();
                startAutoSlide(); // Restart timer after manual navigation
            });
            nextBtn.addEventListener('click', () => {
                nextSlide();
                startAutoSlide(); // Restart timer after manual navigation
            });

            dotsContainer.addEventListener('click', (e) => {
                if (e.target.classList.contains('carousel-dot')) {
                    const index = parseInt(e.target.dataset.index);
                    showSlide(index);
                    startAutoSlide(); // Restart timer after manual navigation
                }
            });

            // Initialize carousel
            createDots();
            showSlide(currentSlide);
            startAutoSlide(); // Start auto-sliding when page loads

            // Pause auto-sliding on hover
            const carousel = document.querySelector('.carousel-container');
            carousel.addEventListener('mouseenter', stopAutoSlide);
            carousel.addEventListener('mouseleave', startAutoSlide);


            // --- NEW JAVASCRIPT FOR MOBILE MENU (SIDEBAR) ---
            const hamburgerMenu = document.querySelector('.hamburger-menu');
            const closeMenu = document.querySelector('.close-menu');
            const mobileNav = document.querySelector('.mobile-nav');
            const menuOverlay = document.querySelector('.menu-overlay');
            const body = document.body;

            function openMobileMenu() {
                mobileNav.classList.add('active');
                menuOverlay.classList.add('active');
                body.classList.add('menu-open');
            }

            function closeMobileMenu() {
                mobileNav.classList.remove('active');
                menuOverlay.classList.remove('active');
                body.classList.remove('menu-open');
            }

            // Event Listeners for mobile menu
            hamburgerMenu.addEventListener('click', openMobileMenu);
            closeMenu.addEventListener('click', closeMobileMenu);
            menuOverlay.addEventListener('click', closeMobileMenu);

            // Close menu when a link inside mobile nav is clicked
            mobileNav.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });
        });
    </script>
</body>
</html>