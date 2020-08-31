<?php
    session_start();

    // Import Coonection file
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zentao";

   $conn = mysqli_connect($hostname, $username, $password, $dbname);

   if(!$conn){
       die("Connection feiled" . mysqli_connect_error());
   }else {
       echo "Connected" . "<br>";
   }


    $t_id = $_GET['t_id'];
    $id = $_GET['id'];

    // Define Connection

    // Delete Query
    $sql = "DELETE FROM  ville WHERE ville_id ='" . $id . "';";

    echo $sql;

    // execute query aka insert data
    mysqli_query($conn, $sql) or die($conn);

    // close connection


    // Redirect to posts page
   header("Location: ville.php?id=".$t_id);
?>
