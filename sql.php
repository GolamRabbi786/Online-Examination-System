<?php
$host = "localhost";
$project = "project";
$user = "root";
$ps = "";
// Create connection
$conn = mysqli_connect($host, $user, $ps, $project);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
?>
