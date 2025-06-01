<?php
require_once "baza.php";
if(!isset($_GET['ime']) || empty($_GET['ime']))
{
    die ("Niste uneli ime proizvoda");
}


$ime= $_GET['ime'];

$rezultat=$baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$ime%' OR opis LIKE '%$ime%'");

if($rezultat->num_rows >= 1)
{
echo "Uspesno ste pronasli".$rezultat->num_rows . "proizvod.";
}
else
{
echo "Niste pronasli". $rezultat->num_rows. "proizvod.";
}

//