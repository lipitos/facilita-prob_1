<?php

class Person{
    private $id;
    private $name;
    private $height;
    private $rate;

    public function getId(){
        return $this->id;
    }    
    public function getName(){
        return $this->name;
    }
    public function getHeight(){
        return $this->height;
    }
    public function getRate(){
        return $this->rate;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    public function setRate($rate){
        $this->rate = $rate;
    }
}