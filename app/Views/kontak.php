<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N4S - Kontak</title>
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
                <li><a href="<?= base_url('kontak') ?>" class="active"><i class="fas fa-envelope"></i> Kontak</a></li>
                <li><a href="<?= base_url('faqs') ?>"><i class="fas fa-question-circle"></i> FAQ</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <h1>Hubungi Kami</h1>
            <p>Kami selalu senang mendengar dari Anda</p>
        </div>
    </header>

    <main class="container">
        <div class="card-grid">
            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Alamat</h3>
                <p>Jl. Teknologi No. 123, Kota Digital, Indonesia</p>
            </article>

            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email</h3>
                <p>info@n4s.dev</p>
            </article>

            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3>Telepon</h3>
                <p>+62 123 4567 890</p>
            </article>
        </div>

        <div class="card" style="grid-column: 1 / -1; margin-top: 2rem;">
            <div class="card-body">
                <h3>Kirim Pesan</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" rows="5" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim</button>
                </form>
            </div>
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
        </div>
    </footer>

    <script src="<?= base_url('js1/blog-detail.js') ?>"></script>
</body>
</html>