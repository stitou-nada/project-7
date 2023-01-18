<?php

// parent
abstract class Personne {
    public $Nom;
    public $Prenom;
}

// enfant
class Formateur extends Personne{
    public function addItems($Nom){
        $this->Nom=$Nom;
        return $Nom;
    }
    
}
class Stagiaire extends Personne{
    public function addItems($Nom){
        $this->Nom=$Nom;

    }
}

interface  Gestion {
    public function ajouter($Nom);     
    // public function suprimmer($Nom);      
}

class  Igestion implements Gestion {

    public function ajouter($Nom){
          
         echo $Nom;
    }
}

$formateur = new Formateur();
// $stagiaire = new Stagiaire();
$gestion = new Igestion();
$ajouterFormateur =$formateur->addItems("nada");
$ajouter =$gestion->ajouter($ajouterFormateur);

?>