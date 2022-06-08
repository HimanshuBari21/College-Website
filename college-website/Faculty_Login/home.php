<?php 

session_start();

if (isset($_SESSION['staff_id']) && isset($_SESSION['Username'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

	<style>
		body {
            background: linear-gradient(0deg, dodgerblue ,dodgerblue);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #ff5500;
        }

        .profile-button {
            color: #000000;
            background: white;
            box-shadow: none;
            border: 1px solid #000000;
        }

        .profile-button:hover {
            background-color: #000000;   
        }

        .back:hover {
            color: #682773;
            cursor: pointer;
        }

        .labels {
            font-size: 11px;
        }
		.profile{
			background: url("img/<?php echo $_SESSION['img'];?>");
			height:200px;
			width: 200px;
			background-size: cover;
			border-radius: 50%;
		}
	</style>
  

</head>

<body>

		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<body>
<br>
    <br>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <div class="profile">

					</div>
                </div>
                <br>
                <button class="btn btn-block btn-primary">Profile</button>
                <a href="noticeboard.html"><button class="btn btn-block">Upload Notice</button></a>
                <a href="change_pass.php" ><button class="btn btn-block">Change Password</button></a>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text">Profile</h4>
                    </div>
					<h5>Name</h5>
                    <h3> <?php echo $_SESSION['Name']; ?></h3>
					<h5>Username</h5>
                    <h3> <?php echo $_SESSION['Username']; ?></h3>
					<h5>Gender</h5>
                    <h3> <?php echo $_SESSION['Gender']; ?></h3>
					<h5>Qualification</h5>
                    <h3> <?php echo $_SESSION['Qualification']; ?></h3>
					<h5>Designation</h5>
                    <h3> <?php echo $_SESSION['Designation']; ?></h3>
					<h5>Experience</h5>
					<h3> <?php echo $_SESSION['Experience']; ?></h3>
					<h5>Email Id</h5>
					<h3> <?php echo $_SESSION['Email']; ?></h3>
					
					
                    
                    </div>
                    <div class="mt-5 text-center">
                        <a href="logout.php" ><button class="btn btn-primary profile-button" type="button">
                            Logout
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</body>

</html>

<?php 

}else{


     exit();

}

 ?>