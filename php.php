<?php

$x="d1234567678890www";
$y = array('a' =>1, 'b' => 2);
$z = array("a"=>1,"b","c","d");
echo serialize($x);
echo "<hr>";
echo serialize($y);
echo "<hr>";
json_encode($z);
echo "<hr>";

$ext=file_get_contents("http://www.lucid-host.co.uk/octav/js/array.txt");
$newArr=(json_decode($ext));
echo "<pre>";
print_r ($newArr);
echo "</pre>";

?>