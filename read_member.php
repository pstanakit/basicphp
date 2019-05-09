<?php

require "config/connect_mysql.php"; // ***ถ้าเรียกไม่ได้จบโปรแกรมเลย
// include "config/connect_mysql.php"; ***เรียกไม่ได้ยัง run โปรแกรมต่อ

$sql = "SELECT * FROM members";

// query data in table
$query = mysqli_query($connect, $sql);

// นับแถว
$row = mysqli_num_rows($query);
echo "<p>พบข้อมูลทั้งหมด " . $row . " รายการ</p>";

// loop show data
echo "
<table border=1>
    <thead>
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>tel</th>
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
        </tr>";
}
echo "
    </tbody>
</table>";
