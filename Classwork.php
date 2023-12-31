<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <title>Web Design Classroom</title>

    <style>

/* Sidebar styling */
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 200px;
  height: 100%;
  padding-top: 20px;
  text-align: left;
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
background-color: rgb(243, 243, 243);
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
  width: 100%;
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
  left: 25em;
  bottom: 0;
  right: 10em;
}

    </style>

</head>
<body>
    <!-- Navigation sidebar menu -->
  <div class="sidebar mt-[5rem] ml-7">

    <a href="HomePage.php" class="border-b-[2px] ">
        <i class="fa-solid fa-house" ></i>
        <span class="nav-link">Home</span>
    </a>

    <a href="Post.php"  class="mt-3 ">
        <i class="fa-sharp fa-solid fa-bullhorn"></i>
        <span class="nav-link">Posts</span>
    </a>

    <a href="Classwork.php">
        <i class="fa-solid fa-book"></i>
        <span class="nav-link">Classwork</span>
    </a>

    <a href="Message.html">
        <i class="fa-solid fa-message"></i>
        <span class="nav-link">Masseges</span>
    </a>

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



</body>
</html>