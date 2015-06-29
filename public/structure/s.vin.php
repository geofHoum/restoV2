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
$query = "SELECT vins.nom, infos.nom AS info, vins.prix, familles.nom AS famille FROM vins LEFT JOIN infos ON(vins.info_id=infos.id) LEFT JOIN familles ON(vins.famille_id=familles.id) ORDER BY familles.id, vins.nom";
$vins = mysqli_query($link, $query);
$vins_par_famille = array();
while($row = mysqli_fetch_array($vins, MYSQLI_ASSOC)){
    $vins_par_famille[$row['famille']][] = $row;
}
mysqli_close($link);