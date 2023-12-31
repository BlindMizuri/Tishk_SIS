<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
/* Global styles for the page */
body {
  background-color: #fafafa;
  font-family: Arial, sans-serif;
  font-size: 14px;
  color: #262626;
  line-height: 1.5;
  margin: 0;
  padding: 0;
}

/* Styles for the heading */
h1 {
    font-size: 28px;
    margin-bottom: 1em;
    text-align: left;
    color: #262626;
      }
      p{
        font-size: 19px;
      }
      .P_red{
        color: red;
      }
      
/* Sidebar styling */
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 200px;
  height: 100%;
  padding-top: 20px;
  text-align: left;
  border-right: 1px solid #ddd;
  z-index: 9999;
  background-color: #fafafa;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #000000;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}
.sidebar a:hover::before {
  opacity: 1;
  transform: translate(-50%, -50%);
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Sidebar button styling */
#openNav {
  background-color: transparent;
  border: none;
  position: fixed;
  z-index: 1;
  top: 20px;
  left: 20px;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;
  width: 50px;
}

#openNav span {
  height: 3px;
  width: 100%;
  background-color: #fff;
  border-radius: 10px;
  position: relative;
  transform-origin: center;
  transition: all 0.3s ease;
}

#openNav span:before,
#openNav span:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #fff;
  border-radius: 10px;
  transition: all 0.3s ease;
}

.logo {
  position: fixed;
  top: 0;
  left: 250px;
  width: calc(100% - 200px);
  display: flex;
  align-items: center;
  height: 60px;
  z-index: 9998;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  background-color: #fafafa;
}
.system_title{
  margin-left: auto;
  margin-right: 6em;
  font-size: medium;
}

.sidebar {
  width: 250px;
}

/* table style */
table, tr, td, th{
    border-collapse: collapse;
    border: 1px solid #000000;
    width: 55%;
    height: 8px;
    font-weight: bold;
}
th{
    padding: 1em;
    background-color: #dfdfe0;
    width: 10em;
    font-size: 13px;
}
td{
    width: 8em;
    text-align: right;
    font-size: 13px;
    padding-right: 1em;
}

.failed-row {
  background-color: rgb(223, 140, 140);
}
.Exempted-row{
  background-color: #8c7fe2;
}


@media only screen and (min-width: 768px) {
  .sidebar {
    width: 250px;
  }
  
  #openNav {
    display: none;
  }
  main {
  position: relative;
  top: 5em;
  left: 27em;
  bottom: 0;
  right: 10em;
}
}
    </style>
</head>
<body>
    <!-- Navigation sidebar menu -->
  <div class="sidebar">
    <a href="HomePage.php">Home</a>
    <a href="AnnouncementPage.php">Announcements</a>
    <a href="Attendance.php" style="background-color: #007bff; color: #ffffff;">Attendance</a>
    <a href="GradePage.php">Grades</a>
    <a href="CourseRegistraion.php">Course registration</a>
    <a href="CurriculumPage.php">Curriculum</a>
    <a href="RecordPage.php">Records</a>
    <a href="ProfileSetting.php">Profile Settings</a>
  </div>

  <button id="openNav" >
    <img src="pngwing.com.png" sizes="10%" style="height: 2.5em; width: 2.5em;">
  </button>
  <!-- Logo and Title -->
 
  <div id="logo_title" class="logo">
    <img src="Logo.png" alt="logo" width="60" height="60">
    <span style="font-size: 1.5em; margin-left: 10px;">Tishk International University</span>
    <span class="system_title">Student Information System</span>
  </div>

  <main>
    <h1>Attendance</h1>
<p>Students failed with NA in previous semesters should attend the repeated course. </p>
  <p class="P_red"> Official attendance will be counted from the course registration date. </p>
    <table>
        <thead>
        <tr>
            <th>Course</th>
            <th>Status</th>
            <th>Applied Rate</th>
            <th>Fall Rate</th>
            <th>Total Classes</th>
            <th>Attended Classes</th>            
            <th>Registration Date</th>
        </tr>
        <tr>
            <th>ELT 270 / A <br>
                Academic Writing Skills Ii</th>
                <td>--</td>
                <td>81.82</td>
                <td>80</td>
                <td>22</td>
                <td>18</td>
                <td>26-JAN-23</td>
        </tr>
        <tr>
            <th>IT 118 / A <br>
            Programming Ii</th> 
            <td>Exempt</td>
            <td>--</td>
            <td>80</td>
            <td>10</td>
            <td>--</td>
            <td>26-JAN-23</td>

        </tr>
        <tr>
            <th>163 / A <br>
            Calculus I (Spring)</th>
            <td>Exempt</td>
            <td>--</td>
            <td>80</td>
            <td>4</td>
            <td>--</td>
            <td>03-MAY-23</td>

        </tr>
        <tr>
            <th>IT 212 / A <br>
                Object Oriented Programming</th>
                <td>Fail</td>
                <td>79.41</td>
                <td>80</td>
                <td>34</td>
                <td>27</td>
                <td>02-MAY-23</td>

        </tr>
        <tr>
            <th>IT 216 / A <br>
                Database Systems Ii</th>
                <td>--</td>
                <td>84.92</td>
                <td>80</td>
                <td>26.5</td>
                <td>22.5</td>
                <td>17-APR-23</td>

        </tr>
        <tr>
            <th>IT 240 / A <br>
                Web Design</th>
                <td>95</td>
                <td>--</td>
                <td>80</td>
                <td>50</td>
                <td>38</td>
                <td>23-APR-23</td>

        </tr>
        <tr> 
            <th>PHYS 102 / A <br>
                General Physics Ii</th>
                <td>Exempt</td>
                <td>90.91</td>
                <td>80</td>
                <td>22</td>
                <td>20</td>
                <td>04-MAY-23</td>

        </tr>
    </thead>

    <tbody>

    </tbody>
    </table>
  </main>

</body>
<script>
  const tableRows = document.querySelectorAll('table tr:not(:first-child)');

  tableRows.forEach(row => {
  const statusCell = row.cells[1];
  if (statusCell.textContent.trim() === 'Fail') {
    row.classList.add('failed-row');
  }
});

</script>

</html>
