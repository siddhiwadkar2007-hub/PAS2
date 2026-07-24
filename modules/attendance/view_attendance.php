<?php
// ======================================================
// Practical Assessment System (PAS)
// Student Attendance
// ======================================================

/*
=========================================================
TEMPORARY DATA
Later this data will come from MySQL Database
=========================================================
*/

$student = [

    "student_id" => 1,
    "prn"        => "125UEC1130",
    "name"       => "Siddhi Wadkar",
    "year"       => "FY",
    "semester"   => 1,
    "division"   => "C",
    "roll"       => "12"

];

$subjects = [

    [

        "subject_id" => 101,
        "subject" => "Engineering Mathematics",
        "code" => "BSC101",
        "faculty" => "Prof. Patil",
        "percentage" => 95,
        "attended_classes" => 38,
        "total_classes" => 40

    ],

    [

        "subject_id" => 102,
        "subject" => "Physics",
        "code" => "BSC102",
        "faculty" => "Prof. Kulkarni",
        "percentage" => 92,
        "attended_classes" => 33,
        "total_classes" => 36

    ],

    [

        "subject_id" => 103,
        "subject" => "Programming in C",
        "code" => "ESC103",
        "faculty" => "Prof. Joshi",
        "percentage" => 88,
        "attended_classes" => 21,
        "total_classes" => 24

    ],

    [

        "subject_id" => 104,
        "subject" => "Engineering Graphics",
        "code" => "ESC104",
        "faculty" => "Prof. Deshmukh",
        "percentage" => 100,
        "attended_classes" => 20,
        "total_classes" => 20

    ],

    [

        "subject_id" => 105,
        "subject" => "Workshop",
        "code" => "ESC105",
        "faculty" => "Prof. Shinde",
        "percentage" => 90,
        "attended_classes" => 18,
        "total_classes" => 20

    ],

    [

        "subject_id" => 106,
        "subject" => "Communication Skills",
        "code" => "HSM106",
        "faculty" => "Prof. More",
        "percentage" => 97,
        "attended_classes" => 29,
        "total_classes" => 30

    ]

];
?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Student Attendance</title>

<link rel="stylesheet"
href="../../assets/css/dashboard.css">

<link rel="stylesheet"
href="../../assets/css/student_dashboard.css">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="light-theme">

<div class="dashboard-container">

<?php include("../../includes/sidebar_student.php"); ?>

<main class="main-content full">

<?php include("../../includes/navbar_student.php"); ?>

<section class="dashboard-content">

<div class="page-header">

<h2>
<i class="bi bi-calendar-check-fill"></i>
Student Attendance
</h2>

<p>

View your subject-wise attendance for the selected Academic Year and Semester.

</p>

</div>

<!-- ===========================
Attendance Filter
=========================== -->

<div class="attendance-filter">

<select>

<option>Academic Year : 2025-26</option>

</select>

<select>

<option>Semester <?= $student['semester']; ?></option>

</select>

<button class="btn">

<i class="bi bi-search"></i>

Fetch

</button>

</div>

<!-- ===========================
Student Details
=========================== -->

<div class="student-details">

<span><strong>PRN :</strong> <?= $student['prn']; ?></span>

<span><strong>Name :</strong> <?= $student['name']; ?></span>

<span><strong>Year :</strong> <?= $student['year']; ?></span>

<span><strong>Division :</strong> <?= $student['division']; ?></span>

<span><strong>Roll No :</strong> <?= $student['roll']; ?></span>

</div>

<!-- ===========================
Attendance Cards
=========================== -->

<div class="attendance-grid">

<?php foreach($subjects as $subject){ ?>

<a href="#"
class="attendance-card">

<h3>

<?= $subject['subject']; ?>

</h3>

<p class="subject-code">

<?= $subject['code']; ?>

</p>

<p class="faculty-name">

<i class="bi bi-person-fill"></i>

<?= $subject['faculty']; ?>

</p>

<div class="progress-ring"
     style="--progress:<?= $subject['percentage']; ?>;">

    <div class="progress-value">

        <?= $subject['percentage']; ?>%

    </div>

</div>

<p class="attendance-label">

Overall Attendance

</p>

<small>

<?= $subject['attended_classes']; ?>

/

<?= $subject['total_classes']; ?>

Classes

</small>

</a>

<?php } ?>

</div>
<!-- ==========================================
Attendance Details Popup
========================================== -->

<div id="attendanceModal" class="attendance-modal">

    <div class="attendance-modal-content">

        <span class="close-modal" id="closeModal">&times;</span>

        <h2 id="popupSubject">
            📘 Engineering Mathematics
        </h2>

        <div class="popup-info-row">

            <div class="popup-box">
                <strong>Subject</strong>
                <span id="popupCode">BSC101</span>
            </div>

            <div class="popup-box">
                <strong>Total</strong>
                <span id="popupTotal">40</span>
            </div>

            <div class="popup-box">
                <strong>Present</strong>
                <span id="popupPresent">38</span>
            </div>

            <div class="popup-box">
                <strong>Absent</strong>
                <span id="popupAbsent">2</span>
            </div>

        </div>

        <table class="attendance-table">

            <thead>

                <tr>

                    <th>Date</th>

                    <th>Lecture</th>

                    <th>Status</th>

                </tr>

            </thead>

            <tbody id="attendanceBody">

                <tr>
                    <td>01 Jul 2026</td>
                    <td>Unit 1</td>
                    <td>
                        <span class="status-badge present">
                            Present
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>03 Jul 2026</td>
                    <td>Unit 2</td>
                    <td>
                        <span class="status-badge absent">
                            Absent
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>05 Jul 2026</td>
                    <td>Unit 3</td>
                    <td>
                        <span class="status-badge present">
                            Present
                        </span>
                    </td>
                </tr>

            </tbody>

        </table>

        <div class="modal-footer">

            <button class="btn" id="closeBtn">

                Close

            </button>

        </div>

    </div>

</div>

</section>

</main>

</div>

<script src="../../assets/js/dashboard.js"></script>

<script>

const cards = document.querySelectorAll(".attendance-card");

const modal = document.getElementById("attendanceModal");

const closeIcon = document.getElementById("closeModal");

const closeButton = document.getElementById("closeBtn");

const popupSubject = document.getElementById("popupSubject");

const popupCode = document.getElementById("popupCode");

const popupTotal = document.getElementById("popupTotal");

const popupPresent = document.getElementById("popupPresent");

const popupAbsent = document.getElementById("popupAbsent");

cards.forEach(function(card){

    card.addEventListener("click", function(e){

        e.preventDefault();

        popupSubject.innerText =
            card.querySelector("h3").innerText;

        popupCode.innerText =
            card.querySelector(".subject-code").innerText;

        let classes =
            card.querySelector("small").innerText;

        let values = classes.split("/");

        popupPresent.innerText = values[0].trim();

        popupTotal.innerText =
            values[1].replace("Classes","").trim();

        popupAbsent.innerText =
            Number(popupTotal.innerText) -
            Number(popupPresent.innerText);

        modal.style.display = "flex";

    });

});

closeIcon.onclick = function(){

    modal.style.display = "none";

}

closeButton.onclick = function(){

    modal.style.display = "none";

}

window.onclick = function(e){

    if(e.target == modal){

        modal.style.display = "none";

    }

}

</script>

</body>

</html>