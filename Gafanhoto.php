<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
   private $login;
   private $totassistir;
   
   public function __construct($nome, $idade, $sexo, $login) {
       parent::__construct($nome, $idade, $sexo);
       $this->login = $login;
       $this->totassistir = 0;
               
   }

   public function getLogin() {
       return $this->login;
   }

   public function getTotassistir() {
       return $this->totassistir;
   }

   public function setLogin($login): void {
       $this->login = $login;
   }

   public function setTotassistir($totassistir): void {
       $this->totassistir = $totassistir;
   }

      
   public function assistirmaisum() {
       $this->totassistir ++;
   }
}
