<?php

/*Ton challenge dans cette quête consiste à créer une fonction PHP nommée "writeSecretSentence" prenant en argument deux paramètres de type chaîne de caractères. À l’intérieur de la fonction, tu dois recréer la phrase mystère suivante : "PARAMETRE_1 s'incline face à PARAMETRE_2" en remplaçant "PARAMETRE_1" et "PARAMETRE_2" par le texte reçu en paramètre lors de l'appel. Une fois le résultat obtenu, tu dois faire en sorte que la fonction renvoie ce résultat afin qu’il soit affiché en dehors.

Indy pourra ainsi appeler plusieurs fois la fonction writeSecretSentence en essayant plusieurs animaux, face à différentes choses comme "la lune", "le feu", etc.

Pour ceci, créer un fichier index.php où tu dois définir ta fonction et l’exécuter.

Critères de validation
La fonction prend en entrée deux paramètres,
Les bons types sont appliqués aux paramètres et au retour,
Le mot clé return est utilisé dans la fonction pour renvoyer le résultat,
L'affichage du résultat se fait bien à l’extérieur de la fonction et non directement dedans,
Le fichier index.php est disponible depuis un lien Gist ou Github.*/

function writeSecretSentence(string $animaux, string $objet){
    $sentace = 'Oh my god a '.$animaux.' fight a '.$objet. ' it\'s unbelivable!!!!';
    return $sentace;
};

echo writeSecretSentence('dog' , 'bottle');
