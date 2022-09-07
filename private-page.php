<?php

session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != true){
    $ur1 = '/login.php';
    header("Location: {$ur1}", 302);
    exit();
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
</head>
<body>
    <h1>Page</h1>
    <p>
        <a href="/logout.php">se deconnecter</a>
    </p>
</body>
</html>