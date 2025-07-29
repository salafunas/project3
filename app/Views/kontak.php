<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N4S - Kontak</title>
    <link rel="stylesheet" href="<?= base_url('css1/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-bg {
            background-image: url('<?= base_url('images/bg-kontak.png') ?>');
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
                <li><a href="<?= base_url('about') ?>"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="<?= base_url('post') ?>"><i class="fas fa-blog"></i> Blog</a></li>
                <li><a href="<?= base_url('kontak') ?>" class="active"><i class="fas fa-envelope"></i> Kontak</a></li>
                <li><a href="<?= base_url('faqs') ?>"><i class="fas fa-question-circle"></i> FAQ</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero-section">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Hubungi Saya jika Perlu</h1>
            <p>Saya selalu senang mendengar dari Anda</p>
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
                <p>salafunassaleh123@gmail.com</p>
            </article>

            <article class="card">
                <div class="card-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3>Telepon</h3>
                <p>+62 577 0901 957</p>
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

    <a href="https://www.linkedin.com/in/salafunas-saleh-103906375/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
    <a href="https://x.com/Salafunas_" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
    <a href="https://instagram.com/salafunas_" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
    <a href="https://github.com/salafunas" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>

    <script src="<?= base_url('js1/blog-detail.js') ?>"></script>
</body>

</html>