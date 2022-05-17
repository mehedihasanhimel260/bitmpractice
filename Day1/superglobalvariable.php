<?php
// $_COOKIE
// $_ENV
// $_FILES
// $_GET
// $_POST
// $_REQUEST
// $_SERVER
// $_SESSION

session_start();
$_SESSION['setionTest'] = 'batch 7';
print_r( $_SESSION['setionTest']);
echo "<pre>";

print_r($_SERVER['HTTP_USER_AGENT']);

$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;