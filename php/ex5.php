<?php
    /*function f($x, $y, $z){
        return $z+$x**$y;
    }

    echo f(4, 2, 4);*/
    /*$name = "Ivan";
    function sayHi(){
        global $name;
        echo "Привет ".$name."<br>";
    }

    echo sayHi();
    echo sayHi();
    echo $name;*/

    /* Имеется кофемашина, после приготовления кофе, выдаётся сдача
       Задача: Разработать функцию, которая выводит на экран сдачу
        номиналами монет РФ. 1,2,5,10 (монет бесконечно)
        37 = 10 10 10 5 2
        53 = 10 10 10 10 10 2 1
    */

/*    function getChange($num){
        //$coin = $num>=10?10:($num>=5?5:($num>=2?2:($num>=1?1:0)))
        $coin = 0;
        if($num >= 10) $coin = 10;
        elseif ($num >= 5) $coin = 5;
        else if ($num >= 2) $coin = 2;
        else if($num >= 1) $coin = 1;

        if($coin != 0){
            echo $coin." ";
            getChange($num - $coin);
        }
    }

    getChange(38);*/

    function f($n){
        if($n>2){
            return g($n-1)+f($n-2);
        }else{
            return 1;
        }
    }

    function g($n){
        if($n>2){
            return f($n-1)+g($n/2);
        }else{
            return $n;
        }
    }
    echo f(9);

    /*
     * f(9) = g(8)+f(7) =24.5+18.5 = 42
     * g(8) = f(7)+g(4) = 18.5+5=24.5
     * f(7) = g(6)+f(5) = 10.5+8=18.5
     * g(6) = f(5)+g(3) = 8+2.5=10.5
     * f(5) = g(4)+f(3) = 5+3=8
     * g(4) = f(3)+g(2) = 3+2=5
     * f(3) = g(2)+f(1) = 2+1=3
     * g(3) = f(2)+g(1.5) = 1+1.5 = 2.5
     * */








