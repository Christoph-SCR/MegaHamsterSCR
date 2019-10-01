<?php
require_once('room.php');

class rectangle extends room {

    private $length;
    private $width;
    private $height;

public function __construct($n, $p, $x, $l, $w, $h)
    {
        $this->length = $l;
        $this->width = $w;
        $this->height = $h;
        parent::__construct($n, $p, $x);
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    public function getArea() {
        return $this->getLength() * $this->getWidth();
    }


    public function toHTML(){
        $features = $this->getSpecialFeatures();
        $price = $this->getPreis();
        $length = $this->getLength();
        $width = $this->getWidth();
        $height = $this->getHeight();
        $name = $this->getName();
        $area = $this->getArea();

        return <<<ENDE
             <div class="product">
                <h3 style="color:red">$name</h3>
                <p>Length: $length</p>
                <p>Width: $width</p>
                <p>Height: $height</p>
                <p>Area: $area</p>
                <p>Price: $price</p>
                <h5 style="color:green">Special Equipment</h5>
                <p>$features</p>
             </div> 
ENDE;
    }
}