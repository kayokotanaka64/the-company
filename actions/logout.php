<?php

session_start();
session_unset();
session_destroy();

// go to login
header("location: ../views");
exit;

?>