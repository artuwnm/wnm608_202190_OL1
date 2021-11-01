<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


function showUserPage($user) {
$classes = implode(",", $user->classes);
// heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
   <ul>
       <li><a href="admin/user.php">Back</a></li>
   </ul>
</nav>
<div class="form_container">
    <form action="" method="POST">
        <br>
        <label for="iname">Name:</label>
        <input type="text" id="iname" name="iname" value="$user->name"><br><br>
        <label for="itype">Type:</label>
        <input type="text" id="itype" name="itype" value="$user->type"><br><br>
        <label for="iemail">Email:</label>
        <input type="text" id="iemail" name="iemail" value="$user->email"><br><br>
        <label for="iclass">Classes:</label>
        <input type="text" id="iclass" name="iclass" value="$classes"><br><br>
        <input type="submit" style="cursor:pointer;" name="submit" value="Submit">
    </form>

</div>
HTML;  
}

function saveUserData($user) {
    $user->name = $_POST['iname'];
    $user->type = $_POST['itype'];
    $user->email = $_POST['iemail'];
    $user->classes = explode(",", $_POST['iclass']);
    global $users;
    if (!isset($_GET['id'])) {
        array_push($users, $user);
    }
    file_save_json("../data/users.json", $users);
}

function isSubmit() {
    return !empty($_POST['submit']) && $_POST['submit'] == 'Submit';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Admin Page</title>
    <?php include "../parts/meta.php"; ?>
    <link rel="stylesheet" href="lib/css/admin_user.css">
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
                    <li><a href="admin/user.php">User List</a></li>
                </ul>
            </nav>
        </div>
    </header>
    

    <div class="container">
            
        <div class="card soft">

            <?php
            if (isSubmit()) {
                $user = $users[$_GET['id']];
                saveUserData($user);
                // Redirect
                header("Location: user.php"); 
            } else if(isset($_GET['id'])) {
                showUserPage($users[$_GET['id']]);
            } else {
            ?>

            <h2>User List</h2>

            <nav class="nav">
                <ul>

            <?php 
            for ($i=0;$i<count($users);$i++){
                echo "<li>
                   <a href='admin/user.php?id=$i'>{$users[$i]->name}</a>
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

