<!-- ==========================================
     Student Sidebar - Practical Assessment System
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

    <!-- Sidebar Menu -->
    <nav class="sidebar-menu">

        <!-- Dashboard -->
        <a href="../../modules/dashboard/student_dashboard.php"
           class="<?= ($currentPage == 'student_dashboard.php') ? 'active' : ''; ?>">
            <i class="bi bi-house-door-fill"></i>
            <span>Home</span>
        </a>

        <!-- Practicals -->
        <a href="../../modules/student/practicals.php"
           class="<?= ($currentPage == 'practicals.php') ? 'active' : ''; ?>">
            <i class="bi bi-journal-code"></i>
            <span>Practicals</span>
        </a>

        <!-- Assessments -->
        <a href="../../modules/student/assessments.php"
           class="<?= ($currentPage == 'assessments.php') ? 'active' : ''; ?>">
            <i class="bi bi-clipboard-check-fill"></i>
            <span>Assessments</span>
        </a>

        <!-- Schedule -->
        <a href="../../modules/student/schedule.php"
           class="<?= ($currentPage == 'schedule.php') ? 'active' : ''; ?>">
            <i class="bi bi-calendar-week-fill"></i>
            <span>Schedule</span>
        </a>

        <!-- Attendance -->
        <a href="../../modules/student/attendance.php"
           class="<?= ($currentPage == 'attendance.php') ? 'active' : ''; ?>">
            <i class="bi bi-calendar-check-fill"></i>
            <span>Attendance</span>
        </a>

        <!-- Settings -->
        <a href="../../modules/student/settings.php"
           class="<?= ($currentPage == 'settings.php') ? 'active' : ''; ?>">
            <i class="bi bi-gear-fill"></i>
            <span>Settings</span>
        </a>

        <!-- Logout -->
        <a href="../../modules/authentication/logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>

    </nav>

</aside>