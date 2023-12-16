<?php
// Check if the user has a valid cookie
if(isset($_COOKIE["user"])) {
    header("Location: HomePage.php");
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $enteredUsername = $_POST["StudentID"];
    $enteredPassword = $_POST["password"];

    // Connect to your MySQL database (replace these values with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "university";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute a SQL query to retrieve the user's credentials
    $sql = "SELECT StudentID, Password FROM students WHERE StudentID = '$enteredUsername'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, check the password
        $row = $result->fetch_assoc();
        $correctUsername = $row["StudentID"];
        $correctPassword = $row["Password"];

        if ($enteredPassword == $correctPassword) {
            // Set a session cookie to store the username
            setcookie("user", $enteredUsername, 0, "/");
            // Redirect to the homepage if login is successful
            header("Location: HomePage.php");
            exit();
        } else {
            $errorMessage = "Incorrect password.";
        }
    } else {
        // User not found
        $errorMessage = "User not found.";
    }

    // Close the database connection
    $conn->close();
}
?>


<!DOCTYPE html >
<html lang="en">
  <head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0" >

    <title>SIS Login</title>
    <style>
      /* Global styles for the page */
      body {
        background-color: #fafafa;
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #262626;
        line-height: 1.5;
      }
      /* Styles for the container holding the login form */
      .container {
        max-width: 25em;
        margin: 0 auto;
        padding: 4em;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
        display: flex;
        margin-top: 5em;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
      /* Styles for the logo image and text */
      .logo {
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;
        display: flex;

      }
      /* sets the maximum width of the img */
      .logo img {
        max-width: 200px;
        transition: transform 0.4s;
      }

      /* System title */
      h1 { 
        font-size: 28px;
        margin-bottom: 20px;
        text-align: center;
        color: #262626;
      }
      
      /* Styles for the form elements */
      form {
        display: flex;
        flex-direction: column;
      }
      /* style all labels for the input */
      label {
        margin-bottom: 10px;
        color: #262626;
        font-weight: 600;
      }

      /* inputs like ID PASS and Button */
      input[type="text"],
      input[type="password"] {
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #dbdbdb;
        box-sizing: border-box;
        font-size: 16px;
      }
      input[type="text"]::placeholder,  /*placeholder is the text inside the input before clicked*/
input[type="password"]::placeholder {
  color: #999;
  font-style: italic;
  font-size: 14px;
}
            /* login button*/
      input[type="submit"] {    
        background-color: #0095f6;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
      }
    /* when mouse over change color to dark blue */
      input[type="submit"]:hover {
        background-color: #04082c;
      }
        
      /* when clicked it moves the button down 2PX */
      input[type="submit"]:active {
        transform: translateY(2px);
      }

      /* Style for when user makes wrong login */
      #errorMessage {
			color: red;
			margin-top: 10px;
			text-align: center;
		}
    </style>
  </head>
  <body>
    <!-- Container for the login form -->
    <div class="container">
      <!-- Logo image and text -->
      <div class="logo">
        <img src="logo.png" alt="SIS Logo" id="logo" aria-label="SIS logo" title="Student Information System">
      </div>
      <!-- Login form -->
      <h1>Student Information System</h1>
      <form method="post" action="">
        <label for="StudentID">
            <input type="text" id="StudentID" name="StudentID" aria-label="Student ID" placeholder="Student ID" autocomplete="StudentID">
        </label>
        <label for="password">
            <input type="password" id="password" name="password" aria-label="Password" placeholder="Password" autocomplete="current-password">
        </label>
        <p id="errorMessage" aria-label="Error Message"><?php echo isset($errorMessage) ? $errorMessage : ''; ?></p>
        <input type="submit" value="Log In" id="submit" aria-label="submit" style="width: 100%;">
    </form>
    </body>
    <!-- Starting JavaScript -->
    <script>
      // Get references to the logo and submit button elements
      const logo = document.getElementById("logo");
      const submit = document.getElementById("submit");
    
      // Animate the logo on hover when mouse over
      logo.addEventListener("mouseover", () => {
        logo.style.transform = "scale(1.2)";
      });
    // Animate the logo on hover when mouse NOT over
      logo.addEventListener("mouseout", () => {
        logo.style.transform = "scale(1)";
      });
    
      // Animate the submit button on hover
      submit.addEventListener("mouseover", () => {
        submit.style.backgroundColor = "#04082c";
      });
    
      submit.addEventListener("mouseout", () => {
        submit.style.backgroundColor = "#0095f6";
      });
    
      //animation for when login is clicked it makes the button go down 2px
      submit.addEventListener("mousedown", () => {
        submit.style.transform = "translateY(2px)";
      });
    
      submit.addEventListener("mouseup", () => {
        submit.style.transform = "translateY(0)";
      });
    
</script>
</html>
