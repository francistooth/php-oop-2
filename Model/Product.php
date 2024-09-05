<?php 
    
class Product
{
    public $name;
    public $img;
    public $category;
    public $info;
    public $price;

    public function __construct($_name, $_img, $_category, $_info, $_price)
    {
        $this->name = $_name;
        $this->img = $_img;
        $this->category = $_category;
        $this->info = $_info;
        $this->price = $_price;
    }

    public function getName(){
        return $this->name;
    }

    public function getImg(){
        return $this->img;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getInfo(){
        return $this->info;
    }

    public function getPrice(){
        return $this->price;
    }
}
?>