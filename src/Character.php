<?php
class Character
{
    private int $vie;
    private int $magie;
    private int $nb;

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

    public function getNb()
    {
        return $this->nb;
    }
    public function setNb(int $nb)
    {
        $this->nb = $nb;
    }

    public function __construct(int $vie, int $magie, int $nb)
    {
        $this->setVie($vie);
        $this->setMagie($magie);
        $this->setNb($nb);
    }

    public function nbAleatoire()
    {
        $this->nb = rand(1, 6);

        if ($this->getnb() % 2 === 0) {
            echo "Le Guerrier attaque avec une frappe de 250 💥";?>
            <br><?php
            echo "L’Orc n’a plus que 1250 ❤️";
        } else {
            echo "L’Orc attaque avec 320 dégâts 💥";?>
            <br><?php
            echo "Le bouclier du Guerrier absorbe 100 ️";?>
            <br><?php
            echo "Le Guerrier n’a plus que 1780 ❤️";
        }
    }
}
