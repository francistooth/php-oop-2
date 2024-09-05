<?php 

require_once __DIR__ . '/Product.php';

class Toy extends Product {
    public $material;
    public $form;

    public function __construct(string $_name, string $_img, string $_category, string $_info, float $_price, $_material, $_form){

        parent::__construct($_name, $_img, $_category, $_info, $_price);
    
        $this->material =  $_material;
        $this->form = $_form;
    }

}

?>