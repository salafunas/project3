<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="auth-container">
    <div class="auth-card">
        <div class="auth-card-header">
            <h2><?=lang('Auth.register')?></h2>
        </div>

        <?= view('App\Views\Auth\_message_block') ?>

        <form class="auth-form" action="<?= url_to('register') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="email"><?=lang('Auth.email')?></label>
                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                       name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                <small id="emailHelp" class="form-text"><?=lang('Auth.weNeverShare')?></small>
                <div class="invalid-feedback">
                    <?= session('errors.email') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="username"><?=lang('Auth.username')?></label>
                <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" 
                       name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                <div class="invalid-feedback">
                    <?= session('errors.username') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="password"><?=lang('Auth.password')?></label>
                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" 
                       placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                <div class="invalid-feedback">
                    <?= session('errors.password') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" 
                       placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                <div class="invalid-feedback">
                    <?= session('errors.pass_confirm') ?>
                </div>
            </div>

            <button type="submit" class="auth-btn"><?=lang('Auth.register')?></button>

            <div class="auth-divider"></div>

            <div class="auth-links">
                <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>