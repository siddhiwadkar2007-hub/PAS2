<?php

session_start();

$pageTitle = "Create Practical";

include("../../config/database.php");

/* ==========================================
   SAVE PRACTICAL
========================================== */

if(isset($_POST['save_practical']))
{

    $practical_title = mysqli_real_escape_string($conn,$_POST['practical_title']);
    $practical_no    = mysqli_real_escape_string($conn,$_POST['practical_no']);
   

    $department      = mysqli_real_escape_string($conn,$_POST['department']);
    $year            = mysqli_real_escape_string($conn,$_POST['year']);
    $semester        = mysqli_real_escape_string($conn,$_POST['semester']);
    $division        = mysqli_real_escape_string($conn,$_POST['division']);
    $batch           = mysqli_real_escape_string($conn,$_POST['batch']);

    $subject         = mysqli_real_escape_string($conn,$_POST['subject']);
    $faculty_name = mysqli_real_escape_string($conn,$_POST['faculty_name']);

    $practical_date  = mysqli_real_escape_string($conn,$_POST['practical_date']);
    $start_time      = mysqli_real_escape_string($conn,$_POST['start_time']);
    $end_time        = mysqli_real_escape_string($conn,$_POST['end_time']);

    $total_marks     = mysqli_real_escape_string($conn,$_POST['total_marks']);
    $passing_marks   = mysqli_real_escape_string($conn,$_POST['passing_marks']);

    $academic_year   = mysqli_real_escape_string($conn,$_POST['academic_year']);

    /* Logged-in User */
    echo "<pre>";
print_r($_SESSION);
echo "</pre>";
exit();

    $created_by = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;

    $insert = mysqli_query($conn,"

    INSERT INTO practicals(

    practical_title,
    practical_no,
    department,
    year,
    semester,
    division,
    batch,
    subject,
    faculty_name,
    practical_date,
    start_time,
    end_time,
    total_marks,
    passing_marks,
    academic_year,
    created_by

)

   VALUES(

    '$practical_title',
    '$practical_no',
    
    '$department',
    '$year',
    '$semester',
    '$division',
    '$batch',
    '$subject',
    '$faculty_name',
    '$practical_date',
    '$start_time',
    '$end_time',
    '$total_marks',
    '$passing_marks',
    '$academic_year',
    '$created_by'

)

    ");

    if($insert)
    {

        echo "<script>

        alert('Practical Created Successfully');

        window.location='practical_history.php';

        </script>";

        exit();

    }

    else
    {

        echo "<script>

        alert('Database Error!');

        </script>";

    }

}

?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Create Practical</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet"
href="../../assets/css/dashboard.css">

</head>

<body>

<div class="dashboard-container">

    <?php include("../../includes/sidebar.php"); ?>

    <main class="main-content full">

        <?php include("../../includes/navbar.php"); ?>

        <section class="dashboard-content">

            <!-- ==========================================
                 Welcome Card
            ========================================== -->

            <div class="welcome-card">

                <h1>

                    <i class="bi bi-journal-code"></i>

                    Create Practical

                </h1>

                <p>

                    Create, schedule and assign practicals for students.

                </p>

            </div>

            <!-- ==========================================
                 Create Practical Form
            ========================================== -->

            <div class="erp-form-card">

                <form
                method="POST"
                action="">
<!-- ==========================================
     Practical Information
========================================== -->

<div class="form-section">

<h2>

<i class="bi bi-journal-bookmark-fill"></i>

Practical Information

</h2>

<div class="form-grid">

<div class="form-group">

<label>Practical Title *</label>

<input
type="text"
name="practical_title"
placeholder="Enter Practical Title"
required>

</div>

<div class="form-group">

<label>Practical Number *</label>

<input
type="number"
name="practical_no"
placeholder="Enter Practical Number"
required>

</div>


</div>

</div>

<!-- ==========================================
     Academic Information
========================================== -->

<div class="form-section">

<h2>

<i class="bi bi-mortarboard-fill"></i>

Academic Information

</h2>

<div class="form-grid">

<div class="form-group">

<label>Department *</label>

<select
name="department"
required>

<option value="">Select Department</option>

<option value="Computer Engineering">Computer Engineering</option>

<option value="Information Technology">Information Technology</option>

<option value="Electronics & Computer Engineering">Electronics & Computer Engineering</option>

<option value="Mechanical Engineering">Mechanical Engineering</option>

<option value="Civil Engineering">Civil Engineering</option>

</select>

</div>

<div class="form-group">

<label>Year *</label>

<select
name="year"
required>

<option value="">Select Year</option>

<option value="First Year">First Year</option>

<option value="Second Year">Second Year</option>

<option value="Third Year">Third Year</option>

<option value="Final Year">Final Year</option>

</select>

</div>

<div class="form-group">

<label>Semester *</label>

<select
name="semester"
required>

<option value="">Select Semester</option>

<option value="Semester I">Semester I</option>

<option value="Semester II">Semester II</option>

<option value="Semester III">Semester III</option>

<option value="Semester IV">Semester IV</option>

<option value="Semester V">Semester V</option>

<option value="Semester VI">Semester VI</option>

<option value="Semester VII">Semester VII</option>

<option value="Semester VIII">Semester VIII</option>

</select>

</div>

<div class="form-group">

<label>Division *</label>

<select
name="division"
required>

<option value="">Select Division</option>

<option value="A">A</option>

<option value="B">B</option>

<option value="C">C</option>

</select>

</div>

<div class="form-group">

<label>Batch *</label>

<select
name="batch"
required>

<option value="">Select Batch</option>

<option value="Batch A">Batch A</option>

<option value="Batch B">Batch B</option>

<option value="Batch C">Batch C</option>

<option value="Batch D">Batch D</option>

</select>

</div>

<div class="form-group">

<label>Academic Year *</label>

<input
type="text"
name="academic_year"
placeholder="Example : 2026-27"
required>

</div>

</div>

</div>
<!-- ==========================================
     Subject & Faculty
========================================== -->

<div class="form-section">

<h2>

<i class="bi bi-person-workspace"></i>

Subject & Faculty

</h2>

<div class="form-grid">

<div class="form-group">

<label>Subject *</label>

<input
type="text"
name="subject"
placeholder="Enter Subject Name"
required>

</div>

<div class="form-group">

<label>Faculty Name *</label>

<input
type="text"
name="faculty_name"
placeholder="Enter Faculty Name"
required>

</div>

</div>

</div>



<!-- ==========================================
     Practical Schedule
========================================== -->

<div class="form-section">

<h2>

<i class="bi bi-calendar-event-fill"></i>

Practical Schedule

</h2>

<div class="form-grid">

<div class="form-group">

<label>Practical Date *</label>

<input
type="date"
name="practical_date"
required>

</div>

<div class="form-group">

<label>Start Time *</label>

<input
type="time"
name="start_time"
required>

</div>

<div class="form-group">

<label>End Time *</label>

<input
type="time"
name="end_time"
required>

</div>

</div>

</div>

<!-- ==========================================
     Marks Information
========================================== -->

<div class="form-section">

<h2>

<i class="bi bi-award-fill"></i>

Marks Information

</h2>

<div class="form-grid">

<div class="form-group">

<label>Total Marks *</label>

<input
type="number"
name="total_marks"
placeholder="Enter Total Marks"
required>

</div>

<div class="form-group">

<label>Passing Marks *</label>

<input
type="number"
name="passing_marks"
placeholder="Enter Passing Marks"
required>

</div>

</div>

</div>

<!-- ==========================================
     Buttons
========================================== -->

<div class="button-group">

<button
type="submit"
name="save_practical"
class="save-btn">

<i class="bi bi-check-circle-fill"></i>

Save Practical

</button>

<a
href="all_practicals.php"
class="reset-btn">

<i class="bi bi-arrow-left-circle"></i>

Back

</a>

</div>

</form>

</div>

</section>

</main>

</div>

<script src="../../assets/js/dashboard.js"></script>

</body>

</html>