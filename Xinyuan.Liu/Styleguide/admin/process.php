<?php 
$comment = $_POST["name"];

$file = "../data/newuser.json";

file_get_contents($file, $comment);

header('Location: https://xinyuanliu.com/public.html/aau/wnm608/liu.xinyuan/DELTA/admin/log.php');


	 ?>
