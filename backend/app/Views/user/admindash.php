<?= view('components/head'); ?>
<?= view('components/styles'); ?>

<main class="admin-dashboard-page">
    <!-- Fixed Sidebar -->
    <?= view('components/sidebar'); ?>

    <!-- Main content -->
    <section class="admin-main">
        <div class="page-header">
            <h1>Accounts Management</h1>
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

            <!-- Create Account Button (using buttonprimary component) -->
            <div id="createAccountBtnWrapper" style="display:inline-block;">
                <?= view('components/buttons/buttonprimary', ['label' => 'Create Account']) ?>
            </div>
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
</main>

<!-- Signup Modal -->
<div id="signupModal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.65);
    justify-content:center; align-items:center; z-index:9999;">
    <div style="background:#1b1b1b; padding:20px; border-radius:10px; width:600px; max-width:90%; position:relative;">
        <button id="closeSignup" style="position:absolute; top:8px; right:12px; background:transparent; border:none; font-size:1.5rem; color:#fff; cursor:pointer;">×</button>
        <?= view('components/cards/signup_content'); ?>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const createBtnWrapper = document.getElementById('createAccountBtnWrapper');
        const openBtn = createBtnWrapper.querySelector('.btn-primary'); // finds the button inside the view
        const closeBtn = document.getElementById('closeSignup');
        const modal = document.getElementById('signupModal');

        if (openBtn) {
            openBtn.addEventListener('click', () => {
                modal.style.display = 'flex';
            });
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                modal.style.display = 'none';
            });
        }

        modal.addEventListener('click', e => {
            if (e.target === modal) modal.style.display = 'none';
        });
    });
</script>

<style>
    /* Layout adjustments */
    .admin-main {
        flex: 1;
        padding: 36px;
        margin-left: 260px;
    }

    .cards-row {
        display: flex;
        gap: 16px;
        margin-bottom: 20px;
    }

    .controls-row {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-bottom: 14px;
    }

    .search-input,
    .small-select {
        padding: 10px;
        border-radius: 6px;
        border: 1px solid rgba(255, 255, 255, 0.06);
        background: rgba(255, 255, 255, 0.02);
        color: #fff;
    }

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
</style>