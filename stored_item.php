<?php

require "Items.php";

$item = new Items();
$payload = [
	'name' => $_POST['name'],
	'category' => $_POST['category'],
	'price' => $_POST['price']
];

$create = $item->create($payload);

// if($create === TRUE)
header("location: index.php");

