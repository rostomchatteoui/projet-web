<?php

include 'imports.php';

$animalC=new animalC();

if (isset($_POST['Asc'])){
  $listeA=$animalC->trierA();
}
elseif (isset($_POST['Desc'])) {
  $listeA=$animalC->trierD();
}
elseif(isset($_POST['search']))
{
    $keywords = $_POST['keywords'];
    $listeA=$animalC-> getAllAnimals($keywords);
}
else {
  $listeA=$animalC->afficherAnimal();
}
session_start();



if (isset($_SESSION['id']))
{
  $NbA = $animalC->getNbAnimaux($_SESSION['id']);
  $Animaux = $animalC->afficherAnimauxClient($_SESSION['id']);
  foreach ($NbA as $nb) {
    $NbAnimaux=$nb['NbAnimaux'];
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Liste des animaux</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <script type="text/javascript">
        function imprimer_page(){
          NF = document.getElementsByClassName("nf");
            for (i = 0; i < NF.length; i++) {
                NF[i].style.display = "none";
            }
            window.print();

            for (i = 0; i < NF.length; i++) {
                NF[i].style.display = "block";
            }
        }
    </script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none nf">
            <div class="header-mobile__bar nf">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Clients.php">
                                <i class="fas fa-users"></i>Liste des utilisateurs</a>
                        </li>
                        <li class="active">
                            <a href="Animals.php">
                                <i class="fas fa-paw"></i>Liste des animaux</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block nf">
            <div class="logo nf">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="Clients.php">
                                <i class="fas fa-users"></i>Liste des utilisateurs</a>
                        </li>
                        <li class="active">
                            <a href="Animals.php">
                                <i class="fas fa-paw"></i>Liste des animaux</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop nf">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                          <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="keywords" placeholder="Recherche..." />
                            <button class="au-btn--submit" type="submit" name="search">
                              <i class="zmdi zmdi-search"></i>
                            </button>
                          </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="fa fa-paw"></i>
                                       <span class="quantity"><?php echo $NbAnimaux; ?></span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <?php if ( $NbAnimaux >= 2){ ?><p>Vous avez <?php echo $NbAnimaux; ?> animaux</p> <?php }
                                                elseif ( $NbAnimaux == 0){ ?><p>Vous n'avez pas d'animaux</p> <?php }
                                                elseif ( $NbAnimaux == 1){ ?><p>Vous avez un animal</p> <?php }
                                                else{?><p>Bravo vous avez trouvé une faille contactez l'admin</p> <?php } ?>

                                            </div>
                                            <?php foreach ($Animaux as $a) { ?>
                                              <div class="mess__item">
                                                  <div class="image img img-40">
                                                    <img src="images/icon/<?php echo $a['type']; ?>.png" alt="Michelle Moreno" />
                                                  </div>
                                                  <div class="content">
                                                      <h6><?php echo $a['nom']; ?></h6>
                                                      <p><?php echo $a['type']; ?> | <?php echo $a['race']; ?></p>
                                                  </div>
                                              </div>
                                              <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['prenom'].' '.$_SESSION['nom'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="<?php echo $_SESSION['prenom'].' '.$_SESSION['nom'] ?>" />
                                                    </a>
                                                </div>
                                                 <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['prenom'].' '.$_SESSION['nom'] ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['email']?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="profile.php">
                                                        <i class="zmdi zmdi-account"></i>Profile</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Options</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="../index.php">
                                                        <i class="zmdi zmdi-laptop-chromebook"></i>Voir le site en tant que Client</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href='../logout.php'>
                                                  <i class="fas fa-sign-out-alt"></i>Sign out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Table des animaux</h3>
                                <div class="table-data__tool nf">
                                    <div class="table-data__tool-left">
                                    </div>
                                    <div class="table-data__tool-right">

                                        <!-- <form method="POST" action="imprimer.php">
                                         <button name="imprimer" ><i class="fas fa-print"></i> imprimer</button>
                                         </form> --><button name="imprimer" onclick="imprimer_page()" ><i class="fas fa-print"></i> imprimer</button>
                                         <!-- <form action="statistiquesClient.php">
                                          <button name="Statistiques" ><i class="fas fa-chart-bar"></i> Statistiques</button>
                                          </form> --><button name="Statistiques" ><i class="fas fa-chart-bar"></i> Statistiques</button>
                                          <form  action="" method="POST"><button type="submit" name="Desc"><i class="fas fa-sort-amount-down"></i> Trier par ordre du nom descendant</button></form>
                                            <form  action="" method="POST"><button type="submit" name="Asc"><i class="fas fa-sort-amount-up"></i> Trier par ordre du nom ascendant</button></form>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>ID - Nom</th>
                                                <th>Type</th>
                                                <th>Race</th>
                                                <th>Poids</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?PHP
                                              foreach($listeA as $row){
                                          ?>
                                          <tr class="tr-shadow">
                                              <td>
                                                  <label class="au-checkbox">
                                                      <input type="checkbox">
                                                      <span class="au-checkmark"></span>
                                                  </label>
                                              </td>
                                              <td> <?php echo $row['id']." - ".$row['nom']; ?></td>
                                              <td>
                                                  <span class="block-email"><?php echo $row['type']?></span>
                                              </td>
                                              <td class="desc"><?php echo $row['race']?></td>
                                              <td>
                                                  <span class="status--process"><?php echo $row['poids']?> grammes</span>
                                              </td>
                                              <td>
                                             <form action="supprimerAnimal.php" method="Post">
                                                  <input type="text" value="<?php echo $row['id'] ?>" hidden name="idsup">
                                                  <div class="table-data-feature nf">
                                                      <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">Delete</button>

                                                      </form>

                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                      <?php  }?>
                                  </table>
                              </div>
                              <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
      <div class="copyright">
          <p>Copyright © 2021 IDEART. All rights reserved. .</p>
      </div>
    </footer>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>

<!-- end document-->

<?php
} else {
echo "<script>
alert('Vous etes déconnecté');
window.location.href='../index.php';
</script>";
}
?>
