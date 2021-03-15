<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $weapons = ['fists', 'whip', 'gun'];
    $opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO
    if ($opponentWeapon == 'fists'){
        $indyWeapon = 'gun';
    }

    elseif ($opponentWeapon == 'whip'){
        $indyWeapon = 'fist';
    }

    else {
        $indyWeapon = 'whip';
    }
     echo 'The ennemi use '.$opponentWeapon.' '.'and Indy use '.$indyWeapon.' Indy win because he is too strong!';

?>
</body>
</html>

