<?php

include "../lib/php/functions.php";

//$users = file_get_json("users.json");

$filename = "../data/users.json";
$users = file_get_json($filename);



$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]
];


switch(@$_GET['crud']) {
	case "update":
		$users[$_GET['id']]->name = $_POST['user-name'];
		$users[$_GET['id']]->type = $_POST['user-type'];
		$users[$_GET['id']]->email = $_POST['user-email'];
		$users[$_GET['id']]->classes = explode(', ',$_POST['user-classes']);

		file_put_contents($filename,json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;

	case 'create':
		$empty_user->name = $_POST['user-name'];
		$empty_user->type = $_POST['user-type'];
		$empty_user->email = $_POST['user-email'];
		$empty_user->classes = explode(', ',$_POST['user-classes']);

		$id = count($users);

		$users[] = $empty_user;

		file_put_contents($filename,json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;

	case 'delete':
		array_splice($users,$_GET['id'],1);

		file_put_contents($filename,json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}");
		break;

}



function showUserPage($user) {


$id = $_GET['id'];
$classes = implode(", ",$user->classes);
$addoredit = $id=='new' ? 'Add':'Edit';
$createorupdate = $id=='new' ? 'create':'update';


$userdata = $id=='new' ? '' : <<<HTML
<div class="card soft">
	<div class="display-flex">
		<h2 class="flex-stretch">$user->name</h2>
		<div>
			<a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete">
				Delete
			</a>
		</div>
	</div>
	<div>
		<strong>Type: </strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email: </strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes: </strong>
		<span>$classes</span>
	</div>
</div> 
HTML;


echo <<<HTML
<button class="round-btn"><a href="admin/users.php">BACK</a></button>
<div class="grid gap">
	<div class="col-xs-12 col-md-6">$userdata</div>
	<div class="col-xs-12 col-md-6">
		<div class="card soft">
			<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
				<h3>$addoredit User</h3>
				<div class="form-control">
					<strong><label for="user-name" class="form-label">Name: </label></strong>
					<input id="user-name" name="user-name" type="text" placeholder="Type User Name" class="form-input" value="$user->name">
				</div>
				<div class="form-control">
					<strong><label for="user-type" class="form-label">Type: </label></strong>
					<input id="user-type" name="user-type" type="text" placeholder="Type User Type" class="form-input" value="$user->type">
				</div>
				<div class="form-control">
					<strong><label for="user-email" class="form-label">Email: </label></strong>
					<input id="user-email" name="user-email" type="text" placeholder="Type User Email" class="form-input" value="$user->email">
				</div>
				<div class="form-control">
					<strong><label for="user-classes" class="form-label">Classes: </label></strong>
					<input id="user-classes" name="user-classes" type="text" placeholder="Type User Classes" class="form-input" value="$classes">
				</div>
				<div class="form-control">
					<input class="form-button" type="submit" value="Save">
				</div>
			</form>
		</div>
	</div>
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
				<h1 style="color:#fff;">User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul class="display-flex">
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div >
			<?php

				if(isset($_GET['id'])) {
				showUserPage(
					$_GET['id']=='new' ?
						$empty_user :
						$users[$_GET['id']]
					);
				} else {


			?>
			
		<div class="card soft">
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


</body>
</html>