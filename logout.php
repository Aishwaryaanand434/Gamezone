<?php
session_start();
session_destroy();
session_unset();
//unset($_SESSION);// = [];
unset($_SESSION['userName']);

header("Location: http://localhost/project/index.php");
?>