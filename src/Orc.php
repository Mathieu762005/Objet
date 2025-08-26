<?php
require_once "Character.php";

class Orc extends Character
{
    private int $degatMin;
    private int $degatMax;

    public function getDegatMin()
    {
        return $this->degatMin;
    }
    public function setDegatMin(int  $degatMin)
    {
        $this->degatMin = $degatMin;
    }

    public function getDegatMax()
    {
        return $this->degatMax;
    }
    public function setDegatArme(int $degatMax)
    {
        $this->degatMax = $degatMax;
    }

    public function __construct($vie, $magie, $degatMin, $degatMax)
    {
        parent::__construct($vie, $magie);

        $this->setDegatMin($degatMin);
        $this->setDegatArme($degatMax);
    }
}

echo "les degat minimum de l'orc {$degatMin}. Les degat Maximum de l'orc {$degatMax}.";
