<?php

require './classes/perso.class.php';
echo " Vive la POO !";

echo "<pre>";
$manelle = new Personnage("manuelita", "F");
$makan = new Personnage("makan", "M");

// var_dump($manelle);

// $manelle->nom = "manuela";
// echo "<br>".$manelle->nom;

echo $manelle->get_nom(); // get

$manelle->set_nom("manuella"); // set

$manelle->malade = TRUE;

echo "<br>".$manelle->get_nom(); // 

echo "<br>".$manelle->malade; // 

$oscar = new Magicien("Gandalfette", "F");

var_dump($oscar);

echo $oscar->get_nom();