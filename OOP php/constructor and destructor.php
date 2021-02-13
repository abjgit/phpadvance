<?php
    //magic method = which call itself and its allready available
    //always starts with __
    class Student
    {
        private $name;
        private $class;

        //this is construcotr 
        public function __construct($name,$class)
        {
            $this->name=$name;
            $this->class=$class;
        }
        public function setName($name)
        {
            $this->name=$name;
        }

        public function getName():string
        {
            return $this->name;
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
            echo " Student name is {$this->getName()} and class is {$this->getClass()}<br>";
        }

        ///chaining function
        public function name()
        {
            echo $this->name." ";
            return $this;
        }
        public function class()
        {
            echo $this->class;
            return $this;
        }
        //this is for clean up activity
        public function __destruct()
        {
            echo "This is destructor <br>";
        }
    }

    $s1=new Student('Abdullah',22);
    $s1->printInfo();
    $s1->name()->class();
    echo "<br>"
?>