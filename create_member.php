<?php

// Connect database
require "config/connect_mysql.php";

// ประกาศตัวแปล alert
$msg = "";

// Check summit
if (!empty($_POST["submit"]))
{
    // รับค่า
    $fullname = $_POST["fullname"];
    $email    = $_POST["email"];
    $tel      = $_POST["tel"];
    $password = $_POST["password"];
    $status   = $_POST["status"];

    // Add table
    $sql = "INSERT INTO members(fullname,email,tel,password,status)
            VALUES('$fullname','$email','$tel','$password','$status')";

    // Action add table
    $query = mysqli_query($connect, $sql);

    // Check query
    if ($query)
    {
        $msg = "<div class='alert alert-danger' role='alert'>Add member success</div>";
    }
    else
    {
        $msg = "<div class='alert alert-danger' role='alert'>Add member fail!</div>";
    }

}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="jumbotron bg-success">
        <h1 class="display-4 text-light text-center"><b>Create Member</b></h1>
    </div>

    <div class="container">
        <form class="col-md-8 offset-md-2" method="POST" action="create_member.php">

            <!-- alert -->
            <?=$msg?>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Fullname</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="email" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Tel</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="password" id="password" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="status" id="status" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-3 col-sm-9">
                    <input type="submit" class="btn btn-primary" name="submit">
                </div>
            </div>
        </form>
    </div>


    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>