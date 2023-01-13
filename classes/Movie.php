<?php

class Movie {
    private $title;
    private $category;
    private $duration;
    private $year;

    public function __construct($_title, $_category){
        $this->setTitle($_title);
        $this->setCategory($_category);
    }

    //title
    public function setTitle($_title){
        $this->title = $_title;
        return $this;
    }

    public function getTitle(){
        return $this->title;
    }


    //category
    public function setCategory($_category){
        $this->category = $_category;
        return $this;
    }

    public function getCategory(){
        return $this->category;
    }


    //duration
    public function setDuation($_duration){
        $this->duration = $_duration;
        return $this;
    }

    public function getDuration(){
        return $this->duration;
    }


    //year
    public function setYear($_year){
        $this->year = $_year;
        return $this;
    }

    public function getYear(){
        return $this->year;
    }
}