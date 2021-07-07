<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    require("model.php");
    //extraire les formations de la bdd
    if(!empty($_GET['dpt'])) {
        $dpt = $_GET['dpt'];
        $formations = getFormationsByDepartement($dpt); 
    } else if (!empty($_GET['prixmax'])) {
        $maxprice = $_GET["prixmax"];
        $formations = getFormationsByMaxPrice($maxprice);
    } else {
        $formations = getAllFormation(); 
    }

    require("template/resultsearchView.php");
?>
