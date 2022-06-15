<?php
class Product
{
    public $brand;
    public $name;
    public $price;
    public $description;
    public $in_stock = true;

    function __construct($_brand, $_name, $_price, $_description)
    {
        $this->brand = $_brand;
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
    }

    public function printInfo()
    {
        return "$this->description $this->brand $this->name € $this->price";
    }
}

trait PetSpecific
{
    public $pet_type;
    public function set_pet_type($_pet_type) {
        $this->pet_type = $_pet_type;
        }
}
