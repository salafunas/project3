<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N4S - FAQ</title>
    <link rel="stylesheet" href="<?= base_url('css1/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">N4S</a>
            <button class="navbar-toggler">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li><a href="<?= base_url() ?>"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="<?= base_url('about') ?>"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="<?= base_url('post') ?>"><i class="fas fa-blog"></i> Blog</a></li>
                <li><a href="<?= base_url('kontak') ?>"><i class="fas fa-envelope"></i> Kontak</a></li>
                <li><a href="<?= base_url('faqs') ?>" class="active"><i class="fas fa-question-circle"></i> FAQ</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <h1>Pertanyaan Umum</h1>
            <p>Temukan jawaban untuk pertanyaan yang sering diajukan</p>
        </div>
    </header>

    <main class="container">
        <div class="card-grid">
            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <h3>Bagaimana cara memulai belajar pemrograman web?</h3>
                <p>Mulailah dengan dasar-dasar HTML, CSS, dan JavaScript. Setelah itu pelajari PHP untuk backend development. Kami menyediakan materi step-by-step untuk pemula.</p>
                <button class="btn btn-outline">Lihat Tutorial</button>
            </article>

            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <h3>Apakah CodeIgniter cocok untuk pemula?</h3>
                <p>Sangat cocok! CodeIgniter memiliki kurva pembelajaran yang landai dibanding framework PHP lain. Dokumentasinya lengkap dan komunitasnya sangat membantu.</p>
                <button class="btn btn-outline">Pelajari CodeIgniter</button>
            </article>

            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <h3>Bagaimana cara berkontribusi ke proyek ini?</h3>
                <p>Anda bisa berkontribusi melalui GitHub repository kami. Fork project, buat perubahan, dan submit pull request. Kami sangat menghargai kontribusi Anda!</p>
                <a href="#" class="btn btn-outline">Ke GitHub</a>
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

    <script src="<?= base_url('js1/blog-detail.js') ?>"></script>
</body>
</html>