<?php

class Cibo extends Product {

    
    public $cibo;


    public function __construct($name,$description,Categoria $category,$cibo,$price){
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->cibo = $cibo;
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
        echo "<p> il cibo è ". $this->cibo . "</p>";
        echo "<p> il prezzo è ". $this->price . "</p>";
    }
}