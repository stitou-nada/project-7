<?php

// parent
abstract class Personne {
    public $Nom;
    public $Prenom;
    public function Presentation(){
        return 'is person ';
     }
}

// enfant
class Formateur extends Personne{
    public function Presentation(){
        return 'is stagiare';
      }
    
}
class Stagiaire extends Personne{
    public function Presentation(){
        return 'is stagiare';
      }
      
}  


interface IGestionPerson   {
    
    public function Ajouter($data);
    public function Supprimer($data);
}
class GestionPerson implements IGestionPerson  {
    static  public $compteur=0;
      
        public function Ajouter($data){
            self::$compteur++;
        }
  
        public function Supprimer($data){
            self::$compteur--;
        }
}

// programme test
$formateur = new Formateur('nada','stitou');
$stagiaire = new Stagiaire;
$stagiaire->Nom= 'nada';
$stagiaire->Prenom= 'stitou';

$gestion = new GestionPerson;

$gestion->Ajouter($formateur);
$gestion->Ajouter($stagiaire);
$gestion->Ajouter($stagiaire);

echo GestionPerson::$compteur ."<br>";//echo : 3
$gestion2 = new GestionPerson;
$gestion2->Ajouter($formateur);
$gestion2->Ajouter($stagiaire);

echo GestionPerson::$compteur."<br>";//output : 5
echo $formateur->Presentation() ."<br>" ;// is formateur
echo $stagiaire->Presentation();// is stagiare
?>