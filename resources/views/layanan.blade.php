<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami - RND Properti</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f8f8f8; /* Warna latar belakang sedikit lebih terang */
            color: #111;
            overflow-x: hidden; /* Mencegah scrollbar horizontal karena animasi */
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

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* NAVIGASI */
        nav {
            background: #111;
            padding: 10px 40px;
            display: flex;
            gap: 20px;
            justify-content: center;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInDown 1s ease-out forwards; /* Animasi untuk nav */
            animation-delay: 0.1s;
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

        /* HEADER ATAS */
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 40px;
            border-bottom: 2px solid #eee;
            font-weight: bold;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 0.8s ease-out forwards; /* Animasi untuk header */
            animation-delay: 0.2s;
        }

        .logo-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-group img {
            height: 36px;
        }

        .logo-group span {
            font-size: 16px;
            letter-spacing: 1px;
        }

        .year {
            font-size: 14px;
        }

        /* Kontainer Utama Halaman Layanan */
        .layanan-main-container {
            display: flex;
            flex-wrap: wrap; /* Memungkinkan wrap pada layar kecil */
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 1s ease-out forwards;
            animation-delay: 0.3s;
        }

        /* Sidebar Navigasi Layanan */
        .layanan-sidebar {
            flex: 0 0 250px; /* Lebar tetap untuk sidebar */
            padding: 20px;
            border-right: 1px solid #eee;
            background: #fcfcfc;
            border-radius: 8px 0 0 8px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.05);
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInLeft 1s ease-out forwards;
            animation-delay: 0.5s; /* Muncul setelah container */
        }

        .layanan-sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .layanan-sidebar li {
            margin-bottom: 10px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInLeft 0.6s ease-out forwards;
        }
        /* Penundaan untuk setiap item sidebar */
        .layanan-sidebar li:nth-child(1) { animation-delay: 0.6s; }
        .layanan-sidebar li:nth-child(2) { animation-delay: 0.7s; }
        .layanan-sidebar li:nth-child(3) { animation-delay: 0.8s; }


        .layanan-sidebar a {
            display: block;
            padding: 12px 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .layanan-sidebar a:hover {
            background-color: #f0f0f0;
        }

        .layanan-sidebar a.active {
            background-color: #B40000; /* Warna aktif seperti merah di desain utama */
            color: white;
        }

        /* Konten Utama Layanan */
        .layanan-content-area {
            flex: 1; /* Konten akan mengambil sisa ruang */
            padding: 20px 40px;
            min-width: 300px; /* Lebar minimum sebelum wrap */
        }

        .layanan-content-area h1 {
            font-size: 32px;
            font-weight: bold;
            color: #111;
            margin-bottom: 30px;
            text-align: center;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 1s ease-out forwards;
            animation-delay: 0.9s; /* Muncul setelah sidebar */
        }

        .service-section {
            display: none; /* Sembunyikan semua section secara default */
            animation: fadeIn 0.5s ease-out forwards; /* Animasi fade in saat muncul */
        }

        .service-section.active {
            display: block; /* Tampilkan section yang aktif */
        }

        .service-header {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 30px;
            margin-bottom: 30px;
        }

        .service-text {
            flex: 1;
            min-width: 280px;
        }

        .service-text h2 {
            font-size: 28px;
            color: #B40000;
            margin-bottom: 15px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 0.7s ease-out forwards;
            animation-delay: 1.2s; /* Muncul setelah judul utama */
        }

        .service-text p {
            line-height: 1.6;
            margin-bottom: 15px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 0.7s ease-out forwards;
            animation-delay: 1.3s;
        }

        .service-text ul {
            list-style: none;
            padding-left: 0;
        }

        .service-text ul li {
            margin-bottom: 8px;
            line-height: 1.5;
            position: relative;
            padding-left: 20px; /* Ruang untuk bullet kustom */
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInLeft 0.6s ease-out forwards;
        }
        /* Penundaan untuk setiap item list layanan */
        .service-text ul li:nth-child(1) { animation-delay: 1.4s; }
        .service-text ul li:nth-child(2) { animation-delay: 1.5s; }
        .service-text ul li:nth-child(3) { animation-delay: 1.6s; }
        .service-text ul li:nth-child(4) { animation-delay: 1.7s; }
        .service-text ul li:nth-child(5) { animation-delay: 1.8s; }
        .service-text ul li:nth-child(6) { animation-delay: 1.9s; }
        .service-text ul li:nth-child(7) { animation-delay: 2.0s; }
        .service-text ul li:nth-child(8) { animation-delay: 2.1s; } /* Jika ada 8 item */
        .service-text ul li:nth-child(9) { animation-delay: 2.2s; } /* Jika ada 9 item */


        .service-text ul li::before {
            content: '•'; /* Bullet kustom */
            color: #B40000; /* Warna bullet */
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        .service-text ul ul { /* Untuk nested list */
            margin-top: 5px;
            margin-left: 20px;
        }

        .service-text ul ul li::before {
            content: '–'; /* Bullet kustom untuk nested list */
            color: #555;
        }

        /* Gaya untuk elemen visual "Desain Arsitektur" */
        .architectural-design-visual {
            flex: 0 0 300px; /* Lebar tetap untuk visual */
            height: 200px; /* Tinggi tetap untuk visual */
            background-color: #e0f2f7; /* Latar belakang biru muda */
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-left: auto; /* Mendorong elemen ke kanan dalam flex container */
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInRight 1s ease-out forwards;
            animation-delay: 1.5s; /* Muncul bersamaan dengan item list pertama */
        }

        /* Gaya untuk gambar layanan (Kontraktor Umum dan Pengembangan Properti) */
        .service-image {
            flex: 0 0 400px; /* Lebar tetap untuk gambar */
            max-width: 100%; /* Pastikan responsif */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInRight 1s ease-out forwards;
            animation-delay: 1.5s; /* Sesuaikan delay jika perlu */
        }

        .service-image img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        /* Footer (dari halaman sebelumnya) */
        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 1s ease-out forwards;
            animation-delay: 2.5s; /* Muncul paling akhir */
        }

        /* Text "Anda adalah prioritas kami" */
        .layanan-content-area .text-center {
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 1s ease-out forwards;
            animation-delay: 2.3s; /* Muncul setelah semua list */
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .layanan-sidebar {
                flex: 0 0 100%; /* Sidebar ambil lebar penuh */
                border-right: none;
                border-bottom: 1px solid #eee;
                border-radius: 8px 8px 0 0;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            }

            .layanan-content-area {
                padding: 20px;
            }

            .service-header {
                flex-direction: column; /* Tumpuk teks dan gambar */
                align-items: center;
            }

            .service-text {
                min-width: unset; /* Reset min-width */
                width: 100%; /* Ambil lebar penuh */
            }

            .architectural-design-visual,
            .service-image { /* Terapkan juga untuk service-image */
                width: 100%;
                height: 150px; /* Sesuaikan tinggi untuk mobile */
                margin-left: 0; /* Hapus margin auto di mobile */
                margin-top: 20px; /* Tambahkan ruang saat ditumpuk */
            }
        }
    </style>
</head>
<body>

    <nav>
        <a href="/home">Home</a>
        <a href="/layanan">Layanan</a>
        <a href="/property">Property</a>
        <a href="/homestay">Homestay</a>
        <a href="/contact">Contact</a>
    </nav>

     <header class="top-header">
        <div class="logo-group">
            <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo">
            <span>REKA NAWA DWELLING</span>
        </div>
        <div class="year">2025</div>
    </header>

    <div class="layanan-main-container">
        <aside class="layanan-sidebar">
            <ul>
                <li><a href="#" class="sidebar-link active" data-target="architectural-design">Architectural Design</a></li>
                <li><a href="#" class="sidebar-link" data-target="general-contractor">General Contractor</a></li>
                <li><a href="#" class="sidebar-link" data-target="property-development">Pengembangan Properti</a></li>
            </ul>
        </aside>

        <main class="layanan-content-area">
            <h1>Our Services</h1>

            <section id="architectural-design" class="service-section active">
                <div class="service-header">
                    <div class="service-text">
                        <h2>Architectural Design</h2>
                        <p>RND menyediakan layanan arsitektur yang menyeluruh, mulai dari perencanaan hingga visualisasi desain, dengan pendekatan yang fungsional, estetis, dan sesuai kebutuhan klien.</p>
                        <ul>
                            <li><strong>Desain Arsitektur:</strong> Perencanaan bangunan hunian, komersial, dan fasilitas publik dengan konsep yang kuat, estetika menarik dan fungsi optimal.</li>
                            <li><strong>Desain Interior:</strong> Penataan ruang dalam yang harmonis dan efisien, mulai dari konsep, pemilihan material, hingga visual 3D dan custom furnitur.</li>
                            <li><strong>Desain Lanskap:</strong> Taman, halaman, dan ruang luar yang menyatu dengan konsep arsitektur dan kebutuhan penghuni.</li>
                            <li><strong>Gambar Kerja & Dokumen Teknis:</strong> Gambar teknis arsitektur, struktur, dan MEP lengkap dan siap konstruksi, disertai RAB.</li>
                            <li><strong>Desain Renovasi & Re-Desain:</strong> Transformasi bangunan lama menjadi lebih modern dan fungsional, termasuk optimalisasi ruang dan perubahan fasad.</li>
                            <li><strong>Pendampingan Perizinan:</strong> Gambar teknis dan dokumen untuk IMB atau PBG.</li>
                            <li><strong>Konsultasi Desain & Tata Ruang:</strong> Diskusi dan arahan profesional untuk pengembangan lahan hunian atau usaha.</li>
                        </ul>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('assets/images/arsitek.jpg') }}">
                    </div>
                </div>
            </section>

            <section id="general-contractor" class="service-section">
                <div class="service-header">
                    <div class="service-text">
                        <h2>General Contractor</h2>
                        <p>RND menyediakan layanan konstruksi yang terintegrasi, mulai dari bangunan baru hingga renovasi dan perbaikan teknis. Kami berkomitmen pada kualitas dan ketepatan waktu dalam setiap proyek.</p>
                        <ul>
                            <li><strong>Pembangunan Baru:</strong> Proyek pembangunan hunian, komersial, atau fasilitas publik dari desain RND atau klien.</li>
                            <li><strong>Renovasi & Rehabilitasi:</strong> Renovasi ringan hingga total termasuk perubahan layout, fasad, struktur, dan utilitas.</li>
                            <li><strong>Pekerjaan Struktur & Sipil:</strong> Pondasi, balok, kolom, dak beton, struktur baja ringan sesuai standar teknis.</li>
                            <li><strong>Pekerjaan Finishing:</strong> Pemasangan keramik, lantai, plafond, pengecatan, partisi, kusen, dan detail akhir lainnya.</li>
                            <li><strong>Instalasi MEP:</strong> Instalasi listrik, air bersih & kotor, pompa, dan sistem teknis lainnya.</li>
                            <li><strong>Waterproofing:</strong> Lapisan anti bocor untuk dak, rooftop, kamar mandi, dan area rawan rembes.</li>
                            <li><strong>Manajemen Proyek:</strong> Pengawasan langsung agar proyek sesuai desain, waktu, mutu, dan anggaran.</li>
                            <li><strong>Pengadaan Material & Tenaga Kerja:</strong> Penyediaan bahan bangunan dan tukang profesional dengan pelaporan berkala.</li>
                        </ul>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('assets/images/General Contractor.jpg') }}">
                    </div>
                </div>
            </section>

            <section id="property-development" class="service-section">
                <div class="service-header">
                    <div class="service-text">
                        <h2>Pengembangan Properti</h2>
                        <p>RND menyediakan layanan pengembangan properti yang mengoptimalkan aset dan menciptakan nilai tambah melalui pendekatan kreatif dan strategis.</p>
                        <ul>
                            <li><strong>Jual, Beli & Sewa Properti:</strong> Pemasaran, pencarian, dan pendampingan jual beli atau sewa properti hunian dan komersial.</li>
                            <li><strong>Revitalisasi Aset Tidak Produktif:</strong>
                                <ul>
                                    <li>Studi kelayakan & analisis potensi lahan.</li>
                                    <li>Perencanaan konsep ruang & masterplan.</li>
                                    <li>Desain model bisnis properti (hunian sewa, usaha, dll).</li>
                                    <li>Manajemen proyek dari desain hingga operasional.</li>
                                    <li>Skema kemitraan pengembangan (bagi hasil/sewa).</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('assets/images/Properti.jpg') }}">
                    </div>
                </div>
            </section>

            <p class="text-center mt-4"><em>Anda adalah prioritas kami</em></p>
        </main>
    </div>

    <footer>
        <p>&copy; 2025 Reka Nawa Dwelling</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarLinks = document.querySelectorAll('.sidebar-link');
            const serviceSections = document.querySelectorAll('.service-section');

            function showService(targetId) {
                // Remove active class from all links and sections
                sidebarLinks.forEach(link => link.classList.remove('active'));
                serviceSections.forEach(section => section.classList.remove('active'));

                // Add active class to the clicked link
                document.querySelector(`[data-target="${targetId}"]`).classList.add('active');

                // Show the target service section
                document.getElementById(targetId).classList.add('active');
            }

            // Add click event listeners to sidebar links
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent default link behavior
                    const targetId = this.dataset.target;
                    showService(targetId);
                });
            });

            // Optionally, show the first service section on page load
            if (serviceSections.length > 0) {
                showService(serviceSections[0].id);
            }
        });
    </script>
</body>
</html>
