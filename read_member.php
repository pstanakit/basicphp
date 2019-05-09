<?php

require "config/connect_mysql.php"; // ***ถ้าเรียกไม่ได้จบโปรแกรมเลย
// include "config/connect_mysql.php"; ***เรียกไม่ได้ยัง run โปรแกรมต่อ

$sql = "SELECT * FROM members";

// query data in table
$query = mysqli_query($connect, $sql);

// นับแถว
$row = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member Data</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="jumbotron bg-success">
        <h1 class="display-4 text-light text-center"><b>Member Data</b></h1>
    </div>

    <div class="container-fluid">

<?php

// จำนวนตาราง
echo "<h3 class='mb-4'>พบข้อมูลทั้งหมด " . $row . " รายการ</h3>";

// ปุ่ม Add Member
echo "<p><a href='create_member.php' class='btn btn-success'>Add Member</a></p>";

// loop show data
echo "
    <table class='table table-bordered table-striped' >
        <thead>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Password</th>
                <th>Status</th>
                <th>Manage</th>
            </tr>
        </thead>
        <tbody>";

while ($data = mysqli_fetch_assoc($query))
{
    echo "
            <tr>
                <td>" . $data["id"] . "</td>
                <td>" . $data["fullname"] . "</td>
                <td>" . $data["email"] . "</td>
                <td>" . $data["tel"] . "</td>
                <td>" . $data["password"] . "</td>
                <td>" . $data["status"] . "</td>
                <td>
                    <a href='update_member.php?id=" . $data["id"] . "'class='btn btn-warning'>Edit</a>
                    <a href='delete_member.php?id=" . $data["id"] . "'class='btn btn-danger'>Delete</a>
                </td>
            </tr>";
}
echo "
        </tbody>
    </table>";
?>

    </div>




    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
