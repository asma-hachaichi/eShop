
<!DOCTYPE html>
<?php
    session_start();
    include('./CRUD/commandeCRUD.php');
    require_once 'connectdb.php';
    $idc = $_SESSION['user'] ['idc'];
    $res_data = Lcommande($conn,$idc);
    $cli = getById($conn,$idc);
    $row2 = mysqli_fetch_array($cli);
    if(isset($_SESSION['infoc']))
    {
    $info = $_SESSION['infoc'];
    }
    else
    {
    $info="";
    unset($_SESSION['infoc']);}
?>
<html>
    <head>
    <link rel="shortcut icon" type="image/jpg" href="favicon.PNG"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <link href="./css/style.css" rel="stylesheet">
        <link href="./css/stylee.css" rel=" stylesheet">
        <link href="./css/navbar.css" rel="stylesheet">
        <title>Mon Compte</title>
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
                <a class="nav-link" href="page_acceuil.php">Accueil</a>
              </li>
              <li class="nav-item active">         
				<div class="dropdown">
                <button class="navbar" onclick="window.location.href='shop.php'">Shop Now</button>
                <div class="dropdown-content">
   							<a href="enfant.php">Enfant</a> 
    						<a href="homme.php">Homme</a>
   							<a href="femme.php">Femme</a>
 			 		    </div>
 			 	</div>	 
              </li>  
              <li class="nav-item active">
                <a class="nav-link" href="compte.php">Mon Compte</a>
              </li>
            </ul>
          </div>
          <a class="btn" id="btn" href="logout.php" role="button">Déconnexion</a>
          <a href="panier.php"><img src="./img/shopping-basket.png" height=40px width=40px></a>
        </nav>
      </div>
      <?php if (!empty($info)) { ?>
              <div class="alert-info">
              <?php echo $info ;
                unset ($_SESSION['infoc']);
                ?>
               </div>
              <?php } ?>
        <div class="container">
          <br/><br/>
          <h1>Mon Compte</h1>
          <br/>
          
          <div class="row">
            <div class="col"><h4>Nom d'utilisateur : </h4><?php echo $row2['fullname'];?></div>
            <div class="col"><h4>Adresse : </h4><?php echo $row2['adresse'];?></div>
            </div>
            <div class="row">
            <div class="col"><h4>Num Tel : </h4><?php echo $row2['tel'];?></div>
            <div class="col"><h4>Email : </h4><?php echo $row2['email'];?></div>
          </div>
          <br/><br/>
          <h2>Commandes Passées : </h2>
          <br/>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">N° Commande</th>
                <th scope="col">Date Commande</th>
                <th scope="col">Total Payé (TND)</th>
                <th scope="col">Adresse Livraison</th>
                <th scope="col">Mode de Payement</th>
              </tr>
            </thead>
            <tbody>
            <?php
                $Num=1;
                while($row = mysqli_fetch_array($res_data)){
            ?>
              <tr>
                <th scope="row"><?php echo $Num++;?></th>
                <td><?php echo $row['date_cmd'];?></td>
                <td><?php echo $row['montant_cmd'];?></td>
                <td><?php echo $row['lieu_cmd'];?></td>
                <td><?php echo $row['mode_paiement'];?></td>
              </tr>
             <?php } ?>
            </tbody>
          </table>

        </div>
        
    </body>
    <main>
      Content
    </main>
  
<footer class="flex-rw">
    
    <ul class="footer-list-top">
      <li>
        <h4 class="footer-list-header">About eShop</h4></li>
      <li><a href='about us.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">GET TO KNOW US</a></li>
      <li><a href='about us.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">nos politiques</a></li>
    </ul>
    <ul class="footer-list-top">
        <li>
          <h4 class="footer-list-header">FAQ</h4></li>
        <li><a href='faqlivraison.html' class="generic-anchor footer-list-anchor">livraison</a></li>
        <li><a href='faqpayement.html' class="generic-anchor footer-list-anchor">paiements</a></li>
        
      </ul>
    <ul class="footer-list-top">
      <li id='help'>
        <h4 class="footer-list-header"> Help Me</h4></li>
      <li><a href='contact.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTACT</a></li>
      <li id='order-tracking'><a href='condition.html' itemprop="significantLink" class="generic-anchor footer-list-anchor">conditions d'utilisation</a></li>
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