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
      overflow-x: hidden;
    }

    /* ANIMASI */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
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

    nav {
      background: #111;
      padding: 10px 40px;
      display: flex;
      gap: 20px;
      justify-content: center;
      animation: fadeInDown 1s ease-out forwards;
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

    .top-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 40px;
      border-bottom: 2px solid #eee;
      font-weight: bold;
      animation: fadeInUp 0.8s ease-out;
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

    .section-title {
      font-size: 36px;
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: 10px;
      animation: fadeInUp 1s ease-out;
    }

    .underline {
      height: 4px;
      width: 60px;
      background-color: red;
      margin-bottom: 10px;
      animation: fadeInUp 1.1s ease-out;
    }

    .underline.yellow {
      background-color: gold;
      width: 120px;
    }

    .brief {
      display: flex;
      gap: 20px;
      margin-top: 30px;
      animation: fadeInLeft 1.2s ease-out;
    }

    .brief-icon {
      background: #ffc400;
      padding: 12px;
      border-radius: 6px;
    }

    .brief-icon img {
      height: 30px;
    }

    .brief-text h3 {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .brief-text p {
      margin-bottom: 10px;
    }

    .highlight-section {
      display: flex;
      flex-wrap: wrap;
      margin-top: 40px;
      animation: fadeInRight 1.4s ease-out;
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
      margin-top: 40px;
      width: 150px;
    }

    .highlight-right {
      flex: 2;
      min-width: 300px;
    }

    .highlight-right img {
      width: 100%;
      height: auto;
    }

    .section {
      margin-top: 50px;
      animation: fadeInUp 1.6s ease-out;
    }

    .section h2 {
      color: #b40000;
    }

    .section ul {
      padding-left: 20px;
    }

    .cta {
      text-align: center;
      margin-top: 60px;
      animation: fadeInUp 1.8s ease-out;
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

    .priority-section {
      display: flex;
      flex-wrap: wrap;
      margin-top: 60px;
      min-height: 200px;
      animation: fadeInUp 2s ease-out;
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

    .layanan-with-image {
      display: flex;
      flex-wrap: wrap;
      margin-top: 50px;
      gap: 40px;
      animation: fadeInUp 2.2s ease-out;
    }

    .layanan-left {
      flex: 1;
      min-width: 250px;
    }

    .layanan-right {
      flex: 1;
      min-width: 250px;
    }

    .layanan-right img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    footer {
      background: #111;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 60px;
      animation: fadeInUp 2.4s ease-out;
    }
  </style>
</head>
<body>

  <!-- Menu -->
  <nav>
    <a href="/home">Home</a>
    <a href="/portfolio">Portfolio</a>
    <a href="/property">Property</a>
    <a href="/homestay">Homestay</a>
    <a href="#contact">Contact</a>
  </nav>

  <!-- Header -->
  <header class="top-header">
    <div class="logo-group">
      <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo">
      <span>REKA NAWA DWELLING</span>
    </div>
    <div class="year">2025</div>
  </header>

  <!-- Konten -->
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

    <!-- Highlight -->
    <div class="highlight-section">
      <div class="highlight-left">
        <h2>DESAIN CERDAS,<br>HUNIAN BERKUALITAS.</h2>
        <img src="{{ asset('assets/images/LoGoo.png') }}" alt="Desain Icon">
      </div>
      <div class="highlight-right">
        <img src="{{ asset('assets/images/gedung.jpg') }}" alt="Gedung">
      </div>
    </div>

    <!-- Visi & Misi -->
    <div class="section">
      <h2>Visi</h2>
      <p>Menjadi perusahaan terdepan dalam menciptakan ruang hidup dan usaha yang inovatif, berkelanjutan, dan berdampak positif.</p>
      <h2>Misi</h2>
      <ul>
        <li>Menyediakan layanan arsitektur & konstruksi profesional</li>
        <li>Mengembangkan properti yang bernilai ekonomi & sosial</li>
        <li>Menjalin kemitraan strategis dengan klien</li>
        <li>Mendorong inovasi & keberlanjutan</li>
      </ul>
    </div>

    <!-- Layanan dengan gambar -->
    <div class="layanan-with-image">
      <div class="layanan-left">
        <h2 style="color:#b40000;">Layanan Kami</h2>
        <ul>
          <li><strong>Desain Arsitektur</strong> – Gambar kerja, desain interior, renovasi</li>
          <li><strong>Kontraktor Umum</strong> – Pembangunan, renovasi, MEP, finishing</li>
          <li><strong>Pengembangan Properti</strong> – Jual beli, revitalisasi aset</li>
        </ul>
      </div>
      <div class="layanan-right">
        <img src="{{ asset('assets/images/ilustrasi.jpg') }}" alt="Ilustrasi Layanan">
      </div>
    </div>

    <!-- CTA -->
    <div class="cta">
      <h2>Ayo Bangun Proyek Bersama RND!</h2>
      <a href="/portfolio">Lihat Portofolio Kami</a>
    </div>
  </div>

  <!-- Prioritas -->
  <div class="priority-section">
    <div class="priority-text">ANDA ADALAH PRIORITAS KAMI</div>
    <div class="priority-image">
      <div class="yellow-strip"></div>
      <img src="{{ asset('assets/images/llogo.png') }}" alt="Prioritas Gambar">
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Reka Nawa Dwelling</p>
  </footer>

</body>
</html>
