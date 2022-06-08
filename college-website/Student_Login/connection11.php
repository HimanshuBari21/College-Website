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

        header("Location: index.php?error=UserName is required");

        exit();

    }else if(empty($Password)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM student WHERE Username='$Username' AND Password='$Password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $Username && $row['Password'] === $Password) {

                echo "Logged in!";

                $_SESSION['Username'] = $row['Username'];

                $_SESSION['Name'] = $row['Name'];
            
                $_SESSION['sem']  = $row['sem'];

                $_SESSION['gender']  = $row['gender'];

                $_SESSION['dept']  = $row['dept'];

                $_SESSION['back']  = $row['back'];

                $_SESSION['dob']  = $row['dob'];

                $_SESSION['address']  = $row['address'];

                $_SESSION['city']  = $row['city'];

                $_SESSION['state']  = $row['state'];

                $_SESSION['pincode']  = $row['pincode'];

                $_SESSION['acard']  = $row['acard'];

                $_SESSION['bank']  = $row['bank'];

                $_SESSION['year']  = $row['year'];

                $_SESSION['mail_id']  = $row['mail_id'];

                $_SESSION['phone_no']  = $row['phone_no'];
                
                $_SESSION['current_cgpa']  = $row['current_cgpa'];

                $_SESSION['image']  = $row['image'];

                $_SESSION['Password']  = $row['Password'];


                header("Location: Student_Profile.php");

                exit();

            }else{

                header("Location: index.php.php?error=Incorect User name or password");
			
                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location:index.php");

    exit();

}
?>
 



