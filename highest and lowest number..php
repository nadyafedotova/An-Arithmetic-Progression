<?php

function highAndLow($numbers) {
  $a = explode(' ', $numbers);
  return max($a) . " " . min($a);
}