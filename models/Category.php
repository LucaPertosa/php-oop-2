<?php

class Category {
    private $name;

    public function __construct($_name) {
        $this->name = $_name;
    }

    public function getName() {
        return $this->name;
    }
    
}