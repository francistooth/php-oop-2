<?php 

require_once __DIR__ . '/Product.php';

class Toy extends Product {
    public $expire_date;
    public $flavour;

    public function __construct(string $_name, string $_img, string $_category, string $_info, float $_price, $_expire_date, $_flavour){

        parent::__construct($_name, $_img, $_category, $_info, $_price);
    
        $this->expire_date =  $_expire_date;
        $this->flavour = $_flavour;
    }

}

?>