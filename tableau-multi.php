<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $film = [
            'Indiana Jones et le Royaume du crâne de cristal' => ['Harrison Ford','Karen Allen','Ray Winstone'],
            'Indiana Jones et les Aventuriers de l\'arche perdue' => ['Harrison Ford','Denholm Elliott','Karen Allen'],
            'Indiana Jones et la Dernière Croisade' => ['Harrison Ford','John Rhys-Davies','Alison Doody']
        ];

        foreach($film as $key => $film){
            echo " ".$key.'dont les acteurs'." ";
                foreach($film as $key => $film){
                    echo " - ".$film;
                }
            echo " /";
        }
    ?>
</body>
</html>