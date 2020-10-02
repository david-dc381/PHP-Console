<?php
    class Person {
        public $firstName;
        public $secondName;

        function __construct($firstName, $secondName)
        {
            $this->firstName = $firstName;
            $this->secondName = $secondName;
        }

        function greetings(){
            echo "Hello " . $this->firstName . " " . $this->secondName . ", my friend.";
        }
    }
?>