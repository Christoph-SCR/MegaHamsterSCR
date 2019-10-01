<?php
abstract class room
{
    private $name;
    private $price;
    private $xtraFeatures;

    public function __construct($n, $p, $x)
    {
        $this->name = $n;
        $this->price = $p;
        $this->xtraFeatures = $x;
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
        return $this->xtraFeatures;
    }

    public function __toString()
    {
        return $this->getName() . ' - ' . $this->getPrice();
    }

}