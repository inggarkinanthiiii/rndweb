<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - RND Properti</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <style>
        /* Variable Definitions */
        :root {
            --primary-color: #b40000;
            --secondary-color: gold;
            --dark-bg: #111;
            --light-bg: #fff;
            --text-dark: #111;
            --text-light: white;
            --border-color: #eee;
        }

        /* General Body & Container */
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: var(--light-bg);
            color: var(--text-dark);
            overflow-x: hidden;
            line-height: 1.6;
            font-size: 16px; /* Tambahkan ukuran font dasar */
        }

        /* For preventing scroll when menu is open */
        body.menu-open { /* Ubah dari .no-scroll menjadi .menu-open */
            overflow: hidden;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Header Styles */
        .main-header {
            background-color: var(--light-bg);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            position: sticky; /* Make header sticky */
            top: 0;
            z-index: 900; /* Pastikan header di atas konten biasa tapi di bawah overlay/menu */
            animation: fadeInDown 1s ease-out forwards;
        }

        .main-header .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .main-header .logo-area img {
            height: 50px; /* Lebih besar dari sebelumnya */
        }

        .main-header .company-info {
            display: flex;
            flex-direction: column;
        }

        .main-header .company-name {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            line-height: 1;
        }

        .main-header .tagline {
            font-size: 0.95rem; /* Sedikit lebih besar dari sebelumnya */
            color: #555;
            margin-top: 2px;
            font-weight: 500;
        }

        /* Desktop Navigation */
        .main-nav { /* Ubah dari .desktop-nav menjadi .main-nav agar konsisten dengan home.html */
            display: flex; /* Display by default for desktop */
            gap: 25px;
        }

        .main-nav a { /* Ubah dari .desktop-nav a menjadi .main-nav a */
            color: #555;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 0; /* Ubah padding untuk efek underline */
            position: relative;
            transition: color 0.3s ease;
        }

        .main-nav a::after { /* Efek underline */
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }

        .main-nav a:hover, /* Ubah dari .desktop-nav a:hover menjadi .main-nav a:hover */
        .main-nav a.active { /* Ubah dari .desktop-nav a.active menjadi .main-nav a.active */
            color: var(--primary-color);
        }

        .main-nav a:hover::after, /* Ubah dari .desktop-nav a:hover::after menjadi .main-nav a:hover::after */
        .main-nav a.active::after { /* Ubah dari .desktop-nav a.active::after menjadi .main-nav a.active::after */
            width: 100%;
        }

        /* Hamburger Menu */
        .hamburger-menu {
            display: none; /* Hidden by default, shown on mobile */
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
            z-index: 1001; /* Ensure it's above other content */
        }

        .hamburger-menu .bar { /* Ini tidak lagi digunakan, tapi biarkan dulu untuk jaga-jaga */
            display: block;
            width: 28px;
            height: 3px;
            background-color: var(--text-dark);
            margin: 6px 0;
            transition: 0.4s;
        }
        /* Style untuk Font Awesome icon di hamburger menu (jika menggunakan) */
        .hamburger-menu .fas {
            font-size: 1.8em; /* Ukuran ikon hamburger */
            color: var(--text-dark);
        }

        /* Mobile Navigation (Sidebar) */
        .mobile-nav {
            position: fixed;
            top: 0;
            right: -280px; /* Start off-screen, sesuaikan dengan lebar */
            width: 250px; /* Adjust width as needed */
            height: 100%;
            background-color: #333; /* Warna gelap untuk sidebar */
            box-shadow: -3px 0 10px rgba(0,0,0,0.4);
            z-index: 1000;
            transition: right 0.3s ease;
            display: flex;
            flex-direction: column;
            box-sizing: border-box; /* Include padding in width */
        }

        .mobile-nav.active {
            right: 0; /* Slide into view */
        }

        .mobile-nav-header {
            background-color: var(--light-bg);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
            flex-shrink: 0;
        }

        .brand-logo-sidebar {
            display: flex;
            align-items: center;
            text-decoration: none;
            gap: 10px;
        }

        .logo-image-sidebar {
            height: 40px;
            width: auto;
        }

        .logo-text-sidebar {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .close-menu {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            font-size: 30px;
            color: var(--text-dark);
            line-height: 1;
            font-weight: bold;
        }

        .mobile-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
            overflow-y: auto;
        }

        .mobile-nav ul li {
            border-bottom: 1px solid #555;
        }

        .mobile-nav ul li:last-child {
            border-bottom: none;
        }

        .mobile-nav ul li a {
            display: block;
            padding: 15px 20px;
            text-decoration: none;
            color: var(--text-light);
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .mobile-nav ul li a:hover {
            background-color: #555;
        }

        /* Styling for active link in sidebar */
        .mobile-nav ul li a.active {
            background-color: var(--primary-color);
            color: #fff;
        }

        /* Menu Overlay */
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna gelap transparan */
            z-index: 999;
            display: none; /* Sembunyikan secara default */
            opacity: 0; /* Dimulai dengan transparan penuh */
            transition: opacity 0.3s ease; /* Transisi untuk fade in/out */
        }

        .menu-overlay.active {
            display: block; /* Tampilkan saat aktif */
            opacity: 1; /* Fade in */
        }

        /* Content shift when menu is open (optional, adjust if main content is wrapped) */
        body.menu-open .hero-banner,
        body.menu-open .container,
        body.menu-open footer {
            transform: translateX(-250px); /* Geser konten ke kiri sesuai lebar menu */
            transition: transform 0.3s ease;
        }


        /* Hero Banner */
        .hero-banner {
            width: 100%;
            height: 300px;
            background-image: url('{{ asset('assets/images/salaman.png') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            padding-left: 10%;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
        }

        .hero-banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: -1;
        }

        .hero-banner .breadcrumbs {
            font-size: 0.9em;
            margin-bottom: 10px;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .hero-banner .breadcrumbs a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .hero-banner .breadcrumbs a:hover {
            text-decoration: underline;
        }

        .hero-banner .page-title {
            font-family: 'Poppins', sans-serif;
            font-size: 3em;
            font-weight: 700;
            margin: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        /* Container for main content */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }

        /* Section Titles and Underlines */
        .section-title {
            font-size: 36px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: var(--text-dark);
            animation: fadeInUp 1s ease-out forwards;
        }

        .underline {
            height: 4px;
            width: 60px;
            background-color: var(--primary-color);
            margin-bottom: 10px;
            animation: fadeInUp 1.1s ease-out forwards;
        }

        .underline.yellow {
            background-color: var(--secondary-color);
            width: 120px;
            margin-top: 5px;
            animation: fadeInUp 1.2s ease-out forwards;
        }

        /* Brief Section */
        .brief {
            display: flex;
            gap: 20px;
            margin-top: 30px;
            animation: fadeInUp 1.3s ease-out forwards;
        }

        .brief-icon img {
            height: 50px;
        }

        .brief-text h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .brief-text p {
            margin-bottom: 10px;
        }

        /* Highlight Section */
        .highlight-section {
            display: flex;
            flex-wrap: wrap;
            margin-top: 40px;
            animation: fadeInUp 1.4s ease-out forwards;
        }

        .highlight-left {
            background: var(--primary-color);
            color: white;
            flex: 1;
            padding: 30px;
            min-width: 250px;
            position: relative;
        }

        .highlight-left::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            height: 6px;
            width: 80px;
            background: var(--secondary-color);
        }

        .highlight-left h2 {
            margin: 0;
        }

        .highlight-left img {
            margin-top: 50px;
            width: 250px;
        }

        .highlight-right {
            flex: 2;
            min-width: 300px;
        }

        .highlight-right img {
            width: 100%;
            height: auto;
        }

        /* Vision & Mission Section */
        .vision-mission-section {
            margin-top: 50px;
        }

        .vision-mission-section p {
            line-height: 1.6;
            padding-bottom: 20px;
            animation: fadeInUp 1.5s ease-out forwards;
        }

        .mission-section-with-image {
            display: flex;
            gap: 40px;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .mission-text-content {
            flex: 1;
            min-width: 450px;
        }

        .mission-illustration {
            flex: 0 0 450px;
            max-width: 100%;
            animation: fadeInUp 1.6s ease-out forwards;
            margin-top: 40px;
        }

        .mission-illustration img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .mission-list {
            list-style: none;
            padding-left: 0;
            counter-reset: mission-counter;
        }

        .mission-list li {
            display: flex;
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.6;
            animation: fadeInUp 1.7s ease-out forwards;
        }

        .mission-list li::before {
            counter-increment: mission-counter;
            content: "0" counter(mission-counter);
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
            margin-right: 15px;
        }

        /* CTA Section */
        .cta {
            text-align: center;
            margin-top: 60px;
            animation: fadeInUp 1.9s ease-out forwards;
        }

        .cta h2 {
            margin-bottom: 20px;
            font-size: 2.2em;
        }

        .cta a {
            display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 12px 24px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .cta a:hover {
            background: #7e0000;
        }

        /* Priority Section */
        .priority-section {
            display: flex;
            flex-wrap: wrap;
            margin-top: 60px;
            animation: fadeInUp 2s ease-out forwards;
        }

        .priority-text {
            background: var(--primary-color);
            color: white;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            padding: 40px 20px;
            text-align: center;
        }

        .priority-image {
            flex: 2;
            position: relative;
            background: #c5cfd4;
            max-height: 350px;
            overflow: hidden;
        }

        .priority-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .yellow-strip {
            height: 20px;
            width: 100px;
            background: var(--secondary-color);
            position: absolute;
            top: 0;
            left: 0;
        }

        /* Footer */
        footer {
            background: var(--dark-bg);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
            animation: fadeInUp 2.1s ease-out forwards;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .main-header {
                padding: 15px 20px; /* Adjust padding for smaller screens */
            }

            .main-nav { /* Sembunyikan desktop nav di layar yang lebih kecil */
                display: none;
            }

            .hamburger-menu { /* Tampilkan hamburger di layar yang lebih kecil */
                display: block;
            }

            .hero-banner {
                padding-left: 5%;
                height: 250px;
            }

            .hero-banner .page-title {
                font-size: 2.5em;
            }

            .brief {
                flex-direction: column;
                text-align: center;
            }

            .brief-icon {
                margin: auto;
            }

            .highlight-section,
            .mission-section-with-image,
            .priority-section {
                flex-direction: column;
            }

            .highlight-left,
            .highlight-right,
            .mission-text-content,
            .mission-illustration,
            .priority-text,
            .priority-image {
                min-width: unset;
                width: 100%;
            }

            .highlight-left {
                padding: 20px;
                text-align: center;
            }

            .highlight-left img {
                margin-top: 30px;
            }

            .mission-illustration {
                margin-top: 20px;
            }

            .mission-list li {
                align-items: flex-start;
            }
        }

        @media (max-width: 576px) {
            .main-header {
                padding: 10px 15px;
            }
            .main-header .company-name {
                font-size: 1.3rem;
            }

            .main-header .tagline {
                font-size: 0.8rem;
            }

            .main-header .logo-area {
                gap: 5px; /* Adjust gap for smaller screens */
            }

            .hero-banner {
                height: 200px;
            }

            .hero-banner .page-title {
                font-size: 2em;
            }

            .section-title {
                font-size: 28px;
            }

            .brief-text h3 {
                font-size: 18px;
            }

            .priority-text {
                font-size: 16px;
                padding: 30px 15px;
            }
        }
    </style>
</head>
<body>

    <header class="main-header">
        <div class="logo-area">
            <a href="/home">
                <img src="{{ asset('assets/images/Logo.png') }}" alt="RND Logo">
            </a>
            <div class="company-info">
                <div class="company-name">RND Properti</div>
                <div class="tagline">Contractor & Consultant</div>
            </div>
        </div>
        <button class="hamburger-menu" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i> </button>

        <nav class="main-nav">
            <a href="/home">Home</a>
            <a href="/about" class="active">About</a>
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
            <li><a href="/home">Home</a></li>
            <li><a href="/about" class="active">About</a></li>
            <li><a href="/layanan">Layanan</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/property">Property</a></li>
            <li><a href="/homestay">Homestay</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <div class="hero-banner">
        <div class="breadcrumbs">
            <a href="/home">Home</a> > About
        </div>
        <div class="page-title">About</div>
    </div>

    <div class="container">
        <div class="section-title">About Our Company</div>
        <div class="underline"></div>
        <div class="underline yellow"></div>

        <div class="brief">
            <div class="brief-icon">
                <img src="{{ asset('assets/images/ICON.png') }}" alt="Icon">
            </div>
            <div class="brief-text">
                <h3>A Brief Story About the Company</h3>
                <p>Reka Nawa Dwelling (RND) adalah perusahaan di bidang Arsitektur, Kontraktor dan Pengembangan Properti. Kami menghadirkan solusi terpadu dalam perencanaan, pelaksanaan, dan optimalisasi aset properti, dengan fokus pada kualitas, ketepatan waktu, dan nilai berkelanjutan.</p>
                <p>Didukung oleh tim profesional yang kompeten, RND berkomitmen menjadi mitra strategis dalam mewujudkan ruang yang fungsional, estetis, dan bernilai ekonomi tinggi.</p>
            </div>
        </div>

        <div class="highlight-section">
            <div class="highlight-left">
                <h2>DESAIN CERDAS,<br>HUNIAN BERKUALITAS.</h2>
                <img src="{{ asset('assets/images/LoGoo.png') }}" alt="Desain Icon">
            </div>
            <div class="highlight-right">
                <img src="{{ asset('assets/images/gedung.jpg') }}" alt="Gedung">
            </div>
        </div>

        <div class="vision-mission-section">
            <div class="section-title">VISION</div>
            <div class="underline"></div>
            <div class="underline yellow"></div>
            <p>Menjadi perusahaan terdepan dalam menciptakan ruang hidup dan usaha yang inovatif, berkelanjutan dan berdampak positif bagi masyarakat.</p>

            <div class="mission-section-with-image">
                <div class="mission-text-content">
                    <div class="section-title" style="margin-top: 40px;">MISSION</div>
                    <div class="underline"></div>
                    <div class="underline yellow"></div>
                    <ol class="mission-list">
                        <li><p>Menyediakan layanan arsitektur, konstruksi, dan pengembangan properti yang profesional, efisien, dan berorientasi pada kualitas.</p></li>
                        <li><p>Menghadirkan solusi desain dan bangunan yang fungsional, estetis, dan ramah lingkungan.</p></li>
                        <li><p>Mengembangkan properti yang tidak hanya bernilai ekonomi, tetapi juga memberi manfaat sosial dan lingkungan.</p></li>
                        <li><p>Menjalin kemitraan strategis dengan klien, investor, dan komunitas lokal untuk menciptakan proyek-proyek berdampak.</p></li>
                        <li><p>Mendorong inovasi dan pertumbuhan berkelanjutan dalam setiap aspek operasional perusahaan.</p></li>
                    </ol>
                </div>
                <div class="mission-illustration">
                    <img src="{{ asset('assets/images/ilustrasi.jpg') }}" alt="Ilustrasi Konstruksi">
                </div>
            </div>
        </div>

        <div class="cta">
            <h2>Layanan Yang Kami Tawarkan</h2>
            <a href="/layanan">Layanan Kami</a>
        </div>
    </div>

    <div class="priority-section">
        <div class="priority-text">ANDA ADALAH PRIORITAS KAMI</div>
        <div class="priority-image">
            <div class="yellow-strip"></div>
            <img src="{{ asset('assets/images/llogo.png') }}" alt="Prioritas Gambar">
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Reka Nawa Dwelling</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburgerMenu = document.querySelector('.hamburger-menu');
            const mobileNav = document.querySelector('.mobile-nav');
            const closeMenuBtn = document.querySelector('.close-menu');
            const menuOverlay = document.querySelector('.menu-overlay');
            const body = document.body;

            // Function to open/close the mobile menu
            function toggleMobileMenu() {
                mobileNav.classList.toggle('active');
                menuOverlay.classList.toggle('active');
                body.classList.toggle('menu-open'); // Menggunakan class menu-open
            }

            // Event Listeners
            if (hamburgerMenu) {
                hamburgerMenu.addEventListener('click', toggleMobileMenu);
            }
            if (closeMenuBtn) {
                closeMenuBtn.addEventListener('click', toggleMobileMenu);
            }
            if (menuOverlay) {
                menuOverlay.addEventListener('click', toggleMobileMenu);
            }

            // Close menu when a navigation link is clicked
            const mobileNavLinks = document.querySelectorAll('.mobile-nav ul li a');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (mobileNav.classList.contains('active')) {
                        toggleMobileMenu(); // Close the menu if it's open
                    }
                });
            });

            // Handle window resize to ensure correct menu state
            window.addEventListener('resize', function() {
                const desktopNav = document.querySelector('.main-nav'); // Menggunakan .main-nav
                if (desktopNav && getComputedStyle(desktopNav).display !== 'none' && mobileNav.classList.contains('active')) {
                    toggleMobileMenu(); // Close mobile menu if it's open and now on desktop
                }
            });
        });
    </script>
</body>
</html>