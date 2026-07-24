<?php
// ========================================
// Admin Dashboard
// Practical Assessment System
// ========================================

/* ==========================================
   Temporary Dashboard Data
   (Will come from MySQL later)
========================================== */

$totalStudents = 0;
$totalFaculty = 0;
$totalPracticals = 0;
$totalAssessments = 0;

$totalScheduled = 0;
$completedPracticals = 0;
$ongoingPracticals = 0;
$pendingPracticals = 0;
$completionRate = ($totalScheduled > 0)
    ? round(($completedPracticals / $totalScheduled) * 100)
    : 0;



$adminName = "Administrator";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | Practical Assessment System</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- Dashboard CSS -->
    <link rel="stylesheet"
          href="../../assets/css/dashboard.css">

</head>

<body class="light-theme">

<div class="dashboard-container">

    <!-- Sidebar -->
    <?php include("../../includes/sidebar.php"); ?>

    <!-- Main Content -->
    <main class="main-content full">

        <!-- Navbar -->
        <?php include("../../includes/navbar.php"); ?>

        <!-- Dashboard Content -->

        <section class="dashboard-content">

            <!-- Welcome -->

         <div class="welcome-card">

    

    
    <p> Welcome</p>
         <p>
        Manage students, faculty, practicals, assessments,
        attendance and reports from one place.
    </p>
    

</div>

            <!-- Statistics Cards -->

            <div class="stats-grid">

                <div class="stat-card">

                    <h3>Total Students</h3>

                     <h2><?= $totalStudents; ?></h2>

                </div>

                <div class="stat-card">

                    <h3>Total Faculty</h3>

                    <h2><?= $totalFaculty; ?></h2>
                </div>

                <div class="stat-card">

                    <h3>Total Practicals</h3>

                    <h2><?= $totalPracticals; ?></h2>

                </div>

                <div class="stat-card">

                    <h3>Total Assessments</h3>

                    <h2><?= $totalAssessments; ?></h2>

                </div>

                

            </div>
            <!-- ==========================================
     Today's Practical Status
========================================== -->

<div class="dashboard-bottom">

    <div class="today-status-card">

    <div class="today-header">

        <div>

            <h2>Today's Practical Status</h2>

        </div>

        <div class="today-date">

            <i class="bi bi-calendar-event"></i>

            Today

        </div>

    </div>

    <div class="status-row">

        <span>
            <i class="bi bi-journal-bookmark-fill text-blue"></i>

            Total Scheduled

        </span>

        <strong><?= $totalScheduled ?></strong>

    </div>

    <div class="status-row">

        <span>

            <i class="bi bi-check-circle-fill text-green"></i>

            Completed

        </span>

        <strong><?= $completedPracticals ?></strong>

    </div>

    <div class="status-row">

        <span>

            <i class="bi bi-play-circle-fill text-orange"></i>

            Ongoing

        </span>

        <strong><?= $ongoingPracticals ?></strong>

    </div>

    <div class="status-row">

        <span>

            <i class="bi bi-clock-fill text-red"></i>

            Pending

        </span>

        <strong><?= $pendingPracticals ?></strong>

    </div>

    <div class="completion">

        <div class="completion-header">

            <span>Completion Rate</span>

            <strong><?= $completionRate ?>%</strong>

        </div>

        <div class="progress-bar">

            <div class="progress-fill"

                 style="width:<?= $completionRate ?>%;">

            </div>

        </div>

    </div>

</div>
<div class="recent-card">

    <div class="recent-header">
        <h2>Recent Activities</h2>
    </div>

    <div class="activity-item">
        <i class="bi bi-person-plus-fill"></i>

        <div>
            <h4>New Student Added</h4>
            <p>No recent activity</p>
        </div>
    </div>

    <div class="activity-item">
        <i class="bi bi-calendar-check"></i>

        <div>
            <h4>Attendance Updated</h4>
            <p>No recent activity</p>
        </div>
    </div>

    <div class="activity-item">
        <i class="bi bi-journal-check"></i>

        <div>
            <h4>Practical Completed</h4>
            <p>No recent activity</p>
        </div>
    </div>

</div>

</div>


        </section>

    </main>

</div>

<script src="../../assets/js/dashboard.js"></script>

</body>

</html>