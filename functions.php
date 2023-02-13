<?php

// $gl = 10;
// function myFunc(){
//     return 'first';
// }
// $myFuncTwo = function(){
//     return 'hello';
// };
// $myFuncThree = fn($someGl='no argument given')=>"func runing $someGl";
// echo myFunc();
// echo $myFuncThree();
// echo $myFuncTwo();


////array-functions......................
$fruits = ['apple','orange','banana','kiwi'];
// echo count($fruits);
////search
// var_dump(in_array('apple',$fruits));
////add
// $fruits[]='kiwi';
// array_push($fruits,'kiwi');
// array_unshift($fruits,'kiwi');
////pop
// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[1]);
// print_r($fruits);
////spliting in chunks 3s or 2s or ns
$chunkedArray = array_chunk($fruits,2);
$fruitsOne = $chunkedArray[0];
$fruitsTwo = $chunkedArray[1];
// print_r($fruitsOne);
////concatenate
// $fruitsComp = array_merge($fruitsOne,$fruitsTwo);
// $fruitsNew = [...$fruits,'grape'];
////key value pair with two arrays
$keyValue = array_combine($fruitsOne,$fruitsTwo);
$arrayKeys = array_keys($keyValue);
// print_r($arrayKeys);
////flip key becomes value and vice versa
// $flipped = array_flip($keyValue);
// print_r($flipped);

////range like in python
$rangeOfNumbers = range(1,20);
// print_r($rangeOfNumbers);
// $newNumbers = array_map(function ($x){
//     return $x*2;
// },$rangeOfNumbers);
// $newNumbers = array_filter($rangeOfNumbers,fn($x)=>$x%2===0);
$sum = array_reduce($rangeOfNumbers,fn($initial,$x)=>$initial+$x);
print_r($sum);








?>