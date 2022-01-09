<?php
$array = [1,9,8,7,5,4,2,3,6,0];//исходный массив

search(3, $array);
function search(int $element, array $data)
{
    $begin = 0;
    $end = count($data) - 1;
    $prev_begin = $begin;
    $prev_end = $end;
    while(true) {
        $position = round(($begin + $end)/2);

        if(isset($data[$position])) {
            if ($data[$position] == $element) {
                return $position;
            }

            if ($data[$position] > $element) {
                $end = floor(($begin + $end)/2);
            } elseif ($data[$position] < $element) {
                $begin = ceil(($begin + $end) / 2);
            }
        }

        if ($prev_begin == $begin && $prev_end == $end) {
            return false;
        }

        $prev_begin == $begin;
        $prev_end == $end;

        $data_ret[] = $data_ret[$prev_begin];
        $data_ret[] = $data_ret[$prev_end];
    }


    var_dump($data_ret);
}

