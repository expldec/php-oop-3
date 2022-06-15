<?php
require_once __DIR__ . "/Product.php";

class PetToy extends Product {
    use PetSpecific;

    function __construct($_brand, $_name, $_price, $_description, $_pet_type) {
        parent::__construct($_brand, $_name, $_price, $_description);
        $this->pet_type = $_pet_type;
    }

    public function printInfo() {
        return "$this->description $this->brand $this->name € $this->price. Adatto per: $this->pet_type";
    }
}