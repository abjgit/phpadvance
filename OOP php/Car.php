<?php
    class Car
    {
        public $color;
        public $name;

        function sayHello()
        {
            echo "This is print statement from Car class";
        }

        function nameBig($name):bool
        {
            $result=true;
            if(strlen($name)>5)
                $result=true;
            else
                $result=false;
            
            return $result;
        }
    }

    $car1=new Car();
    $car1->color="Red";
    $car1->name="Ferrari";

    $car1->sayHello();
    echo "<br>";
    echo $car1->nameBig('Abdu');


    class Employee
    {
        public $name;
        public $id;
        public $workingHours;
        public $salary;

        public function calculateSalary($totalDays):int
        {
            echo "{$this->name} with id = {$this->id} is worked for {$totalDays} and his salary is Tk ";
            return $totalDays*$this->workingHours*$this->salary;
        }

    }

    $emp1=new Employee();
    $emp1->name="Abdullah";
    $emp1->id="ji-90";
    $emp1->workingHours=8;
    $emp1->salary=120;
    echo $emp1->calculateSalary(30)."<br>";


    /********************************
     * 
     * 
     * 
     * lets learn about $this
     * 
     * 
     * 
     *********************************/


    class Student
    {
        private $name;
        private $class;
        
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
            echo " Student name is {$this->getName()} and class is {$this->getClass()}";
        }
    }

    $s1=new Student();
    $s1->setName('Abdullah');
    $s1->setClass(15);
    $s1->printInfo();
?>
