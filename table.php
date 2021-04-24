<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\core\clientC.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\entities\client.php';
$client1C=new clientC();
$listeclient=$client1C->afficherclient();

?>
<?php
if(isset($_POST['search']))
{$lC=new clientC();
    $keywords = $_POST['keywords'];
    $listeclient=$lC-> getAllclients($keywords);
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
    <title>Tables</title>

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

</head>

<body class="animsition">

                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>ID - Nom Prenom</th>
                                                <th>email</th>
                                                <th>Username</th>
                                                <th>date</th>
                                                <th>adresse</th>
                                                <th>Telephone</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?PHP
                                                foreach($listeclient as $row){
                                            ?>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                               <form action="supprimerclient.php" method="Post">
                                                <td><?php echo $row['id'] ." - ". $row['prenom']." ".$row['nom']; ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $row['email']?></span>
                                                </td>
                                                <td class="desc"><?php echo $row['username']?></td>
                                                <td><?php echo $row['date_crea']?></td>
                                                <td>
                                                    <span class="status--process"><?php echo $row['adresse']?></span>
                                                </td>
                                                <td><?php echo $row['tel']?></td>
                                                <td>
                                                    <input type="text" value="<?php echo $row['id'] ?>" hidden name="idsup">
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">Delete</button>


                                                    </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php  }?>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->

</body>

</html>

<!-- end document-->
