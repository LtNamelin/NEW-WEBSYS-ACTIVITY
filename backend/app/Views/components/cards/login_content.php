<?php
$session = session();
$errors = $session->getFlashdata('errors') ?? [];
$old = $session->getFlashdata('old') ?? [];
?>

<main class="login-page">
    <?php
    ob_start();
    ?>
    <form class="space-y-6 mt-8" action="<?= base_url('/users/loginFunc') ?>" method="post" novalidate>
        <?= csrf_field() ?>

        <div class="form-group">
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Email"
                required
                value="<?= esc($old['email'] ?? '') ?>"
                aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>"
                aria-describedby="email-error">
            <?php if (!empty($errors['email'])): ?>
                <p id="email-error" class="error-text"><?= esc($errors['email']) ?></p>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Password"
                required
                aria-invalid="<?= isset($errors['password']) ? 'true' : 'false' ?>"
                aria-describedby="password-error">
            <?php if (!empty($errors['password'])): ?>
                <p id="password-error" class="error-text"><?= esc($errors['password']) ?></p>
            <?php endif; ?>
        </div>

        <?= view('components/buttons/buttonprimary', [
            'label' => 'Log-in',
            'type'  => 'submit'
        ]) ?>
    </form>

    <p class="signup-text">Don’t have an account? <a href="./signup">Sign up</a>.</p>

    <?php
    $content = ob_get_clean();

    echo view('components/cards/card', [
        'title'   => 'Log-in User',
        'content' => $content
    ]);
    ?>
</main>

<style>
    .login-page {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
        min-height: calc(100vh - 80px);
    }

    form input {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: none;
        margin-bottom: 10px;
    }

    form input:focus {
        outline: 2px solid #f39c12;
    }

    .error-text {
        color: #e74c3c;
        font-size: 0.9rem;
        margin-top: -5px;
        margin-bottom: 10px;
    }

    .signup-text {
        text-align: center;
        margin-top: 10px;
        font-size: 14px;
    }

    .signup-text a {
        color: #f39c12;
        text-decoration: none;
    }

    .signup-text a:hover {
        text-decoration: underline;
    }
</style>