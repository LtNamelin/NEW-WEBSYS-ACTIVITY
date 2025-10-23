<?php
$session = session();
$errors = $session->getFlashdata('errors') ?? [];
$old = $session->getFlashdata('old') ?? [];
?>

<style>
    main {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
    }

    .signup-page .card {
        width: 380px;
        text-align: center;
    }

    .signup-page form input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
    }

    .signup-page form input:focus {
        outline: 2px solid #f39c12;
    }

    .signup-page .card .btn {
        width: 100%;
        margin-top: 15px;
    }

    .error-text {
        color: #e74c3c;
        font-size: 0.9rem;
        margin-top: -5px;
        margin-bottom: 10px;
    }

    .login-redirect {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
    }

    .login-redirect a {
        color: #f39c12;
        text-decoration: none;
    }

    .login-redirect a:hover {
        text-decoration: underline;
    }
</style>

<main class="signup-page">
    <?php ob_start(); ?>

    <form action="<?= base_url('/users/signupFunc') ?>" method="post" novalidate>
        <?= csrf_field() ?>

        <!-- First Name -->
        <input
            type="text"
            name="first_name"
            placeholder="First Name"
            required
            value="<?= esc($old['first_name'] ?? '') ?>"
            aria-invalid="<?= isset($errors['first_name']) ? 'true' : 'false' ?>"
            aria-describedby="first_name-error">
        <?php if (!empty($errors['first_name'])): ?>
            <p id="first_name-error" class="error-text"><?= esc($errors['first_name']) ?></p>
        <?php endif; ?>

        <!-- Middle Name (Optional) -->
        <input
            type="text"
            name="middle_name"
            placeholder="Middle Name (Optional)"
            value="<?= esc($old['middle_name'] ?? '') ?>">

        <!-- Last Name -->
        <input
            type="text"
            name="last_name"
            placeholder="Last Name"
            required
            value="<?= esc($old['last_name'] ?? '') ?>"
            aria-invalid="<?= isset($errors['last_name']) ? 'true' : 'false' ?>"
            aria-describedby="last_name-error">
        <?php if (!empty($errors['last_name'])): ?>
            <p id="last_name-error" class="error-text"><?= esc($errors['last_name']) ?></p>
        <?php endif; ?>

        <!-- Email -->
        <input
            type="email"
            name="email"
            placeholder="E-mail Address"
            required
            value="<?= esc($old['email'] ?? '') ?>"
            aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>"
            aria-describedby="email-error">
        <?php if (!empty($errors['email'])): ?>
            <p id="email-error" class="error-text"><?= esc($errors['email']) ?></p>
        <?php endif; ?>

        <!-- Password -->
        <input
            type="password"
            name="password"
            placeholder="Password"
            required
            aria-invalid="<?= isset($errors['password']) ? 'true' : 'false' ?>"
            aria-describedby="password-error">
        <?php if (!empty($errors['password'])): ?>
            <p id="password-error" class="error-text"><?= esc($errors['password']) ?></p>
        <?php endif; ?>

        <?= view('components/buttons/buttonprimary', [
            'label' => 'Create Account',
            'type'  => 'submit'
        ]) ?>
    </form>

    <p class="login-redirect">
        Already have an account? <a href="<?= base_url('/users/login') ?>">Log in here</a>.
    </p>

    <?php
    $content = ob_get_clean();
    echo view('components/cards/card', [
        'title'   => 'Sign-up New User',
        'content' => $content
    ]);
    ?>
</main>