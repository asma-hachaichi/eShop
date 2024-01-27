<!DOCTYPE html>
<?php
  session_start();
  $_SESSION['cat']=3;
    include('./CRUD/produitCRUD.php');
    $conn = new mysqli('localhost','root', '', 'shop');


    if(isset($_SESSION['infopa']))
 {
$info = $_SESSION['infopa'];
}
else
 {
$info="";
unset($_SESSION['infopa']);
}
?>

<html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <meta charset="UTF-8">
      <link href="./css/style.css" rel="stylesheet">
      <link href="./css/stylee.css" rel=" stylesheet">
      <link href="./css/navbar.css" rel="stylesheet">
      <title>Shop Now</title>
    </head>
    <body>

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
              <?php echo "$info" ;
                unset ($_SESSION['infopa']);
                ?>
               </div>
              <?php } ?>
        <div class="container">
          <br/><br/>
          <center><h1>Shop Now !</h1><br/></center>
          

          <div id="bandee">
          <center><h3>Explorez notre boutique en ligne et profitez de nos produits à bas prix !</h3></center> 
          </div>


          <br/><br/>
           <div class="form-group row">
                <input type="text" id="search_text" class="form-control" placeholder="Recherche" >
            </div>
            <div style="margin-top: 20px">

              <div id="result" class="row row-cols-1 row-cols-lg-3" style="padding-left: 72px"></div>
            </div> 
  
          
          <br/><br/>
          
          </div>
        <script>
          $(document).ready(function(){
            load_data();
            function load_data(query)
            {
             $.ajax({
              url:"recherche_produit.php",
              method:"POST",
              data:{query:query},
              success:function(data)
              {
               $('#result').html(data);
              }
             });
            }
            $('#search_text').keyup(function(){
             var search = $(this).val();
             if(search!="")
             {
              load_data(search);
             }
             else
             {
              document.getElementById('result').innerHTML="<div>Aucun Produit</div>"
             }
            });
           });
    </script> 
    </body>

    <main>
     
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