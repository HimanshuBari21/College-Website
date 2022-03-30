<?php 

session_start();

if (isset($_SESSION['staff_id']) && isset($_SESSION['Username'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

  

</head>

<body>

     <h1>Hello, <?php echo $_SESSION['Username']; ?></h1>
	 <h1><?php echo $_SESSION['Name']; ?></h1>
	 <h1><?php echo $_SESSION['Gender']; ?></h1>
	 <h1><?php echo $_SESSION['Qualification']; ?></h1>
	 <h1><?php echo $_SESSION['Designation']; ?></h1>
	 <h1><?php echo $_SESSION['Experience']; ?></h1>
	 <h1><?php echo $_SESSION['Email']; ?></h1>
	 <a href="change_pass.php">Change Password</a><br>

     <a href="logout.php">Logout</a><br>


	 <form action="notice.php" method="post">
		 <input type="text" id="notice-in" name="notice-in">
		 <input type="submit" value="submit">
	 </form>
</body>

</html>

<?php 

}else{


     exit();

}

 ?>