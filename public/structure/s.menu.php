<?php

/* 
 * Restaurant V2
 * Geoffrey Houmaire
 */
$link=mysqli_connect("localhost", "root", "", "la_marmite");

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Echec de la connexion : %s\n", mysqli_connect_errno());
    exit();
}

/* Requete Menus */
$query = "SELECT * fROM menus";
$menus = mysqli_query($link, $query);
$menus_tab = array();
while ($row = mysqli_fetch_array($menus, MYSQLI_ASSOC)) {
    $menus_tab[] = $row;
}
/* Compte le nombre de menus */
$result = count($menus_tab);

/* Requete contenus menus par type */
$query = "SELECT * FROM contenus ORDER BY menu_id";
$menus_contenus = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($menus_contenus, MYSQLI_ASSOC)) {
    $menu_tab[$row["menu_id"]][] = $row;
}

mysqli_close($link);