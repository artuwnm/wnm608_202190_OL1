<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Admin Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>



<?php

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json ($filename);


$empty_user = (object) [
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]

];



// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete

//print_p([$_GET,$_POST]);

if(isset($_GET['action'])) {
	switch ($_GET['action']) {
		case "update":
		$users[$_GET['id']]->name = $_POST['user-name'];
		$users[$_GET['id']]->type = $_POST['user-type'];
		$users[$_GET['id']]->email = $_POST['user-email'];
		$users[$_GET['id']]->classes = explode (", ", $_POST['user-classes']);

		file_put_contents($filename,json_encode($users));
		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");

		break;
	case "create":
		$empty_user->name = $_POST['user-name'];
		$empty_user->type = $_POST['user-type'];
		$empty_user->email = $_POST['user-email'];
		$empty_user->classes = explode (", ", $_POST['user-classes']);

		$id = count($users);

		$users[] = $empty_user;

		file_put_contents($filename,json_encode($users));
		header("location:{$_SERVER['PHP_SELF']}?id=$id");

		break;
	case "delete":
		break;
	}

}


function showUserPage ($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$classes = implode (", ", $user->classes);


// heredoc
echo <<<HTML
<nav class= "nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">< Back</a></li>
	</ul>
</nav>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">

	<h2>$addoredit User</h2>

				<h3>User Information</h3>
					<div class="form-control">
						<label class="form-label" for="user-name">Name</label>
						<input type="text" name="user-name" id="user-name"value="$user->name"  class="form-input" placeholder="Enter the User Name">
					</div>
					<div class="form-control">
						<label class="form-label" for="user-type">Type</label>
							<input type="text" name="user-type" id="user-type"value="$user->type"  class="form-input" placeholder="Enter the User Type">
					</div>
					<div class="form-control">
						<label class="form-label" for="user-email">Email</label>
						<input type="text" name="user-email" id="user-email"value="$user->email"  class="form-input" placeholder="Enter the User Email">
					</div>
					<div class="form-control">
						<label class="form-label" for="user-classes">Classes</label>
						<input type="text" name="user-classes" id="user-classe"value="$classes" class="form-input" placeholder="Enter the User Classes">
					</div>

					<div class="form-control">
						<input type="submit" value="Save Changes"  class="form-button">
					</div>
		
				</form>



HTML;
}







?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
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
 			<div class="nav nav-flex flex-none">
 				<ul>
 					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
 					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add new User</a></li>
 				</ul>
 			</nav>

 			</div>
 		</div>
 	</header>
		
	<div class="container">
		<div class="card soft">

			<?php

			if (isset($_GET['id'])) {
				showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);
			} else {



			?>
			<h2>User List</h2>

			<nav class="nav">
				<ul>

			<?php

			for($i=0;$i<count($users);$i++) {
				echo "<li>
					<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
				</li>";
			}


			?>
				</ul>
			</nav>

			<?php }?>
		</div>
	</div>

</body>
</html>