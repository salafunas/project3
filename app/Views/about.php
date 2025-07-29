<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N4S - About</title>
    <link rel="stylesheet" href="<?= base_url('css1/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-bg {
            background-image: url('<?= base_url('images/bg-about.jpg') ?>');
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
                <li><a href="<?= base_url() ?>"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="<?= base_url('about') ?>" class="active"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="<?= base_url('post') ?>"><i class="fas fa-blog"></i> Blog</a></li>
                <li><a href="<?= base_url('kontak') ?>"><i class="fas fa-envelope"></i> Kontak</a></li>
                <li><a href="<?= base_url('faqs') ?>"><i class="fas fa-question-circle"></i> FAQ</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero-section">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Tentang Saya</h1>
            <p>Mengenal lebih dekat dengan tim kami</p>
        </div>
    </header>

    <main class="container">
        <div class="card-grid">
            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-user"></i>
                </div>
                <h3>Siapa Aku</h3>
                <p>Saya Salafunas Saleh, mahasiswa Sistem Informasi UNUSIA Jakarta Pusat. Saya suka ngoding dan bermain game, tertarik pada dunia teknologi dan pengembangan sistem.</p>
            </article>

            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3>Bisa Apa Aku</h3>
                <p>Sayas menguasai berbagai teknologi web modern termasuk PHP, JavaScript, CSS, dan berbagai framework terkini untuk pengembangan aplikasi web.</p>
            </article>

            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Bagaimana Aku</h3>
                <p>Dengan pendekatan belajar berbasis proyek, kami membantu developer pemula untuk memahami konsep fundamental sambil membangun aplikasi nyata.</p>
            </article>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="social-links">
                <a href="https://www.linkedin.com/in/salafunas-saleh-103906375/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                <a href="https://x.com/Salafunas_" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com/salafunas_" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/salafunas" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
            </div>
            <p>&copy; <?= date('Y') ?> N4S. All rights reserved.</p>
        </div>
    </footer>

    <script src="<?= base_url('js1/blog-detail.js') ?>"></script>
</body>

</html>