<?php

class Cibo extends Product {

    public $name;
    public $description;
    public $productFor;
    public $price;
    public $cibo;


    public function __construct($name,$description,$productFor,$cibo,$price){
        $this->name = $name;
        $this->description = $description;
        $this->productFor = $productFor;
        $this->cibo = $cibo;
        $this->price = $price;
    }

    public function print(){
        echo "<p> il nome è ". $this->name . "</p>";
        echo "<p> descrizione ". $this->description . "</p>";
        echo "<p> prodotto per ". $this->productFor . "</p>";
        echo "<p> il cibo è ". $this->cibo . "</p>";
        echo "<p> il prezzo è ". $this->price . "</p>";
    }
}