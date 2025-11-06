<?php
?>

<style>
    main {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .signup-page .card {
        width: 360px;
        text-align: center;
    }

    .signup-page .card input {
        width: 100%;
        padding: 5px;
        margin: 10px 0;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        display: block;
    }

    .signup-page .card .btn {
        width: 100%;
        margin-top: 15px;
    }
</style>

<main>
    <?php
    $content = '
            <form>
                <input type="text" placeholder="E-mail Account" required>
                <input type="text" placeholder="First Name" required>
                <input type="text" placeholder="Middle Name (Optional)" optional>
                <input type="text" placeholder="Last Name" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Re-Enter Password" required>
                ' . view('components/buttons/buttonprimary', [
        'label' => 'Create User',
        'type'  => 'submit'
    ]) . '
            </form>
        ';

    echo view('components/cards/card', [
        'title'   => 'Sign-up New User',
        'content' => $content
    ]);
    ?>
</main>