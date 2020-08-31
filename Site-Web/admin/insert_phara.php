<?php
 session_start();

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zentao";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

   $name = $_POST['name'];
   $day = $_POST['day'];
   $tel = $_POST['tel'];
   $mail = $_POST['mail'];
   $addrsse = $_POST['addrsse'];
   $ville = $_POST['ville'];

   $id = $_GET['id'];

    

	$sql = "INSERT INTO phara (tel,name, mail,day, addrsse,ville_id,ville)  VALUES('$tel','$name', '$mail','$day', '$addrsse','$id','$ville')";
    echo $sql;
    mysqli_query($conn, $sql);
    header("Location: phara.php?id=".$id);




?>
