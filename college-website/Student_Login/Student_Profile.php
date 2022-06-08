<?php 

session_start();

if (isset($_SESSION['Name']) && isset($_SESSION['Username'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <style>
        * {
            box-sizing: border-boX;
            padding: 0;
            margin: 0;
            font-family: "Red Hat Display", sans-serif;
        }

        nav {
            position: fiXed;
            top: 0px;
            left: 0px;
            right: 0px;
            width: 100%;
            background-color: rgb(29, 142, 255);
            color: white;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px 20px;
            font-size: large;
            z-indeX: 9;
        }

        main {
            maX-width: 1200px;
            margin: auto;
            margin-top: 65px;
        }

        .profile {
            maX-width: fit-content;
            height: fit-content;
            display: flex;
            justify-content: center;
            border: 4px solid white;
            border-radius: 40px;
            margin: 40px auto 40px auto;
            padding: 10px 40px;
            background-color: dodgerblue;
            color: white;
            boX-shadow: 0px 8px 40px -10px dodgerblue;
        }

        .profile:hover {
            transition: 0.8s;
            transform: scale(1.1, 1.1);
        }

        .imgcont {
            height: 200px;
            width: 200px;
            border: 4px solid white;
            border-radius: 50%;
            overflow: hidden;
            display: fleX;
            justify-content: center;
        }

        .std_details {
            font-size: 20px;
            font-weight: 600;
            padding: 10px;
        }

        .other-details {
            maX-width: 640px;
            margin: auto;
        }

        .edit {
            background-color: transparent;
            border: none;
            border-radius: 50%;
        }

        .material-icons-round {
            color: hsl(210, 100%, 56%);
            font-size: X-large;
        }

        .college-name {
            margin-top: 100px;
            color: dodgerblue;
            font-weight: 700;
        }

        .details-cell {
            display: fleX;
            justify-content: space-between;
            word-wrap: wrap;
        }
        .logout,
        .results,
        .password {
            border: none;
            border-radius: 10px;
            background-color: dodgerblue;
            color: white;
            padding: 2px 10px;
        }

        td {
            min-width: 200px;
        }

        /* responsive */

        @media (maX-width:600px) {
            .profile {
                fleX-direction: column;
                justify-content: center;
            }

            td {
                min-width: 100px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div>
            <?php echo $_SESSION["Name"]; ?>
        </div>
        <div>
            <?php echo $_SESSION['Username'];?>
        </div>
    </nav>
    <main>
        <center>
            <h1 class="college-name">Government Polytechnic Daman</h1>
        </center>
        <div class="profile">
            <div class="imgcont">
                <img src="img/<?php echo $_SESSION['image'] ?>.jpg" alt="Student Picture">
            </div>
            <div class="std_details">
                <li>
                    <?php echo $_SESSION['Name'];?>
                </li>
                <li>
                    <?php echo $_SESSION['Username'];?>
                </li>
                <li>Sem
                    <?php echo $_SESSION['sem'];?>
                </li>
                <li>
                    <?php echo $_SESSION['gender'];?>
                </li>
                <li>
                    <?php echo $_SESSION['dept'];?>
                </li>
                <li>Joined in
                    <?php echo $_SESSION['year'];?>
                </li>
            </div>
        </div>
    </main>
    <div class="other-details">
        <table class="table table-hover">
            <tr>
                <td>Current CGPA</td>
                <td class="details-cell">
                    <?php echo $_SESSION['current_cgpa'];?><button class="edit"><span class="material-icons-round">
                            edit
                        </span></button>
                </td>
            </tr>
            <tr>
                <td>Total Backlogs</td>
                <td class="details-cell">
                    <?php echo $_SESSION['back'];?><button class="edit"><span class="material-icons-round">
                            edit
                        </span></button>
                </td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td class="details-cell">
                    <?php echo $_SESSION['dob'];?> <button class="edit"><span class="material-icons-round">
                            edit
                        </span></button>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td class="details-cell">
                    <?php echo $_SESSION['address'];?><button class="edit"><span class="material-icons-round">
                            edit
                        </span></button>
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td class="details-cell">
                    <?php echo $_SESSION['city'];?><button class="edit"><span class="material-icons-round">
                            edit
                        </span></button>
                </td>
            </tr>
            <tr>
                <td>State</td>
                <td class="details-cell">
                    <?php echo $_SESSION['state'];?><button class="edit"><span class="material-icons-round">
                            edit
                        </span></button>
                </td>
            </tr>
            <tr>
                <td>Pincode</td>
                <td class="details-cell">
                    <?php echo $_SESSION['pincode'];?><button class="edit"><span class="material-icons-round">
                            edit
                        </span></button>
                </td>
            </tr>
            <tr>
                <td>Email id</td>
                <td class="details-cell">
                    <?php echo $_SESSION['mail_id'];?><button class="edit"><span class="material-icons-round">
                            edit
                        </span></button>
                </td>
            </tr>
            <tr>
                <td>Phone no.</td>
                <td class="details-cell">
                    <?php echo $_SESSION['phone_no'];?><button class="edit">
                        <<span class="material-icons-round">
                            edit
                            </span>
                    </button>
                </td>
            </tr>
            <tr>
                <td>Aadhar Card No.</td>
                <td class="details-cell">
                    <?php echo $_SESSION['acard'];?><button class="edit"><span class="material-icons-round">
                            edit
                        </span></button>
                </td>
            </tr>
            <tr>
                <td>Bank Account Details</td>
                <td class="details-cell">
                    <?php echo $_SESSION['bank'];?><button class="edit"><span class="material-icons-round">
                            edit
                        </span></button>
                </td>
            </tr>
            <tr>
                <td>View Grade History</td>
                <td class="details-cell"> <button class="results">View Results</button> <button class="edit"><span
                            class="material-icons-round">
                            edit
                        </span></button> </td>
            </tr>
            <tr>
                <td>Password</td>
                <td class="details-cell"> <a href="change_pass.php"><button class="password">Change Password</button></a> <button class="edit"><span
                            class="material-icons-round">
                            edit
                        </span></button> </td>
            </tr>
            <tr>
                <td></td>
                <td class="details-cell"> <a href="logout.php"><button class="logout">Logout</button></a> 
                         </td>
            </tr>
        </table>
    </div>
</body>

</html>
<?php
}
else{

     echo "<h2></h2>";

     exit();

}
?>