<?php
function connectDB() {
    $pdo = new PDO("mysql:host=localhost;dbname=annuaireformation", 'annuaireformation', 'annuaireformation'); // un objet de la classe PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
function getAllFormation() {
    $pdo = connectDB();
    $sql = "SELECT * FROM formations;";
    $resultat = $pdo->query($sql);  
    $formations = [];
    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        $formations[] = $row;
    }
    $pdo = null;
    return $formations;
}

function getFormationsByDepartement($dpt) {
    $pdo = connectDB();
    $sql = "SELECT * FROM formations WHERE departement=$dpt;";
    $resultat = $pdo->query($sql);  
    $formations = [];
    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        $formations[] = $row;
    }
    $pdo = null;
    return $formations;
}

function getFormationsByMaxPrice($maxprice) {
    $pdo = connectDB();
    $sql = "SELECT * FROM formations WHERE prix <= $maxprice;";
    $resultat = $pdo->query($sql);  
    $formations = [];
    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        $formations[] = $row;
    }
    $pdo = null;
    return $formations;
}