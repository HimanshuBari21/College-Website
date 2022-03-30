<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="change.css">
</head>
<body>
<?php
error_reporting(0);
session_start ();

$user = $_SESSION['Username'];

$_POST['submit'] ;

if ($user)
{
//user is logged in
if ($_POST['submit'])
{
//check fields
$oldpassword =$_POST['oldpassword'];
$oldpassword = md5($oldpassword);
$newpassword =  $_POST['newpassword'];
// $newpassword = md5($newpassword);
$repeatnewpassword = $_POST['repeatnewpassword'];
//check password against db

//connect to db
$connect = mysqli_connect ("localhost","root","","college") or die();

$queryget = mysqli_query ($connect,"SELECT Password FROM student WHERE Username = '$user'")or die ("Query didnt work");
$row = mysqli_fetch_assoc($queryget);

$oldpassworddb = $row ['Password'];


//check passwords
if($oldpassword==$oldpassworddb)
{
//check the new password
if ($newpassword==$repeatnewpassword)
{
//succes
//change password in db
$querychange = mysqli_query ($connect,"UPDATE `student` SET `Password` = MD5('$newpassword') WHERE `student`.`Username` = '$user';");
session_destroy();
die ("Your password has been changed.<a href='Student_Login_Page.html'>Return </a>to the main page");

}
else 
 die ("New password dont match!");
}
else 
 die("Old password doesnt match!");
}
else
{
echo("
<form action ='' method='POST'>
    <div id='main'>
    <center><h1>Change Password</h1></center>
    <label for='oldpassword'>Enter your Current Password</label> 
    <input type ='password' name ='oldpassword' required>
    
    <label for='newpassword'>Enter New Password of Your Choice</label>
    <input type='password' name='newpassword' required>
    
    <label for='newpassword'>Renter Password you entered above</label>
    <input type='password' name='repeatnewpassword' required>
    
    <input type='submit' name='submit' value='Submit' id='submit'>

    </div>
</form>
");
}

}
else
   die ("You must be logged in to change your password");
   
?>
</body>
</html>