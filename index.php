<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/jpg" href="favicon.PNG"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link href="./css/style.css" rel="stylesheet">

    <title>Login eShop</title>
</head>
<style>
    .container{
        padding: 180px;
    }
</style>
<body>
    <div class="container">
        <center><h2>Connectez-vous à eShop</h2></center>
        <br/>
        <form method="post" action="connect.php">
            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Usename</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="username" name="username" placeholder="Saisir username">
              </div>
            </div>
            <br/>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="password" name="password" placeholder="Saisir password">
              </div>
            </div>
            <br/>
            <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn" type="submit">Connect</button>
            </div>
        </form>
    </div>
</body>
</html>