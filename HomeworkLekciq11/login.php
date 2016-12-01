<?php
session_start();
$message = "";
$_SESSION["isLogged"] = false;
if (!empty($_POST)) 
{
    $tempUsername = $_POST["username"];
    $tempPassword = $_POST["password"];
    if ($_SESSION["regusername"] === $tempUsername && $_SESSION["regpassword"] === $tempPassword) 
    {
     $_SESSION["isLogged"] = true;
     header("Location: admin/index.php");
     exit;
    }
    if (!$_SESSION["isLogged"]) 
    {
     $message = "Wrong data.";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form action="" method="post" />
            Username:
            <input type="text" name="username" />
            <br>
            Password:
            <input type="password" name="password" />
            <br>
            <input type="submit" name="submit" value="Submit" />
         
        </form>
        <?php echo $message; ?>
    </body>
</html>

