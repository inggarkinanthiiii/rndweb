<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - RND Properti</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #fff;
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

        /* NAVIGASI */
        nav {
            background: #111;
            padding: 10px 40px;
            display: flex;
            gap: 20px;
            justify-content: center;
            animation: fadeInDown 1s ease-out forwards; /* Animasi untuk nav */
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
            opacity: 0; /* Mulai tersembunyi untuk animasi */
            animation: fadeInUp 0.8s ease-out forwards; /* Animasi untuk header */
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

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }

        /* BAGIAN UMUM (TITLE DAN UNDERLINE) */
        .section-title {
            font-size: 36px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #111;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 1s ease-out forwards; /* Animasi untuk judul */
        }

        .underline {
            height: 4px;
            width: 60px;
            background-color: #B40000;
            margin-bottom: 10px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 1.1s ease-out forwards; /* Animasi untuk underline 1 */
        }

        .underline.yellow {
            background-color: gold;
            width: 120px;
            margin-top: 5px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 1.2s ease-out forwards; /* Animasi untuk underline 2 */
        }

        /* ABOUT OUR COMPANY - BRIEF STORY */
        .brief {
            display: flex;
            gap: 20px;
            margin-top: 30px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInLeft 1.3s ease-out forwards; /* Animasi untuk brief */
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

        /* HIGHLIGHT SECTION */
        .highlight-section {
            display: flex;
            flex-wrap: wrap;
            margin-top: 40px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInRight 1.4s ease-out forwards; /* Animasi untuk highlight section */
        }

        .highlight-left {
            background: #b40000;
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
            background: gold;
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

        /* VISION & MISSION SECTION */
        .vision-mission-section {
            margin-top: 50px;
        }

        .vision-mission-section p {
            margin-left: 0;
            line-height: 1.6;
            padding-bottom: 20px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 1.5s ease-out forwards; /* Animasi untuk teks vision */
        }

        .mission-section-with-image {
            display: flex;
            align-items: flex-start;
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
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInRight 1.6s ease-out forwards; /* Animasi untuk gambar misi */
            margin-top: 300px;
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
            align-items: flex-start;
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.6;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInLeft 1.7s ease-out forwards; /* Animasi untuk setiap list misi */
        }
        /* Tambahkan delay untuk setiap item list agar muncul berurutan */
        .mission-list li:nth-child(1) { animation-delay: 0.1s; }
        .mission-list li:nth-child(2) { animation-delay: 0.2s; }
        .mission-list li:nth-child(3) { animation-delay: 0.3s; }
        .mission-list li:nth-child(4) { animation-delay: 0.4s; }
        .mission-list li:nth-child(5) { animation-delay: 0.5s; }


        .mission-list li::before {
            counter-increment: mission-counter;
            content: "0" counter(mission-counter);
            font-size: 24px;
            font-weight: bold;
            color: #B40000;
            margin-right: 15px;
            line-height: 1;
        }

        /* LAYANAN KAMI */
        .layanan-with-image {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            gap: 40px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 1.8s ease-out forwards; /* Animasi untuk layanan */
        }

        .layanan-left {
            flex: 1;
            min-width: 250px;
        }

        .layanan-right {
            flex: 1;
            min-width: 250px;
            /* display: none; jika tidak ada gambar lagi */
        }

        .layanan-right img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* CTA SECTION */
        .cta {
            text-align: center;
            margin-top: 60px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 1.9s ease-out forwards; /* Animasi untuk CTA */
        }

        .cta a {
            display: inline-block;
            background: #b40000;
            color: white;
            padding: 12px 24px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
        }

        .cta a:hover {
            background: #7e0000;
        }

        /* PRIORITY SECTION */
        .priority-section {
            display: flex;
            flex-wrap: wrap;
            margin-top: 60px;
            min-height: 200px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 2s ease-out forwards; /* Animasi untuk priority section */
        }

        .priority-text {
            background: #b40000;
            color: white;
            flex: 1;
            min-width: 250px;
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
            min-width: 300px;
            overflow: hidden;
            height: auto;
            max-height: 350px;
        }

        .priority-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
        }

        .yellow-strip {
            height: 20px;
            width: 100px;
            background: gold;
            position: absolute;
            top: 0;
            left: 0;
        }

        /* FOOTER */
        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
            opacity: 0; /* Mulai tersembunyi */
            animation: fadeInUp 2.1s ease-out forwards; /* Animasi untuk footer */
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
                <h2>DESAIN CERDAS,<br>HUNIAN BERKualitas.</h2>
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
                    <img src="{{ asset('assets/images/ilustrasi.jpg') }}" alt="Ilustrasi Konstruksi" style="width: 100%; height: auto; border-radius: 8px;">
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
        <p>&copy; 2025 Reka Nawa Dwelling</p>
    </footer>

</body>
</html>