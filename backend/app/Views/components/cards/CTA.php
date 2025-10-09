<?php

$content = <<<HTML
<div style="text-align:center;">
    <img src="images/logo2.png" alt="Icon" class="spinning-logo">

    <p>Interested in working with me? <br>My commissions and contacts are open!</p>

    <p><br><br> Email: LTNamelinBus@gmail.com<br></p>
    <a href="./commissions" class="white-link">Commission Info</a>
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

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .spinning-logo {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        margin-bottom: 15px;
        object-fit: cover;
        animation: spin 10s linear infinite;
    }

    .white-link {
        color: white;
        text-decoration: none;
    }

    .white-link:hover {
        text-decoration: underline;/
    }
</style>

<?php
echo view('components/cards/card', compact('content', 'title', 'description', 'statusClass'));
