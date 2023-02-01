<?php
    class Person {
        // Properties
        // Data Members
        private $name;
        private $description;
        private $price;
        private $srp;

        // Methods
        // Functionality
        function sayHello() {
            echo "Hello!<br>";
        }

        function sayName() {
            echo "Hello I am " . $this->name . "!<br>";
        }

        function setExpirationDate($name) {
            $this->name = $name;
        }
    }
?>
