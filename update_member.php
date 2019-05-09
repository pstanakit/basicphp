<?php

// Connect database
require "config/connect_mysql.php";

// รับค่า id
$id = $_GET["id"];

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

    $sql = "UPDATE members
        SET fullname='$fullname',
            email='$email',
            tel='$tel',
            password='$password',
            status='$status'
        WHERE id='$id'";

    $query = mysqli_query($connect, $sql);

    if ($query)
    {
        $msg = "<div class='alert alert-success' role='alert'>Edit member success</div>";
    }
    else
    {
        $msg = "<div class='alert alert-success' role='alert'>Edit member fail!</div>";
    }

}

// ดึงข้อมูลเก่าที่จะแก้ไข
$sql_select   = "SELECT * FROM members WHERE id='$id'";
$query_select = mysqli_query($connect, $sql_select);
$data         = mysqli_fetch_assoc($query_select);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="jumbotron bg-success">
        <h1 class="display-4 text-light text-center"><b>Edit Member</b></h1>
    </div>

    <div class="container">
        <form class="col-md-8 offset-md-2" method="POST" action="update_member.php?id=<?=$id;?>">

            <!-- alert -->
            <?=$msg?>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Fullname</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="" required value="<?=$data["fullname"];?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="email" placeholder="" required value="<?=$data["email"];?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Tel</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="" required value="<?=$data["tel"];?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="password" id="password" placeholder="" required value="<?=$data["password"];?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="status" id="status" placeholder="" required value="<?=$data["status"];?>">
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
