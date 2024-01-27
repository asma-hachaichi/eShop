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
      <link href="./css/navbar.css" rel="stylesheet">
      <title>eShop</title>
    </head>
    <style>
      #carouselExampleCaptions{
        padding: 25px;
        margin: 20;
        width:auto;
        height:auto;
      }
      .d-block_w-100{
        width: 500px;
        height: 400px;
       
      }
      .carousel-caption_d-none_d-md-block{
        font-size: initial;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      }

    </style>
  
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
                <button class="navbar" onclick="window.location.href='shop.php'">Shop Now</button>      
	 
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
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" style=" filter: invert(1);">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" ></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <center><img src="./img/image1.jpg" class="d-block_w-100" alt="..."></center>
            <div class="carousel-caption_d-none_d-md-block">
            <center><h5>LIVRAISON PORTE A PORTE</h5></center>
          <center><p>Finis le casse-tête de la vente à distance!<br/> Ne vous déplacez plus, un livreur vient jusqu'en bas de chez vous pour récupérer ou vous livrer un article</p></center>
          <br>
            </div>
          </div>
          <div class="carousel-item">
          <center><img src="./img/logo3.PNG" class="d-block_w-100" alt="..."></center>
            <div class="carousel-caption_d-none_d-md-block">
            <center> <h5>PRIX IMBATTABLES!</h5></center>
          <center> <p>eShop vous propose des prix imbattables.</br/> Ne cherchez pas trop loin, nos prix sont les plus bas dans le marché !</p></center>
          <br>
            </div>
          </div>
          <div class="carousel-item">
          <center><img src="./img/cadena.jpg" class="d-block_w-100" alt="..."></center>
            <div class="carousel-caption_d-none_d-md-block">
            <center><h5>PAIEMENTS SECURISES</h5></center>
          <center><p>Vos paiements en ligne ou en cash sont sécurisés par eShop.<br/> Et si l'article n'est pas conforme, le remboursement est garanti et le retour offert!.</p></center>
          <br>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="background-color: black; filter: invert(1);">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="background-color: black; filter: invert(1);">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </body>
   
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