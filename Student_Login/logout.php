<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: Student_Login_Page_html");

?>
