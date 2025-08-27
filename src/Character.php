<?php
class Character
{
    private int $vie;
    private int $magie;

    // mise en place des getters & setters

    public function getVie()
    {
        return $this->vie;
    }
    public function setVie(int $vie)
    {
        $this->vie = $vie;
    }

    public function getMagie()
    {
        return $this->magie;
    }
    public function setMagie(int $magie)
    {
        $this->magie = $magie;
    }

    public function __construct(int $vie, int $magie)
    {
        $this->setVie($vie);
        $this->setMagie($magie);
    }
}
