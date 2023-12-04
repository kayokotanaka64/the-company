<?php

// get date from form
require "../classes/User.php";

$file_name = $_FILES['photo']['name'];
$tmp_name= $_FILES['photo']['tmp_name'];

$u = new User;
$u->uploadPhoto($file_name, $tmp_name);

?>