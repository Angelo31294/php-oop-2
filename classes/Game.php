<?php 
require_once __DIR__ . "/Products.php";

class Game extends Product {
    private $material;

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
?>