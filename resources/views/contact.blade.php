<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - RND Properti</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* ... (CSS Anda sebelumnya) ... */

        /* Variabel CSS untuk Warna */
        :root {
            --primary-color: #b40000; /* Merah gelap */
            --secondary-color: gold; /* Kuning aksen */
            --dark-bg: #111; /* Latar belakang gelap */
            --light-bg: #fff; /* Latar belakang terang */
            --text-dark: #111; /* Teks gelap */
            --text-light: white; /* Teks terang */
            --border-color: #eee;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif; /* Menggunakan Inter */
            background: var(--light-bg); /* Menggunakan variabel */
            color: var(--text-dark); /* Menggunakan variabel */
            overflow-x: hidden;
            animation: fadeInBody 1s ease forwards;
        }

        /* Fade-in animasi untuk body */
        @keyframes fadeInBody {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* DEFINISI ANIMASI (dari kode Anda sebelumnya) */
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
            z-index: 1000; /* Pastikan di atas konten lain */
        }

        .main-header .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .main-header .logo-area img {
            height: 40px; /* Ukuran logo */
        }

        .main-header .company-info {
            display: flex;
            flex-direction: column;
        }

        .main-header .company-name {
            font-family: 'Poppins', sans-serif; /* Menggunakan Poppins untuk nama perusahaan */
            font-size: 1.5rem; /* Ukuran font lebih besar untuk nama perusahaan */
            font-weight: 700;
            color: var(--primary-color); /* Warna merah untuk nama perusahaan */
            line-height: 1; /* Hapus spasi ekstra */
        }

        .main-header .tagline {
            font-size: 0.9rem;
            color: #555;
            margin-top: 2px; /* Sesuaikan posisi vertikal */
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

        /* HERO SECTION UNTUK CONTACT (MIRIP DENGAN PORTFOLIO) */
        .contact-hero {
            position: relative;
            width: 100%;
            min-height: 300px; /* Sesuaikan tinggi sesuai kebutuhan */
            background-image: url('{{ asset('assets/images/salaman.png') }}'); /* Ganti dengan gambar hero untuk halaman contact */
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

        .contact-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Opasitas overlay */
            z-index: 0;
        }

        .contact-hero .hero-content {
            position: relative;
            z-index: 1;
            color: white;
            opacity: 0; /* Untuk animasi */
            animation: fadeInLeft 1.2s ease-out forwards;
            max-width: 1200px;
            margin-left: 0;
            margin-right: auto;
            padding-left: 10px;
        }

        .contact-hero .hero-content .breadcrumb {
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .contact-hero .hero-content .breadcrumb a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-hero .hero-content .breadcrumb a:hover {
            color: white;
            text-decoration: underline;
        }

        .contact-hero .hero-content .breadcrumb span {
            color: white;
            font-weight: 600;
        }

        .contact-hero .hero-content h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            margin: 0;
            line-height: 1.1;
            color: white;
        }
        /* AKHIR HERO SECTION */

        /* CONTAINER */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
            animation: fadeInUp 1.2s ease forwards;
        }

        h1, h2, p {
            /* opacity: 0; */ /* Hapus ini agar animasi tidak berulang */
            /* animation: fadeInUp 1.5s ease forwards; */ /* Hapus ini */
            /* animation-delay: 0.4s; */ /* Hapus ini */
        }
        /* Tambahkan aturan terpisah untuk animasi pada elemen yang diperlukan */
        .container h2,
        .container p.intro,
        .container h1:nth-of-type(2), /* H1 kedua */
        .container p:nth-of-type(2) { /* Paragraf kedua */
            opacity: 0;
            animation: fadeInUp 1.5s ease forwards;
            animation-delay: 0.4s;
        }


        h1 {
            color: var(--primary-color); /* Menggunakan variabel */
            margin-bottom: 10px;
        }

        h2 {
            color: var(--primary-color); /* Menggunakan variabel */
            margin-bottom: 5px;
        }

        p.intro {
            margin-top: 0;
            margin-bottom: 30px;
        }

        /* FLEX CONTAINER FOR FORM AND MAP SIDE-BY-SIDE */
        .contact-wrapper {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            animation: fadeInUp 1.8s ease forwards;
            opacity: 0;
            animation-delay: 0.8s; /* Tambah delay agar muncul setelah h1, p */
        }

        /* FORM */
        form {
            flex: 1 1 500px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 600px;
        }

        input, textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            resize: vertical;
            transition: border-color 0.3s;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-color); /* Menggunakan variabel */
            box-shadow: 0 0 8px rgba(180,0,0,0.5);
        }

        button {
            background-color: var(--primary-color); /* Menggunakan variabel */
            color: white;
            border: none;
            padding: 12px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #7e0000;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(126,0,0,0.6);
        }

        /* MAP */
        .map-container {
            flex: 1 1 400px;
            min-width: 300px;
            height: 365px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s, transform 0.3s;
            cursor: pointer;
        }
        .map-container:hover {
            box-shadow: 0 8px 20px rgba(180,0,0,0.7);
            transform: scale(1.03);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* CONTACT INFO (Existing block) */
        .contact-info {
            margin-top: 40px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            color: #333;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 2s ease forwards;
            opacity: 0;
            animation-delay: 1.2s; /* Tambah delay */
        }

        .contact-info h4 {
            margin-bottom: 15px;
            color: var(--primary-color); /* Menggunakan variabel */
        }

        .contact-info p {
            font-size: 16px;
            line-height: 1.5;
            /* opacity: 0; */ /* Hapus agar tidak double animasi */
            /* animation: fadeInUp 1.5s ease forwards; */ /* Hapus agar tidak double animasi */
            /* animation-delay: 0.4s; */ /* Hapus agar tidak double animasi */
        }

        /* --- New section for contact and R&D (FROM IMAGE) --- */
        .contact-rnd-section {
            background-color: var(--primary-color); /* Red background */
            color: var(--text-light); /* White text */
            padding: 10px 0 0; /* Padding atas section */
            margin-top: 60px; /* Jarak dari konten di atasnya */
            display: flex;
            flex-direction: column;
            align-items: center; /* Untuk menengahkan konten jika ada teks di luar .container */
            gap: 0px;
            flex-wrap: wrap;
            font-family: 'Inter', sans-serif;
            animation: fadeInUp 1.2s ease-out forwards; /* Animasi fade-in */
            opacity: 0;
            animation-delay: 1.5s; /* Sesuaikan delay agar muncul setelah elemen lain */
        }

        .contact-rnd-section .container {
            display: flex; /* Mengatur layout kolom */
            justify-content: space-between; /* Menjaga jarak antar kolom */
            gap: 40px; /* Jarak antar kolom */
            flex-wrap: wrap; /* Memungkinkan kolom untuk wrap (pindah baris) pada layar kecil */
            padding: 0 20px; /* Tambahkan padding horizontal agar konten tidak menempel tepi */
            max-width: 1200px; /* Sesuaikan dengan max-width container lainnya */
            margin: auto; /* Untuk menengahkan container */
            align-items: flex-start; /* Memastikan kolom sejajar di bagian atas */
        }

        .contact-rnd-column {
            flex: 1; /* Agar kolom mengambil ruang yang tersedia */
            min-width: 300px; /* Lebar minimum untuk kolom sebelum wrap */
            /* Untuk mode mobile, ini akan diubah agar teks di tengah */
        }

        .contact-rnd-column h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--text-light); /* Judul berwarna putih */
            margin-bottom: 20px;
            position: relative;
            /* Untuk mobile, ini akan diubah menjadi text-align: center; */
        }

        .contact-rnd-column h3::after { /* Garis emas di bawah judul */
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 80px; /* Panjang garis */
            height: 2px;
            background-color: var(--secondary-color); /* Warna emas */
            /* Untuk mobile, ini akan diubah menjadi left: 50%; transform: translateX(-50%); */
        }

        .contact-rnd-column .contact-item {
            display: flex; /* Untuk ikon dan teks sejajar */
            align-items: center;
            margin-bottom: 15px;
            font-size: 1.1em;
            /* Untuk mobile, ini akan diubah menjadi justify-content: center; */
        }

        .contact-rnd-column .contact-item i {
            color: var(--secondary-color); /* Warna ikon emas */
            margin-right: 15px;
            font-size: 1.4em;
        }

        .contact-rnd-column .contact-item a {
            color: var(--text-light); /* Warna teks link putih */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-rnd-column .contact-item a:hover {
            color: var(--secondary-color); /* Warna hover emas */
        }

        .contact-rnd-column .rnd-description {
            font-size: 1.1em;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9); /* Sedikit transparan untuk teks deskripsi */
        }

        /* Footer Confidential (text "Strictly Confidential...") */
        .confidential-text { /* Kelas baru untuk teks rahasia */
            font-size: 0.85em;
            margin-top: 30px;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.7);
            text-align: center;
            width: 100%;
        }

        /* Main Footer */
        footer {
            background: var(--dark-bg); /* Warna latar belakang hitam keabu-abuan */
            color: white; /* Warna teks putih */
            text-align: center;
            padding: 30px;
            margin-top: 0; /* Agar menempel sempurna dengan section di atasnya */
            animation: fadeInUp 2.1s ease-out forwards;
            font-size: 0.95em;
            opacity: 0; /* Awalnya tersembunyi untuk animasi */
            animation-delay: 1.8s; /* Sesuaikan delay */
        }

        footer p {
            margin-bottom: 10px;
        }
        footer .footer-links {
            margin-top: 10px;
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

        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed; /* Membuat tombol tetap di posisi saat scroll */
            bottom: 20px;
            right: 20px;
            z-index: 1000; /* Memastikan tombol di atas elemen lain */
            animation: fadeInRight 1s ease-out forwards;
            opacity: 0;
            animation-delay: 2s; /* Sesuaikan delay agar muncul terakhir */
        }
        .whatsapp-float img {
            width: 50px;
            height: auto;
            border-radius: 50%; /* Membuat gambar bulat */
            box-shadow: 2px 2px 5px rgba(0,0,0,0.3); /* Bayangan untuk efek 3D */
            transition: transform 0.3s ease;
        }
        .whatsapp-float img:hover {
            transform: scale(1.1); /* Efek zoom saat hover */
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 992px) {
            .contact-rnd-section .container {
                flex-direction: column; /* Mengubah layout kolom menjadi satu kolom */
                padding: 0 40px; /* Menambah padding untuk mobile */
            }
            .contact-rnd-column {
                min-width: unset; /* Menghapus min-width */
                width: 100%; /* Mengambil lebar penuh */
                text-align: center; /* Menengahkan konten untuk layar kecil */
                margin-bottom: 30px; /* Jarak antar kolom */
            }
            .contact-rnd-column:last-child {
                margin-bottom: 0; /* Hapus margin bawah kolom terakhir */
            }
            .contact-rnd-column h3::after {
                left: 50%; /* Menengahkan garis bawah judul */
                transform: translateX(-50%);
            }
            .contact-rnd-column .contact-item {
                justify-content: center; /* Menengahkan item kontak */
            }

            .main-header { /* New: Responsive for main-header */
                flex-direction: column;
                text-align: center;
                padding: 15px 20px;
            }
            .main-header .logo-area { /* New: Responsive for logo-area */
                flex-direction: column;
                margin-bottom: 15px;
            }
            .main-header .main-nav { /* New: Responsive for main-nav */
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }

            .contact-wrapper {
                flex-direction: column;
            }
            .map-container, form {
                max-width: 100%;
                height: 300px;
            }
            form {
                height: auto;
            }

            .contact-hero { /* Sesuaikan padding di mobile */
                padding: 0 20px;
            }
            .contact-hero .hero-content h1 {
                font-size: 2.5rem; /* Kecilkan ukuran font untuk mobile */
            }
        }

        @media (max-width: 576px) { /* Lebih granular mobile adjustments */
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
            .container {
                padding: 20px 15px;
            }
            h1 {
                font-size: 28px;
            }
            h2 {
                font-size: 22px;
            }
            p, .contact-info p, .contact-rnd-column .rnd-description {
                font-size: 14px;
            }
            input, textarea, button {
                font-size: 14px;
                padding: 10px;
            }
            .contact-hero .hero-content h1 {
                font-size: 2rem;
            }
            .contact-rnd-column h3 {
                font-size: 22px; /* Ukuran judul lebih kecil */
            }
            .contact-rnd-column .contact-item {
                font-size: 1em; /* Ukuran teks kontak lebih kecil */
            }
            .contact-rnd-column .contact-item i {
                font-size: 1.2em; /* Ukuran ikon kontak lebih kecil */
            }
            footer {
                padding: 20px 15px; /* Padding footer lebih kecil */
            }
            footer .footer-links a {
                margin: 0 8px; /* Jarak link di footer lebih kecil */
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
            <a href="/about">About</a>
            <a href="/layanan">Layanan</a>
            <a href="/portfolio">Portfolio</a>
            <a href="/property">Property</a>
            <a href="/homestay">Homestay</a>
            <a href="/contact" class="active">Contact</a>
        </nav>
    </header>

    <section class="contact-hero">
        <div class="hero-content">
            <div class="breadcrumb">
                <a href="/home">Home</a> > <span>Contact</span>
            </div>
            <h1>Contact</h1>
        </div>
    </section>

    <div class="container">
        <h2>Ada Pertanyaan Lain?</h2>
        <p class="intro">Hubungi kami jika anda memiliki pertanyaan lebih lanjut tentang Layanan Jasa kami, Harga dan lainnya. Tim kami siap melayani anda dengan senang hati.</p>

        <h1>Hubungi Kami</h1>
        <p>Silakan isi form berikut untuk menghubungi kami atau mengirimkan pertanyaan Anda.</p>

        <div class="contact-wrapper">
            <form action="/contact/send" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nama Lengkap" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="text" name="subject" placeholder="Subjek" required />
                <textarea name="message" rows="6" placeholder="Pesan Anda" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>

            <div class="map-container" title="Hover untuk zoom peta">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.076358364139!2d110.38600867448839!3d-7.781878477123999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a577d6118d361%3A0x6b4c9c1b3f9e9e1b!2sBaciro%2C%20Gondokusuman%2C%20Yogyakarta%20City%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1717830600000!5m2!1sen!2sid"
                    loading="lazy"
                    allowfullscreen=""
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Peta Lokasi Baciro, Yogyakarta"
                ></iframe>
            </div>
        </div>

        <div class="contact-info">
            <h4>Informasi Kontak</h4>
            <p><strong>Alamat:</strong> Jl. Pacar, Baciro Baru, Gondokusuman, Yogyakarta, DIY</p>
            <p><strong>Email:</strong> info@contoh.com</p>
            <p><strong>Telepon:</strong> +62 812-3456-7890</p>
        </div>
    </div>

    <section class="contact-rnd-section">
        <div class="container">
            <div class="contact-rnd-column">
                <h3>OUR CONTACT</h3>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
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
                <p class="rnd-description">Menciptakan solusi inovatif, berkelanjutan, dan berdampak positif melalui layanan arsitektur, kontraktor dan pengembangan properti.</p>
            </div>
        </div>
        <p class="confidential-text">Strictly Confidential, For Recipient Only</p>
    </section>
    <footer>
        <p>© {{ date('Y') }} Reka Nawa Dwelling. All rights reserved.</p>
        <div class="footer-links">
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Syarat & Ketentuan</a>
        </div>
    </footer>

    </body>
</html>