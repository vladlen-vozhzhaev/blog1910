<?php
// Максимальный нечётный элемент
/*$nums = [-4,-25,-345,-234,-36,-234,-5,-32,-42,-342];
$max = -INF;
foreach ($nums as $num){
    if($max < $num and $num%2 !== 0){
        $max = $num;
    }
}

echo $max; // -4*/

/*$marks = [4,5,3,4,4,5,5,5,5];
$sum = 0;
foreach ($marks as $mark){
    $sum = $sum + $mark;
}
echo  round($sum/count($marks));*/


/*
 * Имеется набор символов $chars = ["К","Л","М","Н"];
 * Задача вывести на экран все 4х символьные комбинации символов на экран,
 * каждая строка должна быть пронумирована
 * Задача вывести на экран номер строки на которой находится слово "МНКЛ"
 * 1) КККК
 * 2) КККЛ
 * 3) КККМ
 * */

/*$chars = ["К","Л","М","Н","О","П"];
$counter = 1;
$result = 0;
for ($i=0; $i<count($chars); $i++){
    for ($j = 0; $j < count($chars); $j++) {
        for ($k = 0; $k < count($chars); $k++) {
            for ($l = 0; $l < count($chars); $l++) {
                $word = $chars[$i].$chars[$j].$chars[$k].$chars[$l];
                if($word == "МНКЛ"){
                    $result = $counter;
                }
                echo $counter.") ".$word."<br>";
                $counter++;
            }
        }
    }
}
echo "Комбинация МНКЛ находтся на строке: ".$result;*/


/*$arr = ["kia", 4, true];
var_dump($arr);*/

$arr = [
    "arr1"=>[1,2,3],
    "arr2"=>[4,32,6],
    "arr3"=>[7,65,4]
];
echo $arr["arr2"][0];