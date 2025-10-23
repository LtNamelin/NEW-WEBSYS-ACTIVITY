<?php // header.php 
?>
<header>
    <nav class="navbar">
        <!-- Left: Logo -->
        <a href="https://x.com/LtNamelin" target="_blank" rel="noopener noreferrer">
            <img src="<?= ('images/logo.png') ?>" alt="Logo" class="logo-img">
        </a>

        <!-- Center: Navigation Links -->
        <div class="nav-center">
            <ul class="nav-links">
                <li><a href="./">Home</a></li>
                <li><a href="./artworks">Artworks</a></li>
                <li><a href="./commissions">Commissions</a></li>
            </ul>
        </div>

        <!-- Right: Dropdown Menu -->
        <div class="dropdown">
            <button class="dropbtn">Account ▾</button>
            <div class="dropdown-content">
                <a href="./login">Log-in</a>
                <a href="./signup">Sign-up</a>
                <a href="./account">My Account</a>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Basic Navbar Layout */
    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
    }

    .logo-img {
        height: 50px;
    }

    /* Center Nav Links */
    .nav-center ul {
        list-style: none;
        display: flex;
        gap: 20px;
        margin: 0;
        padding: 0;
    }

    .nav-center a {
        text-decoration: none;
        color: #fff;
        font-weight: 500;
    }

    .nav-center a:hover {
        color: #f39c12;
    }

    /* Dropdown Menu Styles */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {
        background-color: #222;
        color: white;
        padding: 8px 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .dropbtn:hover {
        background-color: #333;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #222;
        min-width: 160px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
        z-index: 1;
        border-radius: 6px;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #444;
    }

    /* Show dropdown on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>