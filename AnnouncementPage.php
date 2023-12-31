<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Information System</title>
    <script  src="script.js">// Function to toggle dark mode
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
  line-height: 1.5;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

/* Dark mode styles */
body.dark-mode {
            background-color: #333333;
            color: #ffffff;
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

.announcements {
  padding: 10px;
  margin-top: 10px;
}
/* Style the table */
table {
        border-collapse: collapse;
        width: 75%;
        border: 1px solid #ddd;
      }
      
      /* Style the table rows */
      tr {
        background-color: #fff;
      }
      
      /* Style alternate table rows */
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      
      /* Add some space between rows */
      td:not(:last-child) {
        padding-right: 20px;
      }
      .notification-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: bold;
  width: 100%;
  padding: 5px;
  height: 2em;
}

.notification-name {
  flex: 2;
  margin-right: 10px;
  font-weight: bold;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.notification-message {
  flex: 5;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.notification-date {
  flex: 1;
  font-size: 12px;
  text-align: right;
  padding-right: 2em;
}

.notification-row {
  border: 1px solid #ddd;
  padding: 10px;
  transition: box-shadow 0.2s ease-in-out;
  background-color: #f5f5f5;
  cursor: pointer;
}

.notification-row.unread {
  background-color: #fff;
}

.notification-row:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}





 
  
  #openNav {
    display: none;
  }
  main {
  position: relative;
  top: 50px;
  left: 25em;
  bottom: 0;
  right: 10em;
}




.message {
      border-left: 4px solid #007bff;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
      background-color: #fff;
      width: 75%;
    }

    .message .name {
      font-weight: bold;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .message .title {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .message .publish-date {
      color: #888;
      margin-bottom: 10px;
    }

    .message .deadline {
      font-weight: bold;
      color: red;
      margin-top: 5px;
    }

    .label {
      font-weight: bold;
      color: #888;
      margin-bottom: 5px;
    }
    
    .messageContent {
      margin-bottom: 10px;
    }

    .popup {
      display: none;
      position: absolute;
      background-color: #fff;
      border: 1px solid #ddd;
      padding: 20px;
      z-index: 9999;
      width: 72.9%;
    }
    .popup.show {
      display: block;
    }

    .notification-sign {
  display: inline-block;
  padding: 4px 8px;
  border-radius: 4px;
  background-color: #007bff;
  color: #fff;
  font-weight: bold;
  margin-right: 5px;
}

.new-sign {
  background-color: #007bff;
}


.notification-row.pushed {
  transform: translateY(40px); /* Adjust this value as needed */
}


  </style>
</head>
<body>

  <!-- Navigation sidebar menu -->
  <div class="sidebar">
    <a href="HomePage.php">Home</a>
    <a href="AnnouncementPage.php" style="background-color: #007bff; color: #ffffff;">Announcements</a>
    <a href="Attendance.php">Attendance</a>
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
    <div class="announcements">
      <h2>Announcements</h2>
    </div>
    <table id="announcementList">
      <tbody id="notification-table">
        
      </tbody>
    </table>
    <div id="popup" class="popup">
      <div class="message">
        <div class="label">Name:</div>
        <div class="name">Alaa Ghazi</div>
    
        <div class="label">Title:</div>
        <div class="title">Homework</div>
    
        <div class="label">Published:</div>
        <div class="publish-date">2023-05-11</div>
    
        <div class="label">Content:</div>
        <div class="messageContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet nulla eu ex pretium ultrices. Vestibulum tempus eros a libero tincidunt, ut placerat ligula tincidunt. Duis fermentum, tellus at rhoncus efficitur, elit orci auctor est, id luctus est orci vel tellus. Donec vehicula mauris sit amet nisi consequat, eu eleifend lacus dignissim.</div>
    
        <div class="label">Deadline:</div>
        <div class="deadline">2023-05-20</div>
      </div>
    </div>
    
  
  </main>

  <script>
    function toggleDarkMode() {
      if (localStorage.getItem('darkMode') === 'enabled') {
        disableDarkMode();
      } else {
        enableDarkMode();
      }
    }
  
    if (localStorage.getItem('darkMode') === 'enabled') {
      enableDarkMode();
    } else {
      disableDarkMode();
    }
  </script>
  
  <script>
    const table = document.getElementById('announcementList');
  
    const notifications = [
      {
        name: "Alaa Ghazi",
        message: "Homework",
        date: "2023-05-11",
        sign: " "
      },
      {
        name: "Rebin Muhammed",
        message: "Web Design",
        date: "2023-05-04",
        sign: ""
      },
      {
        name: "Savraddin",
        message: "Course schedule",
        date: "2023-05-01",
        sign: ""
      },
    ];
  
    const tableBody = document.getElementById("notification-table");
  
    notifications.forEach((notification) => {
      const row = document.createElement("tr");
      row.classList.add("notification-row");
      row.className = `notification-row ${notification.read ? "" : "unread"}`;
      row.innerHTML = `
        <td>
          <div class="notification-header">
            ${notification.sign ? `<span class="notification-sign">${notification.sign}</span>` : ""}
            <span class="notification-name">${notification.name}</span>
            <span class="notification-message">${notification.message}</span>
            <span class="notification-date">${notification.date}</span>
          </div>
        </td>
      `;
  
      const message = row.querySelector('.notification-header');
      message.addEventListener('click', (event) => {
        const clickedMessage = event.currentTarget;
        const tableRect = table.getBoundingClientRect();
        const messageRect = clickedMessage.getBoundingClientRect();
        const top = messageRect.top - 20;
        const left = messageRect.left - tableRect.left - 2;
  
        popup.style.top = `${top}px`;
        popup.style.left = `${left}px`;
        popup.classList.toggle('show');
  
        // Toggle class for rows below the clicked row
        const rows = Array.from(document.getElementsByClassName('notification-row'));
        const clickedRowIndex = rows.indexOf(clickedMessage.parentElement.parentElement);
        const rowsBelow = rows.slice(clickedRowIndex + 1);
        rowsBelow.forEach(row => {
          row.classList.toggle('pushed');
        });
      });
  
      tableBody.appendChild(row);
    });

    const popup = document.getElementById('popup');
    const originalTop = popup.offsetTop;

    window.addEventListener('resize', () => {
      const rows = Array.from(document.getElementsByClassName('notification-row'));
      const rowsBelow = rows.slice(rows.indexOf(popup.parentElement) + 1);
      const topDifference = popup.offsetTop - originalTop;
      rowsBelow.forEach(row => {
        row.style.transform = `translateY(${popup.offsetHeight + topDifference}px)`;
      });
    });

    
  </script>
  

</html>
