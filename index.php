<?php

function hello() {
    var_dump('hello');
}

hello();
hello();
hello();
hello();

function sum($a, $b) {
    return $a+$b;
}

var_dump(sum(1,4));
$answer = sum(6,5);

function biggrThanTen($n) {
    if($n > 10){
        return 'Bigger';
    }
    return 'Smaller';
    var_dump($args);
    
}

var_dump(biggrThanTen(11));
var_dump(biggrThanTen(4));

function anything(...$args) {
    var_dump($args);
}
anything(1, 2, 3, 4, 5, 6, 7);

function recursive($n){
    if($n<10){
        var_dump($n);
        recursive($n+1);
    }
}

recursive(0);