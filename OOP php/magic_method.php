<?php
    class Student
    {
        private $id;
        //set magic method
        public function __set($name,$value)
        {
            if($name=='id')
            {
                $this->id=$value;
            }
        }

        //get magic method
        public function __get($name)
        {
            if($name=='id')
                return $this->id;
        }

        public function __call($name,$arguments)
        {
            echo $name;
            echo "<br>";
            var_dump($arguments);
        }
    }

    $s1=new Student();
    $s1->now('Abdullah',123);
?>