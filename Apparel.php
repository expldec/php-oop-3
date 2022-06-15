<?php
require_once __DIR__ . "/Product.php";

class Apparel extends Product {
    public $size;
    public $material;

    function __construct($_brand, $_name, $_price, $_description, $_size, $_material) {
        parent::__construct($_brand, $_name, $_price, $_description);
        $this->size = $_size;
        $this->material = $_material;
    }

    public function printInfo() {
        return "$this->description $this->brand $this->name $this->material € $this->price. Taglia: $this->size";
    }
}