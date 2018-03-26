<?php

class Recipe{

    private $title;
    private $description;
    private $dateCreation;
    private $images;
    private $category;
    private $rate;

    public function __construct(){

    }

    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getDataCreation(){
        return $this->dateCreation;
    }

    public function getImages(){
        return $this->category;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getRate(){
        return $this->rate;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setDataCreation($dataCreation){
        $this->dateCreation = $dataCreation;
    }

    public function setImages($images){
        $this->category = $images;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function setRate($rate){
        $this->rate = $rate;
    }
}
?>