<?php

//inheritance means reusibility
//modifiers are 3 types
//public private and protected
    class Person
    {
        private $name;

        public function __construct($name)
        {
            $this->name=$name;
        }

        public function setName($name)
        {
            $this->name=$name;
        }

        public function getName():string
        {
            return $this->name;
        } 

        public function sayHello()
        {
            echo "Hello.... from Person class<br>";
        }
    }
    //php does not support multiple inheritance
    class Student extends Person
    {
        
        private $class;
        
       public function __construct($name,$class)
       {
           parent::__construct($name);
           $this->class=$class;
       }
        public function setClass($class)
        {
            $this->class=$class;
        }

        public function getClass():int
        {
            return $this->class;
        }

        public function printInfo()
        {
            echo " Student name is {$this->getName()} and class is {$this->getClass()}";
        }

        public function sayHello()
        {
            echo "Hello... from Student class<br>";
        }
    }

    $s1=new Student("Abdullah",15);
    $s1->printInfo();

    ///final means no inheritance

    final class A
    {

    } 
    class B extends A
    {

    }
?>