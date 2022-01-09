<?php
$array = [1,9,8,7,5,4,2,3,6,0];//исходный массив

//перебираем массив
for($i=0; $i<count($array)-1;$i++){
    var_dump('$i='.$i.'<br>');
    for($j=0; $j<count($array)-$i-1;$j++){
        var_dump('$j='.$j.'<br>');
//если текущий элемент больше следующего
        if ($array[$j]>$array[$j+1]) {
            var_dump('$array[$j]='.$array[$j].'<br>');
            var_dump('$array[$j+1]='.$array[$j+1].'<br>');
            //меняем местами элементы
            $tmp_var = $array[$j+1];
            var_dump('tmp_var='.$tmp_var.'<br>');
            $array[$j+1] = $array[$j];
            var_dump('$array[$j+1]='.$array[$j+1].'<br>');
            var_dump('$array[$j]='.$array[$j].'<br>');
            $array[$j]=$tmp_var;
            var_dump('tmp_var='.$tmp_var.'<br>');
            var_dump('$array[$j]='.$array[$j].'<br>');
        }
    }
    var_dump($array);
}

var_dump($array);