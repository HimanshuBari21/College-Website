<?php 

session_start(); 

include "config.php";

if (isset($_POST['Username']) && isset($_POST['Password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $Username = validate($_POST['Username']);

    $Password = validate($_POST['Password']);
    $Password = md5($Password);

    if (empty($Username)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($Password)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM admin WHERE Username='$Username' AND Password='$Password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $Username && $row['Password'] === $Password) {

                echo "Logged in!";

                $_SESSION['Username'] = $row['Username'];

                $_SESSION['id'] = $row['id'];
			
                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}
?>


