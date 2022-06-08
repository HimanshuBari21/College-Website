<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['Username'])) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin <?php echo $_SESSION['Username'];?></title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding: 10px;
            background: linear-gradient(0deg, dodgerblue, dodgerblue);
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

        .option-container {
            display: inline-block;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .admin-options {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: fit-content !important;
            margin-top: 20px !important;
            padding: 10px 16px;
        }

        .admin-option-img {
            border: 8px solid rgb(0, 0, 0);
            border-radius: 50%;
            padding: 20px;
        }
    </style>

</head>

<body>
    <br>
    <br>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="mb-5 rounded-circle" width="200px"
                        src="https://www.pngitem.com/pimgs/m/128-1280822_check-mark-box-clip-art-blue-admin-icon.png">
                    </span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text">Admin : <?php echo $_SESSION['Username'];?></h4>
                    </div>
                    <div class="row mt-3 option-container">
                        <div class="card admin-options">
                            <a href="student.php"><img class="admin-option-img"
                                src="https://www.pikpng.com/pngl/m/465-4650471_png-file-group-icon-clipart.png"
                                alt="students-icon" height="160px">
                            <h4 class="option-label">Students Details</h4></a>
                        </div>
                        <div class="card admin-options">
                            <a href="faculty.php"><img class="admin-option-img"
                                src="https://pngimage.net/wp-content/uploads/2018/06/persons-png.png"
                                alt="teachers-icon" height="160px">
                            <h4 class="option-label">Facultys Details</h4></a>
                        </div>
                        <div class="card admin-options">
                            <a href="notice.php"><img class="admin-option-img"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbu9yUCV91-qOgQ59qBlVze6571OnYBzA79Hps29x57x7pHsgP7Np7nvcZkGb768AMgpE&usqp=CAU"
                                alt="notice-icon" height="160px" width="160px">
                            <h4 class="option-label">Notice</h4></a>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <a href="noticeboard.html"><button class="btn btn-primary profile-button" type="button">
                            Upload Notice
                        </button></a>
                    </div>
                    <div class="mt-5 text-center">
                        <a href="change_pass.php"><button class="btn btn-primary profile-button" type="button">
                            Change Password
                        </button></a>
                    </div>
                    <div class="mt-5 text-center">
                        <a href="logout.php"><button class="btn btn-primary profile-button" type="button">
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

</html>
<?php 

}else{


     exit();

}

 ?>