<?php

// La première partie du code sert uniquement à déclarer les variables fonctions, ...
// La deuxième partie permettra d'afficher les éléments sur la page

//Exercice 1 - Trouver le nombre de caractères d'une chaine de caractères
$phrase = "Notre formation DL commence aujourd'hui";
$nbCar = strlen($phrase);

//Exercice 2 - Trouver le nombre de mot d'une chaine de caractères
$nbMots = str_word_count($phrase);

//Exercice 3 - Remplacer un mot par un autre dans une chaine de caractères
$nvPhrase = str_replace("aujourd'hui", "demain", $phrase);

//Exercice 4 - Vérifier si une phrase est palindrome
$phSuivante = "Engage le jeu que je le gagne";
$phSuiv = str_replace(" ", "", $phSuivante);
$inverse = strtolower(strrev($phSuiv));

//Exercice 5 - Convertir des francs en euros
$mtFranc = 100;
$conv = 6.55957;
$mtEuro = $mtFranc/$conv;
$mtEuros = round($mtEuro, 2);

//Exercice 6 - Calculer un prix TTC via le prix et la quantité d'un article
$prixu = 9.99;
$qte = 5;
$tva = 0.2;
$tvaEcrite = $tva*100;
$pht = $qte*$prixu;
$pttc = $pht*(1+$tva);

//Exercice 7 - Trouver la catégorie d'un enfant
$ageEnfant = 11;

//Exercice 8 - Afficher la table de multiplication d'un chiffre
$nb = 8;

//Exercice 9 - Indiquer si une personne est imposable selon son âge et son sexe
$age = 35;
$sexe = "F";

//Exercice 10 - Déterminer le rendu de la monnaie selon la somme à payer et la somme versée
$apayer = 800;
$verse = 800;
$aRendre = $verse-$apayer;
$listeMonnaies = [500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01];

//Exercice 11 - Afficher les éléments d'un tableau dans des listes à puce
$voitures = ["BMW", "Mercedes", "Audi", "Volkswagen"];

