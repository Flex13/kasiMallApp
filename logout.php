<?php include("functions/main_functions.php"); ?>
<?php

session_start();
session_destroy();
Redirect::Redirect_to('index.php');
exit()
?>