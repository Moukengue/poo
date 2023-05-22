<?php
class personnage{
    private $nom;
    private $prenom;
    private $age;
    private $sexe;
    //nom

  public function getNom(){
    return $this->nom;

  } 
  public function setNom($nom){
    $this->nom = $nom;
    return $this;
  } 
  //prenom
  public function getPrenom(){
    return $this->prenom;}

    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
      } 
    //age
    public function getAge(){
        return $this->age;}
    
        public function setAge($age){
            $this->nom = $age;
            return $this;
          } 
          //sexe
          public function getSexe(){
            return $this->sexe;}
        
            public function setSexe($sexe){
                $this->nom = $sexe;
                return $this;
              } 
              public function afficher() {
                echo $this->nom . " : " . $this->prenom;
              }
}


 ?>