//Exercice 12 - Faire le lien entre deux tableaux associatifs
$perso = ["Mickaël" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG"];
$bonjours = ["français" => "Bonjour", "espagnol" => "Hola", "anglais" => "Hello"];
$correspondances = ["FRA" => "français", "ENG" => "anglais", "ESP" => "espagnol"];

//Exercice 13 - Afficher les notes d'un élève et calculer sa moyenne
$notes = [15, 18, 16, 13, 19, 20, 11, 15];
$moyenne = round(array_sum($notes)/count($notes), 2);

//Exercice 14 - Donner l'âge d'une personne à partir de sa date de naissance, au jour près
$naissance = "2001-12-09";
function calcAge($naissance){
    $intervale = date_diff(date_create(), date_create($naissance));
    echo $intervale->format("Vous êtes âgé de : %y ans, %m mois, %d jours");
}

//Exercice 15 - Afficher le nom, le prénom et l'âge de plusieurs personnes via des classes

Class Personne{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getAge(){
        return $this->_dateNaissance;
    }
}
$person_1 = new Personne("DUPONT", "Michel", "1980-02-19");
$person_2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

function calculAge($person_1){
    $intervale_1 = date_diff(date_create(), date_create($person_1->getAge()));
    echo $intervale_1->format($person_1->getPrenom()." ".$person_1->getNom()." a "."%y ans.");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices</title>
</head>
<body>
    <h2>Exercice 1</h2>
    <p><?php echo "La phrase \"$phrase\" contient $nbCar caractères" ?></p>
    
    <h2>Exercice 2</h2>
    <p><?php echo "La phrase \"$phrase\" contient $nbMots mots" ?></p>
    
    <h2>Exercice 3</h2>
    <p><?php echo "L'ancienne phrase est : \"$phrase\"" ?></p>
    <p><?php echo "La nouvelle phrase est : \"$nvPhrase\"" ?></p>
    
    <h2>Exercice 4</h2>
    <p><?php 
    if(strtolower($phSuiv) === $inverse){
        echo "La phrase \"$phSuivante\" est palindrome";
    } else {
        echo "La phrase \"$phSuivante\" n'est pas palindrome";
    } 
    ?></p>
    
    <h2>Exercice 5</h2>
    <p><?php echo "Montant en francs : $mtFranc" ?></p>
    <p><?php echo "$mtFranc francs = $mtEuros €" ?></p>
    
    <h2>Exercice 6</h2>
    <p><?php echo "Prix unitaire de l'article : $prixu €" ?></p>
    <p><?php echo "Quantité : $qte" ?></p>
    <p><?php echo "Taux de TVA : $tvaEcrite %" ?></p>
    <p><?php echo "Prix total TTC : $pttc €" ?></p>
    
    <h2>Exercice 7</h2>
    <p><?php 
    if($ageEnfant>14){
        echo "L'enfant ne peut entrer dans aucune catégorie";
    } else if($ageEnfant>=11){
        echo "L'enfant qui a $ageEnfant ans appartient à la catégorie \"Cadet\"";
    } else if($ageEnfant>=10){
        echo "L'enfant qui a $ageEnfant ans appartient à la catégorie \"Minime\"";
    } else if($ageEnfant>=8){
        echo "L'enfant qui a $ageEnfant ans appartient à la catégorie \"Pupille\"";
    } else if($ageEnfant>=6){
        echo "L'enfant qui a $ageEnfant ans appartient à la catégorie \"Poussin\"";
    } else {
        echo "L'enfant ne peut entrer dans aucune catégorie";
    } 
    ?></p>
    
    <h2>Exercice 8</h2>
    <p><?php echo "Table de $nb :" ?></p>
    <p><?php 
    for($i=1; $i<=10; $i++){
        $nbVrai = $nb*$i;
        echo "$nb &times $i = $nbVrai"."<br>";
    } 
    ?></p>
    
    <h2>Exercice 9</h2>
    <p><?php 
    if($sexe=="F" && $age>=18 && $age<36){
        echo "La personne est imposable";
    } else if($sexe=="M" && $age>=20){
        echo "La personne est imposable";
    } else {
        echo "La personne n'est pas imposable";
    } ?></p>
    
    <h2>Exercice 10</h2>
    <p><?php echo "Montant à payer : $apayer €" ?></p>
    <p><?php echo "Montant versé : $verse €" ?></p>
    <p><?php echo "Reste à payer : $aRendre €" ?></p>
    <p><?php echo "***********************************************************" ?></p>
    <p><?php echo "Rendu de monnaie :" ?></p>
    <p>
    <?php 
    if($aRendre > 0){
        foreach($listeMonnaies as $monnaie){
            $nbFois = 0; 
            while($monnaie <= $aRendre){
                $nbFois++;
                $aRendre = round($aRendre-$monnaie, 2); // arrondir pour éviter l'erreur de la précision virgule flottante
                if($monnaie > $aRendre){
                    $type = $monnaie >= 5 ? "billet(s)" : "pièces(s)";
                    $valeur = $monnaie < 1 ? $monnaie*100 : $monnaie;
                    $fiduc = $monnaie >= 1 ? "euro(s)" : "centime(s)";
                    echo "$nbFois $type de $valeur $fiduc"."<br>";
                }
            }
        }
    }
    else if($aRendre == 0){
        echo "Il y a le compte !"; 
    } 
    else echo "Pas assez de thunes mec, va bosser ! Il te manque ".abs($aRendre)." euro(s)";
    ?></p>
    
    <h2>Exercice 11</h2>
    <p><?php echo 'Il y a '.count($voitures).' marques de voiture :' ?></p>
    <ul>
        <?php 
        for($l=0; $l<=3; $l++){
            echo "<li>".$voitures[$l]."</li>";
        } 
        ?>
    </ul>
    
    <h2>Exercice 12</h2>
    <p><?php 
    foreach($perso as $pers => $langue){
        echo $bonjours[$correspondances[$langue]]." ".$pers."<br>";
    } 
    ?></p>
    
    <h2>Exercice 13</h2>
    <p><?php echo "Les notes de l'élève sont : ".implode(" / ", $notes)?></p>
    <p><?php echo "Sa moyenne générale est donc de : $moyenne" ?></p>
    
    <h2>Exercice 14</h2>
    <p><?php echo calcAge($naissance) ?></p>
    
    <h2>Exercice 15</h2>
    <p><?php echo calculAge($person_1) ?></p>
    <p><?php echo calculAge($person_2) ?></p>
</body>
</html>