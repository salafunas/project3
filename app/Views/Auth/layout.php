<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Myth:Auth</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('css1/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css1/login.css') ?>">
    <style>
        body {
            padding-top: 5rem;
        }
    </style>

    <?= $this->renderSection('pageStyles') ?>
</head>

<body>

<?= view('App\Views\Auth\_navbar') ?>

<main role="main">
    <?= $this->renderSection('main') ?>
</main>

<!-- Full Bootstrap 5 (Latest) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('js/login.js') ?>" defer></script>


<?= $this->renderSection('pageScripts') ?>
</body>
</html>