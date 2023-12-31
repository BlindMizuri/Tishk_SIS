<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grading System</title>
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
        margin-left: 1em;
        margin-bottom: 20px;
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


      /* Style the table */
      table {
        margin-left: 1em;
        border-collapse: collapse;
        width: 40%;
        border: 1px solid #ddd;
        border-radius: 3em;
      }

      /* Style the table rows */
      tr {
        background-color: #fff;
        
      }
      #gradesTable tr:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

      /* Style alternate table rows */
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      /* Add some space between rows */
      td:not(:last-child) {
        padding-left: 1em;
        padding-right: 20px;
        height: 3em;
      }
      
  .sidebar {
    width: 250px;
  }
  #openNav {
    display: none;
  }
  main {
  position: fixed;
  top: 50px;
  left: 20em;
  bottom: 0;
  right: 0;
}
.new-label {
  background-color: #007bff;
  color: #ffffff;
  padding: 4px 8px;
  border-radius: 4px;
  font-weight: bold;
}




    </style>
  </head>
  <body>


      <!-- Navigation sidebar menu -->
  <div class="sidebar">
    <a href="HomePage.php">Home</a>
    <a href="AnnouncementPage.php">Announcements</a>
    <a href="Attendance.php">Attendance</a>
    <a href="GradePage.php" style="background-color: #007bff; color: #ffffff;">Grades</a>
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
    <!-- Page heading -->
    <h1>Grades</h1>
    <!-- Grading table -->
    <table id="gradesTable">
      <tbody>
        <tr>
          <td>Web Design</td>
          <td>AA</td>
        </tr>
        <tr>
          <td>OOP</td>
          <td>BC</td>
        </tr>
        <tr>
          <td>Programming</td>
          <td>CB</td>
        </tr>
        <tr>
          <td>Academic Writing</td>
          <td>CD</td>
        </tr>
        <tr>
          <td>Probability and Statics</td>
          <td>AC</td>
        </tr>
        <tr>
          <td>Database</td>
          <td>BC</td>
        </tr>
      </tbody>
    </table>
    
  </main>
  </body>
  <script>
let previousRow = null;
let detailsTable = null;

function showDetails(row) {
  // Check if there is a previous row that was clicked
  if (previousRow !== null && detailsTable !== null) {
    document.body.removeChild(detailsTable);
  }

  // Get the data for the new table
  const courseName = row.cells[0].innerText;
  const quizGrade1 = 95; // Use numerical grades instead of letters
  const quizGrade2 = 82;
  const quizGrade3 = 86; 
  const homeworkGrade = 85;
  const participationGrade = 75;
  const projectGrade = 90;
  const midtermGrade = 88;
  const finalExamGrade = 93;

  // Create the new table
  const newTable = document.createElement('table');
  newTable.classList.add('details-table'); // Add a class to the new table
  const headerRow = newTable.insertRow();
  const courseNameCell = headerRow.insertCell();
  courseNameCell.innerText = courseName;
  courseNameCell.style.padding = '10px'; // Add some padding to the cell
  
  const dataRow1 = newTable.insertRow();
  const quizCell = dataRow1.insertCell();
  quizCell.innerText = 'Quiz1';
  const quizDataCell = dataRow1.insertCell();
  quizDataCell.innerText = quizGrade1;

  const dataRow2 = newTable.insertRow();
  const quizCell2 = dataRow2.insertCell();
  quizCell2.innerText = 'Quiz 2';
  const quizDataCell2 = dataRow2.insertCell();
  quizDataCell2.innerText = quizGrade2;

  const dataRow3 = newTable.insertRow();
  const quizCell3 = dataRow3.insertCell();
  quizCell3.innerText = 'Quiz 3';
  const quizDataCell3 = dataRow3.insertCell();
  quizDataCell3.innerText = quizGrade3;

  const dataRow4 = newTable.insertRow();
  const homeworkCell = dataRow4.insertCell();
  homeworkCell.innerText = 'Homework';
  const homeworkDataCell = dataRow4.insertCell();
  homeworkDataCell.innerText = homeworkGrade;

  const dataRow5 = newTable.insertRow();
  const participationCell = dataRow5.insertCell();
  participationCell.innerText = 'Participation';
  const participationDataCell = dataRow5.insertCell();
  participationDataCell.innerText = participationGrade;

  const dataRow6 = newTable.insertRow();
  const projectCell = dataRow6.insertCell();
  projectCell.innerText = 'Project';
  const projectDataCell = dataRow6.insertCell();
  projectDataCell.innerText = projectGrade;

  const dataRow7 = newTable.insertRow();
  const midtermCell = dataRow7.insertCell();
  midtermCell.innerText = 'Midterm';
  const midtermDataCell = dataRow7.insertCell();
  midtermDataCell.innerText = midtermGrade;

  const dataRow8 = newTable.insertRow();
  const finalExamCell = dataRow8.insertCell();
  finalExamCell.innerText = 'Final Exam';
  const finalExamDataCell = dataRow8.insertCell();
  finalExamDataCell.innerText = finalExamGrade;

  // Position the new table next to the clicked row
  const rect = row.getBoundingClientRect();
  const tableWidth = 500; // Set the width of the new table
  const leftPosition = rect.right + 20;
  const topPosition = gradesTable.getBoundingClientRect().top;
  newTable.style.position = 'absolute';
  newTable.style.left = leftPosition + 'px';
  newTable.style.top = topPosition + 'px';
  newTable.style.width = tableWidth + 'px';

  // Add the new table to the document
  document.body.appendChild(newTable);

  // Store the current row and table for future use
  previousRow = row;
  detailsTable = newTable;
}

// Add an event listener to each row of the grades table
const gradesTable = document.getElementById('gradesTable');
const rows = gradesTable.getElementsByTagName('tr');
for (let i = 0; i < rows.length; i++) {
  const row = rows[i];
  row.addEventListener('click', function() {
    showDetails(row);

  });
}



  </script>
</html>
