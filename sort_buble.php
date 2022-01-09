<?php
$array = [1,9,8,7,5,4,2,3,6,0];//исходный массив

//перебираем массив
for($i=0; $i<count($array)-1;$i++){
    for($j=0; $j<count($array)-$i-1;$j++){
//если текущий элемент больше следующего
        if ($array[$j]>$array[$j+1]) {
            //меняем местами элементы
            $tmp_var = $array[$j+1];
            $array[$j+1] = $array[$j];
            $array[$j]=$tmp_var;
        }
    }
    var_dump($array);
}

var_dump($array);