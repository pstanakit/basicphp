<?php

$_price  = 0;
$_money  = 0;
$_change = 0;

// เช็คการกด Submit จาก form
if (!empty($_POST["submit"]))
{
    // รับค่าจาก form ด้วย php
    $_price = $_POST["price"];
    $_money = $_POST["money"];
    // คำนวนเงินทอน
    $_change = $_money - $_price;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>โปรแกรมคิดเงินทอน</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="jumbotron bg-danger">
        <h1 class="display-3 text-center text-light">โปรแกรมคิดเงินทอน</h1>
    </div>

    <!-- b4-form-grid -->
    <div class="container">
        <form class="col-md-6 offset-md-3" method="POST">
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">ราคาสินค้า</label>
                <div class="col-sm-9">
                    <input type="number" step="any" class="form-control" name="price" id="price" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">จ่ายเงินมา</label>
                <div class="col-sm-9">
                    <input type="number" step="any" class="form-control" name="money" id="money" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="submit" name="submit" class="btn btn-primary" value="คำนวน">
                    <hr>
                    เงินทอน <?=$_change;?> บาท
                </div>
            </div>
        </form>
    </div>


    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
