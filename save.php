<?php
$name = $_POST['name'];
$sheet = $_POST['sheet'];
var_dump($sheet);
if (preg_match("/^\w+$/", $name) && strlen($sheet) < 100000) {
	file_put_contents("sheets/".$name.".json", $sheet);
}
