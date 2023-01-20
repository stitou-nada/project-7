<?php

// parent
abstract class Personne {
    public $Nom;
    public $Prenom;
}

// enfant
class Formateur extends Personne{
   public function presentation($Nom ,$Prenom){
    $this->Nom = $Nom;
    $this->Prenom = $Prenom;
    return [$Nom,$Prenom ,"is a Formateur"];   
}  
    
}
class Stagiaire extends Personne{
   public function presentation($Nom, $Prenom ){
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        return [$Nom,$Prenom ,"is a stagiaire"];    
    }  
}

interface IGestionPerson   {
    
    public function Ajouter($data);
    public function Supprimer($data);
    public function afficherData();

}
class GestionPerson implements IGestionPerson  {
   public  $list = array();
    public function Ajouter($data)
   {
      $_data= implode(" ", $data);
       array_push($this->list,$_data);
   }
   public function afficherData(){
       $data =  $this->list;
       foreach($data as $value){
           echo $value .'<br>';
        }
        echo "total Person : ". count($data);
   }
   public function Supprimer($data){
    $_data= implode(" ", $data);
  $arraySearch= array_search($_data,$this->list);
  \array_splice($this->list,$arraySearch,1);
}


}

$formateur = new Formateur;
$Stagiaire = new Stagiaire;
$Gestion = new GestionPerson;
$AddFormateur =  $formateur->presentation('boutaina',"el harrak");
$AddStagiaire =  $Stagiaire->presentation('nada',"stitou");
$AddStagiaire1 =  $Stagiaire->presentation('hicham',"mliki");
$Gestion->Ajouter($AddFormateur);
$Gestion->Ajouter($AddStagiaire);
$Gestion->Ajouter($AddStagiaire1);
$Gestion->Supprimer($AddStagiaire1);
$Gestion->afficherData();

?>