<?php

if( !isset($_GET['id']) || empty($_GET['id']))
{
    die('Fali id proizvoda');
}
require_once  "modeli/baza.php";
 $idProizvoda=$_GET['id'];
 $rezultat=$baza->query("SELECT*FROM proizvodi WHERE id=$idProizvoda");


 if($rezultat->num_rows==0){
     die("Ovaj proizvod ne postoji");

 }
 $proizvod=$rezultat->fetch_assoc();
 var_dump($proizvod);


 // http://localhost/lekcija16/proizvod.php?id=1-> SELECT*FROM proizvodi WHERE id=$idProizvoda=1 to je neki id proizvoda iz adrese prethodne upita
?>


