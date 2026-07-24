<?php
include('../../includes/header.php');
include('../../includes/navbar.php');
?>

<div class="dashboard-container">

    <?php include('../../includes/sidebar.php'); ?>

    <main class="main-content">

        <!-- =========================
             Welcome Banner
        ========================== -->

        <div class="welcome-banner">

            <div>

                <h2>Welcome to Parent Dashboard 👋</h2>

                <p>
                    Monitor your child's attendance, practical marks,
                    examination schedule, notices and fee status from one place.
                </p>

            </div>

            <div>

                <button class="btn btn-light px-4">
                    View Student Profile
                </button>

            </div>

        </div>

        <!-- =========================
             Statistics Cards
        ========================== -->

        <div class="row g-4 mt-1">

            <div class="col-lg-3 col-md-6">

                <div class="dashboard-card">

                    <div class="card-icon blue">

                        <i class="bi bi-calendar-check-fill"></i>

                    </div>

                    <h6>Attendance</h6>

                    <h2>92%</h2>

                    <small>Overall Attendance</small>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="dashboard-card">

                    <div class="card-icon blue">

                        <i class="bi bi-journal-check"></i>

                    </div>

                    <h6>Practical Marks</h6>

                    <h2>87%</h2>

                    <small>Average Score</small>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="dashboard-card">

                    <div class="card-icon blue">

                        <i class="bi bi-bell-fill"></i>

                    </div>

                    <h6>Notices</h6>

                    <h2>05</h2>

                    <small>New Updates</small>

                </div>

            </div>

        </div>

        <!-- =========================
             Student Information
        ========================== -->

        <div class="row mt-4">

            <div class="col-lg-8">

                <div class="content-card">

                    <h4 class="mb-3">
                        Student Information
                    </h4>

                    <table class="table">

                        <tr>
                            <th>Name</th>
                            <td>Student Name</td>
                        </tr>

                        <tr>
                            <th>Department</th>
                            <td>Electronics & Communication Engineering</td>
                        </tr>

                        <tr>
                            <th>Year</th>
                            <td>First Year</td>
                        </tr>

                        <tr>
                            <th>Division</th>
                            <td>A</td>
                        </tr>

                        <tr>
                            <th>Roll No.</th>
                            <td>101</td>
                        </tr>

                    </table>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="content-card">

                    <h4 class="mb-3">
                        Attendance
                    </h4>

                    <div class="progress mb-3">

                        <div class="progress-bar bg-success"
                             style="width:92%;">

                            92%

                        </div>

                    </div>

                    <p>The attendance is above the required minimum.</p>

                </div>

            </div>

        </div>

        <!-- =========================
             Bottom Section
        ========================== -->

        <div class="row mt-4">

            <div class="col-lg-6">

                <div class="content-card">

                    <h4>Recent Notices</h4>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            Practical submission deadline extended.
                        </li>

                        <li class="list-group-item">
                            Parent Meeting scheduled on Friday.
                        </li>

                        <li class="list-group-item">
                            Semester examination timetable published.
                        </li>

                    </ul>

                </div>

            </div>

               </div>

    </main>

</div>

<?php include('../../includes/footer.php'); ?>