<?php
// ========================================
// GFM Dashboard
// Practical Assessment System
// ========================================

/* ==========================================
   Temporary Data
   (Will come from MySQL later)
========================================== */

$gfmName = "Guardian Faculty Member";

$assignedStudents = 65;
$averageAttendance = "88%";
$pendingAssessments = 8;
$lowAttendance = 6;

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>GFM Dashboard | Practical Assessment System</title>

<!-- Bootstrap Icons -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">

<!-- Common Dashboard CSS -->
<link rel="stylesheet"
href="../../assets/css/dashboard.css">

</head>

<body class="light-theme">

<div class="dashboard-container">

    <!-- Sidebar -->
    <?php include("../../includes/sidebar_gfm.php"); ?>

    <!-- Main Content -->
    <main class="main-content full">

        <!-- Navbar -->
        <?php include("../../includes/navbar_gfm.php"); ?>

        <!-- Dashboard Content -->
        <section class="dashboard-content">

            <!-- Welcome Card -->

            <div class="welcome-card">

                <h1>Welcome 👋</h1>

                <p>

                    Monitor your assigned students, attendance,
                    assessments and academic activities.

                </p>

            </div>
            <!-- ==========================================
     GFM Statistics Cards
========================================== -->

<div class="stats-grid">

    <!-- Assigned Students -->

    <div class="stat-card">

        <div class="stat-icon blue">

            <i class="bi bi-people-fill"></i>

        </div>

        <div class="stat-details">

            <h2><?php echo $assignedStudents; ?></h2>

            <p>Assigned Students</p>

        </div>

    </div>

    <!-- Average Attendance -->

    <div class="stat-card">

        <div class="stat-icon green">

            <i class="bi bi-calendar-check-fill"></i>

        </div>

        <div class="stat-details">

            <h2><?php echo $averageAttendance; ?></h2>

            <p>Average Attendance</p>

        </div>

    </div>

    <!-- Pending Assessments -->

    <div class="stat-card">

        <div class="stat-icon orange">

            <i class="bi bi-clipboard-check-fill"></i>

        </div>

        <div class="stat-details">

            <h2><?php echo $pendingAssessments; ?></h2>

            <p>Pending Assessments</p>

        </div>

    </div>

    <!-- Low Attendance -->

    <div class="stat-card">

        <div class="stat-icon red">

            <i class="bi bi-exclamation-triangle-fill"></i>

        </div>

        <div class="stat-details">

            <h2><?php echo $lowAttendance; ?></h2>

            <p>Low Attendance</p>

        </div>

    </div>

</div>
<!-- ==========================================
     GFM Bottom Section
========================================== -->

<div class="dashboard-bottom">

    <!-- Announcements -->

    <div class="dashboard-box">

        <div class="box-header">

            <h3>

                <i class="bi bi-megaphone-fill"></i>

                Announcements

            </h3>

        </div>

        <div class="announcement-item">

            <div class="announcement-icon blue">

                <i class="bi bi-info-circle-fill"></i>

            </div>

            <div>

                <h4>Physics Practical Rescheduled</h4>

                <p>Tomorrow • Lab 2</p>

            </div>

        </div>

        <div class="announcement-item">

            <div class="announcement-icon green">

                <i class="bi bi-check-circle-fill"></i>

            </div>

            <div>

                <h4>Assessment Submission</h4>

                <p>Complete before Friday</p>

            </div>

        </div>

        <div class="announcement-item">

            <div class="announcement-icon orange">

                <i class="bi bi-exclamation-circle-fill"></i>

            </div>

            <div>

                <h4>Parent Meeting Notice</h4>

                <p>Saturday • Seminar Hall</p>

            </div>

        </div>

    </div>

    <!-- Recent Activities -->

    <div class="dashboard-box">

        <div class="box-header">

            <h3>

                <i class="bi bi-clock-history"></i>

                Recent Activities

            </h3>

        </div>

        <div class="announcement-item">

            <div class="announcement-icon blue">

                <i class="bi bi-calendar-check-fill"></i>

            </div>

            <div>

                <h4>Attendance Marked</h4>

                <p>FY ECE - Practical Batch A</p>

            </div>

        </div>

        <div class="announcement-item">

            <div class="announcement-icon green">

                <i class="bi bi-clipboard-check-fill"></i>

            </div>

            <div>

                <h4>Assessment Updated</h4>

                <p>C Programming Practical</p>

            </div>

        </div>

        <div class="announcement-item">

            <div class="announcement-icon orange">

                <i class="bi bi-file-earmark-text-fill"></i>

            </div>

            <div>

                <h4>Attendance Report Generated</h4>

                <p>SY ECE Division A</p>

            </div>

        </div>

    </div>

</div>