<?php

require "../classes/User.php";

// get the date from the form

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$user_id = $_POST['user_id'];

$user = new User;
$user->updateUser($user_id, $first_name,$last_name,$username);

?>