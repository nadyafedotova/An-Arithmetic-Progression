<?php 
function findMissing($list)
{
    // $length = count($list);
    // $diff = $list[1] - $list[0];
    // $diff2 = $list[$length - 1] - $list[$length - 2];

    // if ($diff !== $diff2) {
    //     if ($diff == 2 * $diff2){
    //        return $list[0] + $diff2;
    //     }else{
    //        return $list[$length - 1] - $diff;
    //     };
    // };

    // for ($i = 1; $i < $length; $i++) {
    //     if ($list[$i + 1] - $list[$i] != $diff){
    //        return $list[$i] + $diff;
    //     };
    //  };
    //  return $list[0];

        $l = count($list);
        return ($list[0] + $list[$l - 1]) / 2 * ($l + 1) - array_sum($list);
}

$d = findMissing([1, 3, 5, 9, 11]);
var_dump($d);
exit;
$d == 7;
