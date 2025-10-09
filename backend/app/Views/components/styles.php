<?php
// styles.php
?>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(to bottom, #2E1622, #85295A);
        color: white;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex: 1;
        padding: 2rem;
        max-width: 1000px;
        margin: 0 auto;
    }

    section {
        margin-bottom: 3rem;
    }

    h1,
    h2 {
        margin-bottom: 1rem;
    }

    /* Color System */
    .color-system {
        display: flex;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .color-block {
        text-align: center;
    }

    .color-swatch {
        width: 120px;
        height: 50px;
        border-radius: 8px;
        margin-bottom: 0.5rem;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    /* Buttons */
    .button-row {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .btn {
        padding: 0.5rem 1.2rem;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        font-weight: bold;
    }

    .btn-primary {
        background: #F55DC5;
        color: white;
    }

    .btn-secondary {
        background: #2E1622;
        color: white;
    }

    .btn-border {
        background: transparent;
        border: 2px solid #F55DC5;
        color: #F55DC5;
    }

    .btn-disabled {
        background: #777;
        color: #ccc;
        cursor: not-allowed;
    }

    /* Cards */
    .cards {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .card {
        flex: 1;
        min-width: 250px;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        padding: 1rem;
    }

    /* Logos */
    .logos {
        display: flex;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .logos img {
        width: 120px;
        height: auto;
        background: white;
        padding: 10px;
        border: 2px solid #fff;
    }

    .logo-circle {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        padding: 5px;
    }

    /* Header and Footer */
    header {
        background-color: #F55DC5;
        padding: 15px 0;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2rem;
    }

    .nav-center {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .nav-links {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 25px;
    }

    .nav-links li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .nav-links li a:hover {
        color: #2E1622;
    }

    .logo-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid white;
    }

    footer {
        background-color: #F55DC5;
        text-align: center;
        padding: 10px 0;
        font-weight: bold;
    }

    /* Styles for Roadmap */
    main h1 {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 2rem;
        font-family: 'Playfair Display', serif;
    }

    .card h2 {
        margin: 0 0 0.5rem 0;
        font-size: 1.3rem;
        font-family: 'Playfair Display', serif;
    }

    .card p {
        margin: 0 0 1rem 0;
        font-size: 0.95rem;
        line-height: 1.5;
    }

    .status {
        display: inline-block;
        padding: 0.4rem 1rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: bold;
        border: 1px solid rgba(255, 255, 255, 0.4);
        background: transparent;
    }

    .planned {
        color: #4da3ff;
        border-color: #4da3ff;
    }

    .in-progress {
        color: #5cd67d;
        border-color: #5cd67d;
    }

    .done {
        color: #00e6b8;
        border-color: #00e6b8;
    }

    .backlog {
        color: #bbbbbb;
        border-color: #bbbbbb;
    }

    /* Login Page */
    .login-page {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        /* vertical + horizontal center */
    }

    .card input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        display: block;
        /* force new line */
    }

    .card .btn {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        font-weight: bold;
        margin-top: 15px;
    }

    .login-page .card {
        width: 320px;
        text-align: center;
        padding: 30px;
    }
</style>