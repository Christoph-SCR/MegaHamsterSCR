<?php

require_once 'room.php';

class octagon extends room {
    var $sidelength;

    /**
     * octagon constructor.
     * @param $sidelength
     */
    public function __construct(string $name, string $preis, $x, float $sidelength)
    {
        $this->sidelength = $sidelength;
        parent::__construct($name, $preis, $x);

    }

    public function getArea():float {
        return (3/2)*pow(($this->getSidelength()),2)*sqrt(3);
    }

    /**
     * @return mixed
     */

    public function getSidelength()
    {
        return $this->sidelength;
    }

    public function toHTML() {
        $features = $this->getSpecialFeatures();
        $price = $this->getPreis();
        $sidelength = $this->getSidelength();
        $name = $this->getName();
        $area = $this->getArea();

        return <<<ENDE
                <div class="product">
                    <h3 style="color:red">$name</h3>
                    <p>Side-Length: $sidelength</p>
                    <p>Area: $area</p>
                    <p>Price: $price</p>
                    <h5 style="color:green">Special Equipment</h5>
                    <p>$features</p>
                </div>
ENDE;
    }


}
