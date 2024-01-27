<!DOCTYPE html>
<?php
    include('./CRUD/clientCRUD.php');
    $conn = new mysqli('localhost','root', '', 'shop');
    $res_data = selection($conn);
?>
<html>
    <head>
    <link rel="shortcut icon" type="image/jpg" href="favicon.PNG"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <link href="./css/style-admin.css" rel="stylesheet">
        <link href="./css/footer.css" rel=" stylesheet">
        <link href="./css/navbar.css" rel="stylesheet">
        <title>Liste des Clients</title>
    </head>
    <body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">eShop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> 
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="accueil-admin.php">Accueil</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="produita.php">Liste Produits</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="clienta.php">Liste Clients</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="ajout-produit.php">Ajouter Produit</a>
              </li> 
            </ul>
          </div>
          <a class="btn" id="btn" href="logout.php" role="button">Déconnexion</a>
        </nav>
      </div>
      <?php if (!empty($info)) { ?>
              <div class="alert-info">
              <?php echo "$info" ;
                unset ($_SESSION['infopa']);
                ?>
               </div>
              <?php } ?>
        <div class="container">
          <br/><br/>
          <h1>Liste des Clients</h1>
          <br/><br/>
          
            <?php
                if ($res_data ->num_rows==0){?>
                  <div id="panier"><center><h3>Aucun Client !</h3></center></div>
                  <div class="d-grid gap-2 col-6 mx-auto">
                  <br/><br/>
                  <a class="btn btn-primary" href="accueil-admin.php" role="button">Retour à l'accueil</a>
                  </div>
                <?php
                }
                else{?>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID Client</th>
                      <th scope="col">Username</th>
                      <th scope="col">Fullname</th>
                      <th scope="col">Sexe</th>
                      <th scope="col">Adresse</th>
                      <th scope="col">Telephone</th>
                      <th scope="col">Email</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                <?php
                  while($row = mysqli_fetch_array($res_data)){
            ?>
              <tr>
                <th scope="row"><?php echo $row['idc'];?></th>
                <td><?php echo $row['Username'];?></td>
                <td><?php echo $row['fullname'];?></td>
                <td><?php echo $row['sexe'];?></td>
                <td><?php echo $row['adresse'];?></td>
                <td><?php echo $row['tel'];?></td>
                <td><?php echo $row['email'];?></td>
                <td style="padding-left: 34px;"><a href="deleteC.php?idc=<?php echo $row['idc'];?>"><img src="./img/trash.svg" height=23px width=23px></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <?php } ?>

        </div>
    </body>

  
    <footer class="flex-rw">
    
    <ul class="footer-list-top">
      <li>
        <h4 class="footer-list-header">About eShop</h4></li>
      <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">GET TO KNOW US</a></li>
      <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">nos politiques</a></li>
    </ul>
    <ul class="footer-list-top">
        <li>
          <h4 class="footer-list-header">FAQ</h4></li>
        <li><a href='#' class="generic-anchor footer-list-anchor">livraison</a></li>
        <li><a href='#' class="generic-anchor footer-list-anchor">paiements</a></li>
        
      </ul>
    <ul class="footer-list-top">
      <li id='help'>
        <h4 class="footer-list-header"> Help Me</h4></li>
      <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTACT</a></li>
      <li id='order-tracking'><a href='#' itemprop="significantLink" class="generic-anchor footer-list-anchor">conditions d'utilisation</a></li>
    </ul>
    <section class="footer-social-section flex-rw">
        <span class="footer-social-overlap footer-social-connect">
        CONNECT <span class="footer-social-small">with</span> US
        </span>
        <span class="footer-social-overlap footer-social-icons-wrapper">
          <a href="https://www.pinterest.com" class="generic-anchor" target="_blank" title="Pinterest" itemprop="significantLink"><img src="./img/pinterest.png" height="40px" width="40px"></i></a>
          <a href="https://www.facebook.com" class="generic-anchor" target="_blank" title="Facebook" itemprop="significantLink"><img src="./img/facebook.png" height="40px" width="40px"></i></a>
          <a href="https://twitter.com" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink"><img src="./img/twitter.png" height="40px" width="40px"></a>
          <a href="http://instagram.com" class="generic-anchor" target="_blank" title="Instagram" itemprop="significantLink"><img src="./img/instagram.png" height="40px" width="40px"></i></a>
        </span>
    </section>
    <section class="footer-bottom-section flex-rw">
      <div class="footer-bottom-wrapper">&copy; 2021 eShop in tunisia,tunis - All Rights Reserved -</div>

    </section>
  </footer>
</html>