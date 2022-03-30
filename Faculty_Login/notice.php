<?php 
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "college";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

$notice = $_REQUEST['notice-in'];

$sql = "INSERT INTO `notice_board`(`notice`) VALUES ('$notice')";

if(mysqli_query($conn,$sql)){
    echo "Notice Recorded";
}
else {
    echo "Error:".$sql."<br>".$conn->error;
}
mysqli_close($conn);
?>