<?php
?>
<div class="card <?= $statusClass ?? '' ?>">
    <?php if (!empty($title)): ?>
        <h2><?= $title ?></h2>
    <?php endif; ?>

    <?php if (!empty($description)): ?>
        <p><?= $description ?></p>
    <?php endif; ?>

    <?php if (!empty($statusLabel)): ?>
        <span class="status <?= $statusClass ?? '' ?>"><?= $statusLabel ?></span>
    <?php endif; ?>

    <?php if (!empty($content)): ?>
        <div class="card-content">
            <?= $content ?>
        </div>
    <?php endif; ?>
</div>