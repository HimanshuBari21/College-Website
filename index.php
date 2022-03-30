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


$sql = "(SELECT * FROM `notice_board` ORDER BY id DESC LIMIT 5) ORDER BY id ASC;";
$sql1 = "(SELECT * FROM `notice_board` ORDER BY id DESC LIMIT 4) ORDER BY id ASC;";
$sql2 = "(SELECT * FROM `notice_board` ORDER BY id DESC LIMIT 3) ORDER BY id ASC;";
$sql3 = "(SELECT * FROM `notice_board` ORDER BY id DESC LIMIT 2) ORDER BY id ASC;";
$sql4 = "(SELECT * FROM `notice_board` ORDER BY id DESC LIMIT 1) ORDER BY id ASC;";


$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);

$row = mysqli_fetch_assoc($result);
$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
$row3 = mysqli_fetch_assoc($result3);
$row4 = mysqli_fetch_assoc($result4);

$_SESSION['notice'] = $row['notice'];
$_SESSION['notice1'] = $row1['notice'];
$_SESSION['notice2'] = $row2['notice'];
$_SESSION['notice3'] = $row3['notice'];
$_SESSION['notice4'] = $row4['notice'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Government Polytechnic Daman</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <img src="gpd_logo.jpg" id="gpd_logo"
            alt="Government Polytechnic Daman logo">
        <div class="jumbotron text-center" id="title" style="margin-bottom:0">
            <h1 style="font-weight: 500">GOVERNMENT POLYTECHNIC DAMAN</h1>
            <p>Affilated to Gujarat Technological University, Ahmedabad</p>
            <p>Under Administration of DNHDD</p>
    </header>
    <aside>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 360px;" id="sidebar">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="material-icons-round nav-link" onclick="closeSide()">close</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a  class="nav-link" aria-current="page" target="_blank">
                    Principal's Messege
                </a>
            </li>
            <li>
                <a  class="nav-link text-white" target="_blank">
                    Syllabus
                </a>
            </li>
            <li>
                <a class="nav-link text-white" target="_blank">
                    Budget
                </a>
            </li>
            <li>
                <a class="nav-link text-white" target="_blank">
                    Festival Celebration
                </a>
            </li>
            <li>
                <a  class="nav-link text-white" target="_blank">
                    In Media
                </a>
            </li>
        </ul>
    </div>
    </aside>
    <nav class="navbar navbar-expand-lg bg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="material-icons-round" id="menuicons">menu</span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <details>
                        <summary class="nav-link">Login</summary>
                        <a href="Student_Login\Student_Login_Page.html" target="_blank"
                            class="nav-link">Student Login</a>
                        <a href="Faculty_Login\Faculty_Login_Page.html" target="_blank"
                            class="nav-link">Faculty Login</a>
                    </details>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="Faculty_Details.html" target="_blank">Faculty
                        Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Infrastructure</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="Department.html" target="_blank">Department</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="New_Admission.html" target="_blank">Admission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="openSide()">More</a>
                </li>
            </ul>
        </div>
    </nav>
    <script>
        function openSide() {
            document.getElementById("sidebar").style.transform = "translateX(400px)";
        }
        function closeSide() {
            document.getElementById("sidebar").style.transform = "translateX(-400px)";
        }
    </script>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div id="notice-bar" class="col-lg-4">
                <h2 id="notice-head">NOTICE</h2>
                <ul>
                    <li><?php echo $_SESSION['notice']; ?></li>
                    <li><?php echo $_SESSION['notice1']; ?></li>
                    <li><?php echo $_SESSION['notice2'] ?></li>
                    <li><?php echo $_SESSION['notice3'] ?></li>
                    <li><?php echo $_SESSION['notice4'] ?></li>
                </ul>
            </div>
            <div class="col-lg-8" id="gallery">
                <h2>GALLERY</h2>
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <br>

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" data-interval="5000" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                        <li data-target="#demo" data-slide-to="4"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.pexels.com/photos/1370296/pexels-photo-1370296.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                              alt="Clg image"  width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/159490/yale-university-landscape-universities-schools-159490.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="Clg image" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/159490/yale-university-landscape-universities-schools-159490.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="Clg image" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/159490/yale-university-landscape-universities-schools-159490.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="Clg image" width="1100" height="500">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <br>
            </div>
        </div>
    </div>

    <!-- card container -->
    <div class="container" id="section10">

        <!-- card 1 -->
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <!-- card 2 -->
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <!-- card 3 -->
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="jumbotron text-center" id="footer" style="margin-bottom:0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d799.7050968125394!2d72.86239570213799!3d20.41336424147651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1629787594702!5m2!1sen!2sin"
            style="border:0;border-radius:20px" allowfullscreen="true" id="gmap" loading="lazy"></iframe>

            
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>
