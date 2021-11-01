
<?php




include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");
//file_put_contnents json_encode explode $_POST


function showUserPage($user){

$classes = implode(",", $user->classes);

//heredoc
echo <<<HTML

<!--
<nav class="nav nav-crumbs">
	<ul>
		<button class="round-btn">
			<a href="http://gyyashley.com/aau/wnm608/yaoyao.guo/admin/users.php">BACK</a>
		</button>

	</ul>
</nav>
-->


	<button class="round-btn"><a href="admin/users.php">BACK</a></button>

<br>
<br>
<!--
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->emaiL</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$classes</span>
	</div>
</div>
-->


<form>
	<div>
		<label for="" class="form-label">Name</label>
		<strong><input type="text" value="$user->name" placeholder="Name" class="form-input"></strong>
	</div>
	<br>
	<div>
		<label for="" class="form-label">Type</label>
		<strong><input type="text" value="$user->type" placeholder="Type" class="form-input"></strong>
	</div>
	<br>
	<div>
		<label for="" class="form-label">Email</label>
		<strong><input type="text" value="$user->email" placeholder="Email" class="form-input"></strong>
	</div>
	<br>
	<div>
		<label for="" class="form-label">Classes</label>
		<strong><input type="text" value="$classes" placeholder="Classes" class="form-input"></strong>
	</div><strong>
	<br>
	<div class="form-control">
		<input type="submit" value="SUBMIT" class="form-button">
	</div>
		
</form>
HTML;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>
	

</head>

<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1 style="color:#fff;">User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>


	<div class="container">
		<div class="card soft">
			<?php

			if(isset($_GET['id'])){
				showUserPage($users[$_GET['id']]);
			} else{

			?>

			<h2>User List</h2>
			<nav class="nav">
				<ul>

				<?php

				for($i=0; $i<count($users);$i++){
					echo "<li>
					<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
					</li>";
				}
				?>	
				</ul>
			</nav>

			<?php } ?>

		</div>
	</div>

</body>
</html>