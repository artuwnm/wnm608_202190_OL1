<?php


function print_p($v){
	echo "<pre>", print_r($v), "</pre>";
}

function file_get_jason($filename){
	$file = file_get_contents($filename);
	return json_decode($file);
}