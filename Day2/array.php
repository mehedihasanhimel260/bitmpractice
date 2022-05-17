<?php

$Number=array(1,2,3,4,5);
echo "<pre>";
print_r ($Number);

$color=['red','green','blue'];

echo "<pre>";
print_r ($color[1]);
$products=[
    'product name'=>'Samsung m10',
    'colors'=>['red','green','blue'],
];

$products['size']=['1','2','3','4'];

$products[]=['1','2','3'];
echo "<pre>";
print_r ($products);

echo "<pre>";
print_r ($products['colors'] [1]);

