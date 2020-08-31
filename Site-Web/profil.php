<?php
session_start();

    $firstname = '';
    if(isset($_SESSION['firstname'])) $firstname = $_SESSION['firstname'];

    $image = '';
    if(isset($_SESSION['image'])) $image = $_SESSION['image'];

    $lastname = '';
    if(isset($_SESSION['lastname'])) $lastname = $_SESSION['lastname'];

    $username = '';
    if(isset($_SESSION['username'])) $username = $_SESSION['username'];

    $email = '';
    if(isset($_SESSION['email'])) $email = $_SESSION['email'];

    $password = '';
    if(isset($_SESSION['password'])) $password = $_SESSION['password'];


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <title>Edite Profil</title>
  </head>

  <body style="padding-bottom: 15px">

    <header class="header_area" style="background-color: black;">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <h1 class="navbar-brand logo_h" style="color: white; font-family: 'Poppins Medium'; font-size: x-large;">profile</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: 'Poppins Light'; font-size: medium;"><?php echo $_SESSION['username'] ?></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="boarde.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                  </ul>
                </li> 
              </ul>
            </div> 
          </div>
        </nav>
      </div>
    </header>

    <section class="profile" style="margin-top:10%">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-12">
            <form action="updateUser.php" method="POST">
              <img src="<?php echo $_SESSION['image'] ?>" id="image" name="image" style="width: 250px;height: 250px;border-radius: 50%;margin:auto;display: flex;" />
              <div class="form-group">
                <label for="inputAddress" >Image</label>
                <input type="text" class="form-control" name="image"  placeholder="" id="uploadImage" value="<?php echo $image?>">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">First Name</label>
                  <input type="text" name="firstname" class="form-control" value="<?php echo $firstname?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Last Name</label>
                  <input type="text" class="form-control" name="lastname"  value="<?php echo $lastname?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Username</label>
                <input type="text" class="form-control" name="username"  placeholder="" value="<?php echo $username?>">
              </div>
              <div class="form-group">
                <label for="inputAddress">Email</label>
                <input type="text" class="form-control" name="email"  placeholder="" value="<?php echo $email?>">
              </div>
              <div class="form-group">
                <label for="inputAddress">Pasword</label>
                <input type="password" class="form-control" name="password"  placeholder="" value="<?php echo $password?>">
              </div>
              <button type="submit" name="update" class="btn btn-info">Update</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#image').css('background-image', 'url('+e.target.result +')');
            $('#image').hide();
            $('#image').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }
  $("#uploadImage").change(function() {
    readURL(this);
  });
    </script>




  </body>
</html>
