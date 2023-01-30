<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login_project";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Failed To Connect To Database.')</script>");
}

?>