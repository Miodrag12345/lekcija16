<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login i register</title>
</head>
<body>
    <form action="modeli/domaciLoginUser.php" method="post">
        <input type="email" name="email" placeholder="Upisite vas email" required >
        <input type="password" name="password"  placeholder="Upisite vasu sifru " required>
        <button>Registuj se</button>
    </form>
</body>
</html>