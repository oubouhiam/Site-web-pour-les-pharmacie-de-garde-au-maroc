<?php
 session_start();

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zentao";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

   $id = $_GET['id'];
   $name = $_POST['name'];
   $day = $_POST['day'];
   $tel = $_POST['tel'];
   $mail = $_POST['mail'];
   $addrsse = $_POST['addrsse'];
   
  

   $_SESSION['name'] = $name;
   $_SESSION['day'] = $day;
   $_SESSION['tel'] = $tel;
   $_SESSION['mail'] = $mail;
   $_SESSION['addrsse'] = $addrsse;


   
	$sql = "UPDATE phara SET name='$name', day='$day',tel='$tel',mail='$mail',addrsse='$addrsse' WHERE phara_id='$id'";
    echo $sql;
    mysqli_query($conn, $sql);
    header("Location: phara.php?id=".$t_id);

?>
