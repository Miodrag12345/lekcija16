<?php

require_once "baza.php";

if(!isset($_POST['ime']) || empty ($_POST['ime']))
{
   die('Morate uneti ime');
}

if (!isset($_POST['opis']) || empty($_POST['opis'])) {
    die('Niste uneli opis proizvoda ');
}

if (!isset($_POST['cena']) || empty($_POST['cena'])) {
    die('Niste uneli cenu proizvoda ');
}

if (!isset($_POST['slika']) || empty($_POST['slika'])) {
    die('Niste uneli sliku proizvoda');
}

if (!isset($_POST['kolicina']) || empty($_POST['kolicina'])) {
    die('Niste uneli kolicinu proizvoda');
}

$ime=$_POST['ime'];
$opis=$_POST['opis'];
$cena=$_POST['cena'];
$slika=$_POST['slika'];
$kolicina=$_POST['kolicina'];
$query="INSERT INTO proizvodi(ime,opis,cena,slika,kolicina) VALUES ('$ime','$opis','$cena','$slika','$kolicina')";
$baza->query($query);

