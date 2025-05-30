<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property - RND Properti</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Variabel CSS untuk Warna */
        :root {
            --primary-color: #b40000; /* Merah gelap */
            --secondary-color: gold; /* Kuning aksen, as defined, but will use a custom gold for new elements */
            --custom-gold: #FFD700; /* A specific gold for accents */
            --dark-bg: #111; /* Latar belakang gelap */
            --light-bg: #fff; /* Latar belakang terang */
            --text-dark: #111; /* Teks gelap */
            --text-light: white; /* Teks terang */
            --border-color: #eee;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: var(--light-bg);
            color: var(--text-dark);
            overflow-x: hidden;
            animation: fadeInBody 1s ease forwards;
        }

        /* Fade-in animasi untuk body */
        @keyframes fadeInBody {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
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

        /* --- HEADER & NAVIGASI --- */
        .main-header {
            background-color: var(--light-bg);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            animation: fadeInDown 1s ease-out forwards;
            position: relative;
            z-index: 1000;
        }

        .main-header .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .main-header .logo-area img {
            height: 40px;
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
            font-size: 0.9rem;
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
            padding: 8px 12px;
            border-radius: 5px;
            transition: color 0.3s ease;
        }

        .main-header .main-nav a:hover,
        .main-header .main-nav a.active {
            color: var(--primary-color);
        }

        /* HERO SECTION UNTUK HALAMAN PROPERTY */
        .property-hero {
            position: relative;
            width: 100%;
            min-height: 350px;
            background-image: url('{{ asset('assets/images/salaman.png') }}'); /* Ganti dengan gambar hero Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            padding: 0 40px;
            box-sizing: border-box;
            overflow: hidden;
            text-align: left;
        }

        .property-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Opasitas overlay */
            z-index: 0;
        }

        .property-hero .hero-content {
            position: relative;
            z-index: 1;
            color: var(--text-light);
            opacity: 0;
            animation: fadeInLeft 1.2s ease-out forwards;
            max-width: 1200px;
            margin-left: 0;
            margin-right: auto;
            padding-left: 10px;
        }

        .property-hero .hero-content .breadcrumb {
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .property-hero .hero-content .breadcrumb a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .property-hero .hero-content .breadcrumb a:hover {
            color: white;
            text-decoration: underline;
        }

        .property-hero .hero-content .breadcrumb span {
            color: white;
            font-weight: 600;
        }

        .property-hero .hero-content h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 4rem;
            font-weight: 700;
            margin: 0;
            line-height: 1.1;
            color: white; /* Judul utama putih */
        }

        .property-hero .hero-content p {
            font-size: 1.2rem;
            margin-top: 10px;
            max-width: 600px;
            animation: fadeInUp 1.5s ease forwards;
            animation-delay: 0.6s;
        }

        /* MAIN CONTENT - PROPERTI LISTING */
        .property-listing-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            animation: fadeInUp 2s ease forwards;
            opacity: 0;
            text-align: center;
        }

        .property-listing-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .property-listing-section h2::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -10px;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--secondary-color); /* Garis aksen */
            border-radius: 2px;
        }

        /* Tambahan untuk teks pengantar */
        .property-listing-section > p.intro-text {
            font-size: 1.15rem;
            color: #555;
            margin-bottom: 40px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        /* Styling untuk tombol kategori baru */
        .category-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease forwards;
            animation-delay: 0.5s;
        }

        .category-buttons button {
            background-color: #f0f0f0;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .category-buttons button:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .category-buttons button.active {
            background-color: var(--primary-color);
            color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            border-color: var(--primary-color);
        }


        /* Style untuk judul kategori properti */
        .property-category {
            margin-bottom: 60px; /* Jarak antar kategori utama */
            display: none; /* Default hidden, controlled by JS */
            animation: fadeInUp 1s ease forwards; /* Fade in when visible */
        }

        .property-category.active {
            display: block; /* Show active category */
        }

        .property-category h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            color: #333;
            margin-top: 50px;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
            display: inline-block;
        }

        .property-category h3::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -8px;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 2px;
        }

        .property-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        /* NEW PROPERTY CARD STYLE (Mengikuti Konsep Gambar) */
        .property-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: left;
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
            animation-delay: var(--delay);
            position: relative; /* Penting untuk posisi tag */
            display: flex;
            flex-direction: column;
        }

        .property-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* Tag "New Listing" / "For Sale" */
        .property-card .status-tag {
            position: absolute;
            top: 0;
            left: 0; /* Position at top-left */
            background-color: var(--custom-gold); /* Gold color from image */
            color: var(--primary-color); /* Dark red text */
            padding: 8px 15px; /* Adjust padding */
            border-bottom-right-radius: 10px; /* Rounded corner */
            font-size: 0.9rem; /* Slightly larger font */
            font-weight: 700; /* Bold */
            z-index: 1;
            text-transform: uppercase;
        }

        .property-card img {
            width: 100%;
            height: 220px; /* Pastikan tinggi gambar seragam */
            object-fit: cover;
            display: block;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .property-card-content {
            padding: 15px 20px 20px; /* Sesuaikan padding */
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: unset; /* Hapus min-height yang lama jika ada, biarkan konten menentukan */
        }

        .property-card-content h3 { /* Ini untuk judul properti individual di dalam card */
            font-family: 'Poppins', sans-serif;
            font-size: 1.4rem; /* Sedikit lebih kecil dari sebelumnya */
            color: var(--primary-color);
            margin-top: 0;
            margin-bottom: 5px; /* Kurangi margin */
            height: 2.4em; /* Tetap pertahankan tinggi untuk 2 baris */
            line-height: 1.2em;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .property-card-content .location {
            font-size: 0.95rem;
            color: #555; /* Warna teks lebih gelap */
            margin-bottom: 10px; /* Sesuaikan margin */
            display: flex;
            align-items: center;
            gap: 8px; /* Lebih banyak jarak */
            font-weight: 500; /* Sedikit lebih tebal */
        }
        .property-card-content .location i {
            color: #777; /* Warna ikon lebih lembut */
            font-size: 1rem; /* Ukuran ikon */
        }

        /* NEW: Details like bedrooms/bathrooms */
        .property-card-content .amenities {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px; /* Space before price */
            font-size: 0.9rem;
            color: #666;
            flex-wrap: wrap; /* Allow wrapping on small screens */
            gap: 10px; /* Space between items */
        }

        .property-card-content .amenity-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .property-card-content .amenity-item i {
            color: var(--primary-color); /* Red icon for amenities */
            font-size: 1rem;
        }

        /* NEW: Price display */
        .property-card-content .price {
            font-family: 'Poppins', sans-serif;
            font-size: 1.8rem; /* Larger price font */
            font-weight: 700;
            color: var(--primary-color); /* Primary color for price */
            margin-bottom: 15px; /* Space before button */
            align-self: flex-start; /* Align to start */
        }

        /* Hapus .details jika tidak lagi diperlukan sesuai konsep gambar */
        /* .property-card-content .details { display: none; } */


        .property-card-content .card-button {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 12px 25px; /* Increased padding for a larger button */
            border-radius: 8px; /* More rounded corners */
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
            align-self: center; /* Center the button */
            margin-top: 15px; /* Memberi sedikit jarak dari teks di atasnya */
            width: calc(100% - 40px); /* Make button full width minus padding */
            text-align: center;
            font-size: 1.1rem; /* Slightly larger font size for button */
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }

        .property-card-content .card-button:hover {
            background-color: #7e0000;
            transform: scale(1.02); /* Slight scale on hover */
            box-shadow: 0 5px 12px rgba(0,0,0,0.2);
        }

        /* ABOUT RND PROPERTY SECTION (CONTENT REMAINING THE SAME) */
        .about-rnd-property {
            background-color: #f9f9f9;
            padding: 60px 20px;
            text-align: center;
            margin-top: 60px;
            opacity: 0;
            animation: fadeInUp 2.2s ease forwards;
        }

        .about-rnd-property .container {
            max-width: 1000px;
            margin: auto;
            padding: 0;
        }

        .about-rnd-property h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.8rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        .about-rnd-property p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .about-rnd-property .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-item {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .feature-item i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .feature-item h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.4rem;
            color: var(--primary-color);
            margin-top: 0;
            margin-bottom: 10px;
        }

        .feature-item p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* TESTIMONI SECTION */
        .testimonials-section {
            padding: 60px 20px;
            text-align: center;
            max-width: 1200px;
            margin: 60px auto;
            opacity: 0;
            animation: fadeInUp 2.4s ease forwards;
        }

        .testimonials-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.8rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        .testimonials-section h2::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -10px;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--secondary-color);
            border-radius: 2px;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .testimonial-card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            text-align: center;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .testimonial-card .quote-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
            line-height: 1;
        }

        .testimonial-card p {
            font-style: italic;
            color: #444;
            margin-bottom: 20px;
            line-height: 1.6;
            font-size: 1.05rem;
        }

        .testimonial-card .author {
            font-weight: 700;
            color: var(--primary-color);
            margin-top: 10px;
        }
        .testimonial-card .author span {
            display: block;
            font-size: 0.9rem;
            color: #777;
            font-weight: 400;
            margin-top: 5px;
        }

        /* FINAL CTA SECTION */
        .cta-section {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 60px 20px;
            text-align: center;
            margin-top: 60px;
            opacity: 0;
            animation: fadeInUp 2.6s ease forwards;
        }

        .cta-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.8rem;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .cta-section .cta-button {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            padding: 15px 35px;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .cta-section .cta-button:hover {
            background-color: #ffd700; /* Gold lebih terang */
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        /* FOOTER */
        footer {
            background: var(--dark-bg);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
            animation: fadeInUp 2.8s ease forwards;
            opacity: 0;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
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

            .property-hero {
                padding: 0 20px;
                min-height: 280px;
            }
            .property-hero .hero-content h1 {
                font-size: 3rem;
            }
            .property-hero .hero-content p {
                font-size: 1rem;
            }

            .property-listing-section,
            .about-rnd-property,
            .testimonials-section,
            .cta-section {
                padding: 40px 20px;
            }

            .property-listing-section h2,
            .about-rnd-property h2,
            .testimonials-section h2,
            .cta-section h2 {
                font-size: 2rem;
            }
            .property-category h3 { /* Sesuaikan untuk kategori properti */
                font-size: 1.8rem;
                margin-top: 40px;
                margin-bottom: 20px;
            }

            .feature-item, .testimonial-card {
                padding: 25px;
            }
            .property-card-content .card-button {
                width: calc(100% - 30px); /* Adjust for smaller screens */
            }
             .category-buttons {
                gap: 10px;
                margin-bottom: 30px;
            }
            .category-buttons button {
                padding: 10px 20px;
                font-size: 1rem;
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
            .property-hero .hero-content h1 {
                font-size: 2.2rem;
            }
            .property-hero .hero-content p {
                font-size: 0.9rem;
            }
            .property-listing-section h2,
            .about-rnd-property h2,
            .testimonials-section h2,
            .cta-section h2 {
                font-size: 1.8rem;
            }
            .property-category h3 { /* Sesuaikan untuk kategori properti */
                font-size: 1.5rem;
                margin-top: 30px;
                margin-bottom: 15px;
            }
            .property-card-content h3 {
                font-size: 1.3rem;
            }
            .property-card-content .price {
                font-size: 1.6rem; /* Adjust price font size */
            }
            .cta-section p {
                font-size: 1rem;
            }
            .cta-section .cta-button {
                font-size: 1rem;
                padding: 12px 25px;
            }
            .feature-item i {
                font-size: 2.5rem;
            }
            .property-card-content .card-button {
                width: 100%; /* Full width on very small screens */
            }
             .category-buttons button {
                width: 100%; /* Full width for buttons on very small screens */
                margin-bottom: 10px; /* Add space between stacked buttons */
            }
             .modal {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.modal-content {
  background: white;
  padding: 20px;
  border-radius: 10px;
  max-width: 500px;
  width: 90%;
  position: relative;
  animation: fadeIn 0.3s ease-in-out;
}

.modal .close {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 24px;
  font-weight: bold;
  cursor: pointer;
}

/* Optional animation */
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}

        }
    </style>
</head>
<body>

    <header class="main-header">
        <div class="logo-area">
            <img src="{{ asset('assets/images/Logo.png') }}" alt="RND Logo">
            <div class="company-info">
                <div class="company-name">RND Properti</div>
                <div class="tagline">Contractor & Consultant</div>
            </div>
        </div>
        <nav class="main-nav">
            <a href="/home">Home</a>
            <a href="/layanan">Layanan</a>
            <a href="/portfolio">Portfolio</a>
            <a href="/property" class="active">Property</a>
            <a href="/homestay">Homestay</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <section class="property-hero">
        <div class="hero-content">
            <div class="breadcrumb">
                <a href="/home">Home</a> > <span>Property</span>
            </div>
            <h1>Temukan Properti Impian Anda</h1>
            <p>Jelajahi pilihan properti residensial, komersial, dan investasi terbaik dari RND Properti.</p>
        </div>
    </section>

    <section class="property-listing-section">
        <h2>Pilihan Properti Unggulan</h2>
        <p class="intro-text">Ada beberapa jenis properti di RND Properti yang siap memenuhi kebutuhan Anda, mulai dari investasi jangka panjang hingga hunian nyaman.</p>

        <div class="category-buttons">
        <button class="category-btn active" data-category="semua">Semua Properti</button>
        </div>

        <div class="category-buttons">
        <button class="category-btn" data-category="tanah">Tanah</button>
        <button class="category-btn" data-category="rumah">Rumah</button>
        <button class="category-btn" data-category="toko">Toko</button>
        <button class="category-btn" data-category="homestay">Homestay</button>
        </div>

        <div id="semua" class="property-category active">
            <h3>Tanah</h3>
            <div class="property-grid">
                <div class="property-card" style="--delay: 0s;">
                    <div class="status-tag">For Sale</div> <img src="{{ asset('assets/images/proper1.png') }}" alt="Prime Commercial Land">
                    <div class="property-card-content">
                        <h3>Prime Commercial Land</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Surabaya</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-ruler-combined"></i> 5000 sqm</div>
                            <div class="amenity-item"><i class="fas fa-road"></i> Main Road Access</div>
                        </div>  
                        <div class="price">Rp 50 Juta/m²</div> 
                        <a href="#" class="card-button prime-commercial-land">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.1s;">
                    <div class="status-tag">For Sale</div>
                    <img src="{{ asset('assets/images/tanah2.jpg') }}" alt="Tanah Investasi Bali">
                    <div class="property-card-content">
                        <h3>Tanah Investasi Premium</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Bali</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-ruler-combined"></i> 2500 sqm</div>
                            <div class="amenity-item"><i class="fas fa-tree"></i> Ocean View</div>
                        </div>
                        <div class="price">Rp 25 Juta/m²</div>
                        <a href="/property/detail/tanah-bali" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.2s;">
                    <div class="status-tag">New Listing</div>
                    <img src="{{ asset('assets/images/tanah3.jpg') }}" alt="Kavling Siap Bangun Sleman">
                    <div class="property-card-content">
                        <h3>Kavling Siap Bangun Strategis</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Sleman, Yogyakarta</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-ruler-combined"></i> 300 sqm</div>
                            <div class="amenity-item"><i class="fas fa-city"></i> Near Amenities</div>
                        </div>
                        <div class="price">Rp 5 Juta/m²</div>
                        <a href="/property/detail/kavling-sleman" class="card-button">View Property</a>
                    </div>
                </div>
            </div>

            <h3 style="margin-top: 60px;">Rumah</h3>
            <div class="property-grid">
                <div class="property-card" style="--delay: 0s;">
                    <div class="status-tag">New Listing</div>
                    <img src="{{ asset('assets/images/rumah1.jpg') }}" alt="The Elite Residence">
                    <div class="property-card-content">
                        <h3>The Elite Residence</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Yogyakarta</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 4 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 3 Baths</div>
                            <div class="amenity-item"><i class="fas fa-car"></i> 2 Garages</div>
                        </div>
                        <div class="price">Rp 2.5 M</div> <a href="/property/detail/elite-residence" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.1s;">
                    <div class="status-tag">For Sale</div>
                    <img src="{{ asset('assets/images/rumah2.jpg') }}" alt="Modern Living Apartment">
                    <div class="property-card-content">
                        <h3>Modern Living Apartment</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Jakarta Pusat</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 2 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 2 Baths</div>
                            <div class="amenity-item"><i class="fas fa-building"></i> Condo</div>
                        </div>
                        <div class="price">Rp 1.8 M</div>
                        <a href="/property/detail/modern-apartment" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.2s;">
                    <div class="status-tag">For Sale</div>
                    <img src="{{ asset('assets/images/rumah3.jpg') }}" alt="Minimalist Townhouse">
                    <div class="property-card-content">
                        <h3>Minimalist Townhouse</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Bandung</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 3 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 2 Baths</div>
                            <div class="amenity-item"><i class="fas fa-car"></i> 1 Garage</div>
                        </div>
                        <div class="price">Rp 1.2 M</div>
                        <a href="/property/detail/townhouse" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.3s;">
                    <div class="status-tag">New Listing</div>
                    <img src="{{ asset('assets/images/rumah4.jpg') }}" alt="Rumah Klasik Mewah">
                    <div class="property-card-content">
                        <h3>Rumah Klasik Mewah</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Jakarta Barat</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 5 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 4 Baths</div>
                            <div class="amenity-item"><i class="fas fa-car"></i> 3 Garages</div>
                        </div>
                        <div class="price">Rp 7.0 M</div>
                        <a href="/property/detail/rumah-klasik" class="card-button">View Property</a>
                    </div>
                </div>
            </div>

            <h3 style="margin-top: 60px;">Toko</h3>
            <div class="property-grid">
                <div class="property-card" style="--delay: 0s;">
                    <div class="status-tag">For Sale</div>
                    <img src="{{ asset('assets/images/toko1.jpg') }}" alt="Toko Strategis Pusat Kota">
                    <div class="property-card-content">
                        <h3>Toko Strategis Pusat Kota</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Jakarta Pusat</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-ruler-combined"></i> 150 sqm</div>
                            <div class="amenity-item"><i class="fas fa-store"></i> High Traffic</div>
                        </div>
                        <div class="price">Rp 3.5 M</div>
                        <a href="/property/detail/toko-pusat-kota" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.1s;">
                    <div class="status-tag">New Listing</div>
                    <img src="{{ asset('assets/images/toko2.jpg') }}" alt="Ruko Modern Commercial">
                    <div class="property-card-content">
                        <h3>Ruko Modern Commercial</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Tangerang</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-ruler-combined"></i> 180 sqm</div>
                            <div class="amenity-item"><i class="fas fa-building"></i> 2 Floors</div>
                        </div>
                        <div class="price">Rp 2.8 M</div>
                        <a href="/property/detail/ruko-tangerang" class="card-button">View Property</a>
                    </div>
                </div>
            </div>

            <h3 style="margin-top: 60px;">Homestay</h3>
            <div class="property-grid">
                <div class="property-card" style="--delay: 0s;">
                    <div class="status-tag">For Rent</div>
                    <img src="{{ asset('assets/images/homestay1.jpg') }}" alt="Cozy Homestay Ubud">
                    <div class="property-card-content">
                        <h3>Cozy Homestay Ubud</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Ubud, Bali</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 3 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 2 Baths</div>
                            <div class="amenity-item"><i class="fas fa-person-shelter"></i> Private Pool</div>
                        </div>
                        <div class="price">Rp 1.5 Juta/Night</div>
                        <a href="/property/detail/homestay-ubud" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.1s;">
                    <div class="status-tag">New Listing</div>
                    <img src="{{ asset('assets/images/homestay2.jpg') }}" alt="Mountain View Homestay">
                    <div class="property-card-content">
                        <h3>Mountain View Homestay</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Puncak, Bogor</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 4 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 3 Baths</div>
                            <div class="amenity-item"><i class="fas fa-mountain"></i> Scenic View</div>
                        </div>
                        <div class="price">Rp 1.2 Juta/Night</div>
                        <a href="/property/detail/homestay-puncak" class="card-button">View Property</a>
                    </div>
                </div>
            </div>
        </div>


        <div id="tanah" class="property-category">
            <h3>Tanah</h3>
            <div class="property-grid">
                <div class="property-card" style="--delay: 0s;">
                    <div class="status-tag">For Sale</div> <img src="{{ asset('assets/images/proper1.png') }}" alt="Prime Commercial Land">
                    <div class="property-card-content">
                        <h3>Prime Commercial Land</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Surabaya</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-ruler-combined"></i> 5000 sqm</div>
                            <div class="amenity-item"><i class="fas fa-road"></i> Main Road Access</div>
                        </div>
                        <div class="price">Rp 50 Juta/m²</div> <a href="/property/detail/commercial-land" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.1s;">
                    <div class="status-tag">For Sale</div>
                    <img src="{{ asset('assets/images/tanah2.jpg') }}" alt="Tanah Investasi Bali">
                    <div class="property-card-content">
                        <h3>Tanah Investasi Premium</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Bali</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-ruler-combined"></i> 2500 sqm</div>
                            <div class="amenity-item"><i class="fas fa-tree"></i> Ocean View</div>
                        </div>
                        <div class="price">Rp 25 Juta/m²</div>
                        <a href="/property/detail/tanah-bali" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.2s;">
                    <div class="status-tag">New Listing</div>
                    <img src="{{ asset('assets/images/tanah3.jpg') }}" alt="Kavling Siap Bangun Sleman">
                    <div class="property-card-content">
                        <h3>Kavling Siap Bangun Strategis</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Sleman, Yogyakarta</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-ruler-combined"></i> 300 sqm</div>
                            <div class="amenity-item"><i class="fas fa-city"></i> Near Amenities</div>
                        </div>
                        <div class="price">Rp 5 Juta/m²</div>
                        <a href="/property/detail/kavling-sleman" class="card-button">View Property</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="rumah" class="property-category">
            <h3>Rumah</h3>
            <div class="property-grid">
                <div class="property-card" style="--delay: 0s;">
                    <div class="status-tag">New Listing</div>
                    <img src="{{ asset('assets/images/rumah1.jpg') }}" alt="The Elite Residence">
                    <div class="property-card-content">
                        <h3>The Elite Residence</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Yogyakarta</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 4 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 3 Baths</div>
                            <div class="amenity-item"><i class="fas fa-car"></i> 2 Garages</div>
                        </div>
                        <div class="price">Rp 2.5 M</div> <a href="/property/detail/elite-residence" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.1s;">
                    <div class="status-tag">For Sale</div>
                    <img src="{{ asset('assets/images/rumah2.jpg') }}" alt="Modern Living Apartment">
                    <div class="property-card-content">
                        <h3>Modern Living Apartment</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Jakarta Pusat</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 2 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 2 Baths</div>
                            <div class="amenity-item"><i class="fas fa-building"></i> Condo</div>
                        </div>
                        <div class="price">Rp 1.8 M</div>
                        <a href="/property/detail/modern-apartment" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.2s;">
                    <div class="status-tag">For Sale</div>
                    <img src="{{ asset('assets/images/rumah3.jpg') }}" alt="Minimalist Townhouse">
                    <div class="property-card-content">
                        <h3>Minimalist Townhouse</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Bandung</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 3 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 2 Baths</div>
                            <div class="amenity-item"><i class="fas fa-car"></i> 1 Garage</div>
                        </div>
                        <div class="price">Rp 1.2 M</div>
                        <a href="/property/detail/townhouse" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.3s;">
                    <div class="status-tag">New Listing</div>
                    <img src="{{ asset('assets/images/rumah4.jpg') }}" alt="Rumah Klasik Mewah">
                    <div class="property-card-content">
                        <h3>Rumah Klasik Mewah</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Jakarta Barat</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 5 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 4 Baths</div>
                            <div class="amenity-item"><i class="fas fa-car"></i> 3 Garages</div>
                        </div>
                        <div class="price">Rp 7.0 M</div>
                        <a href="/property/detail/rumah-klasik" class="card-button">View Property</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="toko" class="property-category">
            <h3>Toko</h3>
            <div class="property-grid">
                <div class="property-card" style="--delay: 0s;">
                    <div class="status-tag">For Sale</div>
                    <img src="{{ asset('assets/images/toko1.jpg') }}" alt="Toko Strategis Pusat Kota">
                    <div class="property-card-content">
                        <h3>Toko Strategis Pusat Kota</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Jakarta Pusat</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-ruler-combined"></i> 150 sqm</div>
                            <div class="amenity-item"><i class="fas fa-store"></i> High Traffic</div>
                        </div>
                        <div class="price">Rp 3.5 M</div>
                        <a href="/property/detail/toko-pusat-kota" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.1s;">
                    <div class="status-tag">New Listing</div>
                    <img src="{{ asset('assets/images/toko2.jpg') }}" alt="Ruko Modern Commercial">
                    <div class="property-card-content">
                        <h3>Ruko Modern Commercial</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Tangerang</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-ruler-combined"></i> 180 sqm</div>
                            <div class="amenity-item"><i class="fas fa-building"></i> 2 Floors</div>
                        </div>
                        <div class="price">Rp 2.8 M</div>
                        <a href="/property/detail/ruko-tangerang" class="card-button">View Property</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="homestay" class="property-category">
            <h3>Homestay</h3>
            <div class="property-grid">
                <div class="property-card" style="--delay: 0s;">
                    <div class="status-tag">For Rent</div>
                    <img src="{{ asset('assets/images/homestay1.jpg') }}" alt="Cozy Homestay Ubud">
                    <div class="property-card-content">
                        <h3>Cozy Homestay Ubud</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Ubud, Bali</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 3 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 2 Baths</div>
                            <div class="amenity-item"><i class="fas fa-person-shelter"></i> Private Pool</div>
                        </div>
                        <div class="price">Rp 1.5 Juta/Night</div>
                        <a href="/property/detail/homestay-ubud" class="card-button">View Property</a>
                    </div>
                </div>

                <div class="property-card" style="--delay: 0.1s;">
                    <div class="status-tag">New Listing</div>
                    <img src="{{ asset('assets/images/homestay2.jpg') }}" alt="Mountain View Homestay">
                    <div class="property-card-content">
                        <h3>Mountain View Homestay</h3>
                        <div class="location"><i class="fas fa-map-marker-alt"></i> Puncak, Bogor</div>
                        <div class="amenities">
                            <div class="amenity-item"><i class="fas fa-bed"></i> 4 Beds</div>
                            <div class="amenity-item"><i class="fas fa-bath"></i> 3 Baths</div>
                            <div class="amenity-item"><i class="fas fa-mountain"></i> Scenic View</div>
                        </div>
                        <div class="price">Rp 1.2 Juta/Night</div>
                        <a href="/property/detail/homestay-puncak" class="card-button">View Property</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="about-rnd-property">
        <div class="container">
            <h2>Tentang RND Properti</h2>
            <p>RND Properti adalah mitra terpercaya Anda dalam mencari dan mengembangkan properti. Dengan pengalaman bertahun-tahun, kami berdedikasi untuk menyediakan solusi properti yang inovatif dan terjangkau.</p>
            <div class="features-grid">
                <div class="feature-item">
                    <i class="fas fa-handshake"></i>
                    <h3>Konsultan Terpercaya</h3>
                    <p>Tim ahli kami siap memberikan saran terbaik untuk investasi properti Anda.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-building"></i>
                    <h3>Pilihan Lengkap</h3>
                    <p>Dari tanah strategis hingga rumah impian, kami punya semua untuk Anda.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-wallet"></i>
                    <h3>Harga Kompetitif</h3>
                    <p>Kami menawarkan properti terbaik dengan harga yang bersaing di pasaran.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <h2>Apa Kata Klien Kami?</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <i class="fas fa-quote-left quote-icon"></i>
                <p>"Prosesnya sangat mudah dan transparan. Saya mendapatkan tanah yang sempurna untuk investasi masa depan!"</p>
                <div class="author">
                    Budi Santoso
                    <span>Investor Properti</span>
                </div>
            </div>
            <div class="testimonial-card">
                <i class="fas fa-quote-left quote-icon"></i>
                <p>"RND Properti membantu saya menemukan rumah impian dengan lokasi yang strategis dan harga yang sesuai budget. Sangat direkomendasikan!"</p>
                <div class="author">
                    Citra Dewi
                    <span>Pembeli Rumah</span>
                </div>
            </div>
            <div class="testimonial-card">
                <i class="fas fa-quote-left quote-icon"></i>
                <p>"Pelayanan yang luar biasa dan tim yang sangat responsif. Saya sangat puas dengan ruko yang saya beli untuk bisnis saya."</p>
                <div class="author">
                    Agus Salim
                    <span>Pengusaha</span>
                </div>
            </div>
        </div>
        <div id="propertyModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h4 id="modalTitle">Detail Properti</h4>
                <p id="modalDescription"></p>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <h2>Siap Memulai Perjalanan Properti Anda?</h2>
        <p>Hubungi kami sekarang untuk konsultasi gratis dan temukan properti yang paling sesuai dengan kebutuhan Anda.</p>
        <a href="/contact" class="cta-button">Hubungi Kami</a>
    </section>

    <footer>
        <p>&copy; 2023 RND Properti. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryButtons = document.querySelectorAll('.category-btn');
            const propertyCategories = document.querySelectorAll('.property-category');

            // Fungsi untuk menampilkan kategori
            function showCategory(categoryToShow) {
                propertyCategories.forEach(category => {
                    if (category.id === categoryToShow) {
                        category.classList.add('active');
                    } else {
                        category.classList.remove('active');
                    }
                });
            }

            // Fungsi untuk mengaktifkan tombol
            function activateButton(buttonToActivate) {
                categoryButtons.forEach(button => {
                    button.classList.remove('active');
                });
                buttonToActivate.classList.add('active');
            }

            // Tambahkan event listener ke setiap tombol
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const category = this.dataset.category;
                    activateButton(this);
                    if (category === 'semua') {
                        // Tampilkan semua kategori jika tombol "Semua Properti" ditekan
                        propertyCategories.forEach(cat => cat.classList.add('active'));
                    } else {
                        // Sembunyikan semua dan tampilkan yang spesifik
                        propertyCategories.forEach(cat => cat.classList.remove('active'));
                        document.getElementById(category).classList.add('active');
                    }
                });
            });

            // Set kategori "Semua Properti" aktif secara default saat halaman dimuat
            showCategory('semua');
            document.querySelector('.category-btn[data-category="semua"]').classList.add('active');
        });
        
        const propertyDetails = {
        'prime-commercial-land': {
            title: 'Prime Commercial Land',
            description: 'Lokasi strategis, cocok untuk investasi.'
        },
        'ocean-view-villa': {
            title: 'Ocean View Villa',
            description: 'Villa dengan pemandangan laut indah.'
        }
        };

        document.querySelectorAll('.card-button').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const classes = Array.from(this.classList);
            const propClass = classes.find(c => c !== 'card-button');
            const detail = propertyDetails[propClass];

            if (detail) {
            document.getElementById('modalTitle').textContent = detail.title;
            document.getElementById('modalDescription').textContent = detail.description;
            document.getElementById('propertyModal').style.display = 'flex';
            }
        });
        });

        document.querySelector('.close').onclick = function () {
        document.getElementById('propertyModal').style.display = 'none';
        };

        window.onclick = function (e) {
        if (e.target.id === 'propertyModal') {
            document.getElementById('propertyModal').style.display = 'none';
        }
        };

    </script>

</body>
</html>