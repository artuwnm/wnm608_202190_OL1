

<?php 

include "../lib/php/functions.php";

if (file_exists("../data/newuser.json")) {
	$file = "../data/newuser.json";
	$current = file_get_contents($file);
} else {
	$myfile = fopen("../data/newuser.json", "w");
	header("Refresh:0");

}

 ?>
 <form method="post">

<textarea name="name"  cols="50" rows="2">
	<?php 
	echo $current;
	 ?>
</textarea>

 	<input type="submit">
 </form>

