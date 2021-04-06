<?php
// unversal massivlarni korsatish uchun
function debug($array, $bool = 0)
{
    if ($bool && !empty($array)) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    } elseif (!$bool && !empty($array)) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        die;
    } else {
        return false;
    }
}