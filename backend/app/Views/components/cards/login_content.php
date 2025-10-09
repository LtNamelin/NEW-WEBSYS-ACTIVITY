<?php
?>

<main class="login-page">
    <?php
    $content = '
            <form>
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                ' . view('components/buttons/buttonprimary', [
        'label' => 'Log-in',
        'type'  => 'submit'
    ]) . '
            </form>
        ';

    echo view('components/cards/card', [
        'title'   => 'Log-in User',
        'content' => $content
    ]);
    ?>
</main>