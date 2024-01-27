<?php
session_start();
require_once 'connectdb.php';
$sql = "SELECT idp from Produit"; 
$conn->query("SET NAMES 'utf8'");
$result = $conn->query($sql);
if(isset($_SESSION['info']))
 {
$info = $_SESSION['info'];
}
else
 {
$info="";
unset($_SESSION['info']);}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" type="image/jpg" href="favicon.PNG"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <link href="./css/style.css" rel="stylesheet">
        <link href="./css/stylee.css" rel=" stylesheet">
       <link href="./css/footer.css" rel=" stylesheet">
      <link href="./css/style-admin.css" rel="stylesheet">
      <link href="./css/navbar.css" rel="stylesheet">
        <title>Ajout Produit</title>
    </head>
    <body>
    <div>
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
          <h1>Ajouter un produit</h1>
          <br/><br/>

          <form method="POST" action="new-product.php" enctype="multipart/form-data">
            <br/>
              <?php if (!empty($info)) { ?>
              <div class="alert-info">
              <?php echo $info ;
                unset ($_SESSION['info']);
                ?>
               </div>
              <?php } ?>
              <br/>
            <div class="form-group row">
              <label for="nom" class="col-sm-2 col-form-label">Nom produit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisir nom produit" required>
              </div>
            </div>
            <br/>
            <div class="form-group row">
              <label for="cat" class="col-sm-2 col-form-label">Catégorie</label>
              <div class="col-sm-10" id="cat">
                <input class="form-check-input" type="radio" name="catalogue" id="f" value="femme">
                <label class="form-check-label" for="f">
                  Femme
                </label>
              
            
                <input class="form-check-input" type="radio" name="catalogue" id="h" value="homme">
                <label class="form-check-label" for="h">
                  Homme
                </label>
              
            
                <input class="form-check-input" type="radio" name="catalogue" id="e" value="enfant">
                <label class="form-check-label" for="e">
                  Enfant
                </label>
                <div>
                <select name="categorie" id="cat" >
                    <option value="">--Choisissez une Catégorie--</option>
                    <option value="pantalon">Pantalon</option>
                    <option value="chemise">Chemise</option>
                    <option value="robe">robe</option>
                    <option value="chaussures">Chaussures</option>
                    <option value="pull">pull</option>
                    <option value="veste">veste</option>
              </select>
              </div>
              </div>
            </div>
            <br/>
            <div class="form-group row">
              <label for="prix" class="col-sm-2 col-form-label">Prix produit</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="prix" name="prix" placeholder="Saisir prix" required>
              </div>
            </div>
            <br/>
 
            <div class="form-group row">
              <label for="desc" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" id="desc" name="desc" rows="3" placeholder="Saisir description"></textarea>
              </div>
            </div>
            <br/>
            <div class="form-group row">
              <label for="img" class="col-sm-2 col-form-label">Image produit</label>
              <div class="col-sm-10">
              <input type="file" class="form-control-file" id="image" name="image">
              </div>
            </div>
            <br/><br/>
            <div class="d-grid gap-2 col-6 mx-auto">
              <input type="submit" class="btn btn-secondary"></input>
            </div>
          </form>
          
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