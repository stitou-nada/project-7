<?php

// parent
abstract class Personne {
    public $Nom;
    public $Prenom;
}

// enfant
class Formateur extends Personne{
   public function addItems($Nom ,$Prenom){
    $this->Nom = $Nom;
    $this->Prenom = $Prenom;
    return [$Nom,$Prenom ,"is a Formateur"];   
}  
    
}
class Stagiaire extends Personne{
   public function addItems($Nom, $Prenom ){
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        return [$Nom,$Prenom ,"is a stagiaire"];    
    }  
}

interface Gestion   {
    
    public function Ajouter($data);
    public function Supprimer($data);
    public function afficherData();

}
class IGestion implements Gestion  {
   public  $listData = array();
    public function Ajouter($data)
   {
      $_data= implode(" ", $data);
       array_push($this->listData,$_data);
   }
   public function afficherData(){
       $data =  $this->listData;
       foreach($data as $value){
           echo $value .'<br>';
        }
        echo "total Person : ". count($data);
   }
   public function Supprimer($data){
    $_data= implode(" ", $data);
  $arraySearch= array_search($_data,$this->listData);
  \array_splice($this->listData,$arraySearch,1);
}


}

$formateur = new Formateur;
$Stagiaire = new Stagiaire;
$Gestion = new IGestion;
$AddFormateur =  $formateur->addItems('boutaina',"el harrak");
$AddStagiaire =  $Stagiaire->addItems('nada',"stitou");
$AddStagiaire1 =  $Stagiaire->addItems('hicham',"mliki");
$Gestion->Ajouter($AddFormateur);
$Gestion->Ajouter($AddStagiaire);
$Gestion->Ajouter($AddStagiaire1);
$Gestion->Supprimer($AddStagiaire1);
$Gestion->afficherData();

?>