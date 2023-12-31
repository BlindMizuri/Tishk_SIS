<?php
session_start(); // Start the session

// Updated code...
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['selectedCourse'])) {
  $selectedCourseData = $_POST['selectedCourse'];
  $_SESSION['selectedCourses'][] = $selectedCourseData;
}

// Initialize the flag
$courseSelected = false;

// Check if the 'selectedCourses' array exists in the session
if (!isset($_SESSION['selectedCourses'])) {
  $_SESSION['selectedCourses'] = array(); // Initialize it as an empty array
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['selectedCourse'])) {
    $selectedCourseData = $_POST['selectedCourse'];

    // Check if the course is not already in the session before adding it
    if (!in_array($selectedCourseData, $_SESSION['selectedCourses'])) {
        $_SESSION['selectedCourses'][] = $selectedCourseData;
    }

    // Set the flag to true to indicate that a course is selected
    $courseSelected = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
  background-color: #fafafa;
  font-family: Arial, sans-serif;
  font-size: 14px;
  color: #262626;
  line-height: 1.5;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

/* Styles for the heading */
h2{
    font-size: 23px;
    margin-top: 2.3em;
    margin-bottom: 1em;
    text-align: left;
    color: #262626;
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
  z-index: 9999;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}
.system_title{
  margin-left: auto;
  margin-right: 6em;
  font-size: medium;
  
}

.sidebar {
  width: 250px;
}

#openNav {
    display: none;
  }
  main {
  position: relative;
  top: 50px;
  left: 36em;
  bottom: 0;
  right: 10em;
}

table, tr{
    border: 1px solid rgb(223, 223, 223);
    border-collapse: collapse;
    width: 50%;
}

#secondTable td {
  height: 40px; /* Adjust the height as desired */
  vertical-align: middle;
  padding-bottom: 1em;
  padding-left: 1em;
}

#secondTable th {
 padding-left: 1em;
}

#secondTable td:first-child {
        padding-left: 2em;
    }

#takeCourse{
    text-align: center;
    font-size: 16px;
}



#takeCourse{
    border-bottom: 1px solid;
    border-bottom: 2px solid rgb(221, 221, 221);
    box-shadow: 0px 2px 20px rgba(0, 0, 0.1, 0.3);
}
 /* Add the following styles for the table */
 #secondTable {
        width: 97%;
        margin-left: 1em;
        margin-bottom: 0.8em;
        margin-top: 1em;
    }

    #secondTable tr:first-child {
        width: 8%; /* Adjust the width as desired */
        text-align: left;
    }

    #secondTable tr:nth-child(2) {
        width: 44%; /* Adjust the width as desired */
        text-align: left;
    }

    #secondTable tr:nth-child(3),
    #secondTable tr:nth-child(4),
    #secondTable tr:nth-child(5) {
        width: 10%; /* Adjust the width as desired */
    }

    #secondTable tr:last-child {
        width: 20%; /* Adjust the width as desired */
    }
    #buttonTake {
        background-color: #007bff;
        border: none;
        width: 80px; /* Adjust the width as desired */
        height: 30px; /* Adjust the height as desired */
        color: #fff;
        font-size: 14px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #buttonTake:hover {
        background-color: #0056b3;
    }
    .divnextPage{
        display: flex;
    }
    .divnextPage p{
        font-size: 16px;
        margin-left: 290%;
        margin-top: 4em;
        width: 12em;
    }
    .divnextPage p:hover{
        color: #007bff;
    }

    </style>
</head>
<body>
    
    
    <!-- Navigation sidebar menu -->
 <div class="sidebar">
    <a href="HomePage.php">Home</a>
    <a href="AnnouncementPage.php">Announcements</a>
    <a href="Attendance.php">Attendance</a>
    <a href="GradePage.php">Grades</a>
    <a href="CourseRegistraion.php" style="background-color: #007bff; color: #ffffff;">Course registration</a>
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
        <div class="divnextPage">
            <h2>Course Registration</h2>
            <a href="SeeSelectedCourses.php" style="text-decoration: none; color: inherit;">
                <p style="display: flex; align-items: center;">See Selected Courses <i class="fas fa-chevron-right" style="margin-left: 5px;"></i></p>
            </a>
        </div>
        <table>
            <tr id="takeCourse">
                <td style="padding: 1em 0em; background-color: #eeeeee;">Take Course</td>
            </tr>
            <tr>
                <td>
                    <form method="post" action="">
                        <table id="secondTable">
                            <!-- ... (table headers and rows) ... -->
                            <tr>
                                <td>IT 229</td>
                                <td>COMPUTER HARDWARE</td>
                                <td>2021</td>
                                <td>3</td>
                                <td>3</td>
                                <!-- Add a hidden input field to store the selected course data -->
                                <td>
    <?php
    $courseData = "IT 229,COMPUTER HARDWARE,2021,3,3"; // Define the course data
    $isSelected = in_array($courseData, $_SESSION['selectedCourses']);
    ?>
    <input type="hidden" name="selectedCourse" value="<?= $courseData ?>">
    <!-- Check if the course is selected and update the display -->
    <?php
    if ($isSelected) {
        echo 'Selected';
    } else {
        echo '<button type="submit" id="buttonTake">Take</button>';
    }
    ?>
</td>
                            </tr>
                            <tr>
                                <td>IT 215</td>
                                <td>DATABASE SYSTEMS I</td>
                                <td>2021</td>
                                <td>3</td>
                                <td>3</td>
                                <td>Not opened</td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </main>
</body>
</html>
