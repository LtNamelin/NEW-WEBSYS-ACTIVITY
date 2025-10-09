<?php
// roadmap.php
?>
<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => 'Roadmap']); ?>
<?= view('components/styles'); ?>

<body>
    <?= view('components/header'); ?>

    <!-- Main content -->
    <main>
        <h1>Roadmap</h1>

        <div class="roadmap">

            <?= view('components/cards/card', [
                'title' => 'CRUD Implementation on Services',
                'description' => 'Include the ability to Create, Read, Update, and Delete services on website (Add and remove artworks and manage commissions.)',
                'statusClass' => 'in-progress',
                'statusLabel' => 'In Progress'
            ]) ?>

            <?= view('components/cards/card', [
                'title' => 'Add Artworks Page',
                'description' => 'An online portfolio where I could add my artworks, it should have the ability to display thumbnails and full rendered images with the ability to add new and remove existing images.',
                'statusClass' => 'planned',
                'statusLabel' => 'Planned'
            ]) ?>

            <?= view('components/cards/card', [
                'title' => 'Add Commissions Page',
                'description' => 'An online commission sheet that would allow users to send me a personalized message, and choose a selection of what type of artworks they could commission (Sketch, full-body, Rendered, 2D, 3D, etc.).',
                'statusClass' => 'planned',
                'statusLabel' => 'Planned'
            ]) ?>

            <?= view('components/cards/card', [
                'title' => 'Update Landing Page',
                'description' => 'Update landing page with an introduction of who I am, and a showcase of some of my more well made artworks with the use of carousel.',
                'statusClass' => 'backlog',
                'statusLabel' => 'Backlog'
            ]) ?>

            <?= view('components/cards/card', [
                'title' => 'Ability to create User and Admin accounts',
                'description' => 'Add the ability to create and login user and admin accounts.',
                'statusClass' => 'planned',
                'statusLabel' => 'Planned'
            ]) ?>

            <?= view('components/cards/card', [
                'title' => 'Admin Functionality',
                'description' => 'Ability for admins to moderate website by adding and deleting images in artwork and view all sent in commissions.',
                'statusClass' => 'planned',
                'statusLabel' => 'Planned'
            ]) ?>

            <?= view('components/cards/card', [
                'title' => 'Users managing sent Commissions',
                'description' => 'Allow users the ability to check their sent in commission requests.',
                'statusClass' => 'backlog',
                'statusLabel' => 'Backlog'
            ]) ?>

            <?= view('components/cards/card', [
                'title' => 'Create Log-in and Sign-up page',
                'description' => 'Pages where users could log-in or sign-up either by regular users or admins.',
                'statusClass' => 'done',
                'statusLabel' => 'Done'
            ]) ?>

        </div>
    </main>

    <?= view('components/footer'); ?>
</body>

</html>