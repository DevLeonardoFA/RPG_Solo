<?php
    class Caracter{
        public $class;
        public $name;
        public $life;
        public $damage;

        function __construct($class, $name, $life, $damage) {
            $this->class = $class;
            $this->name = $name;
            $this->life = $life;
            $this->damage = $damage;
        }

    }
?>