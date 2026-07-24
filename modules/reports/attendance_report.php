<form method="GET">

<div class="form-section">

<h2>

<i class="bi bi-search"></i>

Search Student Attendance

</h2>

<div class="form-grid">

<div class="form-group">

<label>Roll Number</label>

<input
type="text"
name="roll_no"
placeholder="Enter Roll Number">

</div>

<div class="form-group">

<label>Student Name</label>

<input
type="text"
name="student_name"
placeholder="Enter Student Name">

</div>

<div class="form-group">

<label>ZPRN</label>

<input
type="text"
name="zprn"
placeholder="Enter ZPRN">

</div>

</div>

<div class="button-group">

<button
type="submit"
class="save-btn">

<i class="bi bi-search"></i>

Search

</button>

</div>

</div>
<!-- ==========================================
     Student Information
========================================== -->

<div class="form-section">

<h2>

<i class="bi bi-person-circle"></i>

Student Information

</h2>

<table class="erp-table">

<tr>

<th width="25%">Student Name</th>

<td id="student_name_display">-</td>

<th width="25%">Roll Number</th>

<td id="roll_display">-</td>

</tr>

<tr>

<th>ZPRN</th>

<td id="zprn_display">-</td>

<th>Department</th>

<td id="department_display">-</td>

</tr>

<tr>

<th>Year</th>

<td id="year_display">-</td>

<th>Semester</th>

<td id="semester_display">-</td>

</tr>

<tr>

<th>Division</th>

<td id="division_display">-</td>

<th>Batch</th>

<td id="batch_display">-</td>

</tr>

<tr>

<th>Academic Year</th>

<td id="academic_display">-</td>

<th></th>

<td></td>

</tr>

</table>

</div>
<!-- ==========================================
     Subject Wise Attendance
========================================== -->

<div class="form-section">

<h2>

<i class="bi bi-table"></i>

Subject Wise Attendance

</h2>

<div class="table-container">

<table class="erp-table">

<thead>

<tr>

<th>Sr No.</th>

<th>Subject</th>

<th>Total Practicals</th>

<th>Present</th>

<th>Absent</th>

<th>Attendance %</th>

</tr>

</thead>

<tbody>

<tr>

<td>1</td>

<td>Database Management System Lab</td>

<td>10</td>

<td>9</td>

<td>1</td>

<td>90%</td>

</tr>

<tr>

<td>2</td>

<td>Java Programming Lab</td>

<td>12</td>

<td>10</td>

<td>2</td>

<td>83%</td>

</tr>

<tr>

<td>3</td>

<td>Python Programming Lab</td>

<td>8</td>

<td>8</td>

<td>0</td>

<td>100%</td>

</tr>

<tr>

<td>4</td>

<td>Operating System Lab</td>

<td>9</td>

<td>7</td>

<td>2</td>

<td>78%</td>

</tr>

</tbody>

</table>

</div>

</div>
<!-- ==========================================
     Overall Attendance Summary
========================================== -->

<div class="form-section">

<h2>

<i class="bi bi-clipboard-check-fill"></i>

Overall Attendance Summary

</h2>

<table class="erp-table">

<tr>

<th width="35%">Total Subjects</th>

<td id="total_subjects">4</td>

</tr>

<tr>

<th>Total Practicals</th>

<td id="total_practicals">39</td>

</tr>

<tr>

<th>Total Present</th>

<td id="total_present">34</td>

</tr>

<tr>

<th>Total Absent</th>

<td id="total_absent">5</td>

</tr>

<tr>

<th>Overall Attendance</th>

<td>

<strong id="overall_percentage">

87%

</strong>

</td>

</tr>

</table>

</div>
<!-- ==========================================
     Report Actions
========================================== -->

<div class="form-section">

<h2>

<i class="bi bi-file-earmark-text-fill"></i>

Report Actions

</h2>

<div class="button-group">

<button
type="button"
class="save-btn"
id="printReport">

<i class="bi bi-printer-fill"></i>

Print Report

</button>

<button
type="button"
class="save-btn"
id="pdfReport">

<i class="bi bi-file-earmark-pdf-fill"></i>

Export PDF

</button>

<button
type="button"
class="save-btn"
id="excelReport">

<i class="bi bi-file-earmark-excel-fill"></i>

Export Excel

</button>

</div>

</div>

</form>

</div>

</section>

</main>

</div>

<script src="../../assets/js/dashboard.js"></script>

</body>

</html>