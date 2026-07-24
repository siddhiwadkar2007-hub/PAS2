<?php

include("../../config/database.php");

/* ==========================================
   GET USER ID
========================================== */

if(isset($_POST['update_user']))
{

    $full_name = mysqli_real_escape_string($conn,$_POST['full_name']);
    $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $ok = true;
    $dbError = "";

    /* ======================================
       UPDATE USERS TABLE
    ====================================== */

    $res = mysqli_query($conn,
        "UPDATE users SET

        full_name='$full_name',
        mobile='$mobile',
        email='$email',
        username='$username',
        password='$password'

        WHERE id='$user_id'");

    if(!$res){ $ok = false; $dbError = mysqli_error($conn); }

    /* ======================================
       STUDENT UPDATE
    ====================================== */

    if($user['role']=="Student")
    {

        $zprn = mysqli_real_escape_string($conn,$_POST['zprn']);
        $roll_no = mysqli_real_escape_string($conn,$_POST['roll_no']);
        $department = mysqli_real_escape_string($conn,$_POST['department']);
        $year = mysqli_real_escape_string($conn,$_POST['year']);
        $semester = mysqli_real_escape_string($conn,$_POST['semester']);
        $division = mysqli_real_escape_string($conn,$_POST['division']);

        $res = mysqli_query($conn,
        "UPDATE students SET

        zprn='$zprn',
        roll_no='$roll_no',
        department='$department',
        year='$year',
        semester='$semester',
        division='$division'

        WHERE user_id='$user_id'");

        if(!$res){ $ok = false; $dbError = mysqli_error($conn); }

    }

    /* ======================================
       FACULTY UPDATE
    ====================================== */

    elseif(
    $user['role']=="Faculty" ||
    $user['role']=="HOD" ||
    $user['role']=="GFM"
    )
    {

        $employee_id = mysqli_real_escape_string($conn,$_POST['employee_id']);
        $department = mysqli_real_escape_string($conn,$_POST['department']);
        $designation = mysqli_real_escape_string($conn,$_POST['designation']);
        $qualification = mysqli_real_escape_string($conn,$_POST['qualification']);
        $joining_date = mysqli_real_escape_string($conn,$_POST['joining_date']);

        $res = mysqli_query($conn,
        "UPDATE faculty SET

        employee_id='$employee_id',
        department='$department',
        designation='$designation',
        qualification='$qualification',
        joining_date='$joining_date'

        WHERE user_id='$user_id'");

        if(!$res){ $ok = false; $dbError = mysqli_error($conn); }

    }

    /* ======================================
       PARENT UPDATE
    ====================================== */

    elseif($user['role']=="Parent")
    {

        $student_zprn = mysqli_real_escape_string($conn,$_POST['student_zprn']);
        $relation = mysqli_real_escape_string($conn,$_POST['relation']);

        $res = mysqli_query($conn,
        "UPDATE parents SET

        student_zprn='$student_zprn',
        relation='$relation'

        WHERE user_id='$user_id'");

        if(!$res){ $ok = false; $dbError = mysqli_error($conn); }

    }

    if($ok){
        echo "SUCCESS";
    }
    else{
        echo "ERROR: " . htmlspecialchars($dbError);
    }

exit();
}
    {

        $parent = mysqli_fetch_assoc($parentQuery);

        $student_zprn = $parent['student_zprn'];
        $relation = $parent['relation'];

    }

}
/* ==========================================
   UPDATE USER
========================================== */

if(isset($_POST['update_user']))
{

    $full_name = mysqli_real_escape_string($conn,$_POST['full_name']);
    $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    /* ======================================
       UPDATE USERS TABLE
    ====================================== */

    mysqli_query($conn,"
    UPDATE users SET

    full_name='$full_name',
    mobile='$mobile',
    email='$email',
    username='$username',
    password='$password'

    WHERE id='$user_id'
    ");

    /* ======================================
       STUDENT UPDATE
    ====================================== */

    if($user['role']=="Student")
    {

        $zprn = mysqli_real_escape_string($conn,$_POST['zprn']);
        $roll_no = mysqli_real_escape_string($conn,$_POST['roll_no']);
        $department = mysqli_real_escape_string($conn,$_POST['department']);
        $year = mysqli_real_escape_string($conn,$_POST['year']);
        $semester = mysqli_real_escape_string($conn,$_POST['semester']);
        $division = mysqli_real_escape_string($conn,$_POST['division']);

        mysqli_query($conn,"
        UPDATE students SET

        zprn='$zprn',
        roll_no='$roll_no',
        department='$department',
        year='$year',
        semester='$semester',
        division='$division'

        WHERE user_id='$user_id'
        ");

    }

    /* ======================================
       FACULTY UPDATE
    ====================================== */

    elseif(
    $user['role']=="Faculty" ||
    $user['role']=="HOD" ||
    $user['role']=="GFM"
    )
    {

        $employee_id = mysqli_real_escape_string($conn,$_POST['employee_id']);
        $department = mysqli_real_escape_string($conn,$_POST['department']);
        $designation = mysqli_real_escape_string($conn,$_POST['designation']);
        $qualification = mysqli_real_escape_string($conn,$_POST['qualification']);
        $joining_date = mysqli_real_escape_string($conn,$_POST['joining_date']);

        mysqli_query($conn,"
        UPDATE faculty SET

        employee_id='$employee_id',
        department='$department',
        designation='$designation',
        qualification='$qualification',
        joining_date='$joining_date'

        WHERE user_id='$user_id'
        ");

    }

    /* ======================================
       PARENT UPDATE
    ====================================== */

    elseif($user['role']=="Parent")
    {

        $student_zprn = mysqli_real_escape_string($conn,$_POST['student_zprn']);
        $relation = mysqli_real_escape_string($conn,$_POST['relation']);

        mysqli_query($conn,"
        UPDATE parents SET

        student_zprn='$student_zprn',
        relation='$relation'

        WHERE user_id='$user_id'
        ");

    }

    echo "SUCCESS";

exit();
}
?>
<form method="POST" id="editUserForm">

<input
type="hidden"
name="user_id"
value="<?php echo $user_id; ?>">

<div class="erp-form-card">

<!-- ==========================================
     Personal Information
========================================== -->

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
value="<?php echo htmlspecialchars($user['full_name']); ?>"
required>

</div>

<div class="form-group">

<label>Mobile Number *</label>

<input
type="text"
name="mobile"
value="<?php echo htmlspecialchars($user['mobile']); ?>"
required>

</div>

<div class="form-group">

<label>Email *</label>

<input
type="email"
name="email"
value="<?php echo htmlspecialchars($user['email']); ?>"
required>

</div>

</div>

</div>
<?php if($user['role']=="Student"){ ?>

<div class="form-section">

<h2>

<i class="bi bi-mortarboard-fill"></i>

Student Information

</h2>

<div class="form-grid">

<div class="form-group">

<label>ZPRN</label>

<input
type="text"
name="zprn"
value="<?php echo htmlspecialchars($zprn); ?>">

</div>

<div class="form-group">

<label>Roll Number</label>

<input
type="text"
name="roll_no"
value="<?php echo htmlspecialchars($roll_no); ?>">

</div>

<div class="form-group">

<label>Department</label>

<input
type="text"
name="department"
value="<?php echo htmlspecialchars($department); ?>">

</div>

<div class="form-group">

<label>Year</label>

<input
type="text"
name="year"
value="<?php echo htmlspecialchars($year); ?>">

</div>

<div class="form-group">

<label>Semester</label>

<input
type="text"
name="semester"
value="<?php echo htmlspecialchars($semester); ?>">

</div>

<div class="form-group">

<label>Division</label>

<input
type="text"
name="division"
value="<?php echo htmlspecialchars($division); ?>">

</div>

</div>

</div>

<?php } ?>
<?php if($user['role']=="Faculty" || $user['role']=="HOD" || $user['role']=="GFM"){ ?>

<div class="form-section">

<h2>

<i class="bi bi-person-workspace"></i>

Faculty Information

</h2>

<div class="form-grid">

<div class="form-group">

<label>Employee ID</label>

<input
type="text"
name="employee_id"
value="<?php echo htmlspecialchars($employee_id); ?>">

</div>

<div class="form-group">

<label>Department</label>

<input
type="text"
name="department"
value="<?php echo htmlspecialchars($department); ?>">

</div>

<div class="form-group">

<label>Designation</label>

<input
type="text"
name="designation"
value="<?php echo htmlspecialchars($designation); ?>">

</div>

<div class="form-group">

<label>Qualification</label>

<input
type="text"
name="qualification"
value="<?php echo htmlspecialchars($qualification); ?>">

</div>

<div class="form-group">

<label>Joining Date</label>

<input
type="date"
name="joining_date"
value="<?php echo htmlspecialchars($joining_date); ?>">

</div>

</div>

</div>

<?php } ?>
<?php if($user['role']=="Parent"){ ?>

<div class="form-section">

<h2>

<i class="bi bi-people-fill"></i>

Parent Information

</h2>

<div class="form-grid">

<div class="form-group">

<label>Student ZPRN</label>

<input
type="text"
name="student_zprn"
value="<?php echo htmlspecialchars($student_zprn); ?>">

</div>

<div class="form-group">

<label>Relation</label>

<input
type="text"
name="relation"
value="<?php echo htmlspecialchars($relation); ?>">

</div>

</div>

</div>

<?php } ?>
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

<label>Username</label>

<input
type="text"
name="username"
value="<?php echo htmlspecialchars($user['username']); ?>">

</div>

<div class="form-group">

<label>Password</label>

<input
type="text"
name="password"
value="<?php echo htmlspecialchars($user['password']); ?>">

</div>

</div>

</div>

<div class="button-group">

<button
type="submit"
name="update_user"
class="save-btn">

<i class="bi bi-check-circle-fill"></i>

Update User

</button>

</div>

</div>

</form>