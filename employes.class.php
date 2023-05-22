<?php 
class employe {
   public $nome;
   public $prenom;
   public $dated;
   public $fonction;
   public $salaire;
   public $service;
   
 public function prime_annuel(){
   $oDate = new DateTime();
   $today = strtotime ($oDate);
   $oDateVersement = new DateTime();
   $oDateemb = new DateTime($this-> dated);
   $interval = $oDate - $oDateemb;

 }
}
   ?>