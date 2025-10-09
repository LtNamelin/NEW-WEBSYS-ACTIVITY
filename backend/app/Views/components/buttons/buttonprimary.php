<?php
$label = $label ?? 'Click Me';
?>

<button type="button" class="btn-primary">
    <?= esc($label) ?>
</button>

<style>
    .btn-primary {
        display: inline-block;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        text-align: center;
        border: none;
        background-color: #F55DC5;
        color: white;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-primary:hover {
        background-color: #c4459a;
        transform: scale(1.05);
    }

    .btn-primary:active {
        transform: scale(0.95);
    }
</style>