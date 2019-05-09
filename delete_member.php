<?php

// Connect database
require "config/connect_mysql.php";

// รับค่า id
$id = $_GET["id"];

$sql   = "DELETE FROM members WHERE id='$id'";
$query = mysqli_query($connect, $sql);

if ($query)
{
    /*$msg = */echo "<div class='alert alert-success' role='alert'>Delete member success</div>";
    echo "<meta http-equiv='refresh' content='1;URL=\"read_member.php\"'>";
}
else
{
    /*$msg = */echo "<div class='alert alert-danger' role='alert'>Delete member fail!</div>";
    echo "<meta http-equiv='refresh' content='1;URL=\"read_member.php\"'>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
