<?php
require_once "modeli/baza.php";
// izvlacimo podatka iz baze sve kao asocijativni niz 
$rezultat= $baza-> query( "SELECT * FROM `proizvodi` " );
$proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

// pretvaramo rezultate u asocijativni niz





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($proizvodi as $proizvod):?>
        <div>
            <h1><?= $proizvod['ime'] ?></h1>
            <p><?= $proizvod['opis'] ?></p>
            <p>  Cena proizvoda je:<?= $proizvod['cena'] ?></p>
            <p>  Brojno stanje je:<?= $proizvod['kolicina'] ?></p>
            <?php if($proizvod['kolicina'] ==0):?>
            <p>Nemamo na stanju </p>
           <?php else: ?>

           <p>Ima na stanju </p>

            <?php endif;?>

         <a href=  "proizvod.php?id=<?= $proizvod['id'] ?>"> Pogledaj proizvod</a>
        </div>


    <?php endforeach; ?>
</body>
</html>