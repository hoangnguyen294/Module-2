<?php

include_once 'Resizeable.php';

class Shape
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function show(){
        return "I am a shape. My name is $this->name";
    }
}