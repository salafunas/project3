<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="auth-container">
    <div class="auth-card">
        <div class="auth-card-header">
            <h2><?=lang('Auth.loginTitle')?></h2>
            <p>Welcome back! Please enter your credentials</p>
        </div>

        <?= view('App\Views\Auth\_message_block') ?>

        <form class="auth-form" action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>

            <?php if ($config->validFields === ['email']): ?>
                <div class="form-group">
                    <label for="login"><?=lang('Auth.email')?></label>
                    <div class="input-with-icon">
                        <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                               name="login" placeholder="<?=lang('Auth.email')?>">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                    </div>
                </div>
            <?php else: ?>
                <div class="form-group">
                    <label for="login"><?=lang('Auth.emailOrUsername')?></label>
                    <div class="input-with-icon">
                        <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                               name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="password"><?=lang('Auth.password')?></label>
                <div class="input-with-icon">
                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" 
                           placeholder="<?=lang('Auth.password')?>" id="password">
                    <i class="fas fa-lock"></i>
                    <span class="toggle-password" onclick="togglePassword()">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                <div class="invalid-feedback">
                    <?= session('errors.password') ?>
                </div>
            </div>

            <?php if ($config->allowRemembering): ?>
                <div class="form-group d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
                        <label class="form-check-label" for="remember"><?=lang('Auth.rememberMe')?></label>
                    </div>
                    <?php if ($config->activeResetter): ?>
                        <a href="<?= url_to('forgot') ?>" class="text-small forgot-password"><?=lang('Auth.forgotYourPassword')?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <button type="submit" class="auth-btn">
                <span><?=lang('Auth.loginAction')?></span>
            </button>

            <?php if ($config->allowRegistration || $config->activeResetter): ?>
                <div class="auth-links">
                    <?php if ($config->allowRegistration) : ?>
                        <p>Don't have an account? <a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="auth-divider">
                <span>OR</span>
            </div>

            <div class="social-login">
                <p class="text-center mb-3">Continue with</p>
                <div class="social-buttons">
                    <button type="button" class="social-btn google">
                        <i class="fab fa-google"></i> Google
                    </button>
                    <button type="button" class="social-btn facebook">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
function togglePassword() {
    const password = document.getElementById('password');
    const icon = document.querySelector('.toggle-password i');
    if (password.type === 'password') {
        password.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        password.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>

<?= $this->endSection() ?>