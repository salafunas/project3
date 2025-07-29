<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N4S - Blog</title>
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
                <li><a href="<?= base_url('post') ?>" class="active"><i class="fas fa-blog"></i> Blog</a></li>
                <li><a href="<?= base_url('kontak') ?>"><i class="fas fa-envelope"></i> Kontak</a></li>
                <li><a href="<?= base_url('faqs') ?>"><i class="fas fa-question-circle"></i> FAQ</a></li>
            <li><a href="<?= base_url('admin/post') ?>"><i class="fas fa-paper-plane"></i>mau post blog?</a></li>


            </ul>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <h1>Blog Kami</h1>
            <p>Artikel terbaru seputar pengembangan web</p>
        </div>
    </header>

    <main class="container">
        <div class="card-grid">
            <?php foreach ($posts as $post) : ?>
            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3><a href="/post/<?= $post['slug'] ?>"><?= $post['title'] ?></a></h3>
                <p><?= substr($post['content'], 0, 120) ?>...</p>
                <a href="/post/<?= $post['slug'] ?>" class="btn btn-outline">Baca Selengkapnya</a>
            </article>
            <?php endforeach ?>
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