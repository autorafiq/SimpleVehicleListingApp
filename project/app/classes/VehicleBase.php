<?php
//Create an abstract VehicleBase class to handle shared vehicle properties (name, type, price, image)
abstract class VehicleBase{
    
    protected $name, $type, $price, $image;
    
    // constructor 
    function __construct($name, $type, $price, $image)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }
    // define an abstract method
    abstract public function getDetails();
}

?>