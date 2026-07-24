<?php

$pageTitle = "All Users";
include("../../config/database.php");

/* ==========================================
   SEARCH & FILTER
========================================== */

$search = "";
$role_filter = "";
$where = "WHERE 1=1";

if(isset($_GET['search']) && $_GET['search']!="")
{
    $search = mysqli_real_escape_string($conn,$_GET['search']);
    $where .= " AND full_name LIKE '%$search%'";
}

if(isset($_GET['role']) && $_GET['role']!="")
{
    $role_filter = mysqli_real_escape_string($conn,$_GET['role']);
    $where .= " AND role='$role_filter'";
}

/* ==========================================
   FETCH USERS
========================================== */

$sql = "SELECT * FROM users
$where
ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

/* ==========================================
   COUNT CARDS
========================================== */

$totalUsers = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));

$totalStudents = mysqli_num_rows(mysqli_query($conn,"
SELECT * FROM users
WHERE role='Student'
"));

$totalFaculty = mysqli_num_rows(mysqli_query($conn,"
SELECT * FROM users
WHERE role IN('Faculty','HOD','GFM')
"));

$totalParents = mysqli_num_rows(mysqli_query($conn,"
SELECT * FROM users
WHERE role='Parent'
"));

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>All Users | PAS ERP</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet"
href="../../assets/css/dashboard.css">

<style>

/* ===============================
   Cards
=============================== */

.user-cards{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
margin-bottom:25px;
}

.user-card{
background:var(--card);
padding:20px;
border-radius:12px;
box-shadow:0 5px 15px rgba(0,0,0,.08);
display:flex;
align-items:center;
gap:15px;
border:1px solid var(--border);
}

.user-card i{
font-size:35px;
color:var(--primary);
}

.user-card h2{
margin:0;
font-size:28px;
color:var(--text);
}

.user-card p{
margin:0;
color:var(--text-light);
}

/* ===============================
Search Card
=============================== */

.search-card{
background:var(--card);
padding:20px;
border-radius:12px;
box-shadow:0 5px 15px rgba(0,0,0,.08);
margin-bottom:25px;
border:1px solid var(--border);
}

/* ===============================
Table
=============================== */

.table-card{
background:var(--card);
padding:20px;
border-radius:12px;
box-shadow:0 5px 15px rgba(0,0,0,.08);
border:1px solid var(--border);
}

.erp-table{
width:100%;
border-collapse:collapse;
margin-top:15px;
}

.erp-table th{
background:var(--primary);
color:white;
padding:12px;
text-align:center;
}

.erp-table td{
padding:12px;
text-align:center;
border-bottom:1px solid var(--border);
color:var(--text);
}

/* Buttons */

.edit-btn{
background:#0d6efd;
color:white;
padding:8px 14px;
border-radius:6px;
text-decoration:none;
margin-right:5px;
display:inline-block;
border:none;
cursor:pointer;
}

.delete-btn{
background:#dc3545;
color:white;
padding:8px 14px;
border-radius:6px;
text-decoration:none;
display:inline-block;
border:none;
cursor:pointer;
}

/* ===============================
Popup
=============================== */

.modal{
display:none;
position:fixed;
left:0;
top:0;
width:100%;
height:100%;
background:rgba(0,0,0,.55);
z-index:9999;
}

.modal-content{
background:var(--card);
width:85%;
max-width:950px;
margin:40px auto;
border-radius:12px;
overflow:hidden;
animation:popup .25s;
border:1px solid var(--border);
}

@keyframes popup{

from{
transform:scale(.8);
opacity:0;
}

to{
transform:scale(1);
opacity:1;
}

}

.modal-header{
background:var(--primary);
color:white;
padding:18px 25px;
display:flex;
justify-content:space-between;
align-items:center;
}

.closeModal{
font-size:30px;
cursor:pointer;
font-weight:bold;
color:white;
background:none;
border:none;
}

.modal-body{
padding:25px;
max-height:75vh;
overflow-y:auto;
color:var(--text);
}

/* Responsive */

@media(max-width:992px){

.user-cards{
grid-template-columns:repeat(2,1fr);
}

}

@media(max-width:600px){

.user-cards{
grid-template-columns:1fr;
}

}

</style>

</head>
<body>

<div class="dashboard-container">

    <!-- Sidebar -->
    <?php include("../../includes/sidebar.php"); ?>

    <!-- Main Content -->
    <main class="main-content full">

        <!-- Navbar -->
        <?php include("../../includes/navbar.php"); ?>

        <section class="dashboard-content">

            <!-- Welcome Card -->
            <div class="welcome-card">

                <h1>All Users</h1>

                <p>
                    View and Manage Users in Practical Assessment System
                </p>

            </div>

            <!-- ==========================================
                 Dashboard Cards
            ========================================== -->

            <div class="user-cards">

                <div class="user-card">

                    <i class="bi bi-people-fill"></i>

                    <div>

                        <h2><?php echo $totalUsers; ?></h2>

                        <p>Total Users</p>

                    </div>

                </div>

                <div class="user-card">

                    <i class="bi bi-mortarboard-fill"></i>

                    <div>

                        <h2><?php echo $totalStudents; ?></h2>

                        <p>Students</p>

                    </div>

                </div>

                <div class="user-card">

                    <i class="bi bi-person-workspace"></i>

                    <div>

                        <h2><?php echo $totalFaculty; ?></h2>

                        <p>Faculty / HOD / GFM</p>

                    </div>

                </div>

                <div class="user-card">

                    <i class="bi bi-person-hearts"></i>

                    <div>

                        <h2><?php echo $totalParents; ?></h2>

                        <p>Parents</p>

                    </div>

                </div>

            </div>

            <!-- ==========================================
                 Search Card
            ========================================== -->

            <div class="search-card">

                <form method="GET">

                    <div class="form-grid">

                        <div class="form-group">

                            <label>Search by Name</label>

                            <input
                                type="text"
                                name="search"
                                placeholder="Enter Name"
                                value="<?php echo $search; ?>">

                        </div>

                        <div class="form-group">

                            <label>Role Filter</label>

                            <select name="role">

                                <option value="">All Roles</option>

                                <option value="Student" <?php if($role_filter=="Student") echo "selected"; ?>>
                                    Student
                                </option>

                                <option value="Faculty" <?php if($role_filter=="Faculty") echo "selected"; ?>>
                                    Faculty
                                </option>

                                <option value="HOD" <?php if($role_filter=="HOD") echo "selected"; ?>>
                                    HOD
                                </option>

                                <option value="GFM" <?php if($role_filter=="GFM") echo "selected"; ?>>
                                    GFM
                                </option>

                                <option value="Parent" <?php if($role_filter=="Parent") echo "selected"; ?>>
                                    Parent
                                </option>

                            </select>

                        </div>

                    </div>

                    <div class="button-group">

                        <button
                            type="submit"
                            class="save-btn">

                            <i class="bi bi-search"></i>

                            Search

                        </button>

                        <a
                            href="all_users.php"
                            class="reset-btn">

                            <i class="bi bi-arrow-clockwise"></i>

                            Reset

                        </a>

                    </div>

                </form>

            </div>
            <!-- ==========================================
     Users Table
========================================== -->

<div class="table-card">

    <h2>

        <i class="bi bi-people-fill"></i>

        All Users

    </h2>

    <table class="erp-table">

        <thead>

            <tr>

                <th>Sr No</th>

                <th>Name</th>

                <th>Role</th>

                <th>Department</th>

                <th>Email</th>

                <th>Mobile</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

<?php

$sr = 1;

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_assoc($result))
{

$department = "-";

/* ==========================
   Student Department
========================== */

if($row['role']=="Student")
{

$student = mysqli_query($conn,"
SELECT department
FROM students
WHERE user_id='".$row['id']."'
");

if(mysqli_num_rows($student)>0)
{

$data = mysqli_fetch_assoc($student);

$department = $data['department'];

}

}

/* ==========================
   Faculty Department
========================== */

elseif(
$row['role']=="Faculty" ||
$row['role']=="HOD" ||
$row['role']=="GFM"
)
{

$faculty = mysqli_query($conn,"
SELECT department
FROM faculty
WHERE user_id='".$row['id']."'
");

if(mysqli_num_rows($faculty)>0)
{

$data = mysqli_fetch_assoc($faculty);

$department = $data['department'];

}

}

?>

<tr>

<td><?php echo $sr++; ?></td>

<td><?php echo $row['full_name']; ?></td>

<td><?php echo $row['role']; ?></td>

<td><?php echo $department; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td>

<a
href="#"
class="edit-btn editUserBtn"
data-id="<?php echo $row['id']; ?>">

<i class="bi bi-pencil-square"></i>

Edit

</a>

<a
href="delete_user.php?id=<?php echo $row['id']; ?>"
class="delete-btn"
onclick="return confirm('Are you sure you want to delete this user?')">

<i class="bi bi-trash-fill"></i>

Delete

</a>

</td>

</tr>

<?php

}

}
else
{

?>

<tr>

<td colspan="7" style="text-align:center;">

No Users Found

</td>

</tr>

<?php

}

?>

        </tbody>

    </table>

</div>
<!-- ==========================================
     EDIT USER POPUP
========================================== -->

<div id="editUserModal" class="modal">

    <div class="modal-content">

        <!-- Popup Header -->

        <div class="modal-header">

            <h2>

                <i class="bi bi-pencil-square"></i>

                Edit User

            </h2>

            <span class="closeModal">&times;</span>

        </div>

        <!-- Popup Body -->

        <div class="modal-body">

            <div id="editFormContainer">

                <p style="text-align:center; color:#666;">
                    Select a user to load their details.
                </p>

            </div>

        </div>

    </div>

</div>
        </section>

    </main>

</div>

<!-- Dashboard JS -->
<script src="../../assets/js/dashboard.js"></script>

<script>

const modal = document.getElementById("editUserModal");
const editFormContainer = document.getElementById("editFormContainer");
const editButtons = document.querySelectorAll(".editUserBtn");
const closeButtons = document.querySelectorAll(".closeModal");

function closeModal(){

    modal.style.display = "none";
    editFormContainer.innerHTML = "";

}

/* Open Popup */

editButtons.forEach(function(button){

    button.addEventListener("click",function(e){

        e.preventDefault();

        const userId = this.getAttribute("data-id");

        modal.style.display = "block";
        editFormContainer.innerHTML = "<p style='text-align:center; color:#666;'>Loading user details...</p>";

        fetch("edit_user.php?id=" + encodeURIComponent(userId))

        .then(function(response){

            return response.text();

        })

        .then(function(html){

            editFormContainer.innerHTML = html;

            const form = editFormContainer.querySelector("form");

            if(form){

                form.addEventListener("submit", function(e){

                    e.preventDefault();

                    const submitButton = form.querySelector("button[type='submit']");

                    if(submitButton){

                        submitButton.disabled = true;

                    }

                    const formData = new FormData(form);

                    fetch("edit_user.php?id=" + encodeURIComponent(userId),{

                        method:"POST",
                        body:formData

                    })

                    .then(function(response){

                        return response.text();

                    })

                    .then(function(data){

                        if(data.trim()==="SUCCESS"){

                            alert("User Updated Successfully");
                            closeModal();
                            location.reload();

                        }
                        else{

                            editFormContainer.innerHTML = data;

                        }

                    })

                    .catch(function(){

                        alert("Unable to update user. Please try again.");

                        if(submitButton){

                            submitButton.disabled = false;

                        }

                    });

                });

            }

        })

        .catch(function(){

            editFormContainer.innerHTML = "<p style='text-align:center; color:#c0392b;'>Unable to load user details.</p>";

        });

    });

});

/* Close Popup */

closeButtons.forEach(function(button){

    button.addEventListener("click",function(){

        closeModal();

    });

});

/* Close When Clicking Outside */

window.addEventListener("click",function(event){

    if(event.target==modal){

        closeModal();

    }

});

</script>

</body>

</html>