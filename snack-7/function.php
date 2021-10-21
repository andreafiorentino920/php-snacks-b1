<?php
function calcolaMedia($nums) {
    $qt = count($nums);
    $res = 0;
    foreach ($nums as $n) {
      $res += $n;
    }
    return $res/$qt;
}
