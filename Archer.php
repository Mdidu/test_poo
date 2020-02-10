<?php
class Archer extends Personnage {

    // Pour modifier le constructeur, doit être égal à la "function" parent!! 
    public function __construct($nom){
        $this->vie = $this->vie / 2;
        parent::__construct($nom);
    }

    public function attaque($cible){
        // $cible->vie -= 2 * $this->atk;
        $cible->vie -= $this->atk;
        // $cible->empecher_negatif();
        parent::attaque($cible);
    }
}

class Arbaletrier extends Archer {
    
}