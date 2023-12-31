<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="script.js"></script>
    <script>
         function toggleDarkMode() {
        if (localStorage.getItem('darkMode') === 'enabled') {
          disableDarkMode();
        } else {
          enableDarkMode();
        }
      }
    
      // Check if dark mode preference is stored in localStorage
      if (localStorage.getItem('darkMode') === 'enabled') {
        enableDarkMode();
      } else {
        disableDarkMode();
      }
    </script>
    

    <style>




    /* Global styles for the page */
        body {
          background-color: #fafafa;
          font-family: Arial, sans-serif;
          font-size: 14px;
          color: #262626;
          margin: 0;
          padding: 0;
          overflow-x: hidden;
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
          line-height: 1.5;

        }

        .dark-mode .sidebar-link {
    color: #d6d6d6;
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
        .dark-mode .sidebar a:hover {
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
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
        .dark-mode .logo{
            color: #d6d6d6;
            box-shadow: 0px 2px 5px rgba(235, 235, 235, 0.1);
        }
        .system_title{
          margin-left: auto;
          margin-right: 6em;
          font-size: medium;
          
        }
        .dark-mode .system_title{
            color: #d7d7d7
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
  left: 30em;
  bottom: 0;
  right: 10em;
}

.divProfile{
    display: flex;
    font-size: 16px;
    width: 100%;
    height: 10em;
    margin-top: 4em;
}
.Student-Info{
    margin-top: 0.3em;
    font-size: 16px;
    width: 28em;
    line-height: 1.3;
}
h2{
            font-size: 23px;
            color: #262626;
            vertical-align: middle;
            width: 7em;
            margin-bottom: 0em;
}
.dark-mode h2{
    color: #d6d6d6;
}

.Align-Info{
    display: flex;
    flex-direction: column;
    margin-left: 1em;
}
.dark-mode .Align-Info{
    color: #d6d6d6;
}
/* Latest Announcement */
table, tr{
    border: 1px solid rgb(223, 223, 223);
    border-collapse: collapse;
    width: 28em;
    height: 2.5em;
    margin-left: 4%;
    margin-top: 1em;
}

td, th{
    font-size: 15px;
    height: 40px;

}
th{
    height: fit-content;
    vertical-align: middle;
    width: 100%;
    text-align: center;
    background-color: #ccc;
}


td:first-child{
    position: absolute;
    padding: 0.8em 2.2em;
    
}

td:nth-child(2) {
        padding-left: 4em;
        line-height: 1.3;
        width: 45%;
    }
    .openAnnouncementPage:hover{
        cursor: pointer;
    }
    .openGradesPage{
        cursor: pointer;
    }

    .dark-mode .tableHeader{
        background-color: #3b3b3b;
        color: #d6d6d6;
    }

    .dark-mode td{
        color: #f7f7f7;
    }

    .courseTable {
  width: 40%;
  margin-left: 0%;
  margin-top: 3em;
}

.courseTable th,
.courseTable td {
  font-size: 15px;
  height: 30px;
  padding: 0.8em 2.2em;
}

.courseTable th {
  height: fit-content;
  vertical-align: middle;
  width: 100%;
  text-align: center;
  background-color: #ccc;
}

.courseTable td:first-child {
  padding-top: 1.2em;
  width: auto;
}

.courseTable td:nth-child(2) {
  padding-left: 10em;
  line-height: 1.3;
  width: auto;
}

.courseTable td.new-label {
  width: 20%;
  text-align: center;
}
.new-label {
  color: #007bff;
  padding: 0.5em 1em;
  border-radius: 5px;
  text-align: center;
  width: 2px;
}
.dark-mode .new-label{
    color: #1184ff;
}

.new-label:empty {
  display: none; /* Hide the label if it's empty */
}
   
.custom-button {
    display: inline-block;
    padding: 6px 12px;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }


  .custom-button:hover {
    background-color: #0056b3;
  }

/* Link styles */
.custom-link {
            color: #007bff;
            text-decoration: none;
        }

        .custom-link:hover {
            text-decoration: underline;
        }
    
       .dark-mode .courseHead{
        background-color: #3b3b3b;
        color: #d6d6d6;
        }



    :root {
  --background-color: #fff;
}

/* Light mode */
body {
  background-color: var(--background-color);
  color: var(--text-color);
}

/* Dark mode */
.dark-mode {
  --background-color: #333;
}


.toggle-switch {
            display: inline-block;
            position: relative;
            width: 60px;
            height: 34px;
            position: absolute;
            top: 0;
            margin: 4.5% 78%;
        }

        .toggle-switch .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            border-radius: 34px;
            transition: background-color 0.3s ease;
        }

        .toggle-switch .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: #1a1616;
            border-radius: 50%;
            transition: transform 0.3s ease;
            
        }

        .toggle-switch input[type="checkbox"] {
            display: none;
        }

        .toggle-switch input[type="checkbox"]:checked + .slider {
            background-color: #dfe6ec;
        }

        .toggle-switch input[type="checkbox"]:checked + .slider:before {
            transform: translateX(16px);
            
        }
    



        @media only screen and (max-width: 1400px) {
	.sidebar {
	  width: 210px;
     
	}
	.logo {
		position: fixed;
		top: 0;
		left: 210px;
		width: calc(75% - 100px);
		display: flex;
		align-items: center;
		height: 60px;
		z-index: 9999;
	  }
      .sidebar-link{
        font-size: 16px !important; 
      }
	
	#openNav {
	  display: none;
	}
	main {
	position: relative;
	top: 5em;
	left: 230px;
	bottom: 0;
	right: 10em;
	margin-right: 20%;
	width: 76%;
  }
  .ProfilePic{
    width: 130px;
    height: 120px;
  }
  .Student-Info{
    font-size: 10px !important;
  }
  h2{
    font-size: 17px;
  }
  table{
    border: 1px solid rgb(223, 223, 223);
    border-collapse: collapse;
    width: 19em;
    margin-left: 0%;
    margin-top: 0em;
  }
  .UniversityTitle{
    font-size: 17px !important;
  }
  .system_title{
    font-size: 14px;
  }
  .courseHead{
    font-size: 11px !important;
    height: 10px;
  }
  .CourseDate:first-child{
    margin-top: 5px !important;
    
  }
  .CourseDate{
    width: 27px !important;
    font-size: 9px !important;
    
  }
  .courseRow{
    height: 4px;
  }
  .courseTable{
    width: 30px ;
    height: 5px;
  }
  .toggle-switch {
            display: inline-block;
            position: relative;
            width: 37px;
            height: 21px;
            position: absolute;
            top: 0;
            margin: 7% 68%;
        }
        .toggle-switch .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 2px;
            bottom: 2px;
            background-color: #1a1616;
            border-radius: 50%;
            transition: transform 0.3s ease;
            
        }
        .custom-button{
          width: 53px;
          font-size: 6px;
        }
        td, th{
    font-size: 11px;
    height: 6px;
}
        
  }

