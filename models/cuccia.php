<?php

class Cuccia extends Product {

    public $name;
    public $description;
    public $productFor;
    public $price;
    public $cuccia;


    public function __construct($name,$description,$productFor,$cuccia,$price){
        $this->name = $name;
        $this->description = $description;
        $this->productFor = $productFor;
        $this->cuccia = $cuccia;
        $this->price = $price;
    }

    public function print(){
        echo "<p> il nome è ". $this->name . "</p>";
        echo "<p> descrizione ". $this->description . "</p>";
        echo "<p> prodotto per ". $this->productFor . "</p>";
        echo "<p> la cuccia è ". $this->cuccia . "</p>";
        echo "<p> il prezzo è ". $this->price . "</p>";
    }
}