<?php
/* 
 * Restaurant V2
 * Geoffrey Houmaire
 */

$link=mysqli_connect("sql8", "lamarmitestegen", "P2jiUYHT", "lamarmitestegen");

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Echec de la connexion : %s\n", mysqli_connect_errno());
    exit();
}
// SELECTION Des ENTREEs PAR TYPE
$query = "SELECT cartes.nom,  infos.nom AS info, cartes.prix, types.nom  AS type FROM cartes LEFT JOIN types ON (type_id=types.id) LEFT JOIN infos ON (info_id=infos.id)";
$cartes = mysqli_query($link, $query);
$cartes_par_type=array();
while ($row = mysqli_fetch_array($cartes, MYSQLI_ASSOC)) {
    $cartes_par_type[$row['type']][] = $row; 
}
//var_dump($cartes_par_type);
mysqli_close($link);
