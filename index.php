<?php

    class Person {

        public $age;

        public function __constructor ($name) {

            $this -> name = $name;
        }

        public function getAge (  ) {

            return $this -> age * 365;
        }

        public function setAge ( $age ) {

            if ( $age < 10 ) {

                throw new Exception ( 'Person is not old Enough' );
            }
            $this -> age = $age;
        }
    }

$jhon = new Person ( 'Jhon Doe' );

$jhon -> setAge(30);

$jhon -> age = 9;

var_dump ( $jhon -> getAge() );
