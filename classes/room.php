<?php
abstract class room
{
    private $name;
    private $price;
    private $SpecialFeatures;

    public function __construct($name, $preis, $x)
    {
        $this->name = $name;
        $this->price = $preis;
        $this->SpecialFeatures = $x;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPreis()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getSpecialFeatures()
    {
        return $this->SpecialFeatures;
    }

    public function __toString()
    {
        return $this->getName() . ' - ' . $this->getPrice();
    }

    public abstract function toHTML();

    public abstract function getArea();
}