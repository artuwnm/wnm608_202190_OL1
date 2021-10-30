<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");

function getErrorMsg($error, $field) {
    return isset($error[$field]) ? $error[$field] : "";
}

function getInputValue($user, $post_field, $user_field) {
    return isset($_POST[$post_field]) ? $_POST[$post_field] : (isset($user->{$user_field})? $user->{$user_field} : "");
}


function showUserPage($user, $error=[], $is_saved=false) {
$classes = isset($user->classes) ? implode(",", $user->classes) : "";
$iname_error = getErrorMsg($error, 'iname');
$itype_error = getErrorMsg($error, 'itype');
$iemail_error = getErrorMsg($error, 'iemail');
$iclass_error = getErrorMsg($error, 'iclass');
$name = getInputValue($user, 'iname', 'name');
$type = getInputValue($user, 'itype', 'type');
$email = getInputValue($user, 'iemail', 'email');
$class = isset($_POST['iclass']) ? $_POST['iclass'] : $classes;
$saved_msg = $is_saved ? "Saved!":"";
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
        <label for="iname" class="error_message">$iname_error</label>
        <input type="text" id="iname" name="iname" value="$name"><br><br>
        <label for="itype">Type:</label>
        <label for="itype" class="error_message">$itype_error</label>
        <input type="text" id="itype" name="itype" value="$type"><br><br>
        <label for="iemail">Email:</label>
        <label for="iemail" class="error_message">$iemail_error</label>
        <input type="text" id="iemail" name="iemail" value="$email"><br><br>
        <label for="iclass">Classes:</label>
        <label for="iclass" class="error_message">$iclass_error</label>
        <input type="text" id="iclass" name="iclass" value="$class"><br><br>
        <input type="submit" style="cursor:pointer;" name="submit" value="Submit">
        <input type="submit" style="cursor:pointer;" name="submit" value="Delete">
        <p>$saved_msg</p>
    </form>

</div>
HTML;  
}

function saveUserData($user) {
    $error_msg=[];
    if (empty($_POST['iname'])) {
        $error_msg['iname'] = "name cannot be empty!";
        return $error_msg;
    }
    if (empty($_POST['itype'])) {
        $error_msg['itype'] = "type cannot be empty!";
        return $error_msg;
    }
    if (empty($_POST['iemail'])) {
        $error_msg['iemail'] = "email cannot be empty!";
        return $error_msg;
    }
    if (empty($_POST['iclass'])) {
        $error_msg['iclass'] = "classes cannot be empty!";
        return $error_msg;
    }

    $user->name = $_POST['iname'];
    $user->type = $_POST['itype'];
    $user->email = $_POST['iemail'];
    $user->classes = explode(",", $_POST['iclass']);
    global $users;
    if (!isset($_GET['id'])) {
        array_push($users, $user);
    }
    file_save_json("../data/users.json", $users);
    return $error_msg;
}

function isPosting() {
    return !empty($_POST['iname']) || !empty($_POST['itype']) || !empty($_POST['iemail']) || !empty($_POST['iclass']);
}
function isSubmit() {
    return !empty($_POST['submit']) && $_POST['submit'] == 'Submit';
}
function isDelete() {
    return !empty($_POST['submit']) && $_POST['submit'] == 'Delete';
}
function isAdd() {
    return !empty($_POST['submit']) && $_POST['submit'] == 'Add';
}
function deleteUser($user_id) {
    global $users;
    if (!isset($users[$user_id])) {
        echo "User does not exist!";
        return;
    }
    $user_name = $users[$user_id]->name;
    unset($users[$user_id]);
    $users = array_values($users);
    echo "$user_name deleted!";
    file_save_json("../data/users.json", $users);
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
            if (isAdd()) {
                $user = new stdClass();
               showUserPage($user);
            } else if (isDelete()) {
                $user_id = isset($_GET['id']) ? $_GET['id'] : -1;
                deleteUser($user_id);
            } else if (isSubmit()) {
                $user = isset($_GET['id']) ? $users[$_GET['id']] : new stdClass();
                $error_msg = saveUserData($user);
                showUserPage($user, $error_msg, empty($error_msg));
            } else if(isset($_GET['id'])) {
                showUserPage($users[$_GET['id']]);
            } else {
            ?>

            <h2>User List</h2>
            <form action="", method="POST">
                <input type="submit" style="cursor:pointer;" name="submit" value="Add">
            </form>

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

