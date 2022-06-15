<?php
require_once __DIR__ . "/Product.php";

class PetFood extends Product {
    public $weight_grams = 0;
    public $pet_type;

    function __construct($_brand, $_name, $_price, $_description, $_weight_grams, $_pet_type) {
        parent::__construct($_brand, $_name, $_price, $_description);
        $this->weight_grams = $_weight_grams;
        $this->pet_type = $_pet_type;
    }

    public function printInfo() {
        return "$this->description $this->brand $this->name $this->weight_grams g € $this->price. Cibo per: $this->pet_type";
    }
}