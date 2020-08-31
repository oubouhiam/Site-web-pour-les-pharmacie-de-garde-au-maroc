<?php
 session_start();

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zentao";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

   $name = $_POST['name'];
   $color = $_POST['color'];
   $id = $_SESSION['ville_id'];

   $_SESSION['name'] = $name;
   $_SESSION['color'] = $color;
   
	  $sql = "UPDATE ville SET name='$name', color='$color' WHERE ville_id='$id' ";
    echo $sql;
    mysqli_query($conn, $sql);
    header("Location: ville.php");
    

?>
