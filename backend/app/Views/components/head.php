<?php
// head.php
?>

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? "My Website" ?></title>
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

        header {
            background-color: #F55DC5;
            padding: 15px 0;
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

        .logo-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
        }

        main {
            flex: 1;
            padding: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        main h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            font-family: 'Playfair Display', serif;
        }

        .roadmap {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            padding: 1rem 1.5rem;
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

        footer {
            background-color: #F55DC5;
            text-align: center;
            padding: 10px 0;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: bold;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.5);
            background: transparent;
            color: white;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>