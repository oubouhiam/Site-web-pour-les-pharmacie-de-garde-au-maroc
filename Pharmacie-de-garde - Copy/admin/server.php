<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'multi_login');

    // initialize variables
    $Nom = '';
	$name = "";
    $address = "";
    $tel = "";
    $mail = "";
    $day = "";
	$id = 0;
    $update = false;
    

    // insert ville

	if (isset($_POST['save'])) {
        $name = $_POST['name'];
		mysqli_query($db, "INSERT INTO ville (name) VALUES ('$name')"); 
		$_SESSION['message'] = ""; 
		header('location: home.php');
	}
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
       
    
        mysqli_query($db, "UPDATE ville SET name='$name',  WHERE id=$id");
        $_SESSION['message'] = "updated!"; 
        header('location: ville.php');
    }
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM ville WHERE id=$id");
        $_SESSION['message'] = "deleted!"; 
        header('location: home.php');
    }
    
    // insert phara
    
	if (isset($_POST['submit'])) {
        $Nom = $_POST['Nom'];
        $tel = $_POST['tel'];
        $mail = $_POST['mail'];
        $address = $_POST['address'];
        $day = $_POST['day'];
      
		mysqli_query($db, "INSERT INTO posts (Nom , tel , mail , address , day ) VALUES ('$Nom , $tel ,$mail ,$address, $day')"); 
		$_SESSION['message'] = ""; 
		header('location: phara.php');
	}
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $Nom = $_POST['Nom'];
        $tel = $_POST['tel'];
        $mail = $_POST['mail'];
        $address = $_POST['address'];
        $day = $_POST['day'];
    
        mysqli_query($db, "UPDATE posts SET name='$name',  WHERE id=$id");
        $_SESSION['message'] = "updated!"; 
        header('location: phara.php');
    }
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM ville WHERE id=$id");
        $_SESSION['message'] = "deleted!"; 
        header('location: phara.php');
    }
    