</style>
</head>
<body>

    <label class="toggle-switch">
        <input type="checkbox" class="checkbox" id="darkModeToggle">
        <span class="slider"></span>
      </label>
      

    
    
  <!-- Navigation sidebar menu -->
  <div class="sidebar">
    <a href="HomePage.php"  class="sidebar-link" style="background-color: #007bff; color: #ffffff;">Home</a>
    <a href="AnnouncementPage.php" class="sidebar-link">Announcements</a>
    <a href="Attendance.php" class="sidebar-link">Attendance</a>
    <a href="GradePage.php" class="sidebar-link">Grades</a>
    <a href="CourseRegistraion.php" class="sidebar-link">Course registration</a>
    <a href="CurriculumPage.php" class="sidebar-link">Curriculum</a>
    <a href="RecordPage.php" class="sidebar-link">Records</a>
    <a href="ProfileSetting.php" class="sidebar-link">Profile Settings</a>
  </div>

  <button id="openNav" >
    <img src="pngwing.com.png" id="ProfileImg" sizes="10%" style="height: 2.5em; width: 2.5em;">
  </button>

  <!-- Logo and Title -->
  <div id="logo_title" class="logo">
    <img src="Logo.png" alt="logo" width="60" height="60">
    <span class="UniversityTitle" style="font-size: 1.5em; margin-left: 10px;">Tishk International University</span>
    <span class="system_title">Student Information System</span>
  </div>

  <main>
    



    <div class="divProfile">
        <img class="ProfilePic" src="user2.jpg" alt="Profile picture">
        <div class="Align-Info">
            <h2>Kiran Acharya</h2>

            <p class="Student-Info">
                <b>Department:</b> INFORMATION TECHNOLOGY<br>
                <b>Student ID:</b> 150721032<br>
                <b>GRADE:</b> 2<br>
                <b>E-mail:</b> Kiran.acharya@gmail.com<br>
                <b>GPA:</b>	2.5<br>
            </p>
        </div>
    
    
    <table>
        <tr>
            <th colspan="4" class="tableHeader">Latest Announcement</th>
        </tr>
        <tr class="openAnnouncementPage" onclick="openAnnouncementPage()">
            <td style="width: 1;"><i class="fa-regular fa-message"></i> </td>
            <td>11-May<br> 10:25</td>
            <td>Alaa Ghazi</td>
            <td><i class="fa-solid fa-angle-right"></i></td>
        </tr>

    <tr>
        <th colspan="4" class="tableHeader">Latest Grade Submited</th>
    </tr>
    <tr class="openGradesPage" onclick="openGradesPage()">
        <td style="width: 1;"><i class="fas fa-chart-bar"></i> </td>
        <td>11-May<br> 10:25</td>
        <td>Web Design</td>
        <td><i class="fa-solid fa-angle-right"></i></td>
    </tr>

