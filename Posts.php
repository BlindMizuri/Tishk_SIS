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
.sidebar a {
  padding: 8px 8px 8px 29px;
  text-decoration: none;
  font-size: 20px;
  color: #000000;
  transition: 0.2s;
  display: flex;
  align-items: center;
  
}

  

.sidebar a:hover {
     box-shadow: 0 0 5px rgba(124, 124, 124, 0.3);
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
  padding-left: 3em;
}
.system_title{
  margin-left: auto;
  margin-right: 6em;
  font-size: medium;
  
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
.custom-input{
  padding: 0.7rem;
}


  .input-container {
    display: flex;
    align-items: center;
    position: relative;
  }

  .input-container input {
    padding-right: 2.5rem; /* Adjust the value as needed */
  }

  .input-container .submit-button {
    position: absolute;
    right: 0.5rem; /* Adjust the value as needed */
    background-color: transparent;
    border: none;
    outline: none;
    cursor: pointer;
  }

  .input-container .submit-button:hover {
    color: blue; /* Adjust the color as needed */
  }
    </style>

</head>
<body>
    <!-- Navigation sidebar menu -->
  <div class="sidebar fixed top-7 left-1/2 transform -translate-x-1/2 mt-8 flex justify-center h-[8rem] w-[60rem] px-[5rem] bg-white border-b-[1px] pb-2" >

    <a href="HomePage.php" class="border-r-[2px] mr-5 rounded-lg ">
        <i class="fa-solid fa-house" ></i>
        <span class="nav-link  pl-2" > Home</span>
    </a>

    <a href="Post.php"  class="ml-3  w-[8rem] border-b-[5px] border-blue  rounded-lg">
        <i class="fa-sharp fa-solid fa-bullhorn"></i>
        <span class="nav-link  pl-2" > Posts</span>
    </a>

    <a href="Classwork.php" class="w-[10rem] rounded-lg" >
        <i class="fa-solid fa-book " ></i>
        <span class="nav-link pl-2" > Classwork</span>
    </a>

    <a href="Message.html" class="w-[10rem] rounded-lg">
        <i class="fa-solid fa-message"></i>
        <span class="nav-link pl-2"> Masseges</span>
    </a>

  </div>

  <button id="openNav" >
    <img src="pngwing.com.png" sizes="10%" style="height: 2.5em; width: 2.5em;">
  </button>
  <!-- Logo and Title -->
 
  <div id="logo_title" class="logo bg-white ">
    <img src="Logo.png" alt="logo" width="60" height="60">
    <span style="font-size: 1.5em; margin-left: 10px;">Tishk International University</span>
    <span class="system_title">Student Information System</span>
  </div>

  <!-- post -->
<div class="flex justify-center mt-[17rem] pb-[20rem] ">
    <div class="w-[50rem] flex item-center post border-[1px] p-6 py-10 rounded-xl">
        <img src="proPic.jpg" alt="profile" class="w-[50px] h-[50px] rounded-full">
        <div class="flex flex-col justify-center">
        <div class="text-sm pl-5">
            <span class="text-gray-500">Rêbîn Mohammed</span>
            <p class="time">14:27</p>
          </div>
          <div class="Announcement text-md mt-10"><p>Dear Students, 
            <br>
            <br>
            Please use this form to submit your coursework projects <br>
            https://forms.gle/CiPQT9bwA9SucQm39
            <br>
            <br>
            The form will be open until the deadline.</p>
        </div>
        <div class="border-[1px] w-[40rem] mt-4 rounded-lg">
        <img src="deadline.jpg" alt="post">
    </div>
    <div class="w-[30rem] mt-5 border-[1px] rounded-lg flex hover:text-blue-500 cursor-pointer">
        <img src="courseworkIMG.com_43054009-ca19-4830-9b86-89f1ea7f6a70" alt="" class="w-[10rem] pr-[5px] border-r-[2px]">
        <div class="flex-col pt-[13px] pl-[18px] ">
            <a href="https://drive.google.com/file/d/13v7GKxLPXTC9fmHAHkeBuHAWWSjyUGkq/view?usp=drive_web&authuser=0" class=" text-xl font-bold font-roboto ">IT 240 Project - Spring 20..</a>
            <p class="font-roboto font-semibold text-lg" style="color: #5f6368;">PDF</p>
        </div>
    </div>
    <div class="w-[50rem] mr-[50px] mt-[2rem]">
        <form action="message" class="h-[3rem] w-[20rem] ml-[10rem]">
          <div class="input-container">
            <img src="proPic.jpg" alt="gd" class="w-[2rem] h-[2rem] rounded-full mr-[1rem] mt[20rem]">
            <input type="text" id="message" name="message" class="border-[1px] mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md custom-input w-[20rem] h-[2rem]" placeholder="Message">
            <button type="submit" class="submit-button">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.414 10l3.293-3.293a1 1 0 011.414 0l3.293 3.293a1 1 0 11-1.414 1.414L8 10.414V16a1 1 0 11-2 0v-5.586L3.707 11.707a1 1 0 11-1.414-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </form>
      </div>
      
    
</div>
    </div>
</div>


  
  
</body>
</html>