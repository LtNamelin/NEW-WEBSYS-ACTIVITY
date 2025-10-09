<?php
$label = $label ?? 'Click Me';
?>

<button type="button" class="btn-disabled" disabled>
    <?= esc($label) ?>
</button>

<style>
    .btn-disabled {
        display: inline-block;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: bold;
        cursor: not-allowed;
        text-align: center;
        border: none;
        background-color: #888;
        color: #ccc;
        pointer-events: none;
        opacity: 0.7;
    }
</style>