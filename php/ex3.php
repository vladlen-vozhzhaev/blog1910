<?php
$cars = ["audi", "bmw", "kia"]; // Array
/*echo $cars[0]."<br>";
echo $cars[1]."<br>";
echo $cars[2]."<br>";
echo count($cars);*/
/*$i=0;
while ($i < 3){
    echo $cars[$i]."<br>";
    $i = $i+1;
}
echo $i;*/


/*do{
    echo "hello world";
}while(false);*/

for($i=0; $i<3; $i++){
    echo $cars[$i]."<br>";
}

/*foreach ($cars as $car){
    echo $car."<br>";
}*/

/*$a = 5;
echo ++$a; // 6  $a = $a+1;
echo $a++; // 6
echo $a; // 7
echo --$a; // 6
echo $a--; // 6
echo $a; // 5*/