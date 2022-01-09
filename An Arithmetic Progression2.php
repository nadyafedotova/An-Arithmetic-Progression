<?php

function findMissing($list) {
  $steps = [];
  for ($i = 1; $i < count($list); $i++) {
    $steps[$list[$i] - $list[$i-1]]++;
  }
  arsort($steps);
  if(count($list) == 3) {
    $step = array_keys($steps)[1];  
  } else {
    $step = array_keys($steps)[0];
  }
  

  foreach($list as $key => $value) {
    if(($value + $step) != $list[$key+1]) {
      return $value + $step;
    }
  }
}