<?php
    // phpinfo();
    //print_r($_SERVER);
    // entry point to ...
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Sample Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" action ="login.php">
        <p>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </p>
        <input type="submit" value="Login">
    </form>
</body>
</html>
