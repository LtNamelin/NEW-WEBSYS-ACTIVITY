<?php
// signup.php
$title = "Sign-up";
?>
<!DOCTYPE html>
<html lang="en">

<?= view('components/head'); ?>
<?= view('components/styles'); ?>

<body class="signup-page">
    <?= view('components/header'); ?>

    <!-- Sign-up content -->
    <?= view('components/cards/signup_content'); ?>

    <?= view('components/footer'); ?>
</body>

</html>