</table>
</div>

<table>

</table>

<table class="courseTable">
    <tr>
        <th colspan="5" class="courseHead">Courses</th>
    </tr>
    <tr class="courseRow">
        <td class="CourseDate">IT 240</td>
        <td class="CourseDate">WEB DESIGN</td>
        <td class="CourseDate"> <a href="Posts.php"><button class="custom-button">Classroom</button></a></td>
        <td class="CourseDate"><a href="https://my.tiu.edu.iq/pages/grp210p.php?bcode=1735&year=2022&donem=2&ccode=IT%20240&syl=1&printable=1" class="custom-link">Syllabus</a></td>
            <td class="CourseDate"><i class="far fa-envelope"></i></td>
    </tr>

    

    <tr>
            <td class="CourseDate">IT 218</td>
            <td class="CourseDate">PROBABILITY & STATISTICS</td>
            <td class="CourseDate"><button class="custom-button">Classroom</button></td>
            <td class="CourseDate"></td>
            <td class="CourseDate"><span class="new-label"></span></td>
        </tr>

       

        <tr>
            <td class="CourseDate">IT 211</td>
            <td class="CourseDate">DATA STRUCTURES & ALGORITHMS</td>
            <td class="CourseDate"><button class="custom-button">Classroom</button></td>
            <td class="CourseDate"></td>
            <td class="CourseDate"><span class="new-label"></span></td>
        </tr>

        <tr>
            <td class="CourseDate">IT 216</td>
            <td class="CourseDate">DATABASE SYSTEMS II</td>
            <td class="CourseDate"><button class="custom-button">Classroom</button></td>
            <td class="CourseDate"></td>
            <td class="CourseDate"><span class="new-label"></span></td>
        </tr>

        

        <tr>
            <td class="CourseDate">IT 212</td>
            <td class="CourseDate">OBJECT ORIENTED PROGRAMMING</td>
            <td class="CourseDate"><button class="custom-button">Classroom</button></td>
            <td class="CourseDate"><a href="https://my.tiu.edu.iq/pages/grp210p.php?bcode=1735&year=2022&donem=2&ccode=IT%20212&syl=1&printable=1" class="custom-link">Syllabus</a></td></td>
            <td class="CourseDate"><i class="far fa-envelope"></i></td>
        </tr>

    

        <tr>
            <td class="CourseDate">ELT 270</td>
            <td class="CourseDate">ACADEMIC WRITING SKILLS II</td>
            <td class="CourseDate"><button class="custom-button">Classroom</button></td>
            <td class="CourseDate"><a href="https://my.tiu.edu.iq/pages/grp210p.php?bcode=1735&year=2022&donem=2&ccode=ELT%20270&syl=1&printable=1" class="custom-link">Syllabus</a></td></td>
            <td class="CourseDate"><i class="far fa-envelope"></i></td>
        </tr>
    </tr>
</table>

<table>
    
</table>



  </main>


  </body>
  <script>
    function openAnnouncementPage() {
        window.location.href = "AnnouncementPage.php";
    }
    function openGradesPage() {
        window.location.href = "GradePage.php"
    }



    function enableDarkMode() {
  document.body.classList.add('dark-mode');
}

function disableDarkMode() {
  document.body.classList.remove('dark-mode');
}

function toggleDarkMode() {
  document.body.classList.toggle('dark-mode');
}


// Function to enable dark mode
function enableDarkMode() {
    document.body.classList.add('dark-mode');
    localStorage.setItem('darkMode', 'enabled'); // Store dark mode preference
  }

  // Function to disable dark mode
  function disableDarkMode() {
    document.body.classList.remove('dark-mode');
    localStorage.setItem('darkMode', 'disabled'); // Store dark mode preference
  }

  
</script>

  </html>