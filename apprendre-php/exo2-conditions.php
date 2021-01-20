<?php

/*==================================================*/
// Exercice 2 - les conditions
// Créer un code PHP permettant d'afficher un message différent en fonction des conditions (if else).
// Le script devra afficher un message de bienvenue uniquement si l'utilisateur est majeur et parle Français ou Anglais.
// Un message type sera affiché en cas de non respect de ces 2 conditions...
/*==================================================*/

$age = 19;
$language = 'en';

echo($age >= 18 ? ($language == 'fr' || $language == 'en' ? ($language == 'fr' ? "Bienvenue" : "Welcome") : "Tu n'es ni français ni anglais") : "Tu n'as pas l'âge requis");

?>