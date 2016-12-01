<?php
session_start();
if (!$_SESSION["isLogged"]) 
{
    header("Location: login.php");
    exit;
}
echo "Hello,you are in restricted area.";

?>