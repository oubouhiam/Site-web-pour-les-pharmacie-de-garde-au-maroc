<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "zentao";

$conn = mysqli_connect($hostname, $username, $password, $dbname);



?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>pharmacie</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="admin/css/task.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <ul>     
                                        <li>Phone: +212 678446374/+212 615819924</li>
                                        <li>Email: contact@pdg.com</li>
                                    </ul>
                                    <div class="header-social">    
                                        <ul>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a  href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php"><img class="pdglogo" src="assets/img/logo/PDG LOGO.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="index.php">Acceuil</a></li>
                                                <li><a href="home.php">Services</a></li>
                                                <li><a href="about.php">À propos de nous</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="connexion.php" class="btn header-btn">Connexion</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
            <form class="form-inline" method="post" action="search.php" style="padding-top:60px; display: flex; flex-direction: column; ">
                <input type="text" name="ville" class="form-control" placeholder="Recherche" style="text-align: center; width: 25%;">
                <button type="submit" name="save" class="recherche-btn" >Recherche</button>
            </form>


        <div class="row">
            <div class="col-12">

                <section style="margin-top:2% ">
                    <h2 style="margin-top:5%;text-align:center;"></h2>
                    <div class="todolist" style="margin-top:3%;">
                        <div class="column">
                            <?php
              
            $posts = "SELECT  name, mail, tel, addrsse, day FROM phara  ";
            $all_posts = mysqli_query($conn, $posts);
            while ($row = mysqli_fetch_array($all_posts)) {
              echo "
              <div class='item'>
               <div class = item1> <h2 class='item-title'>".$row['name']." </h2>  </div>
                <div class = item2 > <h5 class='item-title'>TEL: ".$row['tel']." </h5> </div>
                <h6 class='item-title'> EMAIL:".$row['mail']." </h6>
                <h6 class='item-title'> Addrsse:".$row['addrsse']." </h6>
                <h6 class='item-title'> Jour:".$row['day']." </h6>
               
              </div>";
            }
        
          ?>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        </div>
    </body>

    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-10 col-lg-9 ">
                        <div class="footer-copy-right">
                            <p> Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

</body>

</html>