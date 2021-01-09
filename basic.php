<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        echo "***********array start here************<br>";
        $arr=[1,2,3,4,5.6];
        print_r($arr);
        echo "<br>";
        array_pop($arr);
        print_r($arr);
        echo "<br>";
        array_push($arr,1222,1234,45435.5655);
        print_r($arr);
        echo "<br>";

        echo "***********array start function here************<br>";
        echo max($arr)."<br>";
        echo min($arr)."<br>";
        echo count($arr)."<br>";
        echo in_array(3,$arr)."<br>";
        rsort($arr);//descending order sorted
        print_r($arr);
        echo "<br>";
        sort($arr);//sorted
        print_r($arr);
        echo "<br>";

        // echo "***********ternary operator************<br>";
        // $a=10;
        // $b=90;
        // $result=$a>$b?'A is greater':'B is greater';
        echo "***********For as loop************<br>";
        foreach($arr as $a)///our variable as foreach variable
            echo $a.'<br>';
        $num=['a'=>1,'b'=>2,'c'=>3];

        ///using for each in assosiative array
        echo 'printing a associative array using php foreach loop<br>';
        foreach($num as $n=>$nkey)//n as key and nkey as key value
            echo $n.'='.$nkey.'<br>';
        
        echo "**************php switch************<br>";
        $cg=4;
        switch($cg)
        {
            case 4:
                echo 'A+<br>';
                break;
            case 3:
                echo 'B+<br>';
                break;
            case 2:
                echo 'C+<br>';
                break;
            case 1:
                echo 'D+<br>';
                break;
            case 0:
                echo 'F<br>';
                break;
            default:
                echo 'undefined cgpa<br>';
                break;
        }


        echo "**************php functions************<br>";
        function fun1()
        {
            echo "Function one<br>";
        }
        function fun2($x)
        {
            echo "Function Two<br>";
            echo $x.'<br>';
        }
        function fun3($x,$y)
        {
            echo "Function Three<br>";
            echo $x+$y.'<br>';
        }
        function fun4($x,$y)
        {
            echo "Function Four<br>";
            return $x+$y;
        }
        fun1();
        fun2(12);
        fun3(12,13);
        echo fun4(12,167).'<br>';

        echo "***************static variables************<br>";
        function funstatic()
        {
            static $val=120;
            echo "static variable.......<br>";
            echo $val.'<br>';
            $val++;
        }

        funstatic();
        funstatic();
        funstatic();
        echo "***************global variables************<br>";
        $numz=11111211111;//local scope
        function funglobal()
        {
            global $numz;
            $num=$numz;
            echo "global variable.......<br>";
            echo $num.'<br>';
        }
        funglobal();
    ?>
</body>
</html>