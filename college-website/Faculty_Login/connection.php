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

        $sql = "SELECT * FROM faculty WHERE Username='$Username' AND Password='$Password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $Username && $row['Password'] === $Password) {

                echo "Logged in!";

                $_SESSION['Username'] = $row['Username'];

                $_SESSION['staff_id'] = $row['staff_id'];
				
				$_SESSION['Name'] = $row['Name'];

				$_SESSION['Qualification'] = $row['Qualification'];
				
				$_SESSION['Designation'] = $row['Designation'];
				
				$_SESSION['Gender'] = $row['Gender'];
				
				$_SESSION['Experience'] = $row['Experience'];
				
				$_SESSION['Email'] = $row['Email'];

                $_SESSION['notice'] = $row['notice'];

                $_SESSION['img'] = $row['img'];
				
				
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


