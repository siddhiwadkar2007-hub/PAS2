
<!-- ==========================================
     Sidebar - Practical Assessment System
========================================== -->
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<aside class="sidebar closed">

    <!-- Sidebar Logo -->
    <div class="sidebar-logo">

        <img src="/practical-assesment-system/assets/images/logos/logo.png"
     alt="PAS ERP Logo"
     class="logo">

        <div class="logo-text">
            <h2>PAS ERP</h2>
            <p>Practical Assessment System</p>
        </div>

    </div>

    <nav class="sidebar-menu">

    <!-- HOME -->
    <a href="../../modules/dashboard/admin_dashboard.php"
       class="<?= ($currentPage == 'admin_dashboard.php') ? 'active' : ''; ?>">
        <i class="bi bi-house-door-fill"></i>
        <span>Home</span>
    </a>

    <!-- USER MANAGEMENT -->
    <div class="menu-heading">
        <i class="bi bi-people-fill"></i>
        <span>User Management</span>
    </div>

     <a href="../admin/add_student.php">
        <i class="bi bi-person-plus-fill"></i>
        <span>Add User</span>
    </a>

    <a href="../../modules/admin/all_users.php"
   class="<?= ($currentPage == 'all_users.php') ? 'active' : ''; ?>">
    <i class="bi bi-list-ul"></i>
    <span>All Users</span>
</a>
    <!-- PRACTICALS -->
    <div class="menu-heading">
        <i class="bi bi-journal-bookmark-fill"></i>
        <span>Practicals</span>
    </div>

    <a href="../../modules/practical_management/create_practical.php">
        <i class="bi bi-plus-square-fill"></i>
        <span>Create Practical</span>
    </a>

    <a href="../../modules/practical_management/practical_history.php">
        <i class="bi bi-card-list"></i>
        <span>All Practicals</span>
    </a>

    <!-- REPORTS -->
    <div class="menu-heading">
        <i class="bi bi-file-earmark-text-fill"></i>
        <span>Reports</span>
    </div>

    <a href="../../modules/reports/final_marksheet.php">
        <i class="bi bi-award-fill"></i>
        <span>Marksheet</span>
    </a>

    <a href="../../modules/reports/experiment_report.php">
        <i class="bi bi-file-earmark-medical-fill"></i>
        <span>Experiment Report</span>
    </a>

    <!-- STATISTICS -->
    <div class="menu-heading">
        <i class="bi bi-graph-up-arrow"></i>
        <span>Statistics</span>
    </div>

    <a href="../../modules/dashboard/audit_log.php">
        <i class="bi bi-clock-history"></i>
        <span>Audit Log</span>
    </a>

    <!-- SETTINGS -->
    <a href="../../modules/dashboard/settings.php">
        <i class="bi bi-gear-fill"></i>
        <span>Settings</span>
    </a>

    <!-- LOGOUT -->
    <a href="../../modules/authentication/logout.php">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
    </a>

</nav>

   

</aside>