<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
        <?php

        $message1 = "0@sn9sirppa@#?ia'jgtvryko1";
        //j'ai appris
        $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
        //toutes les ficelles
        $message3 ="aopi?sgnirts@#?sedhtg+p9l!";
        //des strings

 function decode(message){
    //Première étape
        $longueur = strlen(message) / 2;
    // dexième étape
        $sousChaine = substr(message, 5, $longueur);
    // trosième étape
        $remplace = str_replace('@#?', ' ', $sousChaine);
    // quatrième étape
        echo strrev($remplace);
 };
        ?>
</p>


</body>
</html>