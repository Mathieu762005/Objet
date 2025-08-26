<?php
class Character
{
    private int $vie;
    private int $magie;

    // mise en place des getters & setters

    public function getvie()
    {
        return $this->vie;
    }
    public function setvie(int $vie)
    {
        $this->vie = $vie;
    }

    public function getmagie()
    {
        return $this->magie;
    }
    public function setmagie(int $magie)
    {
        $this->magie = $magie;
    }

    public function __construct(int $vie, int $magie)
    {
        $this->setvie($vie);
        $this->setmagie($magie);
    }
}
