<?php

namespace App\Entity;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;

class Armes {

    public $nom;
    public $desc;
    public $degats;
   
    public static $armes = [];

    public function __construct($nom, $desc, $degats)
    {
        $this->nom = $nom;
        $this->desc = $desc;
        $this->degats = $degats;
        self::$armes[] = $this;
    }

    public static function creerArmes() {

        $armes1 = new Armes("epee", "Une superbe épée", 10);
        $armes2 = new Armes("hache", "Une superbe hache", 15);
        $armes3 = new Armes("arc", "Un superbe arc", 7);

    }

    public static function getArmesParNom($nom) {
        foreach(self::$armes as $arme) {
            if ($arme->nom === $nom) {
                return $arme;
            }
        }
    }
}