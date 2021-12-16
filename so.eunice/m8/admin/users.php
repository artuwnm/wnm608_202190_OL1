<?php 


include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");




function showUserPage($user) {

$classes = implode(", ", $user->classes);

//heredoc
//<div>
	//<h3>$user->name</h3>
	//<div>
		//<strong>Type</strong>
		//<span>$user->type</span>
	//</div>
	//<div>
		//<strong>Email</strong>
		//<span>$user->email</span>
	//</div>
	//<div>
		//<strong>Classes</strong>
		//<span>$classes</span>
	//</div>
//</div>

echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="m8/admin/users.php">Back</a></li>
	</ul>
	
</nav>
<br>
<form>
	<label class="form-label">Name</label>
	<input type="text" placeholder="Firstname Lastname" class="form-input" value="$user->name">

	<label class="form-label">Type</label>
	<input type="text" placeholder="e.g. Teacher" class="form-input" value="$user->type">

	<label class="form-label">E-mail</label>
	<input type="text" placeholder="youremail@email.com" class="form-input" value="$user->email">

	<label class="form-label">Classes</label>
	<input type="text" placeholder="E.g. 606" class="form-input" value="$classes">

</form>
<div class="form-control">
	<button type="button" class="form-button" input type="submit">Submit</button>
</div>

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
					<h1>User Admin</h1>
				</div>
				<div class="flex-stretch"></div>
				<nav class="nav nav-flex flex-none">
					<ul>
						<li><a href="m8/admin/users.php">User List</a></li>
					</ul>
				</nav>
			</div>
	</header>

	<div class="container">

		<div class="card soft">

			<?php 


			if(isset($_GET['id'])) {
				showUserPage($users[$_GET['id']]);
			} else {

	
			?>

			<h2>User List</h2>

			<nav class="nav">
				<ul>

			<?php 

			for($i=0; $i<count($users); $i++){
				echo "<li>
					<a href='m8/admin/users.php?id=$i'>{$users[$i]->name}</a>
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






















