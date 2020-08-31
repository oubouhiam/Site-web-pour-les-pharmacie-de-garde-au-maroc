<?php
 session_start();

     $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zentao";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

   $name = $_POST['name'];
   $color = $_POST['color'];
   $id = $_SESSION['user_id'];
   $_SESSION['name'] = $name;
   $_SESSION['color'] = $color;

	  $sql = "INSERT INTO ville (name, color, user_id)  VALUES('$name', '$color', '$id')";
    echo $sql;
    mysqli_query($conn, $sql);
    header("Location: ville.php");




?>
