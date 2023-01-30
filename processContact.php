<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Process</title>
</head>
<body>

<?php

// print_r($_POST);

$user = $_POST['user_name'];
$user_email = $_POST['user_mail'];
$user_message = $_POST['user_message'];

echo "<h4>User Comment submission </h4>";
echo "<p> User: $user</p>";
echo "<p>Email: $user_email</p>";
echo "<p> Message $user_message</p>";



?>
    
</body>
</html>