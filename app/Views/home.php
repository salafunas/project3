<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N4S - Home</title>
    <link rel="stylesheet" href="<?= base_url('css1/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    /* Style inline untuk memastikan gambar muncul */
    .hero-bg {
      background-image: url('<?= base_url('images/bg-home.jpg') ?>');
    }
  </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">N4S</a>
            <button class="navbar-toggler">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li><a href="<?= base_url() ?>" class="active"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="<?= base_url('about') ?>"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="<?= base_url('post') ?>"><i class="fas fa-blog"></i> Blog</a></li>
                <li><a href="<?= base_url('kontak') ?>"><i class="fas fa-envelope"></i> Kontak</a></li>
                <li><a href="<?= base_url('faqs') ?>"><i class="fas fa-question-circle"></i> FAQ</a></li>
            </ul>
        </div>
    </nav>
<header class="hero-section">
    <!-- Div untuk background image -->
    <div class="hero-bg"></div>
    <!-- Overlay -->
    <div class="hero-overlay"></div>
    <!-- Konten -->
    <div class="hero-content">
      <h1>Selamat Datang</h1>
      <p>Portal Belajar Pemrograman Modern</p>
    </div>
  </header>
    <main class="container">
        <div class="card-grid">
            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Mulai ngoding PHP nich</h3>
                <p>Belajar PHP dari dasar hingga mahir dengan panduan lengkap dan contoh kode nyata untuk pengembangan web modern.</p>
                <a href="#" class="btn btn-outline">Baca Selengkapnya</a>
            </article>

            <article class="card">
                <div class="card-icon">
                    <i class="fab fa-css3-alt"></i>
                </div>
                <h3>Jadi paham CSS dan JS</h3>
                <p>Kuasi teknologi front-end dengan mempelajari CSS3 modern dan JavaScript ES6+ untuk membuat website interaktif.</p>
                <a href="#" class="btn btn-outline">Baca Selengkapnya</a>
            </article>

            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Codeigniter asyik juga kok</h3>
                <p>Framework PHP Codeigniter yang powerful untuk membangun aplikasi web cepat dengan arsitektur MVC yang terstruktur.</p>
                <a href="#" class="btn btn-outline">Baca Selengkapnya</a>
            </article>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
            <p>&copy; <?= date('Y') ?> N4S. All rights reserved.</p>
            <p class="small">Dibuat dengan <i class="fas fa-heart"></i> untuk developer Indonesia</p>
        </div>
    </footer>

    <script src="<?= base_url('js/script.js') ?>"></script>
</body>
</html>