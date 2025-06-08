<?php
require_once "modeli/izlistavanjeProizvoda.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista proizvoda</title>
</head>
<body>

<?php foreach ($proizvodi as $proizvod): ?>
    <div style="border:1px solid #ccc; padding:10px; margin:10px;">
        <h2><?php echo $proizvod['ime']; ?></h2>
        <p>Opis: <?php echo $proizvod['opis']; ?></p>
        <p>Cena: <?php echo $proizvod['cena']; ?> RSD</p>
        <p>Količina: <?php echo $proizvod['kolicina']; ?></p>

        <?php if($proizvod['kolicina']==0) : ?>
        <p>Nema na stanju</p>

        <?php else: ?>
            <p>Ima na stanju</p>
        <?php endif; ?>


        <a href="modeli/singleProduct.php?id=<?php echo $proizvod['id']; ?>">Pogledaj proizvod</a>

    </div>
<?php endforeach; ?>

</body>
</html>












