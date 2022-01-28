<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="bio.php">vers bio</a>
</body>
</html>
<?php

/**
 * 1. Créez un cookie de nom username ayant pour valeur votre prénom
 * 2. Affichez la valeur de ce cookie avec un simple echo.
 */
// TODO Votre code ici.
//setcookie('username', 'Sylvie');
//echo $_COOKIE['username'];

/**
 * 3. Commentez le code du point 1 et 2
 * 4. Créez un cookie de nom username ayant pour valeur votre nom et expirant dans 2 jours et 2h, le domaine doit être localhost ( votre machine )
 * 5. Créez une page bio.php et tentez d'afficher le cookie username sur cette page.
 */
// TODO Votre code ici.
setcookie('username', 'Sylvie', time() + 3600 * 50, '/', 'localhost');

