<?php
require_once "Character.php";

class Guerrier
{
    private $arme;
    private $domageArme;
    private $bouclier;
    private $valeurBouclier;

    public function getarme()
    {
        return $this->arme;
    }
    public function setarme(int $arme)
    {
        $this->arme = $arme;
    }

    public function getdomageArme()
    {
        return $this->domageArme;
    }
    public function setdomageArme(int $domageArme)
    {
        $this->domageArme = $domageArme;
    }

    public function getbouclier()
    {
        return $this->bouclier;
    }
    public function setbouclier(int $bouclier)
    {
        $this->bouclier = $bouclier;
    }

    public function getvaleurBouclier()
    {
        return $this->valeurBouclier;
    }
    public function setvaleurBouclier(int $valeurBouclier)
    {
        $this->valeurBouclier = $valeurBouclier;
    }

    public function __construct($arme, $domageArme, $bouclier, $valeurBouclier)
    {
        $this->setarme($arme);
        $this->setdomageArme($domageArme);
        $this->setbouclier($bouclier);
        $this->setvaleurBouclier($valeurBouclier);
    }
}
