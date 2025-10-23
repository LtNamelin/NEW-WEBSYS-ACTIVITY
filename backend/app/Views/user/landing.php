<?php
$title = "Landing Page";
?>
<!DOCTYPE html>
<html lang="en">

<?= view('components/head'); ?>
<?= view('components/styles'); ?>

<body>
    <?= view('components/header'); ?>

    <main>
        <h1>Welcome to LtNamelin's Art Portfolio!</h1>

        <!-- Carousel -->
        <?= view('components/carousels/landing_carousel'); ?>

        <!-- Description Card -->
        <?= view('components/cards/landing_card'); ?>

        <!-- Description Card -->
        <?= view('components/cards/CTA'); ?>
    </main>

    <?= view('components/footer'); ?>
</body>

</html>