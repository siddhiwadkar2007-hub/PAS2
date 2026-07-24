<?php
// ========================================
// Student Dashboard
// Practical Assessment System
// ========================================

/* ==========================================
   Temporary Student Data
   (Will come from MySQL later)
========================================== */

$studentName = "Student";

$totalPracticals = 0;
$completedPracticals = 0;
$pendingPracticals = 0;
$attendancePercentage = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Student Dashboard | Practical Assessment System</title>

<!-- Bootstrap Icons -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">

<!-- Common Dashboard CSS -->
<link rel="stylesheet"
href="../../assets/css/dashboard.css">

<!-- Student Dashboard CSS -->
<link rel="stylesheet"
href="../../assets/css/student_dashboard.css">

</head>

<body class="light-theme">

<div class="dashboard-container">

    <!-- Sidebar -->
    <?php include("../../includes/sidebar_student.php"); ?>

    <!-- Main Content -->
    <main class="main-content full">

        <!-- Navbar -->
        <?php include("../../includes/navbar_student.php"); ?>

        <!-- Dashboard Content -->

        <section class="dashboard-content">

            <!-- Welcome Card -->

            <div class="welcome-card">

                <h1>Welcome👋</h1>

                <p>

                    Stay updated with your practical schedule,
                    attendance and assessments.

                </p>

            </div>
            <!-- ==========================================
     Student Dashboard Modules
========================================== -->

<div class="student-grid">

    <!-- Attendance -->

    <a href="/practical-assesment-system/modules/attendance/view_attendance.php" class="student-card">

        <div class="student-icon">
            <i class="bi bi-calendar-check-fill"></i>
        </div>

        <h3>Attendance</h3>

        <p>Check your attendance details.</p>

    </a>

    

    <!-- Study Material -->

    <a href="../study_material/student_material.php" class="student-card">

        <div class="student-icon">
            <i class="bi bi-book-fill"></i>
        </div>

        <h3>Study Material</h3>

        <p>View notes and practical manuals.</p>

    </a>

    <!-- My Timetable -->

    <a href="../timetable/student_timetable.php" class="student-card">

        <div class="student-icon">
            <i class="bi bi-table"></i>
        </div>

        <h3>My Timetable</h3>

        <p>View your practical timetable.</p>

    </a>

</div>
<div class="dashboard-bottom">

    <!-- Announcements -->

    <div class="dashboard-box">

        <div class="announcement-content">

            <h3>
                <i class="bi bi-megaphone-fill"></i>
                Announcements
            </h3>

        </div>

        <div class="announcement-item">

            <div class="announcement-icon blue">
                <i class="bi bi-info-circle-fill"></i>
            </div>

            <div class="announcement-content">

                <h4>Physics Practical Shifted</h4>

                <p>Tomorrow • Lab 2</p>

            </div>

        </div>

        <div class="announcement-item">

            <div class="announcement-icon green">
                <i class="bi bi-check-circle-fill"></i>
            </div>

            <div class="announcement-content">

                <h4>C Programming Viva</h4>

                <p>Friday • 10:00 AM</p>

            </div>

        </div>

        <div class="announcement-item">

            <div class="announcement-icon orange">
                <i class="bi bi-exclamation-circle-fill"></i>
            </div>

            <div class="announcement-content">

                <h4>Journal Submission</h4>

                <p>Submit before Friday</p>

            </div>

        </div>

    </div>


    <!-- Upcoming Deadlines -->

    <div class="dashboard-box">

        <div class="box-header">

    <h3>
        <i class="bi bi-megaphone-fill"></i>
        upcoming Deadlines
    </h3>

    <a href="#">View All</a>

</div>

        <div class="deadline-item">

            <div class="deadline-date">

                28

                <span>Jul</span>

            </div>

            <div>

                <h4>Physics Practical File</h4>

                <p>Practical</p>

            </div>

        </div>

        <div class="deadline-item">

            <div class="deadline-date">

                30

                <span>Jul</span>

            </div>

            <div>

                <h4>C Programming Journal</h4>

                <p>Journal</p>

            </div>

        </div>

        <div class="deadline-item">

            <div class="deadline-date">

                02

                <span>Aug</span>

            </div>

            <div>

                <h4>Graphics Assignment</h4>

                <p>Assignment</p>

            </div>

        </div>

    </div>

</div>

     

            

   

        </section>

    </main>

</div>

<script src="../../assets/js/dashboard.js"></script>

<script src="../../assets/js/student_dashboard.js"></script>

</body>

</html>