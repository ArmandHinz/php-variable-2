<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$filmotech["Indiana Jones et le Royaume du crâne de cristal"] = 2008;
$filmotech["Indiana Jones et les Aventuriers de l'arche perdue"] = 1981;
$filmotech["Indiana Jones et la Dernière Croisade"] = 1989;

asort($filmotech);

foreach ($filmotech as $key => $filmotech){
    echo " ".$filmotech.'-'.$key;
}


?>
</body>
</html>
