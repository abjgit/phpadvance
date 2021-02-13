<?php
    interface Car
    {
        public function applyBreak();
        public function increaseSpeed();
        public function decreaseSpeed();
        public function name($name);
    }

    class SportsCar implements Car
    {
        public function applyBreak(){   echo "break<br>";}
        public function increaseSpeed(){    echo "speed up<br>";}
        public function decreaseSpeed(){    echo "speed down<br>";}
        public function name($name){ echo $name;}
    }

    $ss=new SportsCar();
    $ss->applyBreak();
?>