<?php

class Box {
    public $width;
    public $height;
    public $lenght;

    public function volume(){
        return $this->width * $this->height * $this->lenght;
    }
}

$num1 = 1;
$num2 = $num1;
$num2 = 2;
var_dump($num1);

$box = new Box();
$box->width = 1;
$box2 = clone $box1;
$box2->width = 2;
var_dump($box1, $box2);
var_dump($box1->width);

$array = [1, 2, 3, 4, 5];

for($i=0;$i<count($array);$i++){
    $num = &$array[$i];
    $num *= 2;
}

foreach($array as $num){
    $num *= 2;
}

var_dump($array);