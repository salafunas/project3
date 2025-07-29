<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>N4S - Blog Detail</title>
  <link rel="stylesheet" href="<?= base_url('css1/blog-detail.css') ?>">
</head>

<body>
  <nav class="navbar">
    <div class="container">
      <a href="<?= base_url() ?>" class="navbar-brand">N4S</a>
      <button class="navbar-toggler">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="nav-menu">
        <li><a href="<?= base_url() ?>">Home</a></li>
        <li><a href="<?= base_url('about') ?>">About</a></li>
        <li><a href="<?= base_url('post') ?>" class="active">Blog</a></li>
        <li><a href="<?= base_url('kontak') ?>">Kontak</a></li>
        <li><a href="<?= base_url('faqs') ?>">FAQ</a></li>
      </ul>
    </div>
  </nav>

  <header class="hero-section">
    <div class="container">
      <h1>Blog Detail</h1>
    </div>
  </header>

  <main class="container">
    <div class="blog-content">
      <article class="card">
        <h5><?= $post['title'] ?></h5>
        <span><?= $post['author'] ?> | <?= $post['created_at'] ?></span>
        <p><?= $post['content'] ?></p>
      </article>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      &copy; <?= date('Y') ?> N4S. All rights reserved.
    </div>
  </footer>

  <script src="<?= base_url('js1/blog-detail.js') ?>"></script>
  <!-- Optional Font Awesome for icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>

</html>