<?php
require_once 'video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    private $espertador;
    private $filme;
    
    public function __construct($espertador, $filme) {
        $this->espertador = $espertador;
        $this->filme = $filme;
        $this->filme-> setviews($this->filme->getviews() + 1);
        $this->espertador->settotassistir($this->espertador->gettotassistir() + 1);
    }

    public function avaliar(){
        $this->filme->setavaliacao(5);
    }
    
    public function avaliarnota($nota){
        $this->filme->setavaliacao($nota);
    }
    
    public function avaliarporc($porc){
        $nova = 0;
        if ($porc <=20) {
            $nova = 3;
        }elseif ($porc <=50) {
            $nova = 5;
        }elseif ($porc <= 90) {
            }else {
                $nova = 10;
            }
            $this->filme->setavaliacao($nota);
    }
    
    public function getEspertador() {
        return $this->espertador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspertador($espertador): void {
        $this->espertador = $espertador;
    }

    public function setFilme($filme): void {
        $this->filme = $filme;
    }


}
