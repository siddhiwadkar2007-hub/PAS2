<?php
$pageTitle = "Student Reports";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Reports | PAS ERP</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet"
          href="../../assets/css/dashboard.css">

</head>

<body class="light-theme">

<div class="dashboard-container">

    <?php include("../../includes/sidebar.php"); ?>

    <main class="main-content full">

        <?php include("../../includes/navbar.php"); ?>

        <section class="dashboard-content">

            <div class="welcome-card">

                <h1>Student Reports</h1>

                <p>View attendance, marks and performance reports of students.</p>

            </div>

        </section>

    </main>

</div>

<script src="../../assets/js/dashboard.js"></script>

</body>
</html>