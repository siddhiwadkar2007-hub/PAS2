<?php

$pageTitle = "Add User";
include("../../config/database.php");

/* ==========================================
   SAVE USER
========================================== */

if(isset($_POST['save_user']))
{

    $full_name = mysqli_real_escape_string($conn,$_POST['full_name']);
    $mobile    = mysqli_real_escape_string($conn,$_POST['mobile']);
    $email     = mysqli_real_escape_string($conn,$_POST['email']);

    $role      = mysqli_real_escape_string($conn,$_POST['role']);

    // Automatically Active
    $status = "Active";

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirm  = mysqli_real_escape_string($conn,$_POST['confirm_password']);

    if($password != $confirm)
    {

        echo "<script>
        alert('Password and Confirm Password do not match');
        </script>";

    }
    else
    {

        /* Insert Common User */

        $sql = "INSERT INTO users
        (
            full_name,
            mobile,
            email,
            role,
            status,
            username,
            password
        )

        VALUES
        (
            '$full_name',
            '$mobile',
            '$email',
            '$role',
            '$status',
            '$username',
            '$password'
        )";

        if(mysqli_query($conn,$sql))
        {

            $user_id = mysqli_insert_id($conn);

            /* ---------------- Student ---------------- */

            if($role=="Student")
            {

                $zprn       = mysqli_real_escape_string($conn,$_POST['zprn']);
                $roll_no    = mysqli_real_escape_string($conn,$_POST['roll_no']);
                $department = mysqli_real_escape_string($conn,$_POST['student_department']);
                $year       = mysqli_real_escape_string($conn,$_POST['year']);
                $semester   = mysqli_real_escape_string($conn,$_POST['semester']);
                $division   = mysqli_real_escape_string($conn,$_POST['division']);

                mysqli_query($conn,"
                INSERT INTO students
                (
                    user_id,
                    zprn,
                    roll_no,
                    department,
                    year,
                    semester,
                    division
                )

                VALUES
                (
                    '$user_id',
                    '$zprn',
                    '$roll_no',
                    '$department',
                    '$year',
                    '$semester',
                    '$division'
                )");

            }

            /* ---------------- Faculty ---------------- */

            else if($role=="Faculty" || $role=="HOD" || $role=="GFM")
            {

                $employee_id  = mysqli_real_escape_string($conn,$_POST['employee_id']);
                $department   = mysqli_real_escape_string($conn,$_POST['faculty_department']);
                $designation  = mysqli_real_escape_string($conn,$_POST['designation']);
                $qualification= mysqli_real_escape_string($conn,$_POST['qualification']);
                $joining_date = mysqli_real_escape_string($conn,$_POST['joining_date']);

                mysqli_query($conn,"
                INSERT INTO faculty
                (
                    user_id,
                    employee_id,
                    department,
                    designation,
                    qualification,
                    joining_date
                )

                VALUES
                (
                    '$user_id',
                    '$employee_id',
                    '$department',
                    '$designation',
                    '$qualification',
                    '$joining_date'
                )");

            }

            /* ---------------- Parent ---------------- */

            else if($role=="Parent")
            {

                $student_zprn = mysqli_real_escape_string($conn,$_POST['student_zprn']);
                $relation     = mysqli_real_escape_string($conn,$_POST['relation']);

                mysqli_query($conn,"
                INSERT INTO parents
                (
                    user_id,
                    student_zprn,
                    relation
                )

                VALUES
                (
                    '$user_id',
                    '$student_zprn',
                    '$relation'
                )");

            }

            echo "<script>

            alert('User Added Successfully');

            window.location='all_users.php';

            </script>";

        }
        else
        {

            echo "<script>

            alert('".mysqli_error($conn)."');

            </script>";

        }

    }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Add User | PAS ERP</title>

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

<div class="welcome-card">

<h1>Add User</h1>

<p>

Register a new user into the Practical Assessment System.

</p>

</div>

<form action="" method="POST">

<div class="erp-form-card">

<!-- ================= Personal ================= -->

<div class="form-section">

<h2>

<i class="bi bi-person-fill"></i>

Personal Information

</h2>

<div class="form-grid">

<div class="form-group">

<label>Full Name *</label>

<input
type="text"
name="full_name"
required>

</div>

<div class="form-group">

<label>Mobile Number *</label>

<input
type="text"
name="mobile"
maxlength="10"
required>

</div>

<div class="form-group">

<label>Email *</label>

<input
type="email"
name="email"
required>

</div>

</div>

</div>

<!-- ================= Role ================= -->

<div class="form-section">

<h2>

<i class="bi bi-people-fill"></i>

Select Role

</h2>

<div class="form-grid">

<div class="form-group">

<label>Role *</label>

<select
id="role"
name="role"
required>

<option value="">Select Role</option>

<option value="Student">Student</option>

<option value="Faculty">Faculty</option>

<option value="HOD">HOD</option>

<option value="GFM">GFM</option>

<option value="Parent">Parent</option>

</select>

</div>

</div>

</div>
<!-- ==========================================
     Student Information
========================================== -->

<div class="form-section" id="studentSection" style="display:none;">

    <h2>

        <i class="bi bi-mortarboard-fill"></i>

        Student Information

    </h2>

    <div class="form-grid">

        <div class="form-group">

            <label>ZPRN Number *</label>

            <input
                type="text"
                name="zprn"
                placeholder="Enter ZPRN Number">

        </div>

        <div class="form-group">

            <label>Roll Number *</label>

            <input
                type="text"
                name="roll_no"
                placeholder="Enter Roll Number">

        </div>

        <div class="form-group">

            <label>Department *</label>

            <select name="student_department">

                <option value="">Select Department</option>

                <option>Electronics & Computer Engineering</option>

                <option>Computer Engineering</option>

                <option>Information Technology</option>

                <option>Mechanical Engineering</option>

                <option>Civil Engineering</option>

            </select>

        </div>

        <div class="form-group">

            <label>Year *</label>

            <select name="year">

                <option value="">Select Year</option>

                <option>First Year</option>

                <option>Second Year</option>

                <option>Third Year</option>

                <option>Final Year</option>

            </select>

        </div>

        <div class="form-group">

            <label>Semester *</label>

            <select name="semester">

                <option value="">Select Semester</option>

                <option>Semester 1</option>

                <option>Semester 2</option>

                <option>Semester 3</option>

                <option>Semester 4</option>

                <option>Semester 5</option>

                <option>Semester 6</option>

                <option>Semester 7</option>

                <option>Semester 8</option>

            </select>

        </div>

        <div class="form-group">

            <label>Division *</label>

            <input
                type="text"
                name="division"
                placeholder="Enter Division">

        </div>

    </div>

</div>

<!-- ==========================================
     Faculty / HOD / GFM Information
========================================== -->

<div class="form-section" id="facultySection" style="display:none;">

    <h2>

        <i class="bi bi-person-badge-fill"></i>

        Faculty / HOD / GFM Information

    </h2>

    <div class="form-grid">

        <div class="form-group">

            <label>Employee ID *</label>

            <input
                type="text"
                name="employee_id"
                placeholder="Enter Employee ID">

        </div>

        <div class="form-group">

            <label>Department *</label>

            <select name="faculty_department">

                <option value="">Select Department</option>

                <option>Electronics & Computer Engineering</option>

                <option>Computer Engineering</option>

                <option>Information Technology</option>

                <option>Mechanical Engineering</option>

                <option>Civil Engineering</option>

            </select>

        </div>

        <div class="form-group">

            <label>Designation *</label>

            <select name="designation">

                <option value="">Select Designation</option>

                <option>Assistant Professor</option>

                <option>Associate Professor</option>

                <option>Professor</option>

                <option>Head of Department</option>

            </select>

        </div>

        <div class="form-group">

            <label>Qualification *</label>

            <input
                type="text"
                name="qualification"
                placeholder="Enter Qualification">

        </div>

        <div class="form-group">

            <label>Joining Date *</label>

            <input
                type="date"
                name="joining_date">

        </div>

    </div>

</div>

<!-- ==========================================
     Parent Information
========================================== -->

<div class="form-section" id="parentSection" style="display:none;">

    <h2>

        <i class="bi bi-people-fill"></i>

        Parent Information

    </h2>

    <div class="form-grid">

        <div class="form-group">

            <label>Student ZPRN *</label>

            <input
                type="text"
                name="student_zprn"
                placeholder="Enter Student ZPRN">

        </div>

        <div class="form-group">

            <label>Relation *</label>

            <select name="relation">

                <option value="">Select Relation</option>

                <option>Father</option>

                <option>Mother</option>

                <option>Guardian</option>

            </select>

        </div>

    </div>

</div>
<!-- ==========================================
     Login Information
========================================== -->

<div class="form-section">

    <h2>

        <i class="bi bi-key-fill"></i>

        Login Information

    </h2>

    <div class="form-grid">

        <div class="form-group">

            <label>Username *</label>

            <input
                type="text"
                name="username"
                placeholder="Enter Username"
                required>

        </div>

        <div class="form-group">

            <label>Password *</label>

            <input
                type="password"
                name="password"
                placeholder="Enter Password"
                required>

        </div>

        <div class="form-group">

            <label>Confirm Password *</label>

            <input
                type="password"
                name="confirm_password"
                placeholder="Confirm Password"
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
        name="save_user"
        class="save-btn">

        <i class="bi bi-check-circle-fill"></i>

        Save User

    </button>

    <button
        type="reset"
        class="reset-btn">

        <i class="bi bi-arrow-counterclockwise"></i>

        Reset

    </button>

</div>

</div>

</form>

</section>

</main>

</div>

<script>

const role = document.getElementById("role");

const studentSection = document.getElementById("studentSection");
const facultySection = document.getElementById("facultySection");
const parentSection = document.getElementById("parentSection");

role.addEventListener("change", function(){

    studentSection.style.display = "none";
    facultySection.style.display = "none";
    parentSection.style.display = "none";

    if(this.value=="Student")
    {
        studentSection.style.display="block";
    }

    else if(
        this.value=="Faculty" ||
        this.value=="HOD" ||
        this.value=="GFM"
    )
    {
        facultySection.style.display="block";
    }

    else if(this.value=="Parent")
    {
        parentSection.style.display="block";
    }

});

</script>

<script src="../../assets/js/dashboard.js"></script>

</body>

</html>