<?php

include('dbconnection.php');
session_start();

$username = $_SESSION['user'];

$query = " SELECT * FROM users where username = '$username' ";

$sql = mysqli_query($con, $query);

$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);

$usercat = $row['usercat'];

$id = $row['user_id'];

$firstname = $row['firstname'];

$lastname = $row['lastname'];

$username = $row['username'];

$dob = $row['dob'];

$email = $row['email'];

$password = $row['password'];

$most_preferred_language = $row['most_preferred_language'];

$bio = $row['bio'];

$profile_pix = $row['profile_pix'];

// $_FILES ['image'] ['name'];

if (!isset($_SESSION['user'])) {

    header("locaton:index.php");
}
