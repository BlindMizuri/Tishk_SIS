<?php
// Check if the user has a valid cookie
if (isset($_COOKIE["user"])) {
    // Unset or delete the cookie to sign out the user
    setcookie("user", "", 0, "/");
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signOut"])) {
    // Unset or delete the cookie to sign out the user
    setcookie("user", "", 0, "/");
    header("Location: loginPage.php");
    exit();
}

// ... (existing login logic)
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>

	<!-- Navigation sidebar menu -->
	<div class="sidebar">
		<a href="HomePage.php">Home</a>
		<a href="AnnouncementPage.php">Announcements</a>
		<a href="Attendance.php">Attendance</a>
		<a href="GradePage.php">Grades</a>
		<a href="CourseRegistraion.php">Course registration</a>
		<a href="CurriculumPage.php">Curriculum</a>
		<a href="RecordPage.php">Records</a>
		<a href="ProfileSetting.php" style="background-color: #007bff; color: #ffffff;">Profile Settings</a>
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
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Account Settings</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="user2.jpg" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">Kiran Acharya</h4>
					</div>
					<div class="nav flex-column nav-pills id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
						<a class="nav-link" id="language-tab" data-toggle="pill" href="#language" role="tab" aria-controls="language" aria-selected="false">
							<i class="fa-solid fa-language  mr-1"></i>
							Language
						</a>
						<form method="post" action="">
						<a class="nav-link" id="signOutButton" data-toggle="pill" href="#SignOut" role="tab" aria-controls="false" aria-selected="false" data-target="#signOutModal">
							<i class="fa fa-sign-out text-center mr-1"></i> 
							Sign out
						</a>
						</form>
						  
						
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>First Name</label>
								  	<input type="text" class="form-control" value="Meer">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Last Name</label>
								  	<input type="text" class="form-control" value="Hoger">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="test@gmail.com">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone Number 1</label>
								  	<input type="text" class="form-control" value="+750xxxxxxx">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Address</label>
								  	<input type="text" class="form-control" value="Erbil">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone Number 2</label>
								  	<input type="text" class="form-control" value="+964770xxxxxxx">
								</div>
							</div>
							
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<!-- language setting -->
					<div class="tab-pane fade" id="language" role="tabpanel" aria-labelledby="language-tab">
						<h3 class="mb-4">Language Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Language</label>
									<select class="form-control">
										<option value="en">English</option>
										<option value="fr">Kurdish</option>
										<option value="es">Arabic</option>
										<option value="es">Turkish</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="popupContainer">
			<div class="popupContent">
				<h3>Are you sure you want to sign out?</h3>
				<span><button id="confirmSignOutButton">Confirm</button>
			  <button id="cancelSignOutButton">Cancel</button></span>
			</div>
		  </div>
	</section>

</main>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

<script>
	
	const signOutButton = document.getElementById('signOutButton');
const popupContainer = document.getElementById('popupContainer');
const confirmSignOutButton = document.getElementById('confirmSignOutButton');
const cancelSignOutButton = document.getElementById('cancelSignOutButton');

signOutButton.addEventListener('click', function() {
  popupContainer.style.display = 'block';
});

confirmSignOutButton.addEventListener('click', function() {
	window.location.href = "loginPage.php";
  popupContainer.style.display = 'none';
});

cancelSignOutButton.addEventListener('click', function() {
  popupContainer.style.display = 'none';
});


  </script>
  
  
</html>
