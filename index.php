<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="process.php" method="post">
    <label for="email">Enter Your Email Address.</label>
    <input type="email" id="email" name="email">
    <?php
        if (!empty($_SESSION["error"])){
            foreach ($_SESSION["error"] as $err){
                echo $err;
            }
            $_SESSION["error"] = [];
        }
    ?>
    <input type="submit">

</form>

</body>
</html>




