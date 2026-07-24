<?php
$pageTitle = "Student Management";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Management | PAS ERP</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
        <div class="welcome-card">

    <h1>Student Management</h1>

    <p>
        Add, view, edit and delete student records from one place.
    </p>

</div>
<div class="stats-grid">

    <a href="../admin/add_student.php" class="stat-card">

        <i class="bi bi-person-plus-fill"></i>

        <h3>Add Student</h3>

        
    </a>

    <a href="../admin/view_students.php" class="stat-card">

        <i class="bi bi-people-fill"></i>

        <h3>View Students details</h3>

        

    </a>

    <a href="../admin/edit_student.php" class="stat-card">

        <i class="bi bi-pencil-square"></i>

        <h3>Edit Student</h3>

       

   

</a>

    </a>

    <a href="../admin/delete_student.php" class="stat-card">

        <i class="bi bi-trash-fill"></i>

        <h3>Delete Student</h3>

        

    </a>
    <a href="../admin/view_reports.php" class="stat-card">

    <i class="bi bi-file-earmark-bar-graph-fill"></i>

    <h3>View Reports</h3>
    </a>

</div>

            <!-- Cards will come here -->

        </section>

    </main>

</div>

<script src="../../assets/js/dashboard.js"></script>

</body>

</html>