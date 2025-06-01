<?php

if(!isset($_POST['email']) ||   empty($_POST['email'])) {
    die("Niste uneli email adresu");
}
if(!isset($_POST['password']) ||  empty($_POST['password'])) {
    die("Niste uneli sifru");
}

require_once "baza.php";

$email=$_POST['email'];
$password=$_POST['password'];
// 1 korak
$rezultat=$baza->query("SELECT*FROM korisnici WHERE email='$email'");
if($rezultat->num_rows == 1) {
    $korisnik = $rezultat->fetch_assoc();

    // poredimo sifru koju smo upisali sa sifrom iz forme sa podatkom iz  baze korisnika i tabele
    $verifikovanaSifra=password_verify($password,$korisnik['password']);
    if($verifikovanaSifra==true){
        echo  "Dobrodosli nazad";
    }
    else {
        echo "Sifra nije tacna";
    }
}
else
{
    echo"Korisnik ne postoji";
}



//1.Proveriti da li korisnik postoji
//2 korak proveriti za loginovanje da li sifra postoji
//3 ispisati poruke da li je korisnik dobrodosao - korisnik ne postoji
//4 Kako da uporedite sifru (hasovanu) iz baze sa sifrom koja je uneta