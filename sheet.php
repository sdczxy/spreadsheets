<?php
$name = $_GET['name'];
if (!preg_match("/^\w+$/", $name)) {
	$name = "empty.json";
} else {
	$name = "sheets/".$name.".json";
	if (!file_exists($name)) {
		$name = "empty.json";
	}
}
print file_get_contents($name);
