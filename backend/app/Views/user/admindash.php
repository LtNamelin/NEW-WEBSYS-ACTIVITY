<?= view('components/head'); ?>
<?= view('components/styles'); ?>

<main class="admin-dashboard-page">
    <div class="admin-layout">

        <!-- LEFT: Sidebar -->
        <aside class="admin-sidebar">
            <div class="profile-box">
                <div class="profile-name"><?= esc($admin['name'] ?? '') ?></div>
                <div class="profile-role">ADMIN</div>
            </div>

            <nav class="admin-nav">
                <?= view('components/buttons/buttonprimary', ['label' => 'Dashboard', 'href' => './admindash', 'active' => true]) ?>
                <?= view('components/buttons/buttonprimary', ['label' => 'Inquiries', 'href' => './inquiries']) ?>
                <?= view('components/buttons/buttonprimary', ['label' => 'Services', 'href' => './services']) ?>
                <?= view('components/buttons/buttonprimary', ['label' => 'Accounts', 'href' => './accounts']) ?>
            </nav>
        </aside>

        <!-- RIGHT: Main content -->
        <section class="admin-main">
            <div class="page-header">
                <h1>Accounts Management</h1>

                <form action="./logoutFunc" method="post" style="margin:0;">
                    <?= csrf_field() ?>
                    <?= view('components/buttons/buttonsecondary', ['label' => 'Logout', 'type' => 'submit']) ?>
                </form>
            </div>

            <!-- Summary cards -->
            <div class="cards-row">
                <?= view('components/cards/card', [
                    'title' => 'Total Accounts',
                    'content' => '<div class="card-value">—</div>'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Verified Accounts',
                    'content' => '<div class="card-value">—</div>'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Not Verified Accounts',
                    'content' => '<div class="card-value">—</div>'
                ]) ?>
            </div>

            <!-- Search / filters -->
            <div class="controls-row">
                <input class="search-input" type="text" placeholder="Search by name or email" />
                <select class="small-select">
                    <option>Sort — default</option>
                </select>
                <select class="small-select">
                    <option>Type — all</option>
                </select>
                <?= view('components/buttons/buttonborder', ['label' => 'Reset']) ?>
                <?= view('components/buttons/buttonprimary', ['label' => 'Create Account']) ?>
            </div>

            <!-- Table -->
            <div class="table-wrap">
                <table class="accounts-table" cellpadding="0" cellspacing="0" role="table">
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Email Activated</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- placeholder rows -->
                        <tr>
                            <td class="col-profile">—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td class="col-actions">
                                <button class="action-edit" title="Edit">✏️</button>
                                <button class="action-delete" title="Delete">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-profile">—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td class="col-actions">
                                <button class="action-edit" title="Edit">✏️</button>
                                <button class="action-delete" title="Delete">🗑️</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</main>

<?= view('components/footer'); ?>

<style>
    .admin-layout {
        display: flex;
        gap: 24px;
        max-width: 1200px;
        margin: 36px auto;
        align-items: flex-start;
    }

    /* Sidebar */
    .admin-sidebar {
        width: 220px;
        background: rgba(255, 255, 255, 0.03);
        padding: 18px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
    }

    .profile-box {
        padding: 10px 6px;
        margin-bottom: 16px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.03);
    }

    .profile-name {
        font-weight: 700;
        font-size: 1.05rem;
    }

    .profile-role {
        font-size: 0.75rem;
        color: #cfc9d0;
        margin-top: 6px;
    }

    .admin-nav {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    /* Main */
    .admin-main {
        flex: 1;
        min-width: 0;
    }

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 18px;
    }

    .page-header h1 {
        font-size: 2rem;
        margin: 0;
    }

    /* Cards */
    .cards-row {
        display: flex;
        gap: 16px;
        margin-bottom: 20px;
    }

    .cards-row>.card {
        flex: 1;
        min-height: 72px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 18px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }

    .card-value {
        font-size: 1.5rem;
        font-weight: 700;
    }

    /* Controls */
    .controls-row {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-bottom: 14px;
    }

    .search-input {
        flex: 1;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid rgba(255, 255, 255, 0.06);
        background: rgba(255, 255, 255, 0.02);
        color: #fff;
    }

    .small-select {
        padding: 8px;
        border-radius: 6px;
        background: rgba(255, 255, 255, 0.02);
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.06);
    }

    /* Table */
    .table-wrap {
        background: rgba(0, 0, 0, 0.25);
        border-radius: 8px;
        padding: 12px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.25);
    }

    .accounts-table {
        width: 100%;
        border-collapse: collapse;
        color: #fff;
    }

    .accounts-table thead th {
        text-align: left;
        padding: 10px;
        background: rgba(255, 255, 255, 0.03);
        color: #e6dfe6;
    }

    .accounts-table tbody td {
        padding: 12px;
        border-top: 1px solid rgba(255, 255, 255, 0.03);
    }

    .col-profile {
        width: 70px;
    }

    /* Actions */
    .col-actions button {
        margin-left: 6px;
        border: 0;
        padding: 6px;
        border-radius: 6px;
        cursor: pointer;
    }

    .action-edit {
        background: #f6c85f;
    }

    .action-delete {
        background: #e04b4b;
        color: #fff;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .admin-layout {
            flex-direction: column;
            padding: 20px;
        }

        .cards-row {
            flex-direction: column;
        }
    }
</style>