<?php
$label = $label ?? 'Click Me';
?>

<button type="button" class="btn-bordered">
    <?= esc($label) ?>
</button>

<style>
    .btn-bordered {
        display: inline-block;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        text-align: center;
        border: 2px solid white;
        background-color: transparent;
        color: white;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-bordered:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transform: scale(1.05);
    }

    .btn-bordered:active {
        transform: scale(0.95);
    }
</style>