<?php 

session_start(); 

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "college";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
$sql = "SELECT * FROM 'notice_board';";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo ($row['notice']);
    echo ($row['id']);
}
?>
