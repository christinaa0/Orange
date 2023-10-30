<?php

require_once("controleur/controleur.class.php");
//instanciation de la classe controleur
$unControleur= new Controleur();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400&family=Montserrat:ital@0;1&family=Work+Sans&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <title>ORABGE</title>
</head>
<body>
<center>
 <section id="entete">
    <h1>ORANGE</h1>

    <a href="index.php?page=1">
            <img src="images/logo" height="150" width="150"> </a>
    
    <a href="index.php?page=2">        
            <img src="images/intervention.png" height="150" width="150"> </a>
    
    <a href="index.php?page=3">
            <img src="images/produits.png" height="150" width="150"> </a>
    
    <a href="index.php?page=4">
            <img src="images/technicien.png" height="150" width="150"> </a>
    
    <a href="index.php?page=5">
            <img src="images/clients.png" height="150" width="150"> </a>
</section>
               
</center> 
<?php
//si page existe afficher sinon afficher la page 1
if (isset($_GET['page'])) {
    $page= $_GET['page'];
}  else {
    $page = 1;
}
// autre methode $page=(isset($_GET['page'])) ? $_GET['page'] : 1 ;

switch($page) {
    case 1 : require_once ("home.php"); break;
    case 2 : require_once ("gestion_clients.php"); break;
    case 3 : require_once ("gestion_interventions.php"); break;
    case 4 : require_once ("gestion_produits.php"); break;
    case 5 : require_once ("gestion_techniciens.php"); break;
    default  : require_once ("erreur.php"); break;
}
?>

</body>
</html>