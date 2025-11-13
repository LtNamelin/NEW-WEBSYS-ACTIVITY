<?php
$session = session();
$errors = $session->getFlashdata('errors') ?? [];
$old = $session->getFlashdata('old') ?? [];
$success = $session->getFlashdata('success') ?? '';
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

    .signup-page form input,
    .signup-page form select {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
    }

    .signup-page form input:focus,
    .signup-page form select:focus {
        outline: 2px solid #f39c12;
    }

    .btn-primary {
        width: 100%;
        margin-top: 15px;
        padding: 10px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        background-color: #F55DC5;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #e048b8;
    }

    .error-text {
        color: #e74c3c;
        font-size: 0.9rem;
        margin-top: -5px;
        margin-bottom: 10px;
    }

    .success-text {
        color: #27ae60;
        font-size: 0.95rem;
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

    <?php if ($success): ?>
        <p class="success-text"><?= esc($success) ?></p>
    <?php endif; ?>

    <form id="signupForm" action="<?= base_url('/signup') ?>" method="post" novalidate>
        <?= csrf_field() ?>

        <!-- First Name -->
        <input
            type="text"
            name="first_name"
            placeholder="First Name"
            required
            value="<?= esc($old['first_name'] ?? '') ?>">
        <?php if (!empty($errors['first_name'])): ?>
            <p class="error-text"><?= esc($errors['first_name']) ?></p>
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
            value="<?= esc($old['last_name'] ?? '') ?>">
        <?php if (!empty($errors['last_name'])): ?>
            <p class="error-text"><?= esc($errors['last_name']) ?></p>
        <?php endif; ?>

        <!-- Gender -->
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="male" <?= (isset($old['gender']) && $old['gender'] === 'male') ? 'selected' : '' ?>>Male</option>
            <option value="female" <?= (isset($old['gender']) && $old['gender'] === 'female') ? 'selected' : '' ?>>Female</option>
            <option value="other" <?= (isset($old['gender']) && $old['gender'] === 'other') ? 'selected' : '' ?>>Other</option>
        </select>
        <?php if (!empty($errors['gender'])): ?>
            <p class="error-text"><?= esc($errors['gender']) ?></p>
        <?php endif; ?>

        <!-- Email -->
        <input
            type="email"
            name="email"
            placeholder="E-mail Address"
            required
            value="<?= esc($old['email'] ?? '') ?>">
        <?php if (!empty($errors['email'])): ?>
            <p class="error-text"><?= esc($errors['email']) ?></p>
        <?php endif; ?>

        <!-- Password -->
        <input
            type="password"
            name="password"
            placeholder="Password"
            required>
        <?php if (!empty($errors['password'])): ?>
            <p class="error-text"><?= esc($errors['password']) ?></p>
        <?php endif; ?>

        <button type="submit" class="btn-primary">Create Account</button>
    </form>

    <p class="login-redirect">
        Already have an account? <a href="./login">Log in here!</a>.
    </p>

    <?php
    $content = ob_get_clean();
    echo view('components/cards/card', [
        'title' => 'Sign-up New User',
        'content' => $content
    ]);
    ?>
</main>