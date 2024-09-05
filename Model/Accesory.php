<?php 

require_once __DIR__ . '/Product.php';

class Toy extends Product {
    public $material;
    public $type;

    public function __construct(string $_name, string $_img, string $_category, string $_info, float $_price, $_material, $_type){

        parent::__construct($_name, $_img, $_category, $_info, $_price);
    
        $this->material =  $_material;
        $this->type = $_type;
    }

}

?>