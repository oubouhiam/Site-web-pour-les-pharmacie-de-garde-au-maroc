<?php

session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "zentao";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
$id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/boarde.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <title>pharmacie</title>
  </head>

  <body style="font-family: 'Poppins';">

    
<link href='css/css.sass' rel='stylesheet' type='text/css'>

<div class="app-container">
  
  <nav class="nav">
    <a href="#" class="nav__logo">
     
    </a>
    <ul class="nav__list">
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Dashboard </a>
      </li>
      <li class="nav__list-item">

        <a href="../home.php" class="nav__item-link">home</a>
      </li>
      <li class="nav__list-item">
        <a href="ville.php" class="nav__item-link">ville</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Locations</a>
      </li>
      <li class="nav__list-item">
        <a href="logout.php" class="nav__item-link">logout</a>
      </li>
      <li class="nav__list-item">
      </li>
     
    </ul>
  </nav>
                    </ul>
  <div class="app-view">
    
    <nav class="utility-bar">
      <div class="utility-bar__inner">
        <ul class="utility-bar__list">
          <li class="utility-bar__list-item">
            <a href="#" class="utility-bar__item-link">
<!-- by Arthur Shlain https://thenounproject.com/search/?q=mail&i=396565               -->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.2" baseProfile="tiny" x="0px" y="0px" viewBox="0 0 100 100" width="26px" xml:space="preserve"><path fill="#999" d="M10,66h16v24l24-24h40V10H10V66z M26,26h48v8H26V26z M26,42h48v8H26V42z"/></svg>
<!--               Messages -->
            </a>
          </li>
          <li class="utility-bar__list-item">
            <a href="#" class="utility-bar__item-link">
<!-- by Nick Novell https://thenounproject.com/search/?q=notification&i=430200               -->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" fill="#999" width="20px" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 0.276083 0.32331250000000004" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs>
</defs><g><path class="fil0" d="M0.185915 0.247296c-0.00283406,0.024408 -0.0235765,0.0433539 -0.0487436,0.0433539 -0.0251671,0 -0.0459057,-0.0189459 -0.0487436,-0.0433539l0.0974872 0zm-0.11863 -0.198392c0.015799,-0.0138347 0.0311442,-0.0218257 0.0461308,-0.0250946 6.4844e-005,-0.0131595 0.0107527,-0.0238092 0.0239312,-0.0238092 0.0130794,0 0.0237062,0.0104933 0.0239236,0.0235193 0.0154252,0.00307055 0.0312395,0.0111227 0.047523,0.0253845 0.0264907,0.0291493 0.0340927,0.0621854 0.0291378,0.0978076 -0.00316973,0.076226 0.0178474,0.055453 0.0381511,0.0874021 -0.0460163,0 -0.0920289,0 -0.138041,0 -0.0460163,0 -0.0920289,0 -0.138041,0 0.0203038,-0.031949 0.0413171,-0.0111761 0.0381511,-0.0874021 -0.00495866,-0.0356222 0.00264335,-0.0686583 0.029134,-0.0978076z"/></g></svg>
<!--               Alerts -->
              <span class="utility-bar__indicator">3</span>
            </a>
          </li>
        </ul>
        <a href="#" class="utility-bar__account">
        <img src="<?php echo $_SESSION['image'] ?>" style="width: 40px;height: auto; border-radius:100px;">
          <h3><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></h3>
          <li class="nav-item"><a class="nav-link" href="../Profil.php">Edite Profil</a></li>
        </a>
      </div>
    </nav>



    <div class="container" style="margin-top: 15%;  ">
      <div class="row" style="margin-left: 40%;">
        <div class="col-sm-4">
          <div class="mod-add" style='background-color: #7a86fc;'>
            <a onclick="openForm();" class="text-white">Ajoute la ville </a>
          </div>
        </div>
      </div>
    </div>


    <div class="container" id="container">
      <div class="row justify-content-center">
        <div class="col-6 col-md-4" style="margin-top: 12px;background: white;opacity:none:padding: 61px;">
          <div class="popup" style="">
            <div class="form-group" id="overlay">
              <form method="POST" action="insertville.php">
                <div class="social-containe">
                  <input type="color" class="form-control border-0" name="color" id="color" required="" style="background: none;height: 68px;">
                </div>
                <input type="text" name="name"  placeholder="Add List title" style="width: 100%;margin: 0px 10px 10px 0;padding: 11px;">
                <button type="submit"  class="btn btn-primary" onclick="closeForm();" style="margin: auto;display: flex;">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section style="padding-top:30px" >
      <?php
        $id = $_SESSION['user_id'];
        $user_id = $_SESSION['user_id'];
        $posts = "SELECT * FROM ville";
        $all_posts = mysqli_query($conn, $posts);
        while ($row = mysqli_fetch_array($all_posts)) {
          if ($row['user_id'] == $_SESSION['user_id']) {
            echo "
            <div class='container' style='margin-left: 40%;'>
              <div class='row'>
                <div class='col'>
                  <div class='board-tile mod-add' style='border-radius:0; cursor:pointer;background-color:" . $row['color'] ."'>
                    <div class='row'>
                      <div class='col-sm-10'>
                        <a href='phara.php?id=".$row['ville_id']."' style=' padding-left: 20px; margin-top:4%;font-size: 20px; display: flex;align-items: center;height: 49px;color:white'>". $row['name'] ."</a>
                      </div>
                      <div class='col-sm-2 d-flex flex-column'>
        
                        <a href='ville.php?id=".$row['ville_id']."'><i class='fa fa-share' style='color:white'></i></a>
                        <a href='formUpdate_ville.php?id=".$row['ville_id']."'><i class='fa fa-edit' style='color:white'></i></a>
                        <a href='delet_ville.php?id=".$row['ville_id']."'><i  style='color:red'></i>X</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
          }
        }
      ?>
    </section>


    <script>
      function toggle(){
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
      }
    </script>


    <script>
      const btn = document.getElementById("color");
      const box = document.querySelector(".mod-add");

      for (var i = 0; i <btn.length; i++) {
        btn[i].addEventListener("click", function(){
          box.style.background = this.getAttribute("data-color");
          this.style.color = this.getAttribute("data-color");
        })
      }

      function openForm(){
        document.getElementById("overlay").style.display="block";
      }
      function closeForm(){
        document.getElementById("overlay").style.display="none";

      }
    </script>
    <footer style=" width: 100%% ;
            height:300px; ">
        <p>  </p>


    </footer>


    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
