<?php

class Name {

    public $name;

    public function showName() {
        $this->name = "Hoang A Phu";
        return($this->name);
    }

    public function enterName($TName) {
        $this->name = $TName;
    }

}
