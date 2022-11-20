<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Document</title>
</head>
<body>
	<?php
	echo "Hello World";
	echo "<div> Goodbye World </div>";

	
	// Variables
	$a = 5;
	echo $a;
	
	// String Interpolation
	echo "<div> I have $a things</div>";
	echo '<div> I have $a things</div>';


	// Number
	// Integer
	$b = 15;

	//Float
	$b = 0.576;
	
	$b = 10;

	// String
	$name = "Yerguy2";

	// Boolean
	$isOn = true;



	// Math
	// PEMDAS
	echo 5 + 4 - 2;

	echo 5 - 4 * 2;

	// Concatenation
	echo "<div> b + a" . "= c<div>";
	echo "<div> $b + $a =  ".($a+$b)."</div>";
 

	?>

	<hr>
	<div>This is my name</div>
	<div>
	<?php
	$Firstname = "Yaoyao";
	$Lastname = "Guo";
	//$Fullname = $Firstname ." ". $Lastname;
	$Fullname = "$Firstname $Lastname";

	echo $Fullname;

	?>


	<hr>
	<?php
	// Superglobals
	//?name=Yaoyao
	echo "<a href='?name=Yaoyao'>visit</a>"."<br>";

	echo $_GET['name'];
	echo "<div> My name is {$_GET['name']}</div>";
	

	//?name=Yaoyao&type=button/textarea
	echo "<a href='?name=Yaoyao&type=textarea'>visit</a>"."<br>";

	echo "<div> My name is {$_GET['name']}</div>";
	echo "<{$_GET['type']}> My name is {$_GET['name']}</{$_GET['type']}>";

	?>


	<hr>
	<?php

	// Array
	$colors = array("red","green","blue");

	echo $colors[0];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";
	echo "<br>";

	echo count($colors);

	?>


	<div style="color:<?= $colors[2] ?>">
	This text is blue
	</div>


	<hr>
	<?php
	//Associative Array
	$colorsAssociative =[
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"

	];

	echo $colorsAssociative	['green']

	?>


	<hr>
	
	<?php
	// Casting
	$c ="$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;

	//echo $colorsObject;

	echo "<hr>";

	//Array Index Notation 数组索引符号
	echo $colors[0]."<br>";
	echo $colorsAssociative[red]."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	//Object Property Notation
	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";

	?>


	<hr>
	
	<?php
	print_r($colors);
	echo "<hr>";
	print_r($colorsAssociative);
	echo "<hr>";
	print_r($colorsObject); //stdClass Object: standard class object
	echo "<hr>";
	echo "<pre>",print_r($colorsObject),"</pre>"; 

	//Function
	function print_p($v){
		echo "<pre>",print_r($v),"</pre>";
	}
	print_p($_GET)."<br>";
	//print_p($_GLOBALS);

	

	?>
// brackets
// []
// braces
// {}
// parenthesese
// ()
// carrots / angle brackets
// <>


</body>
</html>
