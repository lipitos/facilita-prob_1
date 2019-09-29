<?php

function convert($size){
    $size = $size*100;
    return $size;
}

function reconvert($size){
    $size = $size/100;
    return $size;
}