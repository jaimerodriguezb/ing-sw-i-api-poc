<?php

function get_price($name)
{
	$products = [
		"book"=>array(
			"tipo" => "fisico",
			"pag" => "200",
		),
		"pen"=>10,
		"pencil"=>5,
		"car"=>500,
		"house"=>100000,
		"iphone"=>5000
	];
	
	foreach($products as $pname=>$pprice)
	{
		if($pname==$name)
		{
			return $pprice;
			break;
		}
	}
}