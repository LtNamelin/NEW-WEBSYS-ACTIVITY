<?php
$label = $label ?? 'Click Me';
?>

<button type="button" class="btn-secondary">
    <?= esc($label) ?>
</button>

<style>
    .btn-secondary {
        display: inline-block;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        text-align: center;
        border: none;
        background-color: #2E1622;
        color: white;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-secondary:hover {
        background-color: #441a33;
        transform: scale(1.05);
    }

    .btn-secondary:active {
        transform: scale(0.95);
    }
</style>