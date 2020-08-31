<?php
session_start();
//require_one("loginController.php");

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "zentao";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Get data from user
$image = $_POST['image'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_SESSION['user_id'];


$_SESSION['image'] = $image;
$_SESSION['email'] = $email;
$_SESSION['username'] = $username;
$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;
$_SESSION['password'] = $password;
$_SESSION['user_id'] = $id;

$sql = "UPDATE user SET username='$username', password='$password', email='$email', firstname='$firstname', lastname='$lastname', image='$image' WHERE user_id='$id';";

// Check user data




mysqli_query($conn, $sql) or die("Error: " .$conn);


// Redirect to posts page
header("Location: ville.php");

?>
