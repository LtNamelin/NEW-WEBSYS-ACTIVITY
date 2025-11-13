<?php
$session = session();
$user = $session->get('user');
?>
<aside class="admin-sidebar">
    <div class="sidebar-header">
        <h2>Admin Panel</h2>
    </div>

    <div class="profile-box">
        <?php $admin = session()->get('user'); ?>
        <div class="profile-name">
            <?= esc($admin['first_name'] . ' ' . $admin['last_name'] ?? '') ?>
        </div>
        <div class="profile-role">ADMIN</div>
    </div>

    <nav class="admin-nav">
        <?= view('components/buttons/buttonprimary', [
            'label' => 'Dashboard',
            'href' => './admindash',
            'active' => true
        ]) ?>

        <?= view('components/buttons/buttonprimary', [
            'label' => 'Inquiries',
            'href' => './inquiries'
        ]) ?>

        <?= view('components/buttons/buttonprimary', [
            'label' => 'Services',
            'href' => './services'
        ]) ?>

        <?= view('components/buttons/buttonprimary', [
            'label' => 'Accounts',
            'href' => './accounts'
        ]) ?>

        <!-- Logout Form -->
        <form action="./logout" method="post" style="margin-top: 12px;">
            <?= csrf_field() ?>
            <button type="submit" class="logout-btn">Logout</button>
        </form>

    </nav>
</aside>

<style>
    /* Fixed Sidebar - non-intrusive layout */
    .admin-sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 240px;
        background: linear-gradient(180deg, rgba(68, 39, 64, 0.95), rgba(42, 22, 40, 0.95));
        padding: 24px 18px;
        box-shadow: 4px 0 14px rgba(0, 0, 0, 0.4);
        display: flex;
        flex-direction: column;
        z-index: 1000;
    }

    .admin-sidebar .sidebar-header {
        color: #fff;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-align: center;
    }

    .admin-sidebar .profile-box {
        text-align: center;
        margin-bottom: 24px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding-bottom: 16px;
    }

    .admin-sidebar .profile-name {
        font-size: 1.1rem;
        font-weight: 700;
        color: #fff;
    }

    .admin-sidebar .profile-role {
        font-size: 0.8rem;
        color: #b8b8d1;
        margin-top: 4px;
    }

    .admin-sidebar .admin-nav {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 12px;
    }

    .admin-sidebar .admin-nav a {
        text-decoration: none;
    }

    .admin-sidebar .admin-nav .active {
        background: rgba(255, 255, 255, 0.15);
        font-weight: 600;
    }

    /* Logout button style */
    .logout-btn {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        cursor: pointer;
        background-color: #e04b4b;
        color: #fff;
        border: none;
        font-size: 0.95rem;
        transition: background 0.2s ease;
    }

    .logout-btn:hover {
        background-color: #c0392b;
    }

    /* Ensure the main content is not hidden under sidebar */
    main.admin-dashboard-page .admin-main {
        margin-left: 260px !important;
        padding: 36px;
        max-width: calc(100% - 260px);
    }
</style>