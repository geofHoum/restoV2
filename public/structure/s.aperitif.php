<?php
/* 
 * Restaurant V2
 * Geoffrey Houmaire
 */

$link=mysqli_connect("localhost", "root", "", "la_marmite");
//$link=mysqli_connect("sql8", "lamarmitestegen", "P2jiUYHT", "lamarmitestegen");
/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Echec de la connexion : %s\n", mysqli_connect_errno());
    exit();
}

// SELECTION DES BOISSIONS PAR FAMILLE
$query = "SELECT boissons.nom, infos.nom AS info, boissons.prix, familles.nom AS famille FROM boissons LEFT JOIN infos ON(boissons.info_id=infos.id) LEFT JOIN familles ON(boissons.famille_id=familles.id) ORDER BY familles.nom, boissons.nom";
$boissons = mysqli_query($link, $query);
$boissons_par_famille = array();
while($row = mysqli_fetch_array($boissons, MYSQLI_ASSOC)){
    $boissons_par_famille[$row['famille']][] = $row;
}
mysqli_close($link);