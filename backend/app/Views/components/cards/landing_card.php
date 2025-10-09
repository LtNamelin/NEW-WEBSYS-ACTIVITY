<?php

$content = <<<HTML
<div style="text-align:center;">
    <img src="images/descicon.png" alt="Icon" 
        style="width: 120px; height: 120px; border-radius:50%; margin-bottom:15px; object-fit:cover;">
    <p>Hello there and welcome to my website!<br>
    My name is Namelin, a digital illustrator with years of experience and have skills in Character Design, Background Art, 3D art, and currently studying programming!<br><br>
    I have experience working on multiple different collaborative artistic projects with different artists and have done commissions for multiple clients over the years.</p>

    <p><br><br> Social Media:</p>
    <a href="https://x.com/LtNamelin" target="_blank" rel="noopener noreferrer">
        <img src="images/x_logo.png" alt="X Icon"
            style="width: 60px; height: 60px; border-radius:50%; margin-bottom:15px; object-fit:cover;">
    </a>
</div>
HTML;

$title = '';
$description = '';
$statusClass = 'fixed-width';
?>

<style>
    .card.fixed-width {
        width: 400px;
        margin: 2rem auto;
    }
</style>

<?php
// Render the reusable card template
echo view('components/cards/card', compact('content', 'title', 'description', 'statusClass'));
