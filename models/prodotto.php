<?php

class Product {

    public $name;
    public $description;
    public $category;
    public $price;


    public function __construct($name,$description,Categoria $category,$price){
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->price = $price;
    }

    // public function print(){
    //     echo "<p> il nome è". $this->name . "</p>";
    //     echo "<p> descrizione". $this->description . "</p>";
    //     echo "<p> prodotto per". $this->category . "</p>";
    //     echo "<p> il prezzo è". $this->price . "</p>";
    // }
}