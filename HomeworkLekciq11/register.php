<?php
session_start();
if (isset($_POST["submit"])) {
    $_SESSION["regusername"] = $_POST["regusername"];
    $_SESSION["regpassword"] = $_POST["regpassword"];
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
    </head>
    <body>
        <form action="" method="post">
            Username:
            <input type="text" name="regusername" />
            <br>
            Password:
            <input type="password" name="regpassword" />
            <br>
            First Name:
            <input type="text" name="regfirstname" />
            <br>
            Last Name:
            <input type="text" name="reglastname" />
            <br>
            <input type="submit" name="submit" value="SUBMIT" />
        </form>
      
    </body>
</html>
