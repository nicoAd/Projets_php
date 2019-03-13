<?php

class Animal{
    private $couleur = "gris";
    private $poids = 5;
    private static $pattes = 4;
   
    const POIDS_LEGER = 5;
    const POIDS_MOYEN = 10;
    const POIDS_LOURD = 15;

    public function __construct($couleur, $poids){
        //echo'appel du constructeur';
        $this->couleur = $couleur;
        $this->poids = $poids;
       
    }
   //accesseurs
    public function getCouleur(){
        return $this->couleur;
    }
    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }
    public function ajouter_kilo(){
        $this->poids = $this->poids + 1;
    }
    public function manger_animal(Animal $animal_manger){
        $this->poids = $this->poids + $animal_manger->poids;
        $animal_manger->poids = 0;
        $animal_manger->couleur="";
    }

    //method static
    public static function se_deplacer(){
        echo"L'animal se déplace";
    }
        
    /**
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *
     * @return  self
     */ 
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of pattes
     */ 
    public static function getPattes()
    {
        return self::$pattes;
    }

    /**
     * Set the value of pattes
     *
     * @return  self
     */ 
    public static function setPattes($pattes)
    {
        $this->pattes = $pattes;

        return $this;
    }
}



?>