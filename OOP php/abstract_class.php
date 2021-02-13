<?php
    //a class we dont wanna definne a object
    // in abstract class and method can have their body
    //partial interface and partial class

    abstract class Car
    {
        public abstract function applyBreak();

    }

    class BMW extends Car
    {
        public static $count=1000;
        public function applyBreak()
        {
            echo "break<br>";
        }

        public static function retVal()
        {
            //BMW::$count=11;//we have to use class name to access static types
            self::$count=11;//we have to use self name to access static types
        }

        //static method
        //:: scope resolution operator

    }

    //$car=new Car();
    $b=new BMW();
    $b->applyBreak();
    echo BMW::$count;
    echo "<br>";
    BMW::retVal();
    echo BMW::$count;
?>