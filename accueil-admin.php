<!DOCTYPE html>
<html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
      <meta charset="UTF-8">
      <link href="./css/footer.css" rel=" stylesheet">
      <link href="./css/style-admin.css" rel="stylesheet">
      <link href="./css/navbar.css" rel="stylesheet">
      <title>Accueil Admin</title>
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
        <div class="container">
        <br/><br/><br/>
          <center>
          <h1>Welcome to eShop Admin !</h1><br/><br/>
          <h3>Choisir une action :</h3></center>
          <div class="d-grid gap-2 col-7 mx-auto">
          <br/><br/>
            <a class="btn btn-primary btn-lg" href="produita.php" role="button">Voir Liste Produits</a>
            <hr/>
          </div>
          <div class="d-grid gap-2 col-7 mx-auto">
            <a class="btn btn-primary btn-lg" href="clienta.php" role="button">Voir Liste Clients</a>
            <hr/>
          </div>
          <div class="d-grid gap-2 col-7 mx-auto">
            <a class="btn btn-primary btn-lg" href="ajout-produit.php" role="button">Ajouter Nouveau Produit</a>
            <br/><br/>
          </div>
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