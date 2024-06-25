<?php

class Cuccia extends Product {

    public $cuccia;


    public function __construct($name,$description,Categoria $category,$cuccia,$price){
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->cuccia = $cuccia;
        $this->price = $price;
    }

    public function print(){
        echo "<p> il nome è ". $this->name . "</p>";
        echo "<p> descrizione ". $this->description . "</p>";
        if($this->category->category==='cane'){
            echo "<p> prodotto per IF FUNZIONA SONO UN CANEEE </p>";
        }else{
            echo "<p> prodotto per ELSE FUNZIONA SONO UN GATTO </p>";
        }
        echo "<p> la cuccia è ". $this->cuccia . "</p>";
        echo "<p> il prezzo è ". $this->price . "</p>";
    }
}