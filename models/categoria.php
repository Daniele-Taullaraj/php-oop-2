<?php

class Categoria {

    public $category;
    public $description;


    public function __construct($category,$description){
        $this->category = $category;
        $this->description = $description;
    }

}