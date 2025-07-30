<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <h2>Login</h2>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif ?>
            
            <form action="<?= base_url('login') ?>" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
            
            <p>Don't have an account? <a href="<?= base_url('register') ?>">Register here</a></p>
        </div>
    </div>
</body>
</html>