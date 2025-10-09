<?php
// moodboard.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mood Board</title>
    <?= view('components/styles'); ?>
</head>

<body>
    <!-- Header -->
    <?= view('components/header'); ?>

    <!-- Main -->
    <main>
        <h1>Mood Board</h1>
        <p>Visual identity samples for LtNamelin's Art Portfolio.</p>

        <!-- Color System -->
        <?= view('components/colorsystem'); ?>

        <!-- Typography -->
        <?= view('components/typography'); ?>

        <!-- Buttons -->
        <section>
            <h2>Buttons</h2>
            <div class="button-row">
                <?= view('components/buttons/buttonprimary') ?>
                <?= view('components/buttons/buttonsecondary') ?>
                <?= view('components/buttons/buttonborder') ?>
                <?= view('components/buttons/buttondisabled') ?>
            </div>
        </section>

        <!-- Cards -->
        <section>
            <h2>Card Sample</h2>
            <div class="cards">
                <?= view('components/cards/card', [
                    'title' => 'Artworks include multiple original works and fanart of multiple different franchises.',
                    'description' => 'Artworks'
                ]) ?>
                <?= view('components/cards/card_primary', [
                    'title' => 'Commission Info:',
                    'description' => 'Type of artwork, price, quantity.'
                ]) ?>
                <?= view('components/cards/card_secondary', [
                    'title' => '"Commission and give this artist all of your money now :3c."',
                    'description' => '— Adoring Fan',
                    'fontColor' => '#ffffffff'
                ]) ?>
            </div>
        </section>

        <!-- Logos -->
        <?= view('components/logos'); ?>

    </main>

    <!-- Footer -->
    <?= view('components/footer'); ?>
</body>

</html>