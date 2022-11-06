<?php


var_dump($_GET);
$a = $_GET['pass'];
$b = 'user';
$c = $_GET[$b];
//echo $a;
echo '<br>';
//echo $c;
var_dump( isset($_GET['pass']));
echo '<br>';
//trim
// _ _ _hello_ _ _
var_dump(trim($_GET['pass']) !== ' ');

if (isset($_GET['pass']) AND trim($_GET['pass']) !== ' ' ) {
    $b=trim($_GET['pass']);
    echo $b;
}

