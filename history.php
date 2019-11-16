<?php

    class Person {

        public $age;

        public function __constructor ($name) {

            $this -> name = $name;
        }
    }

$jhon = new Person ( 'Jhon Doe' );

$jhon -> age = 30;

var_dump ( $jhon );

?>

<?php

    class Person {

        public $age;

        public function __constructor ($name) {

            $this -> name = $name;
        }
    }

$jhon = new Person ( 'Jhon Doe' );

$jhon -> age = 30;

$jhon -> age++;

// $age++; //return errors

var_dump ( $jhon );


?>

<?php

    class Person {

        public $age;

        public function __constructor ($name) {

            $this -> name = $name;
        }


    }

$jhon = new Person ( 'Jhon Doe' );

$jhon -> age = -4;

//$jhon -> age++;

// $age++; //return errors

var_dump ( $jhon );

?>

<?php

    class Person {

        public $age;

        public function __constructor ($name) {

            $this -> name = $name;
        }

        public function setAge ( $age ) {

            $this -> age = $age;
        }
    }

$jhon = new Person ( 'Jhon Doe' );

var_dump ( $jhon );
?>

<?php

    class Person {

        public $age;

        public function __constructor ($name) {

            $this -> name = $name;
        }

        public function setAge ( $age ) {

            $this -> age = $age;
        }
    }

$jhon = new Person ( 'Jhon Doe' );

$jhon -> setAge(30);

var_dump ( $jhon );
?>

<?php

    class Person {

        public $age;

        public function __constructor ($name) {

            $this -> name = $name;
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

var_dump ( $jhon );


?>

<?php

    class Person {

        public $age;

        public function __constructor ($name) {

            $this -> name = $name;
        }

        public function setAge ( $age ) {

            if ( $age < 10 ) {

                throw new Exception ( 'Person is not old Enough' );
            }
            $this -> age = $age;
        }
    }

$jhon = new Person ( 'Jhon Doe' );

$jhon -> setAge(4);

var_dump ( $jhon );
?>

<?php

    class Person {

        public $age;

        public function __constructor ($name) {

            $this -> name = $name;
        }

        public function setAge ( $age ) {

            if ( $age < 10 ) {

                throw new Exception ( 'Person is not old Enough' );
            }
            $this -> age = $age;
        }
    }

$jhon = new Person ( 'Jhon Doe' );

$jhon -> age = 4; // overriding set

var_dump ( $jhon );


?>
<?php

    class Person {

        public $age;

        public function __constructor ($name) {

            $this -> name = $name;
        }

        public function getAge ( $age ) {

            return $this -> age;
        }

        public function setAge ( $age ) {

            if ( $age < 10 ) {

                throw new Exception ( 'Person is not old Enough' );
            }
            $this -> age = $age;
        }
    }

$jhon = new Person ( 'Jhon Doe' );

$jhon -> age = 4; // overriding set

var_dump ( $jhon );
?>
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

var_dump ( $jhon -> getAge() );
?>

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
?>





