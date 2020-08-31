<?php
 session_start();
    $_SESSION['postID'];
     $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zentao";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if(!$conn){
        die("Connection feiled" . mysqli_connect_error());
    }else {
    
    }

      if(isset($_POST['register'])){
		   if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['image'])){
			 $username = htmlspecialchars(trim($_POST['username']));
       $firstname = htmlspecialchars(trim($_POST['firstname']));
       $lastname = htmlspecialchars(trim($_POST['lastname']));
			 $email = htmlspecialchars(trim($_POST['email']));
       $_SESSION['email'] = $email;
       $_SESSION['image'] = $image;
       $image = $_POST['image'];
			 $password = md5($_POST['password']);
			 $cpassword = md5($_POST['cpassword']);

			 if($password == $cpassword){
			   $sql = "INSERT INTO user (firstname,lastname,username,email,password,cpassword,image )  VALUES('$firstname', '$lastname', '$username', '$email', '$password','$cpassword', ' $image')";

               mysqli_query($conn, $sql);
               header("Location: connexion.php");

			 } else{
               echo "The two password do not match";
             }
		   }else{
			   echo "il faut saisir tous les champs";

		   }

	   }
    

?>


