<?php

class Personnage{
/* 
public, permet d'indiquer que la propriété ou la méthode sera accessible à l'intérieur mais aussi à l'extérieur de la classe
private, permet d'indiquer que la propriété ou la méthode sera accessible à l'intérieur de la classe seulement
protected, permet d'indiquer que la propriété ou la méthode sera accessible à l'intérieur de la classe et des classes héritées
protected similaire à private en moins restrictifs
*/
    protected static $max_vie = 100;
    protected $vie = 80;
    protected $atk = 20;
    protected $nom;

    // constructeur afin de pouvoir définir directement le nom 
    // lorsque l'on crée l'objet dans ce cas !
    public function __construct($nom){
        $this->nom = $nom;
    }

    //getter & setter si on est pas en ublic seulement
    public function setNom($nom){
        $this->nom = $nom;
    }
    //méthode permettant d'accéder au nom du perso (protected)
    public function getNom(){
        return $this->nom;
    }

    public function getVie(){
        return $this->vie;
    }

    public function getAtk(){
        return $this->atk;
    }

    public function crier(){
        echo 'LEEROY JENKIES';
    }

    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = self::$max_vie;
        }else {
            $this->vie += $vie;
        }
    }

    // nom dégeulasse et fonctionnement dégeulasse !
    protected function empecher_negatif(){
        if($this->vie < 0){
            $this->vie = 0;
        }
    }

    //Si on modifie $cible, on modifie la cible l'objet est pas dupliqué !
    public function attaque($cible){
        // $this //Attaquant
        // $cible //Défenseur
        // defenseur.vie -= attaquant.atk

        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }
    public function mort(){
        return $this->vie <= 0;
    }
}