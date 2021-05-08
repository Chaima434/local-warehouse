<?php

    class Rectancle
    {
        private $longeur;
        private $largeur;
        
        public function __construct($longeur, $largeur)
        {
            $this->longeur = $longeur;
            $this->largeur = $largeur;
        }
        
        public function getLargeur()
        {
            return $this->largeur;
        }
        
        public function getLongeur()
        {
            return $this->longeur;
        }
        
        public function prolonger1($longeur)
        {
            $this->longeur += $longeur;
        }
        
        public function prolonger2($longeur, $largeur)
        {
            $this->longeur += $longeur;
            $this->largeur += $largeur;
        }
    }
    
    $r = new Rectancle(5,8);
    echo "Les valeurs initialiser longeur ".$r->getLongeur()." Largeur ".$r->getLargeur().'<br>';
    $r->prolonger1(2);
    echo "Longeur  ".$r->getLongeur()."<br>";
    $r->prolonger2(2,2);
    echo "Longeur ".$r->getLongeur()." "."Largeur ".$r->getLargeur()."<br>";
?>