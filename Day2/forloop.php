<?php

$age = [
    "Peter"=>"35",
    "Ben"=>"37",
    "color"=>['red','green','blue']
];

foreach($age as $x => $x_value) {
    echo '<pre>';
    print_r($age) ;
}


for ($i=0; $i < 5 ; $i++) { 
    echo $i . "<br>";
}