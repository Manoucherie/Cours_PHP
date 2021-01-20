<?php

/*==================================================*/
// Exercice 1 - les opérateurs
// Créer un code PHP permettant de calculer le prix total HT et le prix total TTC pour l'achat de x articles et les afficher.
// Affecter les valeurs 0.206 pour le taux de TVA, 100 pour le prix du produit et 10 pour les quantités
// On affichera dans un premier temps le prix HT du produit, le taux de TVA en % ainsi que la quantité commandée puis le résultat HT et TTC.
/*==================================================*/

$tva = 0.206;
$price = 100;
$quant = 10;

printf("HT (unité): %s€<br>
        TVA (%%): %s%%<br>
        Quantité: %s<br>
        HT (total): %s€<br>
        TTC (total): %s€<br>", 
        $price, $tva*100, $quant, $price*$quant, (($price*$quant)*$tva)+($price*$quant)
);
$age = 22;
if ($age >= 18) {
    echo "tu es majeur";
}
?>

