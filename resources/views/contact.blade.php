<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact - RND Properti</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #fff;
      color: #111;
      overflow-x: hidden;
      animation: fadeInBody 1s ease forwards;
    }

    /* Fade-in animasi untuk body */
    @keyframes fadeInBody {
      from { opacity: 0; transform: translateY(15px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* NAVIGATION */
    nav {
      background: #111;
      padding: 10px 40px;
      display: flex;
      gap: 20px;
      justify-content: center;
      animation: fadeInUp 0.8s ease forwards;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      padding: 8px 12px;
      border-radius: 5px;
      transition: 0.3s;
    }

    nav a:hover,
    nav a.active {
      background: #444;
    }

    /* HEADER */
    .top-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 40px;
      border-bottom: 2px solid #eee;
      font-weight: bold;
      animation: fadeInUp 1s ease forwards;
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

    /* CONTAINER */
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
      animation: fadeInUp 1.2s ease forwards;
    }

    h1, h2, p {
      opacity: 0;
      animation: fadeInUp 1.5s ease forwards;
      animation-delay: 0.4s;
    }

    h1 {
      color: #b40000;
      margin-bottom: 10px;
    }

    h2 {
      color: #b40000;
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
      border-color: #b40000;
      box-shadow: 0 0 8px rgba(180,0,0,0.5);
    }

    button {
      background-color: #b40000;
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

    /* CONTACT INFO */
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
    }

    .contact-info h4 {
      margin-bottom: 15px;
      color: #b40000;
    }

    .contact-info p {
      font-size: 16px;
      line-height: 1.5;
    }

    /* FOOTER */
    footer {
      background: #111;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 60px;
      animation: fadeInUp 2.2s ease forwards;
      opacity: 0;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
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
    }

    /* Reusable fadeInUp animation */
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
  </style>
</head>
<body>

  <!-- Menu -->
  <nav>
    <a href="/home">Home</a>
    <a href="/layanan">Layanan</a>
    <a href="/property">Property</a>
    <a href="/homestay">Homestay</a>
    <a href="/contact" class="active">Contact</a>
  </nav>

  <!-- Header -->
  <header class="top-header">
    <div class="logo-group">
      <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo" />
      <span>REKA NAWA DWELLING</span>
    </div>
    <div class="year">{{ date('Y') }}</div>
  </header>

  <div class="container">
    <h2>Ada Pertanyaan Lain?</h2>
    <p class="intro">Hubungi kami jika anda memiliki pertanyaan lebih lanjut tentang Layanan Jasa kami, Harga dan lainnya. Tim kami siap melayani anda dengan senang hati.</p>

    <h1>Hubungi Kami</h1>
    <p>Silakan isi form berikut untuk menghubungi kami atau mengirimkan pertanyaan Anda.</p>

    <div class="contact-wrapper">
      <!-- Form kontak -->
      <form action="/contact/send" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama Lengkap" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="text" name="subject" placeholder="Subjek" required />
        <textarea name="message" rows="6" placeholder="Pesan Anda" required></textarea>
        <button type="submit">Kirim Pesan</button>
      </form>

      <!-- Peta Google Maps di samping form -->
      <div class="map-container" title="Hover untuk zoom peta">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8350323376567!2d110.3893968!3d-7.8080157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578dfb0a4d4f%3A0x95c3c6c0fdcd8df9!2sBaciro%2C%20Kec.%20Gondokusuman%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1716890985723!5m2!1sid!2sid"
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

  <footer>
    &copy; {{ date('Y') }} RND Properti - All Rights Reserved
  </footer>

</body>
</html>
