<?php
require_once "Character.php";

class Guerrier extends Character
{
    private string $arme;
    private int $degatArme;
    private string $bouclier;
    private int $valeurBouclier;

    public function getArme()
    {
        return $this->arme;
    }
    public function setArme(string $arme)
    {
        $this->arme = $arme;
    }

    public function getDegatArme()
    {
        return $this->degatArme;
    }
    public function setDegatArme(int $degatArme)
    {
        $this->degatArme = $degatArme;
    }

    public function getBouclier()
    {
        return $this->bouclier;
    }
    public function setBouclier(string $bouclier)
    {
        $this->bouclier = $bouclier;
    }

    public function getValeurBouclier()
    {
        return $this->valeurBouclier;
    }
    public function setValeurBouclier(int $valeurBouclier)
    {
        $this->valeurBouclier = $valeurBouclier;
    }

    public function __construct($vie, $magie, $arme, $degatArme, $bouclier, $valeurBouclier)
    {
        parent::__construct($vie, $magie);

        $this->setArme($arme);
        $this->setDegatArme($degatArme);
        $this->setBouclier($bouclier);
        $this->setValeurBouclier($valeurBouclier);
    }

    public function attaque()
    {
        return $this->getDegatArme();
    }

    public function getDomage($domage, $vie, $valeurBouclier, $degatArme)
    {
        $vieTotal = $vie + $valeurBouclier;
        $domage = $vieTotal - $degatArme;
        return $domage;
    }
}
