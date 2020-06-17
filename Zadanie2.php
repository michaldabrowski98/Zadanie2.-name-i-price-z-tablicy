<?php
/*
Zadanie 2 
*/
$array = [
["id" => 123, "name" => "test0", "price" => 10],
["id" => 432, "name" => "test1", "price" => 20],
["id" => 231, "name" => "test2", "price" => 30],
["id" => 342, "name" => "test3", "price" => 10]
];



$results = [
["result_id" => 432],
["result_id" => 342]
];

foreach($results as $res){
	foreach($array as $arr){
	if($arr["id"] == $res["result_id"]){
		echo $arr["name"]." - ".$arr["price"];
	}
}
echo "<br/>";
}